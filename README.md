<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://yiisoft.github.io/docs/images/yii_logo.svg" height="100px" alt="Yii">
    </a>
    <h1 align="center">Yii Friendly Exception</h1>
    <br>
</p>

[![Latest Stable Version](https://poser.pugx.org/yiisoft/friendly-exception/v)](https://packagist.org/packages/yiisoft/friendly-exception)
[![Total Downloads](https://poser.pugx.org/yiisoft/friendly-exception/downloads)](https://packagist.org/packages/yiisoft/friendly-exception)

An exception interface that provides a friendly name and a possible solution.
Error handlers may consider the interface to render additional information right at the error screen.

## Requirements

- PHP 7.4 or higher.

## Installation

The package could be installed with [Composer](https://getcomposer.org):

```shell
composer require yiisoft/friendly-exception
```

## General usage

### Implementing friendly exception

To make exception friendly require this package and implement `FriendlyExceptionInterface`:

```php
use Yiisoft\FriendlyException\FriendlyExceptionInterface;

class RequestTimeoutException extends \RuntimeException implements FriendlyExceptionInterface
{
    public function getName(): string
    {
        return 'Request timed out.';
    }
    
    public function getSolution(): ?string
    {
        return <<<'SOLUTION'
            Likely it is a result of resource request is not responding in a timely fashion. Try increasing timeout.
            SOLUTION;
    }
}
```

When returning solution consider the following best practices:

1. Make solution description as short as possible.
2. Do not use HTML tags.
3. Use [simple markdown](https://commonmark.org/help/).

### Handling friendly exception

To make your exception handler render friendly exceptions:

```php
use Yiisoft\FriendlyException\FriendlyExceptionInterface;

class ThrowableHandler
{
    public function handle(\Throwable $t)
    {
        if ($t instanceof FriendlyExceptionInterface) {
            // additional handling
        }
        // regular handling
    }
}
```

Do not forget to [render markdown](https://github.com/commonmark/commonmark-spec/wiki/List-of-CommonMark-Implementations#php).

## Documentation

- [Internals](docs/internals.md)

If you need help or have a question, the [Yii Forum](https://forum.yiiframework.com/c/yii-3-0/63) is a good place for that.
You may also check out other [Yii Community Resources](https://www.yiiframework.com/community).

## License

The Yii Friendly Exception is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Software](https://www.yiiframework.com/).

## Support the project

[![Open Collective](https://img.shields.io/badge/Open%20Collective-sponsor-7eadf1?logo=open%20collective&logoColor=7eadf1&labelColor=555555)](https://opencollective.com/yiisoft)

## Follow updates

[![Official website](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Twitter](https://img.shields.io/badge/twitter-follow-1DA1F2?logo=twitter&logoColor=1DA1F2&labelColor=555555?style=flat)](https://twitter.com/yiiframework)
[![Telegram](https://img.shields.io/badge/telegram-join-1DA1F2?style=flat&logo=telegram)](https://t.me/yii3en)
[![Facebook](https://img.shields.io/badge/facebook-join-1DA1F2?style=flat&logo=facebook&logoColor=ffffff)](https://www.facebook.com/groups/yiitalk)
[![Slack](https://img.shields.io/badge/slack-join-1DA1F2?style=flat&logo=slack)](https://yiiframework.com/go/slack)
