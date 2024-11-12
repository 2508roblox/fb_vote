<?php

namespace App\Filament\Resources\VoteCodeResource\Pages;

use App\Filament\Resources\VoteCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoteCode extends EditRecord
{
    protected static string $resource = VoteCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
