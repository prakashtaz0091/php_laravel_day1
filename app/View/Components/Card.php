<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{

    public $title;
    public $description;
    public $link;
    public $image_url;
    public $name;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $link,  $imageurl, $name)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->image_url = $imageurl;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
