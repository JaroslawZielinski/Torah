<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible;

use JaroslawZielinski\Torah\Bible\Torah\AbstractSiglum;
use JaroslawZielinski\Torah\Bible\Torah\Description;
use JaroslawZielinski\Torah\Translations\Resources;

class TorahValidator
{
    public const TANAKH_PROTO = [
        Resources::TORAH_BOOKS_RDZ,
        Resources::TORAH_BOOKS_WJ,
        Resources::TORAH_BOOKS_KPL,
        Resources::TORAH_BOOKS_LB,
        Resources::TORAH_BOOKS_PWT,
        Resources::TORAH_BOOKS_JOZ,
        Resources::TORAH_BOOKS_SDZ,
        Resources::TORAH_BOOKS_RT,
        Resources::TORAH_BOOKS_1SM,
        Resources::TORAH_BOOKS_2SM,
        Resources::TORAH_BOOKS_1KRL,
        Resources::TORAH_BOOKS_2KRL,
        Resources::TORAH_BOOKS_1KRN,
        Resources::TORAH_BOOKS_2KRN,
        Resources::TORAH_BOOKS_EZD,
        Resources::TORAH_BOOKS_NE,
        Resources::TORAH_BOOKS_EST,
        Resources::TORAH_BOOKS_HI,
        Resources::TORAH_BOOKS_PS,
        Resources::TORAH_BOOKS_PRZ,
        Resources::TORAH_BOOKS_KOH,
        Resources::TORAH_BOOKS_PNP
    ];

    public const TANAKH_DEUTERO = [
        Resources::TORAH_BOOKS_TB,
        Resources::TORAH_BOOKS_JDT,
        Resources::TORAH_BOOKS_1MCH,
        Resources::TORAH_BOOKS_2MCH,
        Resources::TORAH_BOOKS_MDR,
        Resources::TORAH_BOOKS_SYR
    ];

    public const NEVIIMKETUVIM_PROTO = [
        Resources::TORAH_BOOKS_IZ,
        Resources::TORAH_BOOKS_JR,
        Resources::TORAH_BOOKS_LM,
        Resources::TORAH_BOOKS_EZ,
        Resources::TORAH_BOOKS_DN,
        Resources::TORAH_BOOKS_OZ,
        Resources::TORAH_BOOKS_JL,
        Resources::TORAH_BOOKS_AM,
        Resources::TORAH_BOOKS_AB,
        Resources::TORAH_BOOKS_JON,
        Resources::TORAH_BOOKS_MI,
        Resources::TORAH_BOOKS_NA,
        Resources::TORAH_BOOKS_HA,
        Resources::TORAH_BOOKS_SO,
        Resources::TORAH_BOOKS_AG,
        Resources::TORAH_BOOKS_ZA,
        Resources::TORAH_BOOKS_ML
    ];

    public const NEVIIMKETUVIM_DEUTERO = [
        Resources::TORAH_BOOKS_BA
    ];

    public const BRIT_HADASHA = [
        Resources::TORAH_BOOKS_MT,
        Resources::TORAH_BOOKS_MK,
        Resources::TORAH_BOOKS_LK,
        Resources::TORAH_BOOKS_J,
        Resources::TORAH_BOOKS_DZ,
        Resources::TORAH_BOOKS_RZ,
        Resources::TORAH_BOOKS_1KOR,
        Resources::TORAH_BOOKS_2KOR,
        Resources::TORAH_BOOKS_GA,
        Resources::TORAH_BOOKS_EF,
        Resources::TORAH_BOOKS_FLP,
        Resources::TORAH_BOOKS_KOL,
        Resources::TORAH_BOOKS_1TES,
        Resources::TORAH_BOOKS_2TES,
        Resources::TORAH_BOOKS_1TM,
        Resources::TORAH_BOOKS_2TM,
        Resources::TORAH_BOOKS_TT,
        Resources::TORAH_BOOKS_FLM,
        Resources::TORAH_BOOKS_HBR,
        Resources::TORAH_BOOKS_JK,
        Resources::TORAH_BOOKS_1P,
        Resources::TORAH_BOOKS_2P,
        Resources::TORAH_BOOKS_1J,
        Resources::TORAH_BOOKS_2J,
        Resources::TORAH_BOOKS_3J,
        Resources::TORAH_BOOKS_JUD,
        Resources::TORAH_BOOKS_AP
    ];

