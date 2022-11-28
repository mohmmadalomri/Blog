<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting = Setting::CheckSetting();
        $category=Category::all();
        $post=Post::all();
        $LastFivePost=Post::with('category','user')->orderBy('id')->limit(5)->get();

        view()->share([
            'setting' => $setting,
            'category'=>$category,
            'post'=>$post,
            'LastFivePost'=>$LastFivePost


        ]);

    }
}
