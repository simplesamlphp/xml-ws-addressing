<?php

declare(strict_types=1);

namespace SimpleSAML\WebServices\Addressing\XML\wsaw;

/**
 * @package simplesamlphp/xml-ws-addressing
 */
enum AnonymousEnum: string
{
    case Optional = 'optional';
    case Prohibited = 'prohibited';
    case Required = 'required';
}
