<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Torah;

class AbstractSiglum
{
    /**
     * @var string
     */
    protected $book;
    /**
     * @var string
     */
    protected $chapter;
    /**
     * @var string
     */
    protected $verseStart;
    /**
     * @var string
     */
    protected $verseEnd;

    public function __construct(
        string $book,
        string $chapter,
        string $verseStart,
        string $verseEnd
    ) {
        $this->book = $book;
        $this->chapter = $chapter;
        $this->verseStart = $verseStart;
        $this->verseEnd = $verseEnd;
    }

    /**
     * @return string
     */
    public function getBook(): string
    {
        return $this->book;
    }

    /**
     * @return string
     */
    public function getChapter(): string
    {
        return $this->chapter;
    }

    /**
     * @return string
     */
    public function getVerseStart(): string
    {
        return $this->verseStart;
    }

    /**
     * @return string
     */
    public function getVerseEnd(): string
    {
        return $this->verseEnd;
    }

    public function isSingle(): bool
    {
        return $this->getVerseStart() === $this->getVerseEnd();
    }

    /**
     * Changes multi verse siglum into array of single verse siglum
     */
    public function getVerses(): array
    {
        $flatVerses = [];
        for ($i = $this->verseStart; $i <= $this->verseEnd; $i++) {
            $flatVerses[] = new AbstractSiglum($this->book, $this->chapter, (string)$i, (string)$i);
        }
        return $flatVerses;
    }
}
