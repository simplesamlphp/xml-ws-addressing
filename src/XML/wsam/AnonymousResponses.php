<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsam;

use DOMElement;
use SimpleSAML\WebServices\Addressing\Assert\Assert;
use SimpleSAML\XML\SchemaValidatableElementInterface;
use SimpleSAML\XML\SchemaValidatableElementTrait;
use SimpleSAML\XMLSchema\Exception\InvalidDOMElementException;

/**
 * Class defining the AnonymousResponses element
 *
 * @package simplesamlphp/xml-ws-addressing
 */
final class AnonymousResponses extends AbstractAnonymousResponses implements SchemaValidatableElementInterface
{
    use SchemaValidatableElementTrait;


    /**
     * Create an instance of this object from its XML representation.
     *
     * @param \DOMElement $xml
     * @return static
     *
     * @throws \SimpleSAML\XMLSchema\Exception\InvalidDOMElementException
     *   if the qualified name of the supplied element is wrong
     */
    public static function fromXML(DOMElement $xml): static
    {
        Assert::same($xml->localName, static::getLocalName(), InvalidDOMElementException::class);
        Assert::same($xml->namespaceURI, static::NS, InvalidDOMElementException::class);

        return new static(
            self::getAttributesNSFromXML($xml),
        );
    }
}
