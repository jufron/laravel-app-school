<?php

namespace App\View\Components\small;

use App\Models\SocialMedia;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $socialMedia = SocialMedia::query()->with('platfrom')->get();
        return view('components.small.footer', compact('socialMedia'));
    }
}
