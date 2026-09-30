<?php

namespace App\Filament\Resources\Skills;

use App\Filament\Resources\Skills\Pages\CreateSkill;
use App\Filament\Resources\Skills\Pages\EditSkill;
use App\Filament\Resources\Skills\Pages\ListSkills;
use App\Filament\Resources\Skills\Schemas\SkillForm;
use App\Filament\Resources\Skills\Tables\SkillsTable;
use App\Models\Skill;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->required()
                ->maxLength(100),

            TextInput::make('level')
                ->numeric()
                ->minValue(0)
                ->maxValue(100)
                ->suffix('%')
                ->required(),

            Select::make('category')
                ->options([
                    'Frontend' => 'Frontend',
                    'Backend' => 'Backend',
                    'DevOps' => 'DevOps',
                    'Design' => 'Design',
                    'Database' => 'Database',
                    'Lainnya' => 'Lainnya',
                ])
                ->required(),

            TextInput::make('icon')
                ->label('Icon Class')
                ->placeholder('contoh: bx bxl-laravel')
                ->helperText('Gunakan class Boxicons'),

            TextInput::make('order')
                ->numeric()
                ->default(0),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSkills::route('/'),
            'create' => CreateSkill::route('/create'),
            'edit' => EditSkill::route('/{record}/edit'),
        ];
    }
}
