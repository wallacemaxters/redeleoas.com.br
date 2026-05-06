<?php

namespace App\Filament\Resources\Assinantes;

use App\Filament\Resources\Assinantes\Pages\CreateAssinante;
use App\Filament\Resources\Assinantes\Pages\EditAssinante;
use App\Filament\Resources\Assinantes\Pages\ListAssinantes;
use App\Filament\Resources\Assinantes\Pages\ViewAssinante;
use App\Filament\Resources\Assinantes\Schemas\AssinanteForm;
use App\Filament\Resources\Assinantes\Schemas\AssinanteInfolist;
use App\Filament\Resources\Assinantes\Tables\AssinantesTable;
use App\Models\Assinante;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AssinanteResource extends Resource
{
    protected static ?string $model = Assinante::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nome';

    public static function form(Schema $schema): Schema
    {
        return AssinanteForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AssinanteInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AssinantesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAssinantes::route('/'),
            'create' => CreateAssinante::route('/create'),
            'view' => ViewAssinante::route('/{record}'),
            'edit' => EditAssinante::route('/{record}/edit'),
        ];
    }
}
