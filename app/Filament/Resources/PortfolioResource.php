<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationGroup = 'Gestión de Contenidos';
    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->label('Título'),
            Forms\Components\Textarea::make('description')
                ->required()
                ->label('Descripción'),
            Forms\Components\FileUpload::make('image')
                ->image()
                ->required()
                ->label('Imagen'),
            Forms\Components\TextInput::make('link')
                ->url()
                ->nullable()
                ->label('Enlace'),
            Forms\Components\TextInput::make('category')
                ->nullable()
                ->label('Categoría'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->label('Título')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('description')->label('Descripción')->limit(50),
            Tables\Columns\ImageColumn::make('image')->label('Imagen'),
            Tables\Columns\TextColumn::make('category')->label('Categoría')->sortable(),
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
