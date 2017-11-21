<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Sylius\Bundle\FixturesBundle\Fixture;

use PhpSpec\ObjectBehavior;

final class FixtureNotFoundExceptionSpec extends ObjectBehavior
{
    function let(): void
    {
        $this->beConstructedWith('fixture_name');
    }

    function it_is_an_invalid_argument_exception()
    {
        $this->shouldHaveType(\InvalidArgumentException::class);
    }

    function it_has_preformatted_message()
    {
        $this->getMessage()->shouldReturn('Fixture with name "fixture_name" could not be found!');
    }
}
