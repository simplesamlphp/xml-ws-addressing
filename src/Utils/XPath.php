<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\Utils;

use DOMNode;
use DOMXPath;
use SimpleSAML\WebServices\Addressing\Constants as C;

/**
 * Compilation of utilities for XPath.
 *
 * @package simplesamlphp/xml-ws-addressing
 */
class XPath extends \SimpleSAML\XPath\XPath
{
    /*
     * Get a DOMXPath object that can be used to search for WS-Addressing elements.
     *
     * @param \DOMNode $node The document to associate to the DOMXPath object.
     * @param bool $autoregister Whether to auto-register all namespaces used in the document
     *
     * @return \DOMXPath A DOMXPath object ready to use in the given document, with several
     *   ws-related namespaces already registered.
     */
    public static function getXPath(DOMNode $node, bool $autoregister = false): DOMXPath
    {
        $xp = parent::getXPath($node, $autoregister);

        $xp->registerNamespace('wsa', C::NS_ADDR_200508);
        $xp->registerNamespace('wsa', C::NS_ADDR_200408);
        $xp->registerNamespace('wsam', C::NS_ADDR_METADATA);
        $xp->registerNamespace('wsaw', C::NS_ADDR_WSDL);

        return $xp;
    }
}
