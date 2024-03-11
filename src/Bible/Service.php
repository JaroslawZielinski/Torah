<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible;

use JaroslawZielinski\Torah\Bible\Service\Online\Client as OnlineClient;
use JaroslawZielinski\Torah\Bible\Service\Offline\Client as OfflineClient;
use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use JaroslawZielinski\Torah\Bible\Torah\Text;
use JaroslawZielinski\Torah\Bible\ServiceInterface;
use JaroslawZielinski\Torah\Translations\Resources;


class Service implements ServiceInterface
{
    /**
     * @var OnlineClient
     */
    private $onlineClient;

    /**
     * @var OfflineClient
     */
    private $offlineClient;

    /**
     */
    public function __construct(
        OnlineClient $onlineClient,
        OfflineClient $offlineClient
    ) {
        $this->onlineClient = $onlineClient;
        $this->offlineClient = $offlineClient;
    }

    /**
     */
    public function initCache(): void
    {
        $translations = Resources::TORAH_TRANSLATIONS;
        foreach ($translations as $translation => $label) {
            $this->offlineClient->createTable($translation);
        }
    }

    /**
     * {@inheritDoc}
     * @throws \Exception
     */
    public function get(Siglum $siglum, string $language, array $options): ?Text
    {
        $cached = $options['cache'] ?? true;
        if (!$cached) {
            return $this->onlineClient
                ->query($siglum, $language)
                ->getText();
        }
        $response = null;
        $cachedResponse = $this->offlineClient->query($siglum, $language);
        if (empty($cachedResponse)) {
            $response = $this->onlineClient
                ->query($siglum, $language)
                ->getText();
            $content = $response->getUnOrdered();
            $this->offlineClient->add($siglum, $content);
        } else {
            $response = $cachedResponse;
        }
        return $response;
    }
}
