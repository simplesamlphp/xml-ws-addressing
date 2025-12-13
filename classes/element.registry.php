<?php

declare(strict_types=1);

return [
    'http://schemas.xmlsoap.org/ws/2004/08/addressing' => [
        'Action' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200408\Action',
        'EndpointReference' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200408\EndpointReference',
        'FaultTo' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200408\FaultTo',
        'From' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200408\From',
        'MessageID' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200408\MessageID',
        'RelatesTo' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200408\RelatesTo',
        'ReplyTo' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200408\ReplyTo',
        'RetryAfter' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200408\RetryAfter',
        'To' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200408\To',
    ],
    'http://www.w3.org/2005/08/addressing' => [
        'Action' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\Action',
        'EndpointReference' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\EndpointReference',
        'FaultTo' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\FaultTo',
        'From' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\From',
        'MessageID' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\MessageID',
        'Metadata' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\Metadata',
        'ProblemAction' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\ProblemAction',
        'ProblemHeaderQName' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\ProblemHeaderQName',
        'ProblemIRI' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\ProblemIRI',
        'ReferenceParameters' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\ReferenceParameters',
        'RelatesTo' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\RelatesTo',
        'ReplyTo' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\ReplyTo',
        'RetryAfter' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\RetryAfter',
        'To' => '\SimpleSAML\WebServices\Addressing\XML\wsa_200508\To',
    ],
    'http://www.w3.org/2007/02/addressing/metadata' => [
        'Addressing' => '\SimpleSAML\WebServices\Addressing\XML\wsam\Addressing',
        'AnonymousResponses' => '\SimpleSAML\WebServices\Addressing\XML\wsam\AnonymousResponses',
        'InterfaceName' => '\SimpleSAML\WebServices\Addressing\XML\wsam\InterfaceName',
        'NonAnonymousResponses' => '\SimpleSAML\WebServices\Addressing\XML\wsam\NonAnonymousResponses',
        'ServiceName' => '\SimpleSAML\WebServices\Addressing\XML\wsam\ServiceName',
    ],
    'http://www.w3.org/2006/05/addressing/wsdl' => [
        'Anonymous' => '\SimpleSAML\WebServices\Addressing\XML\wsaw\Anonymous',
        'InterfaceName' => '\SimpleSAML\WebServices\Addressing\XML\wsaw\InterfaceName',
        'ServiceName' => '\SimpleSAML\WebServices\Addressing\XML\wsaw\ServiceName',
        'UsingAddressing' => '\SimpleSAML\WebServices\Addressing\XML\wsaw\UsingAddressing',
    ],
];
