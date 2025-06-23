<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('position')
                        ->required()
                        ->maxLength(255),

                    Textarea::make('bio')
                        ->rows(3)
                        ->maxLength(1024)
                        ->nullable(),

                    FileUpload::make('image')
                        ->image()
                        ->nullable(),

                    TextInput::make('email')
                        ->email()
                        ->nullable(),

                    TextInput::make('phone')
                        ->tel()
                        ->nullable(),

                    Repeater::make('social_links')
                        ->label('Social Links')
                        ->schema([
                            TextInput::make('platform')
                                ->required()
                                ->maxLength(50),
                            TextInput::make('url')
                                ->url()
                                ->required()
                                ->maxLength(255),
                        ])
                        ->nullable(),

                    Toggle::make('is_active')
                        ->default(true),

                    TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),

                    DatePicker::make('joined_at')
                        ->nullable(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('position')->sortable(),
                ImageColumn::make('image')->square(),
                BooleanColumn::make('is_active'),
                TextColumn::make('joined_at')->date('d M Y'),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
