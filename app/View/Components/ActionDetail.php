<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActionDetail extends Component
{
    public $editUrl;
    public $deleteUrl;
    public $product;

    public function __construct($editUrl, $deleteUrl, $product)
    {
        $this->editUrl = $editUrl;
        $this->deleteUrl = $deleteUrl;
        $this->product = $product;
    }

    public function render()
    {
        return view('components.action-detail');
    }
}