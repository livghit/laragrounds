<?php

namespace Laragrounds\View\Components\Backgrounds;

use Illuminate\View\Component;
use Closure;
use Illuminate\Contracts\View\View as View;

class GridBlackWhite extends Component
{
    public function __construct()
    {
    }
    public function render(): Closure|View|string
    {
        return <<<'HTML'
                <div class="bg-black h-full w-full absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:14px_24px]"></div><div class="absolute left-0 right-0 top-[-10%] h-full w-auto rounded-lg bg-[radial-gradient(circle_400px_at_50%_300px,#fbfbfb36,#000)]"></div>
    HTML;
    }
}
