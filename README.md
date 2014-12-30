Number
======

Number conversion or number to text. Convert number to text in Thai and English languages.<br>
In Thai language it is including number to Thai Baht conversion.

Example of uses:
```php
// Require the file. For English require NumberEng.php, for Thai require NumberThai.php
require 'Okvee/Number/NumberEng.php';

// initiate new class variable. For English use NumberEng(), for Thai use NumberThai()
$number_text = new Okvee\Number\NumberEng();

// convert it.
echo $number_text->convertNumber('101');
// the result should be:
// one hundred and one (for English)
// หนึ่งร้อยเอ็ด (for Thai)
```

To covnert number to Thai Baht text. Use NumberThai.php and NumberThai() class.<br>
Example:
```php
require 'Okvee/Number/NumberThai.php';

$number_text = new Okvee\Number\NumberThai();

// convert number to Thai Baht.
echo $number_text->convertBaht('3.23');
// the result should be:
// สามบาทยี่สิบสามสตางค์
```
