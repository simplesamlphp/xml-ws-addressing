<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsa_200508;

use SimpleSAML\WebServices\Addressing\Constants as C;
use SimpleSAML\XML\AbstractElement;

/**
 * Abstract class to be implemented by all the classes in this namespace
 *
 * @package simplesamlphp/xml-ws-addressing
 */
abstract class AbstractWsaElement extends AbstractElement
{
    public const string NS = C::NS_ADDR_200508;

    public const string NS_PREFIX = 'wsa10';

    public const string SCHEMA = 'resources/schemas/ws-addr-200508.xsd';
}
