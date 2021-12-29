<?php

namespace GMJ\LaravelLivewire2Video\View\Components;

use GMJ\LaravelLivewire2Video\Models\Block;
use Illuminate\View\Component;

class Frontend extends Component
{

    public $collection;
    public $element_id;
    public $page_element_id;

    public function __construct($pageElementId, $elementId)
    {
        $this->page_element_id = $pageElementId;
        $this->element_id = $elementId;
        $this->collection = Block::where("element_id", $elementId)->first();
    }

    public function render()
    {
        return view('LaravelLivewire2Video::component.frontend');
    }
}
