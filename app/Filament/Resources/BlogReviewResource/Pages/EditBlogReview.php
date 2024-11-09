<?php

namespace App\Filament\Resources\BlogReviewResource\Pages;

use App\Filament\Resources\BlogReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogReview extends EditRecord
{
    protected static string $resource = BlogReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
