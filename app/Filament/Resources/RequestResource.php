<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequestResource\Pages;
use App\Filament\Resources\RequestResource\RelationManagers;
use App\Models\Request;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequestResource extends Resource
{
    protected static ?string $model = Request::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('transporters_name')
                    ->label("Transporter's Name")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('patient_name')
                    ->label("Patient Name")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('requesters_name')
                    ->label("Requester's Name")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('department')
                    ->label("Department")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('time_req_received')
                    ->label("Request Time Received")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('time_left')
                    ->label("Time Left")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('time_returned')
                    ->label("Time Returned")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('equipments')
                    ->label("Equipment Need")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('source')
                    ->label("Source")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('destination')
                    ->label("Destination")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextArea::make('remarks')
                    ->label("Remarks")
                    ->rows(10)
                    ->cols(20)
                    ->autosize()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No.'),
                Tables\Columns\TextColumn::make('transporters_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('patient_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('requesters_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('department')
                    ->searchable(),
                Tables\Columns\TextColumn::make('time_req_received')
                    ->searchable(),
                Tables\Columns\TextColumn::make('time_left')
                    ->searchable(),
                Tables\Columns\TextColumn::make('time_returned')
                    ->searchable(),
                Tables\Columns\TextColumn::make('equipments')
                    ->searchable(),
                Tables\Columns\TextColumn::make('source')
                    ->searchable(),
                Tables\Columns\TextColumn::make('destination')
                    ->searchable(),
                Tables\Columns\TextColumn::make('remarks')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListRequests::route('/'),
            'create' => Pages\CreateRequest::route('/create'),
            'edit' => Pages\EditRequest::route('/{record}/edit'),
        ];
    }
}
