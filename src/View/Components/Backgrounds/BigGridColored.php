<?php

namespace Laragrounds\View\Components\Backgrounds;

use Illuminate\View\Component;
use Closure;
use Illuminate\Contracts\View\View as View;

class BigGridColored extends Component
{
    public function __construct(
        public ?string $color = "#d5c5ff,",
    ) {
    }
    public function render(): Closure|View|string
    {
        return <<<'HTML'
                <div class="absolute inset-0 -z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:6rem_4rem]"><div class="absolute bottom-0 left-0 right-0 top-0 bg-[radial-gradient(circle_800px_at_100%_200px,{{$color}},transparent)]"></div></div>
    HTML;
    }
}
