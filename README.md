DataImportExtra
===============

> Additional item and value converters for [ddeboer/data-import](https://github.com/ddeboer/data-import).

[![Build Status](https://travis-ci.org/florianeckerstorfer/data-import-extra.svg?branch=master)](https://travis-ci.org/florianeckerstorfer/data-import-extra)
[![Code Climate](https://codeclimate.com/github/florianeckerstorfer/data-import-extra/badges/gpa.svg)](https://codeclimate.com/github/florianeckerstorfer/data-import-extra)
[![Test Coverage](https://codeclimate.com/github/florianeckerstorfer/data-import-extra/badges/coverage.svg)](https://codeclimate.com/github/florianeckerstorfer/data-import-extra)


Installation
------------

You can install DataImportExtra using [Composer](http://getcomposer.org):

```shell
$ composer require florianeckerstorfer/data-import-extra:@stable
```


Usage
-----

### Item Converters

#### RemoveEmptyColumnItemConverter

Removes columns with an empty key from the items.

```php
$converter = new RemoveEmptyColumnItemConverter();
$input = ['key' => 'value', '' => '', "\n" => '', ' ' => ''];
$this->converter->convert($input); // ['key' => 'value']
```

### Value Converters

#### MultiplicationValueConverter

Multiplies the given input value with the multiplicator.

```php
$converter = new MultiplicationValueConverter(10);
$converter->convert(3); // 30
```

#### StringReplaceValueConverter

Replaces the `search` string with the `replace` string in the input string.

```php
$converter = new StringReplaceValueConverter('foo', 'baz')
$converter->convert('foobar'); // bazbar
```

#### ChainValueConverter

Executes multiple value converters. Great for composing chains of value converters and reusing them for multiple fields or in multiple workflows.

```php
// Convert a money value (in german format with , instead of .) into cents.
$converter = new ChainValueConverter();
$converter->addValueConverter(new StringReplaceValueConverter(',', '.'))
          ->addValueConverter(new MultiplicationValueConverter(100));
$converter->convert('42,69'); // 4269
```


Author
------

### [Florian Eckerstorfer](https://florian.ec)

- [Twitter](https://twitter.com/Florian_)


License
-------