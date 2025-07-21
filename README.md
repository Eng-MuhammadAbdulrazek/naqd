Here’s a clean and professional **`README.md`** for your Laravel package `medo19/naqd`:

---

````markdown
# 💱 Naqd

Naqd is a lightweight Laravel package that provides ISO 4217-compliant currency data, including currency codes, names, symbols, and SVG icons for easy display and localization.

---

## 📦 Installation

1. Add the package to your Laravel project's `composer.json` (if locally developed):

```bash
composer require medo19/naqd
```
````

Or if it's in your `/packages` folder locally, add the following to your root `composer.json`:

```json
"repositories": [
    {
        "type": "path",
        "url": "packages/medo19/naqd"
    }
]
```

Then run:

```bash
composer require medo19/naqd:@dev
```

---

## ⚙️ Service Provider & Facade (Auto-discovered)

For Laravel 5.5+, this package uses auto-discovery.

If you need to register manually:

```php
// config/app.php
'providers' => [
    Medo19\Naqd\NaqdServiceProvider::class,
],

'aliases' => [
    'Currency' => Medo19\Naqd\Facades\Naqd::class,
]
```

---

## 🧰 Usage

### Get all currencies:

```php
$currencies = Currency::all();
```

### Get a specific currency:

```php
$usd = Currency::get('usd');

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
{!! Currency::getSvg('usd') !!}
```

> Outputs the full `<svg>...</svg>` inline.

---

## 🖼️ Publishing Assets

You can publish the currency JSON file or SVG icons if needed:

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
GitHub: [@medo19](https://github.com/medo19)

```

---

Would you like a version with images, badges (Packagist/GitHub), or Laravel seeder integration examples?
```
