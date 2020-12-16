<?php

use SnelstartPHP\Mapper as Mapper;
use SnelstartPHP\Model as Model;
use SnelstartPHP\Connector as Connector;
use SnelstartPHP\Request as Request;

if (!class_exists(Connector\V2\ArtikelConnector::class)) {
    class_alias(Connector\ArtikelConnector::class, Connector\V2\ArtikelConnector::class);
    class_alias(Connector\BaseConnector::class, Connector\V2\BaseConnector::class);
    class_alias(Connector\BoekingConnector::class, Connector\V2\BoekingConnector::class);
    class_alias(Connector\EchoConnector::class, Connector\V2\EchoConnector::class);
    class_alias(Connector\GrootboekConnector::class, Connector\V2\GrootboekConnector::class);
    class_alias(Connector\KostenplaatsConnector::class, Connector\V2\KostenplaatsConnector::class);
    class_alias(Connector\LandConnector::class, Connector\V2\LandConnector::class);
    class_alias(Connector\RelatieConnector::class, Connector\V2\RelatieConnector::class);
    class_alias(Connector\VerkooporderConnector::class, Connector\V2\VerkooporderConnector::class);

    class_alias(Mapper\AdresMapper::class, Mapper\V2\AdresMapper::class);
    class_alias(Mapper\ArtikelMapper::class, Mapper\V2\ArtikelMapper::class);
    class_alias(Mapper\BoekingMapper::class, Mapper\V2\BoekingMapper::class);
    class_alias(Mapper\DocumentMapper::class, Mapper\V2\DocumentMapper::class);
    class_alias(Mapper\GrootboekMapper::class, Mapper\V2\GrootboekMapper::class);
    class_alias(Mapper\KostenplaatsMapper::class, Mapper\V2\KostenplaatsMapper::class);
    class_alias(Mapper\LandMapper::class, Mapper\V2\LandMapper::class);
    class_alias(Mapper\RelatieMapper::class, Mapper\V2\RelatieMapper::class);
    class_alias(Mapper\VerkooporderMapper::class, Mapper\V2\VerkooporderMapper::class);

    class_alias(Model\Artikel::class, Model\V2\Artikel::class);
    class_alias(Model\ArtikelOmzetgroep::class, Model\V2\ArtikelOmzetgroep::class);
    class_alias(Model\Boeking::class, Model\V2\Boeking::class);
    class_alias(Model\Boekingsregel::class, Model\V2\Boekingsregel::class);
    class_alias(Model\Btwregel::class, Model\V2\Btwregel::class);
    class_alias(Model\Document::class, Model\V2\Document::class);
    class_alias(Model\Grootboek::class, Model\V2\Grootboek::class);
    class_alias(Model\Inkoopboeking::class, Model\V2\Inkoopboeking::class);
    class_alias(Model\Inkoopfactuur::class, Model\V2\Inkoopfactuur::class);
    class_alias(Model\Prijsafspraak::class, Model\V2\Prijsafspraak::class);
    class_alias(Model\Relatie::class, Model\V2\Relatie::class);
    class_alias(Model\RgsCode::class, Model\V2\RgsCode::class);
    class_alias(Model\SubArtikel::class, Model\V2\SubArtikel::class);
    class_alias(Model\Verkoopboeking::class, Model\V2\Verkoopboeking::class);
    class_alias(Model\Verkoopfactuur::class, Model\V2\Verkoopfactuur::class);
    class_alias(Model\Verkooporder::class, Model\V2\Verkooporder::class);
    class_alias(Model\VerkooporderRegel::class, Model\V2\VerkooporderRegel::class);
    class_alias(Model\Verkoopordersjabloon::class, Model\V2\Verkoopordersjabloon::class);

    class_alias(Request\ArtikelRequest::class, Request\V2\ArtikelRequest::class);
    class_alias(Request\BoekingRequest::class, Request\V2\BoekingRequest::class);
    class_alias(Request\DocumentRequest::class, Request\V2\DocumentRequest::class);
    class_alias(Request\EchoRequest::class, Request\V2\EchoRequest::class);
    class_alias(Request\FactuurRequest::class, Request\V2\FactuurRequest::class);
    class_alias(Request\GrootboekRequest::class, Request\V2\GrootboekRequest::class);
    class_alias(Request\KostenplaatsRequest::class, Request\V2\KostenplaatsRequest::class);
    class_alias(Request\LandRequest::class, Request\V2\LandRequest::class);
    class_alias(Request\RelatieRequest::class, Request\V2\RelatieRequest::class);
    class_alias(Request\VerkooporderRequest::class, Request\V2\VerkooporderRequest::class);
}