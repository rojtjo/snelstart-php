<?php

declare(strict_types=1);

namespace SnelstartPHP\Tests\Mapper\V2;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SnelstartPHP\Mapper\V2\DagboekMapper;
use SnelstartPHP\Model\V2\Dagboek;

final class DagboekMapperTest extends TestCase
{
    public function testMapFindAll(): void
    {
        $payload = [
            [
                'omschrijving' => 'Dagboek met type Kas',
                'soort' => 'Kas',
                'nonactief' => false,
                'nummer' => 123,
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'dagboeken/00000000-0000-0000-0000-000000000000',
            ],
        ];

        $mapper = new DagboekMapper();
        $results = $mapper->findAll(new Response(200, [], json_encode($payload)));

        /** @var Dagboek[] $results */
        $results = iterator_to_array($results);
        $this->assertCount(1, $results);

        [$result] = $results;
        $this->assertEquals('Dagboek met type Kas', $result->getOmschrijving());
        $this->assertEquals('Kas', $result->getSoort()->getValue());
        $this->assertEquals(false, $result->isNonactief());
        $this->assertEquals(123, $result->getNummer());
    }
}
