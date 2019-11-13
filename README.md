<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Friendly Exception</h1>
    <br>
</p>

The package provides an interface that could be implemented by an exception to provide a friendly name and a solution
for fixing it. Error handlers may consider the interface to render additional information right at the error screen.

[![Latest Stable Version](https://poser.pugx.org/yiisoft/friendly-exception/v/stable.png)](https://packagist.org/packages/yiisoft/friendly-exception)
[![Total Downloads](https://poser.pugx.org/yiisoft/friendly-exception/downloads.png)](https://packagist.org/packages/yiisoft/friendly-exception)

## Implementing friendly exception

In order to make exception friendly require this package and implement `FriendlyExceptionInterface` in your exception:

```php
use Yiisoft\FriendlyException\FriendlyExceptionInterface;

class RequestTimeoutException extends \RuntimeException implements FriendlyExceptionInterface
{
    public function getName(): string
    {
        return "Request timed out";
    }
    
    public function getSolution(): ?string
    {
        return <<<'SOLUTION'
Likely it is a result of resource request is not responding in a timely fashion. Try increasing timeout.
SOLUTION;
    }
}
```

When returning solution consider the following best pracices:

1. Make solution description as short as possible.
2. Do not use HTML tags.

## Handling friendly exception

In case you want your exception handler to render friendly exceptions you can do it like the following:

```php
use Yiisoft\FriendlyException\FriendlyExceptionInterface;

class ThrowableHandler
{
    public function handle(\Throwable $t)
    {
        if ($t instnaceof FriendlyExceptionInterface) {
            // additional handling
        }
        // regular handling
    }
}
```
