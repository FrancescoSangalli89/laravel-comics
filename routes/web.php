<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {

    // $linksHeader = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FAN', 'NEW', 'SHOP'];
    // $linksFooter = config('linksTopFooter');
    // $dcComicsLinks = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'news'];
    // $shopLinks = ['Shop DC', 'Shop DC Collectibles'];
    // $dcLinks = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
    // $siteLinks = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
    // $icons = ['/images/footer-facebook.png', '/images/footer-periscope.png', '/images/footer-pinterest.png', '/images/footer-twitter.png', '/images/footer-youtube.png'];
    
    
    $comics = config('comics');

    return view('comics', [
        // 'linksHeader' => $linksHeader,
        // 'linksFooter' => $linksFooter,
        // 'dcComicsLinks' => $dcComicsLinks,
        // 'shopLinks' => $shopLinks,
        // 'dcLinks' => $dcLinks,
        // 'siteLinks' => $siteLinks,
        // 'icons' => $icons,
        'comics' => $comics
    ]);
})->name('comics');


Route::get('/homepage', function () {

    // $linksHeader = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FAN', 'NEW', 'SHOP'];
    // $linksFooter = config('linksTopFooter');
    // $dcComicsLinks = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'news'];
    // $shopLinks = ['Shop DC', 'Shop DC Collectibles'];
    // $dcLinks = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
    // $siteLinks = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
    // $icons = ['/images/footer-facebook.png', '/images/footer-periscope.png', '/images/footer-pinterest.png', '/images/footer-twitter.png', '/images/footer-youtube.png'];

    return view('homepage', [
        // 'linksHeader' => $linksHeader,
        // 'linksFooter' => $linksFooter,
        // 'dcComicsLinks' => $dcComicsLinks,
        // 'shopLinks' => $shopLinks,
        // 'dcLinks' => $dcLinks,
        // 'siteLinks' => $siteLinks,
        // 'icons' => $icons,
    ]);
})->name('homepage');

