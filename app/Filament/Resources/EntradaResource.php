<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntradaResource\Pages;
use App\Filament\Resources\EntradaResource\RelationManagers;
use App\Models\Entrada;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EntradaResource extends Resource
{
    protected static ?string $model = Entrada::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-on-square-stack';
    protected static ?string $navigationLabel = 'Entrada de Material';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('codigo_nota_entrega')->searchable(),
                TextColumn::make('fecha')->date(),
                TextColumn::make('recibido_por'),
                TextColumn::make('proveedor.name'),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListEntradas::route('/'),
            'create' => Pages\CreateEntrada::route('/create'),
            'edit' => Pages\EditEntrada::route('/{record}/edit'),
        ];
    }
}
