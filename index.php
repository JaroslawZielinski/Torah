<?php

declare(strict_types=1);

use GuzzleHttp\Client;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\Torah\Bible\TorahValidator;
use JaroslawZielinski\Torah\Translations\Resources;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require __DIR__ . '/vendor/autoload.php';

$siglum =
    SiglumFactory::create(
        Resources::TORAH_TRANSLATION_KJV,
        Resources::TORAH_BOOKS_J,
        '14',
        '21-24'
    );

$logger = new Logger('Torah');
$logger->pushHandler(new StreamHandler(__DIR__ . '/Torah.log', Logger::INFO));
$onlineClient = new Service\Client($logger, new Client());
$torah = new Torah(new TorahValidator(), new Service($onlineClient));
$text = $torah->getTextBySiglum($siglum, Torah::LANGUAGE_EN);
if (!empty($text)) {
    echo $text->getOrdered() . '<br/><br/>';
    echo $text->getUnOrdered() . '<br/><br/>';
    echo $text->getDescription() . '<br/><br/>';
} else {
    print_r($torah->getErrors());
}
