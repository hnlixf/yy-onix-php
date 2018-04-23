<?php

namespace AragornYang\Onix\CodeLists;

class CodeList141BarcodeIndicator extends CodeList
{
    public const KEY = 'BarcodeIndicator';

    protected const MAPPING = [
        // 
        "00" => "Not barcoded",
        // 
        "01" => "Barcoded, scheme unspecified",
        // 
        "02" => "GTIN-13",
        // 
        "03" => "GTIN-13+5 (US dollar price encoded)",
        // 
        "04" => "GTIN-13+5 (CAN dollar price encoded)",
        // 
        "05" => "GTIN-13+5 (no price encoded)",
        // AKA item/price
        "06" => "UPC-12 (item-specific)",
        // AKA item/price
        "07" => "UPC-12+5 (item-specific)",
        // AKA price/item
        "08" => "UPC-12 (price-point)",
        // AKA price/item
        "09" => "UPC-12+5 (price-point)",
    ];
}