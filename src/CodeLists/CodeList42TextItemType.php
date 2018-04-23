<?php

namespace AragornYang\Onix\CodeLists;

class CodeList42TextItemType extends CodeList
{
    public const KEY = 'TextItemType';

    protected const MAPPING = [
        /* A complete work which is published as a content item in a product which carries two or more such works, eg when two or three
					novels are published in a single omnibus volume */
        "01" => "Textual work",
        // Text components such as Preface, Introduction etc which appear as preliminaries to the main body of text content in a product
        "02" => "Front matter",
        // Text components such as Part, Chapter, Section etc which appear as part of the main body of text content in a product
        "03" => "Body matter",
        // Text components such as Index which appear after the main body of text in a product
        "04" => "Back matter",
        // For journals
        "10" => "Serial item, miscellaneous or unspecified",
        // For journals
        "11" => "Research article",
        // For journals
        "12" => "Review article",
        // For journals
        "13" => "Letter",
        // For journals
        "14" => "Short communication",
        // For journals
        "15" => "Erratum",
        // For journals
        "16" => "Abstract",
        // For journals
        "17" => "Book review (or review of other publication)",
        // For journals
        "18" => "Editorial",
        // For journals
        "19" => "Product review",
        // 
        "20" => "Index",
        // For journals
        "21" => "Obituary",
    ];
}