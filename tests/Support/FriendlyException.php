<?php

declare(strict_types=1);

namespace Yiisoft\FriendlyException\Tests\Support;

use Exception;
use Yiisoft\FriendlyException\FriendlyExceptionInterface;

final class FriendlyException extends Exception implements FriendlyExceptionInterface
{
    private string $name;
    private ?string $solution;

    public function __construct(string $name = 'test', ?string $solution = null)
    {
        $this->name = $name;
        $this->solution = $solution;
        parent::__construct();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSolution(): ?string
    {
        return $this->solution;
    }
}
