<?php

declare(strict_types=1);

namespace SimpleSAML\Test\WebServices\Addressing\XML\wsam;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;
use SimpleSAML\Test\WebServices\Addressing\Constants as C;
use SimpleSAML\WebServices\Addressing\XML\wsam\AbstractAddressing;
use SimpleSAML\WebServices\Addressing\XML\wsam\AbstractWsamElement;
use SimpleSAML\WebServices\Addressing\XML\wsam\Addressing;
use SimpleSAML\WebServices\Policy\XML\wsp_200607\ExactlyOne;
use SimpleSAML\WebServices\Policy\XML\wsp_200607\Policy;
use SimpleSAML\XML\Attribute as XMLAttribute;
use SimpleSAML\XML\Chunk;
use SimpleSAML\XML\DOMDocumentFactory;
use SimpleSAML\XML\TestUtils\SchemaValidationTestTrait;
use SimpleSAML\XML\TestUtils\SerializableElementTestTrait;
use SimpleSAML\XMLSchema\Type\AnyURIValue;
use SimpleSAML\XMLSchema\Type\StringValue;

use function dirname;

/**
 * Class \SimpleSAML\WebServices\Addressing\XML\wsam\AddressingTest
 *
 * @package simplesamlphp/xml-ws-addressing
 */
#[Group('wsam')]
#[CoversClass(Addressing::class)]
#[CoversClass(AbstractAddressing::class)]
#[CoversClass(AbstractWsamElement::class)]
final class AddressingTest extends TestCase
{
    use SchemaValidationTestTrait;
    use SerializableElementTestTrait;


    /**
     */
    public static function setUpBeforeClass(): void
    {
        self::$testedClass = Addressing::class;

        self::$xmlRepresentation = DOMDocumentFactory::fromFile(
            dirname(__FILE__, 4) . '/resources/xml/wsam/Addressing.xml',
        );
    }


    // test marshalling


    /**
     * Test creating a Addressing object from scratch.
     */
    public function testMarshalling(): void
    {
        $attr = new XMLAttribute(C::NAMESPACE, 'ssp', 'attr1', StringValue::fromString('value1'));

        $chunk = new Chunk(DOMDocumentFactory::fromString(
            '<ssp:Chunk xmlns:ssp="urn:x-simplesamlphp:namespace">Some</ssp:Chunk>',
        )->documentElement);

        $policy = new Policy(
            [new ExactlyOne([])],
            [$chunk],
            AnyURIValue::fromString('phpunit'),
            [$attr],
        );

        $addressing = new Addressing(
            $policy,
            [$attr],
        );

        $this->assertEquals(
            self::$xmlRepresentation->saveXML(self::$xmlRepresentation->documentElement),
            strval($addressing),
        );
    }
}
