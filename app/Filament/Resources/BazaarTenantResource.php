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
use Filament\Forms\Components\Card;
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
                Card::make()->schema([
                    Forms\Components\TextInput::make('user_id'),
                    Forms\Components\TextInput::make('bazaar_id'),
                    Forms\Components\TextInput::make('activity'),
                    Forms\Components\TextArea::make('activity_detail'),
                    Forms\Components\FileUpload::make('mou')
                        ->acceptedFileTypes(['application/pdf'])
                        ->preserveFilenames()
                        ->maxSize(2048)
                        ->dehydrated(fn ($state) => filled($state)),
                    Forms\Components\FileUpload::make('payment_prove')
                        ->image()
                        ->preserveFilenames()
                        ->maxSize(2048)
                        ->dehydrated(fn ($state) => filled($state)),
                    Forms\Components\Select::make('status')
                        ->options([
                            "accepted" => "Accepted",
                            "pending" => "Pending",
                            "rejected" => "Rejected"
                        ])
                        ->default('pending'),
                ])
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
                    ->limit(10)
                    ->sortable(),
                Tables\Columns\TextColumn::make('mou')
                    ->limit(15),
                Tables\Columns\TextColumn::make('payment_prove')
                    ->limit(15),
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
