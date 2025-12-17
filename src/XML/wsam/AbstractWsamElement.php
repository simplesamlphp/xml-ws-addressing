<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsam;

use SimpleSAML\WebServices\Addressing\Constants as C;
use SimpleSAML\XML\AbstractElement;

/**
 * Abstract class to be implemented by all the classes in this namespace
 *
 * @see https://www.w3.org/TR/ws-addr-metadata/
 *
 * @package simplesamlphp/xml-ws-addressing
 */
abstract class AbstractWsamElement extends AbstractElement
{
    public const string NS = C::NS_ADDR_METADATA;

    public const string NS_PREFIX = 'wsam';

    public const string SCHEMA = 'resources/schemas/ws-addr-metadata.xsd';
}
