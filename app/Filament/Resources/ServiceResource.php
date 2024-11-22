<?php

namespace App\Filament\Resources;

use AnourValar\EloquentSerialize\Service as EloquentSerializeService;
use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $navigationGroup = 'Gestión de Contenidos';
    protected static ?string $navigationIcon = 'heroicon-o-briefcase'; // Portafolio/Servicios (outline)

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('title')
            ->label('Título')
            ->required()
            ->maxLength(255),
        
        Textarea::make('description')
            ->label('Descripción')
            ->required(),
        
        FileUpload::make('icon')
            ->label('Ícono')
            ->image()
            ->directory('services/icons') // Opcional: ruta de almacenamiento personalizada
            ->required(),
        
        FileUpload::make('image')
            ->label('Imagen')
            ->image()
            ->directory('services/images'), // Opcional: ruta de almacenamiento personalizada
        
        TextInput::make('price')
            ->label('Precio')
            ->numeric()
            ->required()
            ->minValue(0) // Asegura que el precio no sea negativo
            ->placeholder('Ingrese el precio del servicio'),
        
        TextInput::make('duration')
            ->label('Duración')
            ->maxLength(255)
            ->placeholder('Ejemplo: 1 hora, 2 días') // Opcional: Ayuda para formato
            ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->label('Título')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('description')->label('Descripción')->limit(50),
            Tables\Columns\TextColumn::make('price')->label('Precio'),
            Tables\Columns\TextColumn::make('duration')->label('Duración'),
            Tables\Columns\ImageColumn::make('icon')->label('Icono'),
            Tables\Columns\ImageColumn::make('image')->label('Imagen'),
            Tables\Columns\TextColumn::make('created_at')->label('Creado')->dateTime(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
