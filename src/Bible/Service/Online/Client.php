<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Service\Online;

use GuzzleHttp\Exception\GuzzleException;
use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use Psr\Log\LoggerInterface;

class Client
{
    private const API_SERVICE_URL = 'https://www.biblia.info.pl/api/biblia/%s/%s/%s/%s';

    private const BASE_SERVICE_URL = 'https://www.biblia.info.pl/biblia/';

    private const SERVICE_URL = self::BASE_SERVICE_URL . '%s/%s/%s/%s';

    private const SINGLE_VERSE = '%s';

    private const MULTI_VERSES = '%s-%s';

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * @int
     */
    private $httpCode = 200;

    /**
     */
    public function __construct(
        LoggerInterface $logger,
        \GuzzleHttp\Client $client
    ) {
        $this->logger = $logger;
        $this->client = $client;
    }

    /**
     * @throws \Exception
     */
    public function query(Siglum $siglum, string $language): Response
    {
        try {
            $url = $this->getServiceUrlBySiglum($siglum);
            /** @var \GuzzleHttp\Psr7\Response $response */
            $response = $this->client->request('GET', $url);
            $this->logger->info($url);
        } catch (GuzzleException $exception) {
            $this->httpCode = (int)$exception->getCode();
            $this->logger->error($exception->getMessage(), $exception->getTrace());
            throw new \Exception(sprintf('Structure failure.[%s]', $exception->getMessage()));
        }
        return new Response($siglum, $response, $language);
    }

    public function getHttpCode(): int
    {
        return $this->httpCode;
    }

    private function getServiceUrlBySiglum(Siglum $siglum, string $urlPattern = self::API_SERVICE_URL): string
    {
        if ($siglum->isSingle()) {
            $verses = sprintf(self::SINGLE_VERSE, $siglum->getVerseStart());
        } else {
            $verses = sprintf(self::MULTI_VERSES, $siglum->getVerseStart(), $siglum->getVerseEnd());
        }
        return sprintf(
            $urlPattern,
            $siglum->getTranslation(),
            $siglum->getBook(),
            $siglum->getChapter(),
            $verses
        );
    }

    public function getUrlBySiglum(Siglum $siglum): string
    {
        return $this->getServiceUrlBySiglum($siglum, self::SERVICE_URL);
    }

    public static function getBaseUrl(): string
    {
        return self::BASE_SERVICE_URL;
    }
}
