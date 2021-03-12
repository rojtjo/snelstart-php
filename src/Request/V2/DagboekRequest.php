<?php
/**
 * @author  IntoWebDevelopment <info@intowebdevelopment.nl>
 * @project SnelstartApiPHP
 * @deprecated
 */

namespace SnelstartPHP\Request\V2;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

final class DagboekRequest
{
    public function findAll(): RequestInterface
    {
        return new Request("GET", "dagboeken");
    }
}
