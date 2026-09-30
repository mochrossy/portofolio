<?php

namespace App\Filament\Widgets;

use App\Models\Client;
use App\Models\Post;
use App\Models\Project;
use App\Models\Skill;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Post', Post::count())
                ->description('Semua post blog')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('primary'),

            Stat::make('Total Project', Project::count())
                ->description('Semua proyek portofolio')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('success'),

            Stat::make('Total Skill', Skill::count())
                ->description('Semua skill terdaftar')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('warning'),

            Stat::make('Total Client', Client::count())
                ->description('Semua klien')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('info'),
        ];
    }
}
