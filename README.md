# Number Component

The Number classes provide formatting, convertions classes and methods for working with numeric values.<br>
The Number[Language] class is for convert number to text in Thai and English languages.<br>
In Thai language it is including number to Thai Baht conversion.

[![Latest Stable Version](https://poser.pugx.org/okvee/number/v/stable)](https://packagist.org/packages/okvee/number)
[![License](https://poser.pugx.org/okvee/number/license)](https://packagist.org/packages/okvee/number)

## Example:

### Convert number:

```php
// For English require NumberEng.php, for Thai require NumberThai.php
require 'Okvee/Number/NumberEng.php';

// For English use NumberEng(), for Thai use NumberThai()
$number_text = new Okvee\Number\NumberEng();

echo $number_text->convertNumber('101');
// the result should be:
// one hundred and one (for English)
// หนึ่งร้อยเอ็ด (for Thai)
```

### Convert Thai Baht:

```php
require 'Okvee/Number/NumberThai.php';

$number_text = new Okvee\Number\NumberThai();

echo $number_text->convertBaht('3.23');
// the result should be:
// สามบาทยี่สิบสามสตางค์
```

### Convert file size to Bytes:

```php
require 'Okvee/Number/Number.php';

$number = new Okvee\Number\Number();

echo $number->toBytes('1.3KB'); // 1300
echo $number->toBytes('1.3KiB'); // 1331.2
```

### Convert to other file size unit from Bytes:

```php
require 'Okvee/Number/Number.php';

$number = new Okvee\Number\Number();

echo $number->fromBytes('100000'); // 100.00 KB
echo $number->fromBytes('133300'); // 133.30 KB
echo $number->fromBytes('10000', 'KiB); // 9.76 KiB
```

---

For more example, please look inside **tests** folder.