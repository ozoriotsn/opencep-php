

![Logo](https://opengraph.githubassets.com/1e7ed344d4f083ea44d520dc37e2dda3ccc6fed5222fd5d2670386efcca9401c/SeuAliado/OpenCEP)



# OpenCEP PHP SDK

Free webservice for search zip code address in all brazil locations

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)


## Installation

Composer install

``` bash
composer require ozoriotsn/opencep
```

## Usage

``` php

<?php
    require __DIR__ . '/vendor/autoload.php';
    
    use Ozoriotsn\OpenCep\OpenCep;

    $opencep = OpenCep::class;
    $zipCodeAddress = $opencep::findByCep('01001-000')->toJson();
    echo ($zipCodeAddress);

    /********************
     * Return address
     ********************
    {
    "cep": "01001-000",
    "logradouro": "Praça da Sé",
    "complemento": "lado Impar",
    "bairro": "Sé",
    "localidade": "São Paulo",
    "uf": "SP",
    "ibge": "3550308"
    }
    */


```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
 ./vendor/bin/phpunit/ tests
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.


## Credits

- [Ozorio Neto][link-author]
- [All Contributors][link-contributors]


[ico-version]: https://img.shields.io/badge/packegist-v2.0.0-blue
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[link-packagist]: https://packagist.org/packages/ozoriotsn/opencep-php
[link-downloads]: https://packagist.org/packages/ozoriotsn/opencep-php
[link-author]: https://github.com/ozoriotsn
[link-contributors]: ../../contributors