<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Service;

use JaroslawZielinski\Torah\Bible\Torah\Description;
use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use JaroslawZielinski\Torah\Bible\Torah\Text;

class Response
{
    private const ORDERED_VERSE = '(%s) %s';
    /**
     * @var Siglum
     */
    private $siglum;
    /**
     * @var Text
     */
    private $text;

    public function __construct(Siglum $siglum, \GuzzleHttp\Psr7\Response $response)
    {
        $this->siglum = $siglum;
        $this->text = $this->convertToText($response);
    }

    private function convertToText(\GuzzleHttp\Psr7\Response $response): Text
    {
        $serializedResponse = (string)$response->getBody();
        $arrayResponse = json_decode($serializedResponse, true);
        $verses = $arrayResponse['verses'];
        $ordered = [];
        $unOrdered = [];
        foreach ($verses as $verse) {
            $verseNumber = $verse['verse'];
            $text = $verse['text'];
            $ordered[] = sprintf(self::ORDERED_VERSE, $verseNumber, $text);
            $unOrdered[] = $text;
        }
        return new Text(
            implode(' ', $ordered),
            implode(' ', $unOrdered),
            new Description($this->siglum->getTranslation(), $this->siglum)
        );
    }

    public function getText(): Text
    {
        return $this->text;
    }
}
