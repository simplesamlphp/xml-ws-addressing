<?php

declare(strict_types=1);

namespace SimpleSAML\WS_ADDR\XML\wsa_200508;

use SimpleSAML\XML\SchemaValidatableElementInterface;
use SimpleSAML\XML\SchemaValidatableElementTrait;

/**
 * An endpoint reference
 *
 * @package simplesamlphp/xml-ws-addressing
 */
final class ReplyTo extends AbstractEndpointReferenceType implements SchemaValidatableElementInterface
{
    use SchemaValidatableElementTrait;
}
