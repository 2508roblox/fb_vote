<?php

namespace App\Filament\Resources\BlogReviewResource\Pages;

use App\Filament\Resources\BlogReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogReview extends CreateRecord
{
    protected static string $resource = BlogReviewResource::class;
}
