<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\TwigComponent\Tests\Fixture\Component;

use Symfony\UX\TwigComponent\ComponentInterface;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class ComponentC implements ComponentInterface
{
    public $propA;
    public $propB;
    public $propC;

    public static function getComponentName(): string
    {
        return 'component_c';
    }

    public function mount($propA, $propB = null, $propC = 'default')
    {
        $this->propA = $propA;
        $this->propB = $propB;
        $this->propC = $propC;
    }
}
