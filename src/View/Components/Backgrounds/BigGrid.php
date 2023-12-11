<?php

namespace Laragrounds\View\Components\Backgrounds;

use Illuminate\View\Component;
use Closure;
use Illuminate\Contracts\View\View as View;

class BigGrid extends Component
{
    public function render(): Closure|View|string
    {
        return <<<'HTML'
                <div class="absolute inset-0 -z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:6rem_4rem]"></div>
    HTML;
    }
}
