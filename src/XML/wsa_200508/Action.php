<?php

declare(strict_types=1);

namespace SimpleSAML\WS_ADDR\XML\wsa_200508;

use SimpleSAML\XML\SchemaValidatableElementInterface;
use SimpleSAML\XML\SchemaValidatableElementTrait;

/**
 * An attributed URI
 *
 * @package simplesamlphp/xml-ws-addressing
 */
final class Action extends AbstractAttributedURIType implements SchemaValidatableElementInterface
{
    use SchemaValidatableElementTrait;
}
