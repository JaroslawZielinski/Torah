<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible;

interface TorahInterface
{
    /**
     * Returns books in this translation
     */
    public function getBooks(): array;
    /**
     * Gets Tanak
     */
    public function getTanakh(): ?array;
    /**
     * Gets Brithadasha
     */
    public function getBritHadasha(): ?array;
    /**
     * Checks if is deutero
     */
    public function isDeutero(): bool;
}
