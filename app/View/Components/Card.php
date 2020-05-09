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
    public $classificationid;
    public $classifications;




    public function __construct($title, $author, $date, $body, $id, $classificationid, $classifications)
    {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->body = $body;
        $this->id = $id;
        $this->classificationid = $classificationid;
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
