<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->maxLength(255),
                Forms\Components\TextInput::make('bank_number')
                    ->maxLength(255),
                Forms\Components\TextInput::make('bank_type_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    // ->disabled(fn (string $context): bool => $context === 'edit')
                    ->afterStateHydrated(fn ($state) => Hash::make($state))
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $context): bool => $context === 'create'),
                Forms\Components\TextInput::make('profile_picture')
                    ->maxLength(255),
                Forms\Components\Select::make('role')
                    ->options([
                        "Host" => "Host",
                        "Tenant" => "Tenant",
                        "Admin" => "Admin"
                    ]),
                Forms\Components\Select::make('status')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Banned',
                    ])
                ]) 
// name
// email
// phone_number
// bank_number
// bank_type_ id
// password
// profile_picture
// role
// status
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('phone_number')->searchable(),
                Tables\Columns\TextColumn::make('role')->searchable(),
                Tables\Columns\TextColumn::make('status')->enum([
                    '1' => 'Active',
                    '0' => 'Banned',
                ])->searchable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
}
