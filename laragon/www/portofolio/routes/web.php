<?php

use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Project;
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
        'skills'        => \App\Models\Skill::orderBy('order')->get(),
        'clients'       => \App\Models\Client::orderBy('order')->get(),
        'projectsCount' => Project::count(),
        'clientsCount'  => \App\Models\Client::count(),
        'postsCount'    => Post::count(),
    ]);
})->name('home');

/*
|--------------------------------------------------------------------------
| Blog (Public)
|--------------------------------------------------------------------------
*/
Route::get('/blog', function () {
    return view('pages.blog.index', [
        'posts' => Post::latest('published_at')->get(),
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
        'portfolios' => $query->get(),
        'categories' => Portfolio::select('category')->distinct()->pluck('category'),
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
        'related' => $related,
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
        'project' => $project,
        'otherProjects' => $otherProjects,
    ]);
})->name('project.show');
