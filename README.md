# Delimiter Array Access

Delimiter array access is a function that allows for the finding of array values by dot notation.

> Sometimes it's just easier to read accessing array chains by a string with a delimiter.
> Instead of compound, chained accessors that may lead to unexpected errors this
> function is null safe. This isn't trying to be fast. It's trying to provide
> developers options in how they want their code read.

### Descripton

```php
delimiter_array_access( string $needle, array $haystack, [ string $delimiter = '.' ] ) : mixed
```

### Installation

```bash
$ composer require william-lindner/delimiter_array_access
```

### Parameters

**needle** (_Required_)

The string with delimiter you want parsed to extract the value from the array.

**haystack** (_Required_)

The array being parsed to find the value.

**delimiter** (_Optional_)

The optional delimiter for the string needle, defaulting to a period.

### Example

In the following example the value nested within the array is extracted using the default delimiter of a period.

```php
$myArray = [
  'my' => [
    'assoc' => [
      'array' => 'I found a value.'
    ]
  ]
];

// This will output 'I found a value.'
echo delimiter_array_access('my.assoc.array', $myArray) . PHP_EOL;
```
