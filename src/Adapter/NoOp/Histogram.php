<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Metric\Adapter\NoOp;

use Hyperf\Metric\Contract\HistogramInterface;

class Histogram implements HistogramInterface
{
    public function with(string ...$labelValues): HistogramInterface
    {
        return $this;
    }

    public function put(float $sample): void
    {
    }
}
