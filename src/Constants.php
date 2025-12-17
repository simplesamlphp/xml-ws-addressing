<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing;

/**
 * Class holding constants relevant for WS-Addressing.
 *
 * @package simplesamlphp/xml-ws-addressing
 */

class Constants extends \SimpleSAML\XML\Constants
{
    /**
     * The namespace for WS-Addressing protocol.
     */
    public const string NS_ADDR_200408 = 'http://schemas.xmlsoap.org/ws/2004/08/addressing';

    public const string NS_ADDR_200508 = 'http://www.w3.org/2005/08/addressing';

    /**
     * The namespace for the WS-Addressing - Metadata.
     */
    public const string NS_ADDR_METADATA = 'http://www.w3.org/2007/02/addressing/metadata';

    /**
     * The namespace for the WS-Addressing - WSDL Binding.
     */
    public const string NS_ADDR_WSDL = 'http://www.w3.org/2006/05/addressing/wsdl';

    /**
     * The schema-defined wsa fault codes
     */
    public const string WSA_FAULT_INVALID_ADDRESSING_HEADER = 'InvalidAddressingHeader';

    public const string WSA_FAULT_INVALID_ADDRESS = 'InvalidAddress';

    public const string WSA_FAULT_INVALID_EPR = 'InvalidEPR';

    public const string WSA_FAULT_INVALID_CARDINALITY = 'InvalidCardinality';

    public const string WSA_FAULT_MISSING_ADDRESS_IN_EPR = 'MissingAddressInEPR';

    public const string WSA_FAULT_DUPLICATE_MESSAGEID = 'DupicateMessageID';

    public const string WSA_FAULT_ACTION_MISMATCH = 'ActionMismatch';

    public const string WSA_FAULT_MESSAGE_ADDRESSING_HEADER_REQUIRED = 'MessageAddressingHeaderRequired';

    public const string WSA_FAULT_DESTINATION_UNREACHABLE = 'DestinationUnreachable';

    public const string WSA_FAULT_ACTION_NOT_SUPPORTED = 'ActionNotSupported';

    public const string WSA_FAULT_ENDPOINT_UNAVAILABLE = 'EndpointUnavailable';

    public const array FAULT_CODES = [
        self::WSA_FAULT_INVALID_ADDRESSING_HEADER,
        self::WSA_FAULT_INVALID_ADDRESS,
        self::WSA_FAULT_INVALID_EPR,
        self::WSA_FAULT_INVALID_CARDINALITY,
        self::WSA_FAULT_MISSING_ADDRESS_IN_EPR,
        self::WSA_FAULT_DUPLICATE_MESSAGEID,
        self::WSA_FAULT_ACTION_MISMATCH,
        self::WSA_FAULT_MESSAGE_ADDRESSING_HEADER_REQUIRED,
        self::WSA_FAULT_DESTINATION_UNREACHABLE,
        self::WSA_FAULT_ACTION_NOT_SUPPORTED,
        self::WSA_FAULT_ENDPOINT_UNAVAILABLE,
    ];
}
