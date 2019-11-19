# Laravel Illuminate\\Support\\Str extended
[![Latest Stable Version](https://poser.pugx.org/larabra/str/v/stable)](https://packagist.org/packages/larabra/str)
[![Total Downloads](https://poser.pugx.org/larabra/str/downloads)](https://packagist.org/packages/larabra/str)
[![License](https://poser.pugx.org/larabra/str/license)](https://packagist.org/packages/larabra/str)

| Method                                        | Helper                                        | Description                                                                                       |
|-----------------------------------------------|-----------------------------------------------|---------------------------------------------------------------------------------------------------|
| `Str::sanitizeName(string $string): string`   | `str_sanitize_name(string $string): string`   | Sanitize names removing diacritics, changing to uppercase and removing duplicate blank spaces     |
| `Str::sanitizeNumber(string $string): string` | `str_sanitize_number(string $string): string` | Sanitize numbers removing non-numeric characters. Very useful to unmask documents or phone number |
| `Str::metaphone(string $string): string`      | `str_metaphone(string $string): string`       | Metaphone is a phonetic algorithm for indexing words by their pronunciation                       |

## Installation

**Step 1**: Install package via Composer
```bash
composer require larabra/str
```
**Step 2**: If you are using Laravel 5, include the service provider within your `config/app.php` file.

```php
'providers' => [
    Larabra\Str\LarabraStrServiceProvider::class,
];
```