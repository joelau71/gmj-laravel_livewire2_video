<?php

use GMJ\LaravelLivewire2Video\Http\Livewire\Backend;
use Illuminate\Support\Facades\Route;


Route::group([
    "middleware" => ["web", "auth"],
    "prefix" => "admin/element/{element_id}/gmj/laravel_livewire2_video",
    "as" => "LaravelLivewire2Video."
], function () {
    Route::get("", Backend::class)->name("index");
});
