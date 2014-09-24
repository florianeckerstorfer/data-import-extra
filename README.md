DataImportExtra
===============

> Additional item and value converters for [ddeboer/data-import](https://github.com/ddeboer/data-import).

[![Build Status](https://travis-ci.org/florianeckerstorfer/data-import-extra.svg?branch=master)](https://travis-ci.org/florianeckerstorfer/data-import-extra)
[![Code Climate](https://codeclimate.com/github/florianeckerstorfer/data-import-extra/badges/gpa.svg)](https://codeclimate.com/github/florianeckerstorfer/data-import-extra)
[![Test Coverage](https://codeclimate.com/github/florianeckerstorfer/data-import-extra/badges/coverage.svg)](https://codeclimate.com/github/florianeckerstorfer/data-import-extra)


Features
--------

### Item Converters

#### RemoveEmptyColumnItemConverter

Removes columns with an empty key from the items.

### Value Converters

#### ChainValueConverter

Executes multiple value converters. Great for composing chains of value converters and reusing them for multiple fields or in multiple workflows.

#### MultiplicationValueConverter

Multiplies the given input value with the multiplicator.

#### StringReplaceValueConverter

Replaces the `search` string with the `replace` string in the input string.


Installation
------------


Usage
-----


Author
------

### [Florian Eckerstorfer](https://florian.ec)

- [Twitter](https://twitter.com/Florian_)


License
-------