<?php

namespace GMJ\LaravelLivewire2Video\Http\Livewire;

use App\Models\Element;
use Livewire\Component;
use Alert;
use GMJ\LaravelLivewire2Video\Models\Block;

class Backend extends Component
{

    public $collection;
    public $element_id;
    public $element;
    public $mode;

    protected $listeners = ["save", "changeStyle"];

    public function mount($element_id)
    {
        $this->element_id = $element_id;
        $this->element = Element::findOrFail($this->element_id);
        if ($this->element->is_active) {
            $this->mode = "edit";
            $this->collection = Block::where("element_id", $element_id)->first();
        } else {
            $this->mode = "create";
            $this->collection = Block::init($element_id);
        }
    }

    public function save($content, $vertical_align, $content_column, $overlay_color)
    {
        if ($this->mode == "create") {
            $this->store($content, $vertical_align, $content_column, $overlay_color);
        } else {
            $this->update($content, $vertical_align, $content_column, $overlay_color);
        }
    }

    public function store($content, $vertical_align, $content_column, $overlay_color)
    {
        $collection = new Block();
        $collection->element_id = $this->element_id;
        $collection->content = $content;
        $collection->vertical_align = $vertical_align;
        $collection->content_column = $content_column;
        $collection->overlay_color = $overlay_color;
        $collection->save();

        $this->element->is_active = 1;
        $this->element->save();

        Alert::success("Add Video Success");
        return redirect()->route("admin.element.index");
    }

    public function update($content, $vertical_align, $content_column, $overlay_color)
    {
        $collection = Block::where("element_id", $this->element_id)->first();
        $collection->element_id = $this->element_id;
        $collection->content = $content;
        $collection->vertical_align = $vertical_align;
        $collection->content_column = $content_column;
        $collection->overlay_color = $overlay_color;
        $collection->save();

        Alert::success("Edit Video Success");
        return redirect()->route("admin.element.index");
    }

    public function render()
    {
        return view('LaravelLivewire2Video::livewire.backend');
    }
}
