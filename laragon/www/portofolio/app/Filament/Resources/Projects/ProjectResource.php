<?php

namespace App\Filament\Resources\Projects;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Set;  // atau Filament\Forms\Set untuk versi lama
use Illuminate\Support\Str;
use App\Filament\Resources\Projects\Pages\CreateProject;
use App\Filament\Resources\Projects\Pages\EditProject;
use App\Filament\Resources\Projects\Pages\ListProjects;
use App\Filament\Resources\Projects\Schemas\ProjectForm;
use App\Filament\Resources\Projects\Tables\ProjectsTable;
use App\Models\Project;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')
                ->required()
                ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(fn($state, Set $set) => $set('slug', Str::slug($state))),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            Textarea::make('description')
                ->required()
                ->rows(4)
                ->columnSpanFull(),

            FileUpload::make('image')
                ->image()
                ->directory('projects')
                ->columnSpanFull(),

            TagsInput::make('tech_stack')
                ->label('Tech Stack')
                ->placeholder('Tambah teknologi...')
                ->columnSpanFull(),

            TextInput::make('project_url')
                ->url()
                ->label('URL Project'),

            TextInput::make('github_url')
                ->url()
                ->label('URL GitHub'),

            Toggle::make('is_featured')
                ->label('Tampilkan sebagai Featured'),

            TextInput::make('order')
                ->numeric()
                ->default(0),
        ]);
    }
}
