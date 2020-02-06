<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList149TitleElementLevel;

class TitleElement extends Composite
{
    /** @var CodeInList */
    protected $titleElementLevel;

    public function setTitleElementLevel(string $code): void
    {
        $this->titleElementLevel = new CodeInList(CodeList149TitleElementLevel::class, $code);
    }

    public function getTitleElementLevel(): string
    {
        return $this->titleElementLevel ? $this->titleElementLevel->code() : '';
    }

    public function getTitleElementLevelDesc(): string
    {
        return $this->titleElementLevel ? $this->titleElementLevel->desc() : '';
    }
}