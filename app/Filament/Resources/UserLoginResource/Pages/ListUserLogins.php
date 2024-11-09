<?php

namespace App\Filament\Resources\UserLoginResource\Pages;

use App\Filament\Resources\UserLoginResource;
use Filament\Actions;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Columns\Column;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListUserLogins extends ListRecords
{
    protected static string $resource = UserLoginResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExportAction::make()
            ->exports([
                ExcelExport::make()
                    ->fromTable()
                    ->withFilename(fn ($resource) => $resource::getModelLabel() . '-' . date('Y-m-d'))
                    ->withWriterType(\Maatwebsite\Excel\Excel::CSV)
                    ->withColumns([
                        Column::make('updated_at'),
                    ])
            ]),

        ];
    }
}
