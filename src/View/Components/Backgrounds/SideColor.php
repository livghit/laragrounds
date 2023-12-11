<?php

namespace Laragrounds\View\Components\Backgrounds;

use Illuminate\View\Component;
use Closure;
use Illuminate\Contracts\View\View as View;

class SideColor extends Component
{
    public function render(): Closure|View|string
    {
        return <<<'HTML'
                <div class="fixed left-0 top-0 -z-10 h-full w-full">
        <div class="relative h-full w-full bg-slate-900">
            <div class="absolute bottom-0 left-[-20%] right-0 top-[-10%] h-[500px] w-[500px] rounded-full bg-[radial-gradient(circle_farthest-side,rgba(255,0,182,.15),rgba(255,255,255,0))]"></div>
            <div class="absolute bottom-0 right-[-20%] top-[-10%] h-[500px] w-[500px] rounded-full bg-[radial-gradient(circle_farthest-side,rgba(255,0,182,.15),rgba(255,255,255,0))]"></div>
        </div>
    </div>

    HTML;
    }
}
