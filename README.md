Reflect [![Packagist Version][PACKAGIST VERSION BADGE]][PACKAGIST PAGE] [![GitHub License][LICENSE BADGE]][LICENSE PAGE] [![Build Status][BUILD BADGE]][BUILD PAGE] [![HHVM Status][HHVM BADGE]][BUILD PAGE] [![Sensio Labs Insight][SENSIO BADGE]][SENSIO PAGE] [![StyleCI][STYLECI BADGE]][STYLECI PAGE]
=======
> A PHP reflection helper library.

Install
-------
```sh
$ composer require radioactivehamster/reflect
```

Usage
-----
```php
<?php

$classReflection    = RadHam\Reflect::factory('PDO');
$constantReflection = RadHam\Reflect::factory('E_ERROR');
$functionReflection = RadHam\Reflect::factory('trim'):
$stringReflection   = RadHam\Reflect::factory('Hello world!');
```

License
-------
The MIT License (Expat). See the [license file](LICENSE) for details.

[BUILD BADGE]: https://img.shields.io/travis/radioactivehamster/reflect.svg?style=flat-square
[BUILD PAGE]: https://travis-ci.org/radioactivehamster/reflect
[HHVM BADGE]: https://img.shields.io/hhvm/radioactivehamster/reflect.svg?style=flat-square
[LICENSE BADGE]: https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square
[LICENSE PAGE]: https://github.com/radioactivehamster/reflect/blob/master/LICENSE
[PACKAGIST PAGE]: https://packagist.org/packages/radioactivehamster/reflect
[PACKAGIST VERSION BADGE]: https://img.shields.io/packagist/v/radioactivehamster/reflect.svg?style=flat-square
[SENSIO BADGE]: https://img.shields.io/sensiolabs/i/7e6ba80a-32e2-4d40-9f28-f0d187b53053.svg?style=flat-square
[SENSIO PAGE]: https://insight.sensiolabs.com/projects/7e6ba80a-32e2-4d40-9f28-f0d187b53053
[STYLECI BADGE]: https://styleci.io/repos/52300053/shield
[STYLECI PAGE]: https://styleci.io/repos/52300053
