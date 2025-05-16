<?php

namespace SilverStripe\Colorpicker\Forms;

use SilverStripe\Forms\SingleSelectField;

class ColorPickerField extends SingleSelectField
{
    public function __construct($name, $title = null, $source = array(), $value = null)
    {
        parent::__construct($name, $title, $source, $value);

        $this->addExtraClass('color-picker-field');
    }

    public function getSchemaDataDefaults()
    {
        $schemaData = parent::getSchemaDataDefaults();

        $schemaData['source'] = $this->getSource();
        $schemaData['name'] = $this->getName();
        $schemaData['value'] = $this->Value();

        return $schemaData;
    }

    public function getSourceValues()
    {
        return array_merge([''], array_map(function ($color) {
            return $color['CSSClass'];
        }, $this->getSource()));
    }

    public function Field($properties = [])
    {
        // Prevent false “unsaved changes” warnings in the CMS by rendering
        // a hidden input immediately. This ensures the field value is present
        // in the initial DOM snapshot before React mounts.
        $schema = parent::Field($properties);

        $name = $this->getName();
        $value = htmlspecialchars($this->Value() ?? '', ENT_QUOTES);
        $hidden = "<input type=\"hidden\" name=\"{$name}\" value=\"{$value}\" />";

        return $schema . $hidden;
    }
}
