<?php

use App\Http\Controllers\ContactController;
use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Homepage
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home', [
        'posts'         => Post::latest('published_at')->take(3)->get(),
        'portfolios'    => Portfolio::orderBy('order')->take(6)->get(),
        'skills'        => Skill::orderBy('order')->get(),
        'clients'       => Client::orderBy('order')->get(),
        'projectsCount' => Project::count(),
        'clientsCount'  => Client::count(),
        'postsCount'    => Post::count(),
    ]);
})->name('home');

/*
|--------------------------------------------------------------------------
| Blog (Public)
|--------------------------------------------------------------------------
*/
Route::get('/blog', function () {
    $search = request('q');

    $query = Post::latest('published_at');
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
                ->orWhere('excerpt', 'like', "%{$search}%")
                ->orWhere('body', 'like', "%{$search}%");
        });
    }

    return view('pages.blog.index', [
        'posts'  => $query->get(),
        'search' => $search,
    ]);
})->name('blog.index');

Route::get('/blog/{post:slug}', function (Post $post) {
    return view('pages.blog.show', ['post' => $post]);
})->name('blog.show');

/*
|--------------------------------------------------------------------------
| Portfolio (Public)
|--------------------------------------------------------------------------
*/
Route::get('/portfolio', function () {
    $category = request('category');

    $query = Portfolio::orderBy('order');
    if ($category) {
        $query->where('category', $category);
    }

    return view('pages.portfolio.index', [
        'portfolios'     => $query->get(),
        'categories'     => Portfolio::select('category')->distinct()->pluck('category'),
        'activeCategory' => $category,
    ]);
})->name('portfolio.index');

Route::get('/portfolio/{portfolio:slug}', function (Portfolio $portfolio) {
    $related = Portfolio::where('id', '!=', $portfolio->id)
        ->where('category', $portfolio->category)
        ->orderBy('order')
        ->take(3)
        ->get();

    return view('pages.portfolio.show', [
        'portfolio' => $portfolio,
        'related'   => $related,
    ]);
})->name('portfolio.show');

/*
|--------------------------------------------------------------------------
| Project (Public)
|--------------------------------------------------------------------------
*/
Route::get('/project/{project:slug}', function (Project $project) {
    $otherProjects = Project::where('id', '!=', $project->id)
        ->orderBy('order')
        ->take(3)
        ->get();

    return view('pages.project.show', [
        'project'       => $project,
        'otherProjects' => $otherProjects,
    ]);
})->name('project.show');

/*
|--------------------------------------------------------------------------
| Contact Form
|--------------------------------------------------------------------------
*/
Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');

/*
|--------------------------------------------------------------------------
| Sitemap & RSS Feed
|--------------------------------------------------------------------------
*/
Route::get('/sitemap.xml', function () {
    $posts = Post::latest('published_at')->get();
    $portfolios = Portfolio::orderBy('order')->get();

    return response()
        ->view('sitemap', compact('posts', 'portfolios'))
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/feed.xml', function () {
    $posts = Post::latest('published_at')->take(20)->get();

    return response()
        ->view('feed', compact('posts'))
        ->header('Content-Type', 'application/rss+xml; charset=UTF-8');
})->name('feed');
/*
|--------------------------------------------------------------------------
| Anti Spam form contact
|--------------------------------------------------------------------------
*/
Route::post('/contact', [ContactController::class, 'send'])
    ->middleware('throttle:5,1')  // 5 request per menit
    ->name('contact.send');
