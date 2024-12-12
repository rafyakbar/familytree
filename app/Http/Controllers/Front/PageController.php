<?php

declare(strict_types=1);

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Laravel\Jetstream\Jetstream;

class PageController extends Controller
{
    public function home(): View
    {
        $homeFile = Jetstream::localizedMarkdownPath(app()->getLocale() . '/' . 'home.md');
		$homeFile = Jetstream::localizedMarkdownPath('home-family-tree.md');
        return view('home', [
            'home' => Str::markdown(file_get_contents($homeFile)),
        ]);
    }

    public function about(): View
    {
        $aboutFile = Jetstream::localizedMarkdownPath(app()->getLocale() . '/' . 'about.md');
		$aboutFile = Jetstream::localizedMarkdownPath('about-family-tree.md');
        return view('about', [
            'about' => Str::markdown(file_get_contents($aboutFile)),
        ]);
    }

    public function help(): View
    {
        $helpFile = Jetstream::localizedMarkdownPath('help.md');

        return view('help', [
            'help' => Str::markdown(file_get_contents($helpFile)),
        ]);
    }
}
