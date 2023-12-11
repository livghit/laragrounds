<?php

namespace Laragrounds\View\Components\Backgrounds;

use Illuminate\View\Component;
use Closure;
use Illuminate\Contracts\View\View as View;

class HalfGrid extends Component
{
    public function render(): Closure|View|string
    {
        return <<<'HTML'
                    <div class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div>
    HTML;
    }
}
