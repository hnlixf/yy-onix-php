<?php

namespace AragornYang\Onix\Tests\features\V30;

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\Composites\SupplyDetail;

/**
 * @property Product $product
 */
trait SampleOnixFile30
{
    /** @test */
    public function it_can_parse_the_sample_file(): void
    {
        $this->assertCount(1, static::$products);
        $this->assertInstanceOf(Product::class, $this->product);
    }

    /** @test */
    public function it_is_version_30(): void
    {
        $this->assertSame('3.0', static::$parser->onixVersion());
    }

    /** @test */
    public function it_can_get_isbn(): void
    {
        $this->assertSame('9780080446844', $this->product->getIsbn13());
    }

    /** @test */
    public function it_can_get_product_form(): void
    {
        $this->assertSame('BC', $this->product->getProductForm());
        $this->assertSame('Paperback / softback', $this->product->getProductFormDesc());
    }

    /** @test */
    public function it_can_get_recordReference()
    {
        $this->assertSame('9780080446844', $this->product->getRecordReference());
    }

    /** @test */
    public function it_can_get_notificationType()
    {
        $this->assertSame('03', $this->product->getNotificationType());
        $this->assertSame('Notification confirmed on publication', $this->product->getNotificationTypeDesc());
    }

    /** @test */
    public function it_can_get_recordSourceType()
    {
        $this->assertSame('01', $this->product->getRecordSourceType());
        $this->assertSame('Publisher', $this->product->getRecordSourceTypeDesc());
    }

    /** @test */
    public function it_can_get_recordSourceName()
    {
        $this->assertSame('Elsevier', $this->product->getRecordSourceName());
    }

    /** @test */
    public function it_can_get_Barcode()
    {
        $barcodes = $this->product->getBarcodes();

        $this->assertSame('02', $barcodes[0]->getBarcodeType());
        $this->assertSame('GTIN-13', $barcodes[0]->getBarcodeTypeDesc());
        $this->assertSame('00', $barcodes[0]->getPositionOnProduct());
        $this->assertSame('Unknown / unspecified', $barcodes[0]->getPositionOnProductDesc());
    }

    /** @test */
    public function it_can_get_descriptiveDetail()
    {
        $descriptiveDetail = $this->product->getDescriptiveDetail();

        $this->assertSame('00', $descriptiveDetail->getProductComposition());
        $this->assertSame('Single-item retail product', $descriptiveDetail->getProductCompositionDesc());

        $titleDetails = $descriptiveDetail->getTitleDetails();
        $this->assertCount(1, $titleDetails);
        $this->assertSame('01', $titleDetails[0]->getTitleType());

        $titleElements = $titleDetails[0]->getTitleElements();
        $this->assertSame('01', $titleElements[0]->getTitleElementLevel());
        $this->assertSame('Product', $titleElements[0]->getTitleElementLevelDesc());
        $this->assertSame('Pain', $titleElements[0]->getTitleText());
        $this->assertSame('Best Practice & Research Compendium', $titleElements[0]->getSubtitle());

        $measures = $descriptiveDetail->getMeasures();
        $this->assertSame('01', $measures[0]->getMeasureType());
        $this->assertSame('Height', $measures[0]->getMeasureTypeDesc());
        $this->assertSame(11.0, $measures[0]->getMeasurement());
        $this->assertSame('in', $measures[0]->getMeasureUnitCode());
        $this->assertSame('Inches (US)', $measures[0]->getMeasureUnitCodeDesc());

        $this->assertSame('GB', $descriptiveDetail->getCountryOfManufacture());
        $this->assertSame('United Kingdom', $descriptiveDetail->getCountryOfManufactureDesc());
    }

    /** @test */
    public function it_can_get_title(): void
    {
        $this->markTestSkipped();
        $this->assertSame('British English, A to Zed', $this->product->getTitle());
    }

    /** @test */
    public function it_can_get_author(): void
    {
        $this->markTestSkipped();
        $this->assertSame('Schur, Norman W', $this->product->getAuthor()->getPersonNameInverted());
    }

    /** @test */
    public function it_can_get_EditionTypeCode(): void
    {
        $this->markTestSkipped();
        $this->assertSame('REV', $this->product->getEditionTypeCode());
    }

    /** @test */
    public function it_can_get_EditionNumber(): void
    {
        $this->markTestSkipped();
        $this->assertSame('3', $this->product->getEditionNumber());
    }

    /** @test */
    public function it_can_get_Language(): void
    {
        $this->markTestSkipped();
        $this->assertSame('eng', $this->product->getLanguageCode());
    }

    /** @test */
    public function it_can_get_NumberOfPages(): void
    {
        $this->markTestSkipped();
        $this->assertSame(493, $this->product->getNumberOfPages());
    }

    /** @test */
    public function it_can_get_BASICMainSubject(): void
    {
        $this->markTestSkipped();
        $this->assertSame('REF008000', $this->product->getBASICMainSubject());
    }

    /** @test */
    public function it_can_get_AudienceCode(): void
    {
        $this->markTestSkipped();
        $this->assertSame('01', $this->product->getAudienceCode());
    }

    /** @test */
    public function it_can_get_MainDescription(): void
    {
        $this->markTestSkipped();
        $this->assertSame(0, stripos($this->product->getMainDesc(),
            'BRITISH ENGLISH, A TO ZED is the thoroughly updated, revised, and expanded third edition of Norman'));
    }

    /** @test */
    public function it_can_get_ReviewQuote(): void
    {
        $this->markTestSkipped();
        $this->assertSame(0, stripos($this->product->getReviewQuotes()[0],
            'Norman Schur is without doubt the outstanding authority on the similarities and differences between'));
    }

    /** @test */
    public function it_can_get_imprint(): void
    {
        $this->markTestSkipped();
        $this->assertSame('Facts on File Publications', $this->product->getImprint());
    }

    /** @test */
    public function it_can_get_publisher(): void
    {
        $this->markTestSkipped();
        $this->assertSame('Facts on File Inc', $this->product->getPublisherNames());
    }

    /** @test */
    public function it_can_get_pub_date(): void
    {
        $this->markTestSkipped();
        $this->assertSame('1987', $this->product->getPublicationDate());
    }

    /** @test */
    public function it_can_get_measures(): void
    {
        $this->markTestSkipped();
        $this->assertSame(9.25, $this->product->getHeightMeasurement());
        $this->assertSame('in', $this->product->getHeightUnit());
        $this->assertSame(6.25, $this->product->getWidthMeasurement());
        $this->assertSame('in', $this->product->getWidthUnit());
        $this->assertSame(1.2, $this->product->getThicknessMeasurement());
        $this->assertSame('in', $this->product->getThicknessUnit());
    }

    /** @test */
    public function it_can_get_supply_details(): void
    {
        $this->assertCount(1, $this->product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $this->product->getSupplyDetails()[0];
        $this->assertSame('23', $supplyDetail->getProductAvailability());
        $price = $supplyDetail->getPrices()[0];
        $this->assertTrue($price->isRrpExcTax());
        $this->assertSame(76.95, $price->getPriceAmount());
    }
}