<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsaw;

use Dom;

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
     * @param \Dom\Element|null $parent The element we should append this class to.
     */
    public function toXML(?Dom\Element $parent = null): Dom\Element
    {
        $e = $this->instantiateParentElement($parent);
        $e->textContent = $this->getValue()->value;

        return $e;
    }
}
