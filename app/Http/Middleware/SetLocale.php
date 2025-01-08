<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Supported language array
     */
    protected array $supportedLanguages = ['en', 'ru', 'lv', 'de'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = Session::get('locale', config('app.locale'));

        if (in_array($locale, $this->supportedLanguages)) {
            App::setLocale($locale);
        } else {
            App::setLocale(config('app.locale'));
        }

        // Share the current locale with all Vue components
        Inertia::share([
            'locale' => App::getLocale(),
            'languages' => $this->supportedLanguages
        ]);

        return $next($request);
    }
}
