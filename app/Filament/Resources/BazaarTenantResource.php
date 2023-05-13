<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BazaarTenantResource\Pages;
use App\Filament\Resources\BazaarTenantResource\RelationManagers;
use App\Models\BazaarTenant;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BazaarTenantResource extends Resource
{
    protected static ?string $model = BazaarTenant::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id'),
                Forms\Components\TextInput::make('bazaar_id'),
                Forms\Components\TextInput::make('activity'),
                Forms\Components\TextArea::make('activity_detail'),
                Forms\Components\TextInput::make('mou'),
                Forms\Components\TextInput::make('payment_prove'),
                Forms\Components\Select::make('status')
                    ->options([
                        "accepted",
                        "pending",
                        "rejected"
                    ]),
            ]);
    }

    // user id
    // bazaar_id
    // activity
    // activity_ detail
    // mou
    // payment_prove
    // status
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('bazaar_id'),
                Tables\Columns\TextColumn::make('activity'),
                Tables\Columns\TextColumn::make('activity_detail')
                    ->sortable(),
                Tables\Columns\TextColumn::make('mou'),
                Tables\Columns\TextColumn::make('payment_prove'),
                Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListBazaarTenants::route('/'),
            'create' => Pages\CreateBazaarTenant::route('/create'),
            'edit' => Pages\EditBazaarTenant::route('/{record}/edit'),
        ];
    }    
}
