<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsa_200508;

use SimpleSAML\XML\SchemaValidatableElementInterface;
use SimpleSAML\XML\SchemaValidatableElementTrait;

/**
 * An attributed long
 *
 * @package simplesamlphp/xml-ws-addressing
 */
final class RetryAfter extends AbstractAttributedUnsignedLongType implements SchemaValidatableElementInterface
{
    use SchemaValidatableElementTrait;
}
