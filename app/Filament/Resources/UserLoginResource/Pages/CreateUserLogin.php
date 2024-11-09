<?php

namespace App\Filament\Resources\UserLoginResource\Pages;

use App\Filament\Resources\UserLoginResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserLogin extends CreateRecord
{
    protected static string $resource = UserLoginResource::class;
}
