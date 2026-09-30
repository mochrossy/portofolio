<?php

namespace App\Filament\Resources\Portfolios;

use App\Filament\Resources\Portfolios\Pages\CreatePortfolio;
use App\Filament\Resources\Portfolios\Pages\EditPortfolio;
use App\Filament\Resources\Portfolios\Pages\ListPortfolios;
use App\Filament\Resources\Portfolios\Schemas\PortfolioForm;
use App\Filament\Resources\Portfolios\Tables\PortfoliosTable;
use App\Models\Portfolio;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn($state, Set $set) => $set('slug', Str::slug($state))),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            Textarea::make('description')
                ->rows(3)
                ->columnSpanFull(),

            FileUpload::make('image')
                ->image()
                ->directory('portfolios')
                ->required()
                ->columnSpanFull(),

            Select::make('category')
                ->options([
                    'Web' => 'Web',
                    'Mobile' => 'Mobile',
                    'Design' => 'Design',
                    'Branding' => 'Branding',
                    'Lainnya' => 'Lainnya',
                ])
                ->required(),

            TextInput::make('order')
                ->numeric()
                ->default(0),
        ]);
    }
    public static function table(Table $table): Table
    {
        return PortfoliosTable::configure($table);
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
            'index' => ListPortfolios::route('/'),
            'create' => CreatePortfolio::route('/create'),
            'edit' => EditPortfolio::route('/{record}/edit'),
        ];
    }
}
