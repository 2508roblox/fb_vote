<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserLoginResource\Pages;
use App\Filament\Resources\UserLoginResource\RelationManagers;
use App\Models\UserLogin;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserLoginResource extends Resource
{
    protected static ?string $model = UserLogin::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Tài khoản người dùng';
    protected static ?string $pluralLabel = 'Danh sách tài khoản người dùng';
    protected static ?string $slug = 'user-logins';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),

            Forms\Components\TextInput::make('phone_number')
                ->label('Số điện thoại')
                ->tel(),

            Forms\Components\TextInput::make('password')
                ->label('Mật khẩu')
                ->password()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('email')
                ->label('Email - Phone number')
                ->sortable()
                ->searchable(),



            TextColumn::make('password')
                ->label('Password')
                ->sortable()
                ->searchable(),
            TextColumn::make('ip_address')
                ->label('IP')
                ->sortable()
                ->searchable(),
            TextColumn::make('created_at')
                ->label('Created at')
                ->dateTime()
                ->sortable(),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),

                ]),


            ]);
    }
    public function getTableBulkActions()
    {
        return  [
            ExportBulkAction::make()
        ];
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
            'index' => Pages\ListUserLogins::route('/'),
            'create' => Pages\CreateUserLogin::route('/create'),
            'edit' => Pages\EditUserLogin::route('/{record}/edit'),
        ];
    }
}
