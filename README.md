# simeple-response

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/phuongdanh/simple-response.svg?style=flat-square)](https://packagist.org/packages/phuongdanh/simple-response)

Simple package to handle response properly in your API. This package does not include any dependency.

## Install

Via Composer

``` bash
$ composer require phuongdanh/simple-response
```

## Requirements

The following versions of PHP are supported by this version.

* PHP 5.6
* PHP 7.0
* PHP 7.1
* PHP 7.2
* PHP 8.x

### How to use it?

```php
// Use namespace 
use SimpleResponse\Response;

// response with default data type based on Accept value in request's header
return Response::default($your_data);

// response as application/json
return Response::json($your_data);

// response as text/xml
return Response::xml($your_data);
```


## License

The MIT License (MIT). Please see [License File](https://github.com/ellipsesynergie/api-response/blob/master/LICENSE) for more information.