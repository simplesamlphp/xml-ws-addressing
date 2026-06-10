<?php

declare(strict_types=1);

namespace SimpleSAML\Test\WebServices\Addressing\XML\wsa_200508;

use Dom;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;
use SimpleSAML\WebServices\Addressing\XML\wsa_200508\AbstractWsaElement;
use SimpleSAML\WebServices\Addressing\XML\wsa_200508\Metadata;
use SimpleSAML\XML\Attribute;
use SimpleSAML\XML\Chunk;
use SimpleSAML\XML\DOMDocumentFactory;
use SimpleSAML\XML\TestUtils\SchemaValidationTestTrait;
use SimpleSAML\XML\TestUtils\SerializableElementTestTrait;
use SimpleSAML\XMLSchema\Type\StringValue;

use function dirname;
use function strval;

/**
 * Class \SimpleSAML\WebServices\Addressing\XML\wsa\MetadataTest
 *
 * @package simplesamlphp/xml-ws-addressing
 */
#[Group('wsa')]
#[CoversClass(Metadata::class)]
#[CoversClass(AbstractWsaElement::class)]
final class MetadataTest extends TestCase
{
    use SchemaValidationTestTrait;
    use SerializableElementTestTrait;


    /** @var \Dom\Element $MetadataContent */
    private static Dom\Element $metadataContent;


    /**
     */
    public static function setUpBeforeClass(): void
    {
        self::$testedClass = Metadata::class;

        self::$xmlRepresentation = DOMDocumentFactory::fromFile(
            dirname(__FILE__, 4) . '/resources/xml/wsa/200508/Metadata.xml',
        );

        self::$metadataContent = DOMDocumentFactory::fromString(
            '<m:GetPrice xmlns:m="https://www.w3schools.com/prices"><m:Item>Apples</m:Item></m:GetPrice>',
        )->documentElement;
    }


    /**
     */
    public function testMarshalling(): void
    {
        $domAttr = new Attribute('urn:x-simplesamlphp:namespace', 'ssp', 'attr1', StringValue::fromString('value1'));

        $metadata = new Metadata([new Chunk(self::$metadataContent)], [$domAttr]);
        $this->assertFalse($metadata->isEmptyElement());

        $expectedXml = self::$xmlRepresentation->saveXml(self::$xmlRepresentation->documentElement);
        $this->assertNotFalse($expectedXml);
        $actualXml = strval($metadata);

        $this->assertXmlStringEqualsXmlString($expectedXml, $actualXml);
    }


    /**
     */
    public function testMarshallingWithNoContent(): void
    {
        $metadata = new Metadata([], []);
        $this->assertEquals(
            '<wsa10:Metadata xmlns:wsa10="http://www.w3.org/2005/08/addressing"/>',
            strval($metadata),
        );
        $this->assertTrue($metadata->isEmptyElement());
    }
}
