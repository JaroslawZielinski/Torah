<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Translations;

interface ResourcesInterface
{
    /**
     * Gets translation - resource name
     */
    public function getResourceName(): string;
}
