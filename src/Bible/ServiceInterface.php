<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible;

use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use JaroslawZielinski\Torah\Bible\Torah\Text;

interface ServiceInterface
{
    /**
     * gets Proccesses content by Siglum
     */
    public function get(Siglum $siglum): Text;
}
