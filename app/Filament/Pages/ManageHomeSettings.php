<?php

namespace App\Filament\Pages;

use App\Settings\HomeSettings;
use BackedEnum;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageHomeSettings extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = HomeSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}
