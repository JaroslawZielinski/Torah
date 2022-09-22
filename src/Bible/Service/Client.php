<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Service;

use GuzzleHttp\Exception\GuzzleException;
use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use Psr\Log\LoggerInterface;

class Client
{
    private const SERVICE_URL = 'https://www.biblia.info.pl/api/biblia/%s/%s/%s/%s';
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
    public function query(Siglum $siglum): Response
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
        return new Response($siglum, $response);
    }

    public function getHttpCode(): int
    {
        return $this->httpCode;
    }

    public function getServiceUrlBySiglum(Siglum $siglum): string
    {
        if ($siglum->isSingle()) {
            $verses = sprintf(self::SINGLE_VERSE, $siglum->getVerseStart());
        } else {
            $verses = sprintf(self::MULTI_VERSES, $siglum->getVerseStart(), $siglum->getVerseEnd());
        }
        return sprintf(
            self::SERVICE_URL,
            $siglum->getTranslation(),
            $siglum->getBook(),
            $siglum->getChapter(),
            $verses
        );
    }
}
