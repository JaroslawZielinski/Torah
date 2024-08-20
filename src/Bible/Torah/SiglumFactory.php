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

    /**
     * @throws \Exception
     */
    public static function createFromTranslationAndString(string $translation, string $abstractSiglum): Siglum
    {
        $abstractSiglumArray = explode('/', $abstractSiglum);
        $book = $abstractSiglumArray[0] ?? null;
        $chapter = $abstractSiglumArray[1] ?? null;
        $verses = $abstractSiglumArray[2] ?? null;
        if (empty($book) || ('0' !== $chapter && empty($chapter)) || empty($verses)) {
            throw new \Exception('String format is not valid.');
        }
        return self::create($translation, $book, $chapter, $verses);
    }

    /**
     * @throws \Exception
     */
    public static function createFromString(string $siglum): Siglum
    {
        $siglumArray = explode('/', $siglum);
        $translation = $siglumArray[0] ?? null;
        $book = $siglumArray[1] ?? null;
        $chapter = $siglumArray[2] ?? null;
        $verses = $siglumArray[3] ?? null;
        if (empty($translation) || empty($book) || ('0' !== $chapter && empty($chapter)) || empty($verses)) {
            throw new \Exception('Siglum format is not valid.');
        }
        return self::create($translation, $book, $chapter, $verses);
    }
}
