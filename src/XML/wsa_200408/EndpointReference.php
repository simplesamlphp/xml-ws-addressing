<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsa_200408;

use SimpleSAML\XML\SchemaValidatableElementInterface;
use SimpleSAML\XML\SchemaValidatableElementTrait;

/**
 * An endpoint reference
 *
 * @package simplesamlphp/xml-ws-addressing
 */
final class EndpointReference extends AbstractEndpointReferenceType implements SchemaValidatableElementInterface
{
    use SchemaValidatableElementTrait;
}
