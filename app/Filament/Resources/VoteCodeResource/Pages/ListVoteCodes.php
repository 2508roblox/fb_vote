<?php

namespace App\Filament\Resources\VoteCodeResource\Pages;

use App\Filament\Resources\VoteCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVoteCodes extends ListRecords
{
    protected static string $resource = VoteCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
