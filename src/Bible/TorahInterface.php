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
     * Gets Tanakh
     */
    public function getTanakh(): ?array;

    /**
     * Gets Nevi'im ketuvim
     */
    public function getNeviimKetuvim(): ?array;

    /**
     * Gets Brithadasha
     */
    public function getBritHadasha(): ?array;

    /**
     * Gets Exceptions
     */
    public function getExceptions(): ?array;

    /**
     * Checks if is deutero
     */
    public function isDeutero(): bool;
}
