<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('level')
                    ->required()
                    ->numeric()
                    ->default(50),
                TextInput::make('category')
                    ->required()
                    ->default('Umum'),
                TextInput::make('icon'),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
