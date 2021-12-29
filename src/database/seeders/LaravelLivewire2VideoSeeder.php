<?php

namespace Database\Seeders;

use App\Models\Element;
use App\Models\ElementTemplate;
use GMJ\LaravelLivewire2Video\Models\Block;
use Illuminate\Database\Seeder;

class LaravelLivewire2VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = ElementTemplate::where("component", "LaravelLivewire2Video")->first();

        if ($template) {
            return false;
        }

        $template = ElementTemplate::create(
            [
                "title" => "Laravel Livewire2 Video",
                "component" => "LaravelLivewire2Video"
            ]
        );

        $element = Element::create([
            "template_id" => $template->id,
            "title" => "laravel-livewire2-video-sample",
            "is_active" => 1,
        ]);

        $collection = Block::init($element->id);
        $collection->save();
    }
}
