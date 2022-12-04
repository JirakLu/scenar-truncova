<?php

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{

    public function __construct(
        public string $title = "Scénář"
    )
    {
    }

    public function render(): View
    {
        return view('components.layout.layout');
    }
}
