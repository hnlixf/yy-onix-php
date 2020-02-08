<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList2ProductComposition;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;
use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\Composites\V30\Collection;
use AragornYang\Onix\ProductFeatures\HasContributors;
use AragornYang\Onix\ProductFeatures\HasProductForm;
use AragornYang\Onix\ProductFeatures\HasMeasures;
use AragornYang\Onix\ProductFeatures\HasLanguages;
use AragornYang\Onix\ProductFeatures\HasExtents;
use AragornYang\Onix\ProductFeatures\HasSubjects;
use AragornYang\Onix\ProductFeatures\HasAudiences;
use AragornYang\Onix\ProductFeatures\V30\HasTitleDetails;

class DescriptiveDetail extends Composite
{
    use
        HasContributors,
        HasProductForm,
        HasTitleDetails,
        HasMeasures,
        HasLanguages,
        HasExtents,
        HasSubjects,
        HasAudiences;

    /** @var CodeInList */
    protected $productComposition;

    /** @var CodeInList */
    protected $countryOfManufacture;

    /** @var Collection[] */
    protected $collections;

    public function setProductComposition(string $code): void
    {
        $this->productComposition = new CodeInList(CodeList2ProductComposition::class, $code);
    }

    public function getProductComposition(): string
    {
        return $this->productComposition ? $this->productComposition->code() : '';
    }

    public function getProductCompositionDesc(): string
    {
        return $this->productComposition ? $this->productComposition->desc() : '';
    }

    public function setCountryOfManufacture(string $code): void
    {
        $this->countryOfManufacture = new CodeInList(CodeList91CountryCodeISO31661::class, $code);
    }

    public function getCountryOfManufacture(): string
    {
        return $this->countryOfManufacture ? $this->countryOfManufacture->code() : '';
    }

    public function getCountryOfManufactureDesc(): string
    {
        return $this->countryOfManufacture ? $this->countryOfManufacture->desc() : '';
    }

    public function setCollection(\SimpleXMLElement $xml): void
    {
        $this->collections[] = Collection::buildFromXml($xml, $this);
    }

    public function getCollections(): array
    {
        return $this->collections;
    }
}