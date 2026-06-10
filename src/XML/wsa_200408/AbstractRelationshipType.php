<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsa_200408;

use Dom;
use SimpleSAML\WebServices\Addressing\Assert\Assert;
use SimpleSAML\XML\ExtendableAttributesTrait;
use SimpleSAML\XML\TypedTextContentTrait;
use SimpleSAML\XMLSchema\Exception\InvalidDOMElementException;
use SimpleSAML\XMLSchema\Type\AnyURIValue;
use SimpleSAML\XMLSchema\Type\QNameValue;
use SimpleSAML\XMLSchema\XML\Constants\NS;

/**
 * Class representing WS-addressing RelationshipType.
 *
 * You can extend the class without extending the constructor. Then you can use the methods available and the
 * class will generate an element with the same name as the extending class
 * (e.g. \SimpleSAML\WebServices\Addressing\XML\wsa_200408\Address).
 *
 * @package simplesamlphp/xml-ws-addressing
 */
abstract class AbstractRelationshipType extends AbstractWsaElement
{
    use ExtendableAttributesTrait;
    use TypedTextContentTrait;


    public const string TEXTCONTENT_TYPE = AnyURIValue::class;

    /** The namespace-attribute for the xs:anyAttribute element */
    public const string XS_ANY_ATTR_NAMESPACE = NS::OTHER;


    /**
     * AbstractRelationshipType constructor.
     *
     * @param \SimpleSAML\XMLSchema\Type\AnyURIValue $value The localized string.
     * @param \SimpleSAML\XMLSchema\Type\QNameValue|null $relationshipType
     * @param \SimpleSAML\XML\Attribute[] $namespacedAttributes
     */
    final public function __construct(
        AnyURIValue $value,
        protected ?QNameValue $relationshipType = null,
        array $namespacedAttributes = [],
    ) {
        $this->setContent($value);
        $this->setAttributesNS($namespacedAttributes);
    }


    /**
     * Retrieve the value of the relationshipType property
     */
    public function getRelationshipType(): ?QNameValue
    {
        return $this->relationshipType;
    }


    /**
     * Convert XML into a class instance
     *
     * @param \Dom\Element $xml The XML element we should load
     *
     * @throws \SimpleSAML\XMLSchema\Exception\InvalidDOMElementException
     *   If the qualified name of the supplied element is wrong
     */
    public static function fromXML(Dom\Element $xml): static
    {
        Assert::same($xml->localName, static::getLocalName(), InvalidDOMElementException::class);
        Assert::same($xml->namespaceURI, static::NS, InvalidDOMElementException::class);

        return new static(
            AnyURIValue::fromString((string)$xml->textContent),
            self::getOptionalAttribute($xml, 'RelationshipType', QNameValue::class, null),
            self::getAttributesNSFromXML($xml),
        );
    }


    /**
     * Convert this element to XML.
     *
     * @param \Dom\Element|null $parent The element we should append this element to.
     */
    public function toXML(?Dom\Element $parent = null): Dom\Element
    {
        $e = $this->instantiateParentElement($parent);
        $e->textContent = $this->getContent()->getValue();

        if ($this->getRelationshipType() !== null) {
            $e->setAttribute('RelationshipType', $this->getRelationshipType()->getValue());
        }

        foreach ($this->getAttributesNS() as $attr) {
            $attr->toXML($e);
        }

        return $e;
    }
}
