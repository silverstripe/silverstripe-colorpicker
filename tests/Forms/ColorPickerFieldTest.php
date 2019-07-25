<?php

namespace SilverStripe\Fontpicker\Tests\Forms;

use SilverStripe\Colorpicker\Forms\ColorPickerField;
use SilverStripe\Dev\SapphireTest;

class ColorPickerFieldTest extends SapphireTest
{
    public function testGetSourceValues()
    {
        $field = new ColorPickerField('test');
        $field->setSource([
            [
                'Title' => 'Red',
                'CSSClass' => 'red',
                'Color' => '#E51016',
            ],
            [
                'Title' => 'Blue',
                'CSSClass' => 'blue',
                'Color' => '#1F6BFE',
            ]
        ]);
        $this->assertEquals(['', 'red', 'blue'], $field->getSourceValues());
    }
}
