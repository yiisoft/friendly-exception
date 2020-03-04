<?php

declare(strict_types=1);

namespace Yiisoft\FriendlyException;

/**
 * FriendlyExceptionInterface could be implemented by an exception to provide a friendly name and a solution for
 * fixing it. Error handlers may consider the interface to render additional information right at the error screen.
 */
interface FriendlyExceptionInterface
{
    public function getName(): string;
    public function getSolution(): ?string;
}
