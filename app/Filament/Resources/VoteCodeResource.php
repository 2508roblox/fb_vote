<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VoteCodeResource\Pages;
use App\Filament\Resources\VoteCodeResource\RelationManagers;
use App\Models\VoteCode;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VoteCodeResource extends Resource
{
    protected static ?string $model = VoteCode::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Mã bình chọn';
    protected static ?string $pluralLabel = 'Danh sách Mã bình chọn';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('code')
                ->label('Vote Code')
                ->required()
                ->unique()
                ->maxLength(255),

            Toggle::make('is_used')
                ->label('Is Used')
                ->default(false),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->defaultSort('id', 'desc') // Sort by 'id' in descending order

        ->columns([
            TextColumn::make('code')
                ->label('Mã code')
                ->sortable()
                ->searchable(),
            TextColumn::make('created_at')
                ->label('Thời gian nhập mã')
                ->sortable()
                ->searchable(),


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
            'index' => Pages\ListVoteCodes::route('/'),
            'create' => Pages\CreateVoteCode::route('/create'),
            'edit' => Pages\EditVoteCode::route('/{record}/edit'),
        ];
    }
}
