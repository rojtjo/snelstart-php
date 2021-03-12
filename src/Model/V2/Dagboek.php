<?php
/**
 * @author  IntoWebDevelopment <info@intowebdevelopment.nl>
 * @project SnelstartApiPHP
 */

namespace SnelstartPHP\Model\V2;

use SnelstartPHP\Model\SnelstartObject;
use SnelstartPHP\Model\Type\DagboekType;

final class Dagboek extends SnelstartObject
{
    /**
     * De omschrijving van het dagboek.
     *
     * @var string
     */
    protected $omschrijving;

    /**
     * Het dagboek soort.
     *
     * @var DagboekType
     */
    protected $soort;

    /**
     * Een vlag dat aangeeft of het dagboek niet meer actief is binnen de administratie.\r\nIndien <see langword=\"true\" />, dan kan het dagboek als \"verwijderd\" worden beschouwd.
     *
     * @var bool
     */
    protected $nonactief;

    /**
     * Het nummer van het dagboek.
     *
     * @var int
     */
    protected $nummer;

    public function getOmschrijving(): string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): Dagboek
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getSoort(): DagboekType
    {
        return $this->soort;
    }

    public function setSoort(string $soort): Dagboek
    {
        $this->soort = DagboekType::from($soort);

        return $this;
    }

    public function isNonactief(): bool
    {
        return $this->nonactief;
    }

    public function setNonactief(bool $nonactief): Dagboek
    {
        $this->nonactief = $nonactief;

        return $this;
    }

    public function getNummer(): int
    {
        return $this->nummer;
    }

    public function setNummer(int $nummer): Dagboek
    {
        $this->nummer = $nummer;

        return $this;
    }
}
