<?php

namespace GMJ\LaravelLivewire2Video\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Block extends Model
{
    use HasTranslations;

    protected $guarded = [];
    public $translatable = ['content'];
    protected $table = "laravel_livewire2_videos";

    static public function init($element_id)
    {
        foreach (config('translatable.locales') as $locale) {
            $content[$locale] = self::sample();
        }

        $collection = new Block();
        $collection->element_id = $element_id;
        $collection->content = $content;
        $collection->vertical_align = "top-1/2 -translate-y-1/2";
        $collection->content_column = "lg:w-1/2";
        $collection->overlay_color = "rgba(0, 0, 0, 0.2)";
        return $collection;
    }

    static public function sample()
    {
        return <<<HTML
        <div class="laravel-livewire2-video">
            <iframe class="absolute top-0 left-0 w-screen h-screen" src="https://www.youtube.com/embed/emH2vuciNYI?autoplay=1&mute=1&controls=0"></iframe>
        </div>
        
        <div class="absolute left-0 top-0 w-full h-full pointer-events-none overlay_color" style="background-color: rgba(0,0,0,0.2);"></div>

        <div class="content-text absolute w-full transform top-1/2 -translate-y-1/2">
            <div class="text-white container mx-auto">
                <div class="px-8 flex flex-col lg:w-1/2 content-text-horizontal">
                    <div class="main-element-title">Title</div>
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet totam itaque numquam! Sapiente necessitatibus illo magnam! Quas architecto maxime velit natus corrupti minima debitis quaerat! Tempora voluptas accusamus quasi culpa cupiditate aliquam repellendus ex quibusdam veniam, sequi natus odit magnam!
                    </div>
                    <div class="mt-2">
                        <a href="#" class="main-btn-bg-color main-btn-text-color rounded-md px-6 py-2 inline-block">More</a>
                    </div>
                </div>
            </div>
        </div>
HTML;
    }
}
