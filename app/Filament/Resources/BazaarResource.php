<?php

namespace App\Filament\Resources;

use Closure;
use Carbon\Carbon;
use App\Filament\Resources\BazaarResource\Pages;
use App\Filament\Resources\BazaarResource\RelationManagers;
use App\Models\Bazaar;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BazaarResource extends Resource
{
    protected static ?string $model = Bazaar::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price_estimation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make("starts_from")
                    ->minDate(now())
                    ->reactive()
                    ->closeOnDateSelection()
                    ->required(),
                Forms\Components\DatePicker::make("ends_at")
                    ->minDate(function (Closure $get) {
                        $startDate = $get('starts_from');
                        if ($startDate != null) {
                            return Carbon::parse($startDate)->subDays(0);
                        }
                        return null;
                    })
                    ->closeOnDateSelection()
                    ->required(),
                Forms\Components\FileUpload::make('syarat_ketentuan')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(2048)
                    ->dehydrated(fn ($state) => filled($state))
                    ->preserveFilenames(),
                    // ->disabled(),
                Forms\Components\TextInput::make('slot')
                    ->numeric()
                    ->minValue(1)
                    ->required(),
                Forms\Components\FileUpload::make('logo')
                    ->image()
                    ->dehydrated(fn ($state) => filled($state))
                    ->maxSize(2048),
                ])
            ]);
    }

// bazaar_id
// name
// description
// location
// price_estimation
// starts_from
// ends_at
// syarat_dan_ketentuan
// slot
// logo
// user_ id

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->limit(25)
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->sortable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('price_estimation')
                    ->sortable(),
                Tables\Columns\TextColumn::make('starts_from'),
                Tables\Columns\TextColumn::make('ends_at'),
                Tables\Columns\TextColumn::make('slot'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBazaars::route('/'),
            'create' => Pages\CreateBazaar::route('/create'),
            'edit' => Pages\EditBazaar::route('/{record}/edit'),
        ];
    }    
}
