<?php

namespace Rector\Tests\DeadCode\Rector\MethodCall\RemoveDefaultArgumentValueRector\Fixture;

final class SkipStaticMethodCall
{
    public function __invoke(callable $callback): void
    {
        \Closure::bind($callback, $this, self::class)($this);
    }
}
