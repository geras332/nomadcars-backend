<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use App\Models\Brand;
use Exception;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;

class BrandResource extends Resource
{
    protected static ?string $model = Brand::class;
    protected static ?string $modelLabel = 'Бренд';
    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';
    protected static ?string $navigationGroup = 'Бренды и объявления';
    protected static ?string $navigationLabel = 'Бренды';
    protected static ?int $navigationSort = 1;
    protected static ?string $slug = 'brands';
    protected static ?string $breadcrumb = 'Бренды';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Название')
                    ->placeholder('Название')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                FileUpload::make('thumbnail')
                    ->label('Логотип')
                    ->image()
                    ->disk('public')
                    ->directory('thumbnails/brands')
                    ->preserveFilenames()
                    ->required()
                    ->maxSize(10240)
                    ->columnSpanFull(),
            ]);
    }

    /**
     * @throws Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('thumbnail')
                    ->label('Изображение')
                    ->formatStateUsing(fn ($state) => $state ? "<img src='" . Storage::url($state) . "' alt='thumbnail' width='100'>" : null)
                    ->html(),
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
                Tables\Filters\Filter::make('name')
                    ->label('Название')
                    ->form([
                        Forms\Components\TextInput::make('name')
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        if (isset($data['name'])) {
                            return $query->where('name', 'like', "%{$data['name']}%");
                        }

                        return $query;
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if ($data['name']) {
                            $indicators['vin_code'] = 'Название ' . $data['name'];
                        }

                        return $indicators;
                    }),
                DateRangeFilter::make('created_at')
                    ->label('Дата создания'),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Нет записей для отображения');
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
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }
}
