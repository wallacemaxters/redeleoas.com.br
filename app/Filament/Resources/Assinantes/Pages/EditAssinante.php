<?php

namespace App\Filament\Resources\Assinantes\Pages;

use App\Filament\Resources\Assinantes\AssinanteResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAssinante extends EditRecord
{
    protected static string $resource = AssinanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
