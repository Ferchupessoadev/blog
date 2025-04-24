<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;

class LinkNavbar extends Component
{
    public string $url;
    public string $content;

    /**
     * Create a new component instance.
     */
    public function __construct(string $url, string $content)
    {
        $this->url = $url;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.link-navbar');
    }
}
