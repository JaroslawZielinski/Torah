<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Torah;

class Siglum extends AbstractSiglum
{
    /**
     * @var string
     */
    private $translation;

    /**
     * @inheritDoc
     */
    public function __construct(
        string $translation,
        string $book,
        string $chapter,
        string $verseStart,
        string $verseEnd
    ) {
        $this->translation = $translation;
        parent::__construct($book, $chapter, $verseStart, $verseEnd);
    }

    /**
     * @return string
     */
    public function getTranslation(): string
    {
        return $this->translation;
    }
}
