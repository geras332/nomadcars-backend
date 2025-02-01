<?php

namespace App\Filament\Resources\CarResource\RelationManagers;

use Exception;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;

class ContractRelationManager extends RelationManager
{
    protected static string $relationship = 'contract';

    protected static ?string $title = 'Связанный контракт';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vin_code')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    protected function canCreate(): bool
    {
        return false;
    }

    protected function canEdit(Model $record): bool
    {
        return false;
    }

    protected function canDelete(Model $record): bool
    {
        return false;
    }

    /**
     * @throws Exception
     */
    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('vin_code')
            ->columns([
                TextColumn::make('contract_number')
                    ->label('Номер конракта')
                    ->formatStateUsing(function ($state, $record) {
                        return $record->contract_number;
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('vin_code')
                    ->label('VIN'),
                Tables\Columns\TextColumn::make('car_name')
                    ->label('Название машины'),
                Tables\Columns\TextColumn::make('full_name')
                    ->label('ФИО')
                    ->searchable()
                    ->formatStateUsing(function ($state, $record) {
                        return $record->full_name;
                    }),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Номер клиента'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата создания')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Дата обновление')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                DateRangeFilter::make('created_at')
                    ->label('Дата создания'),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}
