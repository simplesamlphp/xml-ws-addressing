<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsaw;

use SimpleSAML\WebServices\Addressing\Constants as C;
use SimpleSAML\XML\AbstractElement;

/**
 * Abstract class to be implemented by all the classes in this namespace
 *
 * @see https://www.w3.org/2006/05/addressing/wsdl/
 *
 * @package simplesamlphp/xml-ws-addressing
 */
abstract class AbstractWsawElement extends AbstractElement
{
    public const string NS = C::NS_ADDR_WSDL;

    public const string NS_PREFIX = 'wsaw';

    public const string SCHEMA = 'resources/schemas/ws-addr-wsdl.xsd';
}
