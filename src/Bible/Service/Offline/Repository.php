<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Service\Offline;

use JaroslawZielinski\Torah\Bible\Torah\AbstractSiglum;
use SQLite3DB;

class Repository implements RepositoryInterface
{   
    private const SIGLUM = '%s/%s/%s';

    private const DB_FILE_PATH = '/Resources/dbs/';

    /**
     * @var ?SQLite3DB
     */
    private $connection;

    /**
     */
    public function __construct()
    {
        $this->connection = null;
    }

        
    /**
     * @inheritDoc
     */
    public function createTable(string $table): void
    {   
        $resourceName = $this->getResourceName($table);
        $query = <<<EOT
CREATE TABLE IF NOT EXISTS {$resourceName} (
   verse_id INTEGER PRIMARY KEY,
   siglum TEXT NOT NULL UNIQUE,
   content TEXT
);
EOT;
        $dB = $this->getConnection($resourceName);
        $dB->exec($query);
    }

    /**
     * @inheritDoc
     */
    public function get(AbstractSiglum $siglum, string $translation): ?string
    {
        $verse = $siglum->getVerseStart();
        if (!$siglum->isSingle()) {
            throw new \Exception('It is not a single verse.');
        } 
        $resourceName = $this->getResourceName($translation);
        $dB = $this->getConnection($resourceName);
        $dB->where('siglum', sprintf(self::SIGLUM, $siglum->getBook(), $siglum->getChapter(), $verse));
        $result = $dB->detail($resourceName);
        return $result['content'] ?? null;
    }


    /**
     * @inheritDoc
     */
    public function add(AbstractSiglum $siglum, string $translation, string $content): ?int
    {
        $resourceName = $this->getResourceName($translation);
        $dB = $this->getConnection($resourceName);
        $lastRowId = $dB->create($resourceName, [
            'siglum' => sprintf(self::SIGLUM, $siglum->getBook(), $siglum->getChapter(), $siglum->getVerseStart()),
            'content' => $content
        ]);
        return !empty($lastRowId) ? $lastRowId : null;
    }
    
    /**
     * @inheritDoc
     */
    public function totalCount(string $translation): int
    {
        $resourceName = $this->getResourceName($translation);
        $dB = $this->getConnection($resourceName);
        $totalInfo = [];
        $dB->items($resourceName, $limit = null, $totalInfo);
        return (int)($totalInfo['totalCount'] ?? '');
    }

    /**
     * @inheritDoc
     */
    public function delete(string $translation, array $conditions = []): void
    {
        $resourceName = $this->getResourceName($translation);
        $dB = $this->getConnection($resourceName);
        $dB->delete($resourceName, $conditions);
    }

    /**
     */
    private function getConnection(string $table): SQLite3DB
    {
        $this->connection = new SQLite3DB(__DIR__ . '/../../../Translations' 
                . self::DB_FILE_PATH . $table);
        return $this->connection;
    }

    /**
     */
    private function getResourceName(string $resourceName): string
    {
        return strtoupper($resourceName);
    }
}
