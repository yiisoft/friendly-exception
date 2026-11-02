# Internals

## Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```shell
./vendor/bin/phpunit
```

## Static analysis

The code is statically analyzed with [PHPStan](https://phpstan.org/). To run static analysis:

```shell
./vendor/bin/phpstan
```

## Dependencies

Use [Composer Dependency Analyser](https://github.com/shipmonk-rnd/composer-dependency-analyser) to detect unknown,
shadow, and unused [Composer](https://getcomposer.org) dependencies:

```shell
./vendor/bin/composer-dependency-analyser
```
