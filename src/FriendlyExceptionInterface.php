<?php

declare(strict_types=1);

namespace Yiisoft\FriendlyException;

/**
 * Provides a friendly name and a possible solution for an exception.
 * Error handlers may consider the interface to render additional information right at the error screen.
 */
interface FriendlyExceptionInterface
{
    /**
     * @return string Human understandable exception name.
     */
    public function getName(): string;

    /**
     * @return string|null Suggestion on how to fix an exception.
     * Make it as short as possible. Do not use HTML tags.
     * Simple markdown is OK but its support is up to implementation.
     */
    public function getSolution(): ?string;
}
