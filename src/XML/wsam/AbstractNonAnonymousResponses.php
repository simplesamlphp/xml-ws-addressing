<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsam;

use DOMElement;
use SimpleSAML\XML\ExtendableAttributesTrait;
use SimpleSAML\XMLSchema\XML\Constants\NS;

/**
 * Abstract class defining the NonAnonymousResponses type
 *
 * @package simplesamlphp/xml-ws-addressing
 */
abstract class AbstractNonAnonymousResponses extends AbstractWsamElement
{
    use ExtendableAttributesTrait;


    /** The namespace-attribute for the xs:anyAttribute element */
    public const XS_ANY_ATTR_NAMESPACE = NS::OTHER;


    /**
     * AbstractNonAnonymousResponses constructor
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
     *
     * @return bool
     */
    public function isEmptyElement(): bool
    {
        return empty($this->namespacedAttributes);
    }


    /**
     * Convert this NonAnonymousResponses to XML.
     *
     * @param \DOMElement|null $parent The element we should append this class to.
     * @return \DOMElement The XML element after adding the data corresponding to this NonAnonymousResponses.
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
