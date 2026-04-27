<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $editUrl;
    public string $deleteUrl;
    public $product;

    public function __construct(string $editUrl, string $deleteUrl, $product)
    {
        $this->editUrl = $editUrl;
        $this->deleteUrl = $deleteUrl;
        $this->product = $product;
    }

    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}