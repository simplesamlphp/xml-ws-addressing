<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsam;

use DOMElement;
use SimpleSAML\WebServices\Policy\XML\wsp_200607\Policy;
use SimpleSAML\XML\ExtendableAttributesTrait;
use SimpleSAML\XMLSchema\XML\Constants\NS;

/**
 * Abstract class defining the Addressing type
 *
 * @package simplesamlphp/xml-ws-addressing
 */
abstract class AbstractAddressing extends AbstractWsamElement
{
    use ExtendableAttributesTrait;


    /** The namespace-attribute for the xs:anyAttribute element */
    public const string XS_ANY_ATTR_NAMESPACE = NS::OTHER;


    /**
     * AbstractAddressing constructor
     *
     * @param \SimpleSAML\WebServices\Policy\XML\wsp_200607\Policy $policy
     * @param \SimpleSAML\XML\Attribute[] $namespacedAttributes
     */
    public function __construct(
        protected Policy $policy,
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
     * Collect the value of the policy property.
     *
     * @return \SimpleSAML\WebServices\Policy\XML\wsp_200607\Policy
     */
    public function getPolicy(): Policy
    {
        return $this->policy;
    }


    /**
     * Convert this Addressing to XML.
     *
     * @param \DOMElement|null $parent The element we should append this class to.
     */
    public function toXML(?DOMElement $parent = null): DOMElement
    {
        $e = $this->instantiateParentElement($parent);

        $this->getPolicy()->toXML($e);

        foreach ($this->getAttributesNS() as $attr) {
            $attr->toXML($e);
        }

        return $e;
    }
}
