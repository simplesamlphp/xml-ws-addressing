<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsam;

use DOMElement;
use SimpleSAML\XML\ExtendableAttributesTrait;
use SimpleSAML\XMLSchema\XML\Constants\NS;

/**
 * Abstract class defining the AnonymousResponses type
 *
 * @package simplesamlphp/xml-ws-addressing
 */
abstract class AbstractAnonymousResponses extends AbstractWsamElement
{
    use ExtendableAttributesTrait;


    /** The namespace-attribute for the xs:anyAttribute element */
    public const string XS_ANY_ATTR_NAMESPACE = NS::OTHER;


    /**
     * AbstractAnonymousResponses constructor
     *
     * @param \SimpleSAML\XML\Attribute[] $namespacedAttributes
     */
    public function __construct(
        array $namespacedAttributes,
    ) {
        $this->setAttributesNS($namespacedAttributes);
    }


    /**
     * Test if an object, at the state it's in, would produce an empty XML-element
     */
    public function isEmptyElement(): bool
    {
        return empty($this->namespacedAttributes);
    }


    /**
     * Convert this AnonymousResponses to XML.
     *
     * @param \DOMElement|null $parent The element we should append this class to.
     */
    public function toXML(?DOMElement $parent = null): DOMElement
    {
        $e = $this->instantiateParentElement($parent);

        foreach ($this->getAttributesNS() as $attr) {
            $attr->toXML($e);
        }

        return $e;
    }
}
