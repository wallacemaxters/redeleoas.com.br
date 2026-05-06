<?php

namespace App\Filament\Resources\Assinantes\Pages;

use App\Filament\Resources\Assinantes\AssinanteResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAssinante extends ViewRecord
{
    protected static string $resource = AssinanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
