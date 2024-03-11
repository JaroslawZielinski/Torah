<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible;

use JaroslawZielinski\Torah\Bible\Torah\AbstractSiglum;
use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use JaroslawZielinski\Torah\Bible\Torah\Text;
use JaroslawZielinski\Torah\Translations\Resources;

class Torah
{
    public const LANGUAGE_PL = 'pl';

    public const LANGUAGE_EN = 'en';

    /**
     * @var TorahValidator
     */
    private $torahValidator;

    /**
     * @var ServiceInterface
     */
    private $service;

    /**
     * @var array
     */
    private $options;

    /**
     */
    public function __construct(
        TorahValidator $torahValidator,
        ServiceInterface $service,
        array $options = ['cache' => true]
    ) {
        $this->torahValidator = $torahValidator;
        $this->service = $service;
        $this->options = $options;
    }

    public function getResourceByTranslationCode(string $translationCode): ?Resources
    {
        $resource = null;
        switch ($translationCode) {
            case Resources::TORAH_TRANSLATION_BT:
                $resource = new Resources\BT($this->service);
                break;
            case Resources::TORAH_TRANSLATION_BW:
                $resource = new Resources\BW($this->service);
                break;
            case Resources::TORAH_TRANSLATION_BR:
                $resource = new Resources\BR($this->service);
                break;
            case Resources::TORAH_TRANSLATION_ESP:
                $resource = new Resources\ESP($this->service);
                break;
            case Resources::TORAH_TRANSLATION_BG:
                $resource = new Resources\BG($this->service);
                break;
            case Resources::TORAH_TRANSLATION_NG:
                $resource = new Resources\NG($this->service);
                break;
            case Resources::TORAH_TRANSLATION_UG:
                $resource = new Resources\UG($this->service);
                break;
            case Resources::TORAH_TRANSLATION_BB:
                $resource = new Resources\BB($this->service);
                break;
            case Resources::TORAH_TRANSLATION_BP:
                $resource = new Resources\BP($this->service);
                break;
            case Resources::TORAH_TRANSLATION_JW:
                $resource = new Resources\JW($this->service);
                break;
            case Resources::TORAH_TRANSLATION_BM:
                $resource = new Resources\BM($this->service);
                break;
            case Resources::TORAH_TRANSLATION_NS:
                $resource = new Resources\NS($this->service);
                break;
            case Resources::TORAH_TRANSLATION_BL:
                $resource = new Resources\BL($this->service);
                break;
            case Resources::TORAH_TRANSLATION_SZ:
                $resource = new Resources\SZ($this->service);
                break;
            case Resources::TORAH_TRANSLATION_EIB:
                $resource = new Resources\EIB($this->service);
                break;
            case Resources::TORAH_TRANSLATION_TNP:
                $resource = new Resources\TNP($this->service);
                break;
            case Resources::TORAH_TRANSLATION_KJV:
                $resource = new Resources\KJV($this->service);
                break;
            case Resources::TORAH_TRANSLATION_WEB:
                $resource = new Resources\WEB($this->service);
                break;
            case Resources::TORAH_TRANSLATION_YLT:
                $resource = new Resources\YLT($this->service);
                break;
            case Resources::TORAH_TRANSLATION_VUL:
                $resource = new Resources\VUL($this->service);
                break;
            case Resources::TORAH_TRANSLATION_GR:
                $resource = new Resources\GR($this->service);
                break;
            default:
                return null;
        }
        return $resource;
    }

    /**
     * @throws \Exception
     */
    public function getTextBySiglum(Siglum $siglum, string $language = self::LANGUAGE_PL): ?Text
    {
        $translationCode = $siglum->getTranslation();
        $translation = $this->getResourceByTranslationCode($translationCode);
        if ($this->isValid($siglum, $translation, $language)) {
            if (count($this->getErrors()) > 0) {
                return null;
            }
            return $translation->get($siglum, $language, $this->options);
        }
        return null;
    }

    public function isValid(AbstractSiglum $siglum, ?Resources $translation, string $language): bool
    {
        return $this->torahValidator->isValid($siglum, $translation, $language);
    }

    public function getErrors(): array
    {
        return $this->torahValidator->getErrors();
    }
}
