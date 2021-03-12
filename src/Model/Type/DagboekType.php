<?php

declare(strict_types=1);

namespace SnelstartPHP\Model\Type;

use MyCLabs\Enum\Enum;

/**
 * @psalm-immutable
 *
 * @method static DagboekType GEEN()
 * @method static DagboekType KAS()
 * @method static DagboekType BANK()
 * @method static DagboekType VERKOOP()
 * @method static DagboekType INKOOP()
 * @method static DagboekType MEMORIAAL()
 * @method static DagboekType BALANS()
 */
final class DagboekType extends Enum
{
    private const GEEN = 'Geen';
    private const KAS = 'Kas';
    private const BANK = 'Bank';
    private const VERKOOP = 'Verkoop';
    private const INKOOP = 'Inkoop';
    private const MEMORIAAL = 'Memoriaal';
    private const BALANS = 'Balans';
}
