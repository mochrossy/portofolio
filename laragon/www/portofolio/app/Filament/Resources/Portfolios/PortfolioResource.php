<?php

namespace App\Filament\Resources\Portfolios;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use App\Filament\Resources\Portfolios\Pages\CreatePortfolio;
use App\Filament\Resources\Portfolios\Pages\EditPortfolio;
use App\Filament\Resources\Portfolios\Pages\ListPortfolios;
use App\Models\Portfolio;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Support\Icons\Heroicon;



class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Portfolio';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')
                ->label('Judul')
                ->required()
                ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(function ($state, $set) {
                    $set('slug', Str::slug($state));
                }),

            TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->maxLength(255)
                ->unique(Portfolio::class, 'slug', ignoreRecord: true)
                ->helperText('URL-friendly. Otomatis dari judul, bisa diedit manual.'),

            Textarea::make('description')
                ->label('Deskripsi')
                ->rows(3)
                ->columnSpanFull(),

            FileUpload::make('image')
                ->label('Gambar Portfolio')
                ->image()
                ->directory('portfolios')
                ->imagePreviewHeight('200')
                ->maxSize(2048)
                ->required()
                ->columnSpanFull(),

            Select::make('category')
                ->label('Kategori')
                ->options([
                    'Web' => 'Web',
                    'Mobile' => 'Mobile',
                    'Design' => 'Design',
                    'Branding' => 'Branding',
                    'Server' => 'Server',
                    'Lainnya' => 'Lainnya',
                ])
                ->default('Web')
                ->required(),

            TextInput::make('order')
                ->label('Urutan')
                ->numeric()
                ->default(0)
                ->helperText('Semakin kecil angkanya, semakin atas posisinya.'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->height(60),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->limit(40),

                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color('primary'),

                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order', 'asc')
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
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
            'index'  => ListPortfolios::route('/'),
            'create' => CreatePortfolio::route('/create'),
            'edit'   => EditPortfolio::route('/{record}/edit'),
        ];
    }
}
