<?php

declare(strict_types=1);

namespace SimpleSAML\Test\WebServices\Addressing\XML\wsam;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;
use SimpleSAML\Test\WebServices\Addressing\Constants as C;
use SimpleSAML\WebServices\Addressing\XML\wsam\AbstractAttributedQNameType;
use SimpleSAML\WebServices\Addressing\XML\wsam\AbstractWsamElement;
use SimpleSAML\WebServices\Addressing\XML\wsam\ServiceName;
use SimpleSAML\XML\Attribute as XMLAttribute;
use SimpleSAML\XML\DOMDocumentFactory;
use SimpleSAML\XML\TestUtils\SchemaValidationTestTrait;
use SimpleSAML\XML\TestUtils\SerializableElementTestTrait;
use SimpleSAML\XMLSchema\Type\NCNameValue;
use SimpleSAML\XMLSchema\Type\QNameValue;
use SimpleSAML\XMLSchema\Type\StringValue;

use function dirname;

/**
 * Class \SimpleSAML\WebServices\Addressing\XML\wsam\ServiceNameTest
 *
 * @package simplesamlphp/xml-ws-addressing
 */
#[Group('wsam')]
#[CoversClass(ServiceName::class)]
#[CoversClass(AbstractAttributedQNameType::class)]
#[CoversClass(AbstractWsamElement::class)]
final class ServiceNameTest extends TestCase
{
    use SchemaValidationTestTrait;
    use SerializableElementTestTrait;


    /**
     */
    public static function setUpBeforeClass(): void
    {
        self::$testedClass = ServiceName::class;

        self::$xmlRepresentation = DOMDocumentFactory::fromFile(
            dirname(__FILE__, 4) . '/resources/xml/wsam/ServiceName.xml',
        );
    }


    // test marshalling


    /**
     * Test creating a ServiceName object from scratch.
     */
    public function testMarshalling(): void
    {
        $attr = new XMLAttribute(C::NAMESPACE, 'ssp', 'attr1', StringValue::fromString('value1'));
        $serviceName = new ServiceName(
            QNameValue::fromString('{urn:x-simplesamlphp:namespace}ssp:Chunk'),
            NCNameValue::fromString('PHPUnit'),
            [$attr],
        );

        $this->assertEquals(
            self::$xmlRepresentation->saveXML(self::$xmlRepresentation->documentElement),
            strval($serviceName),
        );
    }
}
