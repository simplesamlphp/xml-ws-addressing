<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsa_200508;

use SimpleSAML\XML\TypedTextContentTrait;
use SimpleSAML\XMLSchema\Type\AnyURIValue;

/**
 * @package simplesamlphp/xml-ws-addressing
 */
final class SoapAction extends AbstractWsaElement
{
    use TypedTextContentTrait;


    /** @var string */
    public const TEXTCONTENT_TYPE = AnyURIValue::class;
}
