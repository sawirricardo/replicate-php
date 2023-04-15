# PHP client for the Replicate API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/replicate-php.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/replicate-php)
[![Tests](https://img.shields.io/github/actions/workflow/status/sawirricardo/replicate-php/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sawirricardo/replicate-php/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/replicate-php.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/replicate-php)

This is a PHP client for Replicate. It lets you run models from your PHP code and do various other things on Replicate.

## Support us

Investing on this package is defintely a good move from you. You can support by donating to:

PayPal https://www.paypal.com/paypalme/sawirricardo.
BCA 8330123584

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/replicate-php
```

## Usage

```php
$token = 'sxsaxada';
$client = new Sawirricardo\Replicate\Replicate($token);
$prediction = $client->predictions()->create('sd-v1.4', [
    'prompt' => 'my exciting project',
]);

echo $prediction->json('id');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
