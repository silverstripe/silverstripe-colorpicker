# Colorpicker Module

[![Build Status](https://travis-ci.org/silverstripe/colorpicker.svg?branch=master)](https://travis-ci.org/silverstripe/colorpicker)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/silverstripe/colorpicker/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/silverstripe/colorpicker/?branch=master)
[![codecov](https://codecov.io/gh/silverstripe/colorpicker/branch/master/graph/badge.svg)](https://codecov.io/gh/silverstripe/colorpicker)
[![SilverStripe supported module](https://img.shields.io/badge/silverstripe-supported-0071C4.svg)](https://www.silverstripe.org/software/addons/silverstripe-commercially-supported-module-list/)

This module adds a color picker field which can be used anywhere.

In order to keep the site accessible, custom color selection is not implemented.

## Installation

To install this module, you can do so with Composer:

```
composer require silverstripe/colorpicker
```

## Usage

To add a `ColorPickerField` to a `DataObject`, you can write the following in a `DataExtension`:

```php
    private static $colors = [
        'red' => [
            'Title' => 'Red',
            'CSSClass' => 'red',
            'Color' => '#E51016',
        ],
        'blue' => [
            'Title' => 'Blue',
            'CSSClass' => 'blue',
            'Color' => '#1F6BFE',
        ],
        'green' => [
            'Title' => 'Green',
            'CSSClass' => 'green',
            'Color' => '#298436',
        ]
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab(
            'Root.ThemeOptions',
            [
                ColorPickerField::create(
                    'MyColorField',
                    _t(
                        __CLASS__ . '.MyColorField',
                        'My Color Field'
                    ),
                    $colors
                )
            ]
        );

        return $this;
    }
```

## Versioning

This library follows [Semver](http://semver.org). According to Semver, you will be able to upgrade to any minor or patch version of this library without any breaking changes to the public API. Semver also requires that we clearly define the public API for this library.

All methods, with `public` visibility, are part of the public API. All other methods are not part of the public API. Where possible, we'll try to keep `protected` methods backwards-compatible in minor/patch versions, but if you're overriding methods then please test your work before upgrading.
