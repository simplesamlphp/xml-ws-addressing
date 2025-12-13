<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsaw;

use DOMElement;

/**
 * Abstract class defining the Anonymous type
 *
 * @package simplesamlphp/xml-ws-addressing
 */
abstract class AbstractAnonymousType extends AbstractWsawElement
{
    /**
     * AbstractAnonymousType constructor
     *
     * @param \SimpleSAML\WebServices\Addressing\XML\wsaw\AnonymousEnum $value
     */
    public function __construct(
        protected AnonymousEnum $value,
    ) {
    }


    /**
     * @return \SimpleSAML\WebServices\Addressing\XML\wsaw\AnonymousEnum
     */
    public function getValue(): AnonymousEnum
    {
        return $this->value;
    }


    /**
     * Convert this Anomymous to XML.
     *
     * @param \DOMElement|null $parent The element we should append this class to.
     * @return \DOMElement The XML element after adding the data corresponding to this Anonymous.
     */
    public function toXML(?DOMElement $parent = null): DOMElement
    {
        $e = $this->instantiateParentElement($parent);
        $e->textContent = $this->getValue()->value;

        return $e;
    }
}
