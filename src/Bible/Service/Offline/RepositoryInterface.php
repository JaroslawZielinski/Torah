<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Service\Offline;

use JaroslawZielinski\Torah\Bible\Torah\AbstractSiglum;

interface RepositoryInterface
{
    public const SEARCH_MODE_CASESENSITIVE = 1;

    public const SEARCH_MODE_CASEINSENSITIVE = 2;

    /**
     */
    public function createTable(string $table): void;

    /**
     */
    public function add(AbstractSiglum $siglum, string $translation, string $content): ?int;

    /**
     * @throws \Exception
     */
    public function get(AbstractSiglum $siglum, string $translation): ?string;

    /**
     * @throws \Exception
     */
    public function search(string $search, string $translation, int $caseSensitive = self::SEARCH_MODE_CASEINSENSITIVE)
    : array;

    /**
     */
    public function totalCount(string $translation): int;

    /**
     */
    public function delete(string $translation, array $conditions = []): bool;
}
