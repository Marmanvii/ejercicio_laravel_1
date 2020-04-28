<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $author;
    public $date;
    public $body;
    public $id;
    public $classification_id;
    public $classifications;

    public function __construct($title, $author,$date, $body, $id, $classification_id, $classifications)
    {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->body = $body;
        $this->id = $id;
        $this->classification_id = $classification_id;
        $this->classifications = $classifications;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
