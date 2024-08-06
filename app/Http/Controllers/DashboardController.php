<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view()
    {
        $products = [
            ['name' => 'MacBook Pro', 'price' => 98000, 'image' => 'https://media.cnn.com/api/v1/images/stellar/prod/211025072623-macbook-pro-14-display-5.jpg?q=x_0,y_0,h_2268,w_4030,c_fill'],
            ['name' => 'Iphone 15', 'price' => 60705, 'image' => 'https://media.wired.com/photos/6500ad57fe61eb702d721b58/master/pass/Apple-iPhone-15-Pro-Hero-Gear.jpg'],
            ['name' => 'Ipad Gen 10', 'price' => 23000, 'image' => 'https://www.apple.com/newsroom/images/product/ipad/standard/Apple-iPad-10th-gen-hero-221018_Full-Bleed-Image.jpg.large.jpg'],
            ['name' => 'Apple Watch Series 9', 'price' => 29000, 'image' => 'https://www.apple.com/v/apple-watch-series-9/c/images/meta/watch_series_9_gps_lte__eopecolsebyq_og.png'],
        ];

        return view('dashboard', compact('products'));
    }
}
