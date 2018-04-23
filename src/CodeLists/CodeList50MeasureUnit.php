<?php

namespace AragornYang\Onix\CodeLists;

class CodeList50MeasureUnit extends CodeList
{
    public const KEY = 'MeasureUnit';

    protected const MAPPING = [
        // Millimeters are the preferred metric unit of length
        "cm" => "Centimeters",
        // 
        "gr" => "Grams",
        // 
        "in" => "Inches (US)",
        // Grams are the preferred metric unit of weight
        "kg" => "Kilograms",
        // 
        "lb" => "Pounds (US)",
        // 
        "mm" => "Millimeters",
        // 
        "oz" => "Ounces (US)",
        // 
        "px" => "Pixels",
    ];
}