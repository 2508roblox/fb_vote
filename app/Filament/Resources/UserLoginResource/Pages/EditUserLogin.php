<?php

namespace App\Filament\Resources\UserLoginResource\Pages;

use App\Filament\Resources\UserLoginResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserLogin extends EditRecord
{
    protected static string $resource = UserLoginResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
