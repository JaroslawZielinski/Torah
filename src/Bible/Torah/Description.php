<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Torah;

use JaroslawZielinski\Torah\Translations\Resources;

class Description
{
    private const SINGLE_VERSE_PATTERN = '%s %s:%s, %s';

    private const MULTI_VERSE_PATTERN = '%s %s:%s-%s, %s';

    /**
     * @var AbstractSiglum
     */
    private $sigla;

    /**
     * @var string
     */
    private $translation;

    /**
     * @var string
     */
    private $language;

    /**
     */
    public function __construct(string $translation, AbstractSiglum $sigla, string $language)
    {
        $this->sigla = $sigla;
        $this->translation = $translation;
        $this->language = $language;
    }

    public function __toString()
    {
        $bookDescription = Resources::TORAH_BOOKS[$this->sigla->getBook()][$this->language] ?? '';
        $translationDescription = strip_tags(Resources::TORAH_TRANSLATIONS[$this->translation] ?? '');
        if ($this->sigla->isSingle()) {
            return sprintf(
                self::SINGLE_VERSE_PATTERN,
                $bookDescription,
                $this->sigla->getChapter(),
                $this->sigla->getVerseStart(),
                $translationDescription
            );
        }
        return sprintf(
            self::MULTI_VERSE_PATTERN,
            $bookDescription,
            $this->sigla->getChapter(),
            $this->sigla->getVerseStart(),
            $this->sigla->getVerseEnd(),
            $translationDescription
        );
    }

    public function getSigla(): AbstractSiglum
    {
        return $this->sigla;
    }
}
