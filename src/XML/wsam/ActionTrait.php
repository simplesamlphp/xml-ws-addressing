<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsam;

use SimpleSAML\XMLSchema\Type\AnyURIValue;

/**
 * Trait adding methods to handle elements that define the action-attribute.
 *
 * @package simplesamlphp/xml-ws-addressing
 *
 * @phpstan-ignore trait.unused
 */
trait ActionTrait
{
    /**
     * @var \SimpleSAML\XMLSchema\Type\AnyURIValue|null
     */
    protected ?AnyURIValue $action;


    /**
     * Collect the value of the action property.
     *
     * @return \SimpleSAML\XMLSchema\Type\AnyURIValue|null
     */
    public function getAction(): ?AnyURIValue
    {
        return $this->action;
    }


    /**
     * Set the value of the action property.
     *
     * @param \SimpleSAML\XMLSchema\Type\AnyURIValue|null $action
     */
    protected function setAction(?AnyURIValue $action): void
    {
        $this->action = $action;
    }
}
