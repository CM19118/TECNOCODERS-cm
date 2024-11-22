<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkResource\Pages;
use App\Filament\Resources\WorkResource\RelationManagers;
use App\Models\Work;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkResource extends Resource
{
    protected static ?string $model = Work::class;
    protected static ?string $navigationGroup = 'Gestión de Contenidos';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check'; // Lista de proyectos (outline)

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('company')
                ->required()
                ->label('Empresa'),
            Forms\Components\FileUpload::make('logo')
                ->image()
                ->required()
                ->label('Logo'),
            Forms\Components\TextInput::make('position')
                ->required()
                ->label('Puesto'),
            Forms\Components\DatePicker::make('start_date')
                ->required()
                ->label('Fecha de inicio'),
            Forms\Components\DatePicker::make('end_date')
                ->nullable()
                ->label('Fecha de término'),
            Forms\Components\Textarea::make('description')
                ->nullable()
                ->label('Descripción'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('company')->label('Empresa')->sortable()->searchable(),
            Tables\Columns\ImageColumn::make('logo')->label('Logo'),
            Tables\Columns\TextColumn::make('position')->label('Puesto'),
            Tables\Columns\TextColumn::make('start_date')->label('Inicio')->date(),
            Tables\Columns\TextColumn::make('end_date')->label('Término')->date(),
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWork::route('/create'),
            'edit' => Pages\EditWork::route('/{record}/edit'),
        ];
    }
}
