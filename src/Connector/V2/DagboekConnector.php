<?php
/**
 * @author  IntoWebDevelopment <info@intowebdevelopment.nl>
 * @project SnelstartApiPHP
 * @deprecated
 */

namespace SnelstartPHP\Connector\V2;

use SnelstartPHP\Connector\BaseConnector;
use SnelstartPHP\Mapper\V2\DagboekMapper;
use SnelstartPHP\Model\V2\Dagboek;
use SnelstartPHP\Request\V2\DagboekRequest;

final class DagboekConnector extends BaseConnector
{
    /**
     * @template T as Dagboek
     * @psalm-return \Generator<T>
     * @return iterable
     */
    public function findAll(): iterable
    {
        $mapper = new DagboekMapper();
        $request = new DagboekRequest();

        return $mapper->findAll($this->connection->doRequest($request->findAll()));
    }
}
