# DotSeek

A function set to find a datasets in arrays or files based on dot separated strings.


## Examples

```php
$myArray = [
  'my' => [
    'assoc' => [
      'array' => [
        'found my info!'
      ]
    ]
  ]
];

dotseek('my.assoc.array', $myArray);
```
