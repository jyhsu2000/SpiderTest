<?php

namespace App\Http\Middleware;

use Closure;
use Menu;

class LaravelMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //左側
        Menu::make('left', function ($menu) {
            /* @var \Lavary\Menu\Builder $menu */
            $menu->add('首頁', ['route' => 'index']);
        });
        //右側
        Menu::make('right', function ($menu) {
            /* @var \Lavary\Menu\Builder $menu */
            $menu->add('SimpleLink', ['route' => 'test.simpleLink']);
        });

        return $next($request);
    }
}
