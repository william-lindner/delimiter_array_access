# Dot Array

Dot array is a function that allows for the finding of array values by dot notation.

> Sometimes it's just easier to read accessing array chains by a string with a delimiter.
> Instead of compound, chained accessors that may lead to unexpected errors this
> function is null safe. This isn't trying to be fast. It's trying to provide
> developers options in how they want their code read.

### Descripton

```php
dot_array ( string $needle , array $haystack [, string $delimiter = '.' ] ) : mixed
```

### Installation

```bash
$ composer require william-lindner/dot_array
```

### Parameters

**needle**  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The string with delimiter you want parsed to extract the value from the array.

**haystack**  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The array being parsed to find the value.

**delimiter**  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The optional delimiter for the string needle, defaulting to a period.

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
echo dot_array('my.assoc.array', $myArray) . PHP_EOL;
```