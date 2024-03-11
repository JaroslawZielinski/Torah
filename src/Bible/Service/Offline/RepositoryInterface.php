<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Service\Offline;

use JaroslawZielinski\Torah\Bible\Torah\AbstractSiglum;

interface RepositoryInterface
{
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
     */
    public function totalCount(string $translation): int;
}
