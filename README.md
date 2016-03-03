Reflect
=======
> A PHP reflection helper library.

[![Packagist Version][PACKAGIST VERSION BADGE]][PACKAGIST PAGE] [![GitHub license][LICENSE BADGE]][LICENSE PAGE] [![Build Status][BUILD BADGE]][BUILD PAGE] [![StyleCI Status][STYLECI BADGE]][STYLECI PAGE]

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
```

License
-------
The MIT License (Expat). See the [license file](LICENSE) for details.

[BUILD BADGE]:https://travis-ci.org/radioactivehamster/reflect.svg?branch=master&?style=flat-square
[BUILD PAGE]: https://travis-ci.org/radioactivehamster/reflect
[LICENSE BADGE]: https://img.shields.io/github/license/radioactivehamster/reflect.svg?style=flat-square
[LICENSE PAGE]: https://github.com/radioactivehamster/reflect/blob/master/LICENSE
[PACKAGIST PAGE]: https://packagist.org/packages/radioactivehamster/reflect
[PACKAGIST VERSION BADGE]: https://img.shields.io/packagist/v/radioactivehamster/reflect.svg?style=flat-square
[STYLECI BADGE]: https://styleci.io/repos/52300053/shield
[STYLECI PAGE]: https://styleci.io/repos/52300053
