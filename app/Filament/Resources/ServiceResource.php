<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make()->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),

                Textarea::make('short_description')
                    ->maxLength(500)
                    ->nullable(),

                Textarea::make('description')
                    ->nullable(),

                TextInput::make('icon')
                    ->maxLength(255)
                    ->nullable(),

                TextInput::make('image')
                    ->url()
                    ->nullable(),

                TextInput::make('price')
                    ->numeric()
                    ->required(),

                TextInput::make('price_unit')
                    ->maxLength(50)
                    ->nullable(),

                Repeater::make('features')
                    ->schema([
                        TextInput::make('feature')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->columns(1)
                    ->nullable(),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),

                Toggle::make('is_featured')
                    ->label('Featured')
                    ->default(false),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

                TextInput::make('meta_title')
                    ->maxLength(255)
                    ->nullable(),

                Textarea::make('meta_description')
                    ->maxLength(500)
                    ->nullable(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('id')->sortable(),
            TextColumn::make('name')->searchable()->sortable(),
            TextColumn::make('price')
                ->money('usd', true)
                ->sortable(),
            IconColumn::make('is_active')->boolean()->label('Active'),
            IconColumn::make('is_featured')->boolean()->label('Featured'),
            TextColumn::make('sort_order')->sortable(),
            TextColumn::make('created_at')->dateTime('d M Y')->sortable(),
        ])->filters([
            Tables\Filters\Filter::make('active')->query(fn ($query) => $query->where('is_active', true)),
            Tables\Filters\Filter::make('featured')->query(fn ($query) => $query->where('is_featured', true)),
        ])->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])->bulkActions([
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