    /**
     * @var string[]
     */
    private $errors;

    public function __construct()
    {
        $this->errors = [];
    }

    /**
     * @return string[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function addError($message): self
    {
        $this->errors[] = (string)$message;
        return $this;
    }

    /**
     */
    public function isValid(
        AbstractSiglum $siglum,
        ?Resources $translation,
        string $language
    ): bool {
        $result = true;
        $this->errors = [];
        if (empty($translation)) {
            $this->addError('Translation not found.');
            return false;
        }
        // if book is valid
        $bookName = $siglum->getBook();
        $isProto = in_array($bookName, self::TANAKH_PROTO);
        $isProtoN = in_array($bookName, self::NEVIIMKETUVIM_PROTO);
        $isDeutero = in_array($bookName, self::TANAKH_DEUTERO);
        $isDeuteroN = in_array($bookName, self::NEVIIMKETUVIM_DEUTERO);
        if (($isDeutero || $isDeuteroN) && !$translation->isDeutero()) {
            $this->addError('The translation is not deutero cannonical.');
            return false;
        }
        $isTanakh = $isProto || $isDeutero;
        $isNeviimKetuvim = $isProtoN || $isDeuteroN;
        $isBritHadasha = in_array($bookName, self::BRIT_HADASHA);
        $isTorah = $isTanakh || $isNeviimKetuvim || $isBritHadasha;
        if (!$isTorah) {
            $this->addError('The book is out of scope of the bible. Does it belong to apocrypha?');
            return false;
        }
        // if chapter is valid
        $tanakh = $translation->getTanakh();
        $neviimKetuvim = $translation->getNeviimKetuvim();
        $britHadasha = $translation->getBritHadasha();
        switch (true) {
            case $isTanakh:
                $book = $tanakh[$bookName] ?? null;
                if (empty($book)) {
                    $this->addError(sprintf('The book \'%s\' is not available in the Tanakh of this translation (\'%s\').', $bookName, $translation->getResourceName()));
                    return false;
                }
                break;
            case $isNeviimKetuvim:
                $book = $neviimKetuvim[$bookName] ?? null;
                if (empty($book)) {
                    $this->addError(sprintf('The book \'%s\' is not available in the Nevi\'im ketuvim of this translation (\'%s\').', $bookName, $translation->getResourceName()));
                    return false;
                }
                break;
            case $isBritHadasha:
                $book = $britHadasha[$bookName] ?? null;
                if (empty($book)) {
                    $this->addError(sprintf('The book \'%s\' is not available in the Brit Hadasha of this translation (\'%s\').', $bookName, $translation->getResourceName()));
                    return false;
                }
                break;
        }
        $chapter = $siglum->getChapter();
        if (!isset($book[Resources::CHAPTERS][$chapter])) {
            $this->addError(sprintf('The chapter exceeds the book (\'%s\') chapters.', $bookName));
            return false;
        }
        $verseMax = (int)$book[Resources::CHAPTERS][$chapter];
        // if verseStart is valid
        $verseStart = (int)$siglum->getVerseStart();
        $verseEnd = (int)$siglum->getVerseEnd();
        if ($verseStart < 1 || $verseStart > $verseMax) {
            $this->addError(
                sprintf(
                    'The verse start is below 1 or higher then the maximum available (\'%s\' - ' .
                'start, \'%s\' - max).',
                    $verseStart,
                    $verseMax
                )
            );
            $result = false;
        }
        if ($verseStart > $verseEnd) {
            $this->addError(sprintf(
                'The verse start is higher then verse end (\'%s\' - start, \'%s\'  - end).',
                $verseStart,
                $verseEnd
            ));
            $result = false;
        }
        if ($verseEnd < 1 || $verseEnd > $verseMax) {
            $this->addError(
                sprintf(
                    'The verse end is below 1 or higher then the maximum available. (\'%s\' -' .
                ' end, \'%s\'  - max).',
                    $verseEnd,
                    $verseMax
                )
            );
            $result = false;
        }
        return $result;
    }
}
