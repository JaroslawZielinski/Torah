<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Bible\Torah;

class Text
{
    /**
     * @var string
     */
    private $ordered;
    /**
     * @var string
     */
    private $unOrdered;

    /**
     * @var Description
     */
    private $description;

    /**
     */
    public function __construct(string $ordered, string $unOrdered, Description $description)
    {
        $this->ordered = $ordered;
        $this->unOrdered = $unOrdered;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getOrdered(): string
    {
        return strip_tags($this->ordered);
    }

    /**
     * @return string
     */
    public function getUnOrdered(): string
    {
        return strip_tags($this->unOrdered);
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return (string)$this->description;
    }

    public function getSigla(): AbstractSiglum
    {
        return $this->description->getSigla();
    }
}
