# gmj-laravel_livewire2_video

Laravel Block for backend and frontend - need tailwindcss support / gsap js

**composer require gmj/laravel_livewire2_video**

in terminal run:

```
php artisan vendor:publish --provider="GMJ\LaravelLivewire2Video\LaravelLivewire2VideoServiceProvider" --force
php artisan migrate
php artisan db:seed --class=LaravelLivewire2VideoSeeder
```

package for test<br>
composer.json#autoload-dev#psr-4: "GMJ\\LaravelLivewire2Video\\": "package/laravel_livewire2_video/src/",<br>
config: GMJ\LaravelLivewire2Video\LaravelLivewire2VideoServiceProvider::class,
