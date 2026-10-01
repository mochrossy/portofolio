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
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TagsInput;
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
                ->label('Nama Project')
                ->required()
                ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state))),

            TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->maxLength(255)
                ->unique(Portfolio::class, 'slug', ignoreRecord: true)
                ->helperText('URL-friendly. Otomatis dari judul.'),

            TextInput::make('duration')
                ->label('Durasi')
                ->placeholder('contoh: 3 bulan')
                ->maxLength(100),

            TextInput::make('client_name')
                ->label('Nama Klien')
                ->maxLength(150),

            DatePicker::make('completed_at')
                ->label('Tanggal Selesai')
                ->displayFormat('d M Y'),

            Select::make('category')
                ->label('Kategori')
                ->options([
                    'Web' => 'Web',
                    'Mobile' => 'Mobile',
                    'Design' => 'Design',
                    'Branding' => 'Branding',
                    'Infrastruktur' => 'Infrastruktur',
                    'Lainnya' => 'Lainnya',
                ])
                ->default('Web')
                ->required(),

            FileUpload::make('image')
                ->label('Gambar Portfolio')
                ->image()
                ->directory('portfolios')
                ->imagePreviewHeight('200')
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('16:9')
                ->imageResizeTargetWidth('1200')
                ->imageResizeTargetHeight('675')
                ->maxSize(2048)
                ->required()
                ->columnSpanFull(),

            Textarea::make('description')
                ->label('Deskripsi Project')
                ->rows(4)
                ->required()
                ->columnSpanFull(),

            Textarea::make('result')
                ->label('Hasil / Dampak')
                ->rows(4)
                ->helperText('Apa hasil nyata dari project ini? Misal: "Mengurangi waktu proses 60%"')
                ->columnSpanFull(),

            TagsInput::make('tech_stack')
                ->label('Tech Stack')
                ->placeholder('Tambah teknologi...')
                ->helperText('Tekan Enter untuk menambah. Contoh: Laravel, MySQL, Docker')
                ->columnSpanFull(),

            TextInput::make('order')
                ->label('Urutan')
                ->numeric()
                ->default(0),
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
                    ->label('Project')
                    ->searchable()
                    ->sortable()
                    ->limit(40),

                Tables\Columns\TextColumn::make('client_name')
                    ->label('Klien')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color('primary'),

                Tables\Columns\TextColumn::make('duration')
                    ->label('Durasi')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('completed_at')
                    ->label('Selesai')
                    ->date('d M Y')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index'  => ListPortfolios::route('/'),
            'create' => CreatePortfolio::route('/create'),
            'edit'   => EditPortfolio::route('/{record}/edit'),
        ];
    }
}
