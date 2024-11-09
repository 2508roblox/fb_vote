<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogReviewResource\Pages;
use App\Filament\Resources\BlogReviewResource\RelationManagers;
use App\Models\BlogReview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogReviewResource extends Resource
{
    protected static ?string $model = BlogReview::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationLabel = 'Đánh Giá ';
    protected static ?string $navigationGroup = 'Quản Lý Bài Viết'; // Nhóm điều hướng


    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make('Thông tin đánh giá') // Add a section title
                ->schema([
                    Forms\Components\Grid::make(2) // Specify 2 columns
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->label('Tên'), // Vietnamese for 'Name'
                            Forms\Components\TextInput::make('email')
                                ->required()
                                ->email()
                                ->label('Email'), // Vietnamese for 'Email'
                            Forms\Components\Textarea::make('comment')
                                ->required()
                                ->label('Nhận xét'), // Vietnamese for 'Comment'
                            Forms\Components\Toggle::make('approved')
                                ->label('Đã duyệt') // Vietnamese for 'Approved'
                                ->default(false),
                            Forms\Components\Select::make('blog_id')
                                ->relationship('blog', 'title') // Liên kết đến bảng blogs
                                ->required()
                                ->preload()
                                ->searchable()
                                ->label('Bài viết'), // Vietnamese for 'Blog'
                        ])
                        ->columnSpan([
                            'sm' => 2, // You can adjust the span for small screens if needed
                        ]),
        ])

    ]);

    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Tên'), // Vietnamese for 'Name'
            Tables\Columns\TextColumn::make('email')
                ->label('Email'), // Vietnamese for 'Email'
            Tables\Columns\TextColumn::make('comment')
                ->limit(50)
                ->label('Nhận xét'), // Vietnamese for 'Comment'
            Tables\Columns\BooleanColumn::make('approved')
                ->label('Đã duyệt'), // Vietnamese for 'Approved'
            Tables\Columns\TextColumn::make('blog.title') // Hiển thị tiêu đề bài viết
                ->label('Tiêu đề bài viết'), // Vietnamese for 'Blog Title'
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->label('Ngày tạo'), // Vietnamese for 'Created At'
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->label('Ngày cập nhật'), // Vietnamese for 'Updated At'
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
            'index' => Pages\ListBlogReviews::route('/'),
            'create' => Pages\CreateBlogReview::route('/create'),
            'edit' => Pages\EditBlogReview::route('/{record}/edit'),
        ];
    }
}
