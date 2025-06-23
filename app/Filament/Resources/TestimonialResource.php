<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('position')
                        ->nullable()
                        ->maxLength(255),

                    TextInput::make('company')
                        ->nullable()
                        ->maxLength(255),

                    Textarea::make('content')
                        ->required()
                        ->rows(4)
                        ->maxLength(2000),

                    TextInput::make('rating')
                        ->required()
                        ->numeric()
                        ->min(1)
                        ->max(5),

                    FileUpload::make('image')
                        ->image()
                        ->nullable(),

                    Toggle::make('is_active')
                        ->default(true),

                    Toggle::make('is_featured')
                        ->default(false),

                    TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('position')->sortable(),
                TextColumn::make('company')->sortable(),
                TextColumn::make('rating')->sortable(),
                BooleanColumn::make('is_active'),
                BooleanColumn::make('is_featured'),
                ImageColumn::make('image')->square(),
                TextColumn::make('sort_order')->sortable(),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
