<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible;

use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use JaroslawZielinski\Torah\Bible\Torah\Text;

interface ServiceInterface
{
    /**
     * gets Processes content by siglum and by language
     */
    public function get(Siglum $siglum, string $language): Text;
}
