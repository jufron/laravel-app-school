<?php

namespace App\View\Components\small\corousel;

use App\Models\Banner;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Corousel extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.small.corousel.corousel', [
            'banner'    => Banner::query()->latest()->get()
        ]);
    }
}
