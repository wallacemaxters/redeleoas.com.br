<?php

namespace App\Filament\Resources\Assinantes\Pages;

use App\Filament\Resources\Assinantes\AssinanteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAssinantes extends ListRecords
{
    protected static string $resource = AssinanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
