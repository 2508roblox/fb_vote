<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Filament\Resources\ScheduleResource\RelationManagers;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;
    protected static ?string $navigationLabel = 'Quản Lý Liên Hệ';
    protected static ?string $label = 'Liên Hệ';
    protected static ?string $pluralLabel = 'Các Liên Hệ';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Section 1: Form Fields
            Forms\Components\Section::make('Thông tin liên hệ')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Họ và Tên')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('Nhập họ và tên'),

                    Forms\Components\TextInput::make('phone')
                        ->label('Số Điện Thoại')
                        ->required()
                        ->maxLength(20)
                        ->placeholder('Nhập số điện thoại'),

                    Forms\Components\TextInput::make('email')
                        ->label('Email')
                        ->required()
                        ->email()
                        ->maxLength(255)
                        ->placeholder('Nhập email'),

                    Forms\Components\Textarea::make('content')
                        ->label('Nội Dung')
                        ->required()
                        ->maxLength(1000)
                        ->placeholder('Nhập nội dung liên hệ'),
                ])
                ->columns(2) // Layout two columns
                ->columnSpan(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Họ và Tên')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('phone')
                ->label('Số Điện Thoại')
                ->searchable(),
            Tables\Columns\TextColumn::make('email')
                ->label('Email')
                ->searchable(),
            Tables\Columns\TextColumn::make('content')
                ->label('Nội Dung')
                ->limit(50),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Ngày Tạo')
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}
