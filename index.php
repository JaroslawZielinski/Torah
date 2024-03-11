<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client as GuzzleClient;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\Torah\Bible\TorahValidator;
use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\Torah\Bible\Service\Offline\Repository;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$siglum =
    SiglumFactory::create(
        Resources::TORAH_TRANSLATION_KJV,
        Resources::TORAH_BOOKS_J,
        '14',
        '21-24'
    );
$logger = new Logger('Torah');
$logger->pushHandler(new StreamHandler(__DIR__ . '/Torah.log', Logger::INFO));
$onlineClient = new Service\Online\Client($logger, new GuzzleClient());
$offlineClient = new Service\Offline\Client(new Repository());
$options = ['cache' => true];
$torah = new Torah(
    new TorahValidator(),
    new Service($onlineClient, $offlineClient),
    $options
);
$text = $torah->getTextBySiglum($siglum, Torah::LANGUAGE_EN);
if (!empty($text)) {
    echo $text->getOrdered() . '<br/><br/>';
    echo $text->getUnOrdered() . '<br/><br/>';
    echo $text->getDescription() . '<br/><br/>';
} else {
    echo 'Empty!';
    print_r($torah->getErrors());
}
