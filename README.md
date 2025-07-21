
# 💱 Naqd

Naqd is a lightweight Laravel package that provides ISO 4217-compliant Naqd data, including Naqd codes, names, symbols, and SVG icons for easy display and localization.

## 📦 Installation

1. Add the package to your Laravel project's `composer.json` (if locally developed):

```bash
composer require medo19/naqd
```

## ⚙️ Service Provider & Facade (Auto-discovered)

For Laravel 5.5+, this package uses auto-discovery.

If you need to register manually:

```php
// config/app.php
'providers' => [
    Medo19\Naqd\NaqdServiceProvider::class,
],

'aliases' => [
    'Naqd' => Medo19\Naqd\Facades\Naqd::class,
]
```

---

## 🧰 Usage

### Get all currencies:

```php
$currencies = Naqd::all();
```

### Get a specific Naqd:

```php
$usd = Naqd::get('usd');

// Result:
[
    "code" => "USD",
    "name" => "United States Dollar",
    "symbol" => "$",
    "unicode" => "U+0024",
    "numeric" => "840",
    "decimal_digits" => 2,
    "svg" => "usd.svg"
]
```

### Display an SVG (inline):

In Blade:

```blade
{!! Naqd::getSvg('usd') !!}
```

> Outputs the full `<svg>...</svg>` inline.

---

## 🖼️ Publishing Assets

You can publish the Naqd JSON file or SVG icons if needed:

```bash
php artisan vendor:publish --tag=currencies-config
```

Or add your own publishing tags in `NaqdServiceProvider`.

---

## 🗂 Directory Structure

```
packages/
└── medo19/
    └── naqd/
        ├── src/
        │   ├── data/
        │   │   ├── currencies.json
        │   │   └── svg/
        │   │       ├── usd.svg
        │   │       ├── eur.svg
        │   │       └── ...
        │   ├── Naqd.php
        │   ├── NaqdServiceProvider.php
        │   └── Facades/
        │       └── Naqd.php
        └── composer.json
```

---

## 📜 License

MIT License — Free to use and modify.

---

## 🤝 Contributions

Feel free to submit PRs or suggestions.

---

## 📧 Maintainer

**Muhammad Abdulrazek**
GitHub: [@medo19](https://github.com/Eng-MuhammadAbdulrazek/)

```
---
