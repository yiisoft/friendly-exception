<?php

declare(strict_types=1);

namespace Yiisoft\FriendlyException\Tests;

use PHPUnit\Framework\TestCase;
use Yiisoft\FriendlyException\Tests\Support\FriendlyException;

final class FriendlyExceptionTest extends TestCase
{
    public function testBase(): void
    {
        $exception = new FriendlyException('test-exception', 'test-solution');

        $this->assertSame('test-exception', $exception->getName());
        $this->assertSame('test-solution', $exception->getSolution());
    }
}
