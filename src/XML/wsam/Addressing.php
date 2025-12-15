<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsam;

use DOMElement;
use SimpleSAML\WebServices\Addressing\Assert\Assert;
use SimpleSAML\WebServices\Policy\XML\wsp_200607\Policy;
use SimpleSAML\XML\SchemaValidatableElementInterface;
use SimpleSAML\XML\SchemaValidatableElementTrait;
use SimpleSAML\XMLSchema\Exception\InvalidDOMElementException;
use SimpleSAML\XMLSchema\Exception\MissingElementException;
use SimpleSAML\XMLSchema\Exception\TooManyElementsException;

/**
 * Class defining the Addressing element
 *
 * @package simplesamlphp/xml-ws-addressing
 */
final class Addressing extends AbstractAddressing implements SchemaValidatableElementInterface
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

        $policy = Policy::getChildrenOfClass($xml);
        Assert::minCount($policy, 1, MissingElementException::class);
        Assert::maxCount($policy, 1, TooManyElementsException::class);

        return new static(
            $policy[0],
            self::getAttributesNSFromXML($xml),
        );
    }
}
