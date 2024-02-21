<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KhairatResource\Pages;
use App\Filament\Resources\KhairatResource\RelationManagers;
use App\Models\Khairat;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Closure;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

class KhairatResource extends Resource
{
    protected static ?string $model = Khairat::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $modelLabel = 'Khairat';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('Masjid')->options([
                    'Masjid Kulim Hi Tech' => 'Masjid Kulim Hi Tech',
                    'Masjid Baru' => 'Masjid Baru',
                    'Masjid Pekan' => 'Masjid Pekan',
                ]),
                TextInput::make('Bayar Khairat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Masjid'),
                TextColumn::make('Bayar Khairat'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListKhairats::route('/'),
            'create' => Pages\CreateKhairat::route('/create'),
            'edit' => Pages\EditKhairat::route('/{record}/edit'),
        ];
    }    
}
