<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Service\Offline;

use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\Description;
use JaroslawZielinski\Torah\Bible\Torah\Text;
use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use JaroslawZielinski\Torah\Translations\Resources;

class Client
{
    /**
     * @var Repository
     */
    private $repository;
    
    /**
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }
    
    /**
     */
    public function query(Siglum $siglum, string $language = Torah::LANGUAGE_PL): ?Text
    {
        $translation = $siglum->getTranslation();
        $description = new Description($translation, $siglum, $language);
        $content = $this->repository->get($siglum, $translation);
        if (empty($content)) {
            return null;
        }
        $orderedContent = sprintf(Resources::ORDERED_PATTERN, $siglum->getVerseStart(), $content);
        return new Text($orderedContent, $content, $description);
    }

    /**
     */
    public function createTable(string $table): void
    {
        $this->repository->createTable($table);
    }

    /**
     */
    public function add(Siglum $siglum, string $content): ?int
    {
        return $this->repository->add($siglum, $siglum->getTranslation(), $content);
    }
}
