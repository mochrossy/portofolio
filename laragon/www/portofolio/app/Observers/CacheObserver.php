<?php

namespace App\Observers;

use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\Cache;

class CacheObserver
{
    public function saved($model): void
    {
        $this->clearCache($model);
    }

    public function deleted($model): void
    {
        $this->clearCache($model);
    }

    protected function clearCache($model): void
    {
        $map = [
            Post::class      => ['home.posts', 'count.posts'],
            Portfolio::class => ['home.portfolios'],
            Skill::class     => ['home.skills'],
            Client::class    => ['home.clients', 'count.clients'],
            Project::class   => ['count.projects'],
        ];

        foreach ($map[$model::class] ?? [] as $key) {
            Cache::forget($key);
        }
    }
}
