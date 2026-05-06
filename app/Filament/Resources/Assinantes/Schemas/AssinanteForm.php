<?php

namespace App\Filament\Resources\Assinantes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AssinanteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nome')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('whatsapp'),
                TextInput::make('instagram'),
                Toggle::make('ativo')
                    ->required(),
            ]);
    }
}
