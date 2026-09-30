<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class LatestPosts extends TableWidget
{
    protected static ?string $heading = 'Post Terbaru';
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(Post::latest('published_at')->limit(5))
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(50),

                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge(),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Publikasi')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->paginated(false);
    }
}
