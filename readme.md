# Colorpicker Module

[![Build Status](https://travis-ci.org/silverstripe/silverstripe-colorpicker.svg?branch=master)](https://travis-ci.org/silverstripe/silverstripe-colorpicker)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/silverstripe/silverstripe-colorpicker/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/silverstripe/silverstripe-colorpicker/?branch=master)
[![codecov](https://codecov.io/gh/silverstripe/silverstripe-colorpicker/branch/master/graph/badge.svg)](https://codecov.io/gh/silverstripe/silverstripe-colorpicker)

This module adds a color picker field which can be used anywhere in the CMS.

In order to keep the site accessible, custom color selection is not implemented.

## Installation

To install this module, you can do so with Composer:

```
composer require silverstripe/colorpicker
```

## Usage

You can use the `ColorPickerField` as follows:

```php
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab(
            'Root.Main',
            [
                ColorPickerField::create(
                    'MyColorField',
                    _t(
                        __CLASS__ . '.MyColorField',
                        'My Color Field'
                    ),
                    [
                        [
                            'Title' => 'Red',
                            'CSSClass' => 'red',
                            'Color' => '#E51016',
                        ],
                        [
                            'Title' => 'Blue',
                            'CSSClass' => 'blue',
                            'Color' => '#1F6BFE',
                        ],
                        [
                            'Title' => 'Green',
                            'CSSClass' => 'green',
                            'Color' => '#298436',
                        ]
                    ]
                )
            ]
        );

        return $fields;
    }
```

## Versioning

This library follows [Semver](http://semver.org). According to Semver, you will be able to upgrade to any minor or patch version of this library without any breaking changes to the public API. Semver also requires that we clearly define the public API for this library.

All methods, with `public` visibility, are part of the public API. All other methods are not part of the public API. Where possible, we'll try to keep `protected` methods backwards-compatible in minor/patch versions, but if you're overriding methods then please test your work before upgrading.
