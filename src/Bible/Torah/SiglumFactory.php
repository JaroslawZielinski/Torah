<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Torah;

class SiglumFactory
{
    public static function create(string $translation, string $book, string $chapter, string $verses): Siglum
    {
        if (false === strpos($verses, '-')) {
            $verseStart = $verses;
            $verseEnd = $verses;
        } else {
            $versesSplit = explode('-', $verses);
            $verseStart = trim($versesSplit[0]);
            $verseEnd = trim($versesSplit[1]);
        }
        return new Siglum($translation, $book, $chapter, $verseStart, $verseEnd);
    }
}
