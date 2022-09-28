<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        $linksHeader = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FAN', 'NEW', 'SHOP'];
        $linksFooter = config('linksTopFooter');
        $dcComicsLinks = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'news'];
        $shopLinks = ['Shop DC', 'Shop DC Collectibles'];
        $dcLinks = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
        $siteLinks = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
        $icons = ['/images/footer-facebook.png', '/images/footer-periscope.png', '/images/footer-pinterest.png', '/images/footer-twitter.png', '/images/footer-youtube.png'];

        View::share('key', [
            'linksHeader' => $linksHeader,
            'linksFooter' => $linksFooter,
            'dcComicsLinks' => $dcComicsLinks,
            'shopLinks' => $shopLinks,
            'dcLinks' => $dcLinks,
            'siteLinks' => $siteLinks,
            'icons' => $icons
        ]);
    }
}
