<?php

use Spatie\LaravelSettings\Migrations\SettingsBlueprint;
use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->inGroup('home_settings', function (SettingsBlueprint $blueprint) {
            $blueprint->add('title', 'Rede Leoas');
            $blueprint->add('description');
        });
    }
};
