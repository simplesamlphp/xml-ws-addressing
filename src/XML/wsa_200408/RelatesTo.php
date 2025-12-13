<?php

declare(strict_types=1);

namespace SimpleSAML\WS_ADDR\XML\wsa_200408;

use SimpleSAML\XML\SchemaValidatableElementInterface;
use SimpleSAML\XML\SchemaValidatableElementTrait;

/**
 * @package simplesamlphp/xml-ws-addressing
 */
final class RelatesTo extends AbstractRelationshipType implements SchemaValidatableElementInterface
{
    use SchemaValidatableElementTrait;
}
