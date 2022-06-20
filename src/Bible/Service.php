<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible;

use JaroslawZielinski\Torah\Bible\Service\Client;
use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use JaroslawZielinski\Torah\Bible\Torah\Text;

class Service implements ServiceInterface
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritDoc}
     * @throws \Exception
     */
    public function get(Siglum $siglum): Text
    {
        $response = $this->client->query($siglum);
        return $response->getText();
    }
}
