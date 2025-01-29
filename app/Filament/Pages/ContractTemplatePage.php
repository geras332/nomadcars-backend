<?php

namespace App\Filament\Pages;

use App\Models\User;
use App\Services\Contract\ContractService;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ContractTemplatePage extends Page
{
    protected static ?string $title = 'Шаблоны';
    protected static ?string $navigationLabel = 'Шаблоны';
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationGroup = 'Менеджер контрактов';
    protected static ?int $navigationSort = 3;

    protected static string $view = 'filament.pages.contract-template-page';

    protected static ?string $slug = 'contract-templates';

    public array $individualTemplateVars = [];
    public array $legalEntityTemplateVars = [];

    const INDIVIDUAL_TAB = ContractService::INDIVIDUAL_TEMPLATE_NAME;
    const LEGAL_ENTITY_TAB = ContractService::LEGAL_ENTITY_TEMPLATE_NAME;

    public string $activeTab = self::INDIVIDUAL_TAB;
    public mixed $content;

    public function __construct()
    {
        $defaultContent = $this->getTabContent(self::INDIVIDUAL_TAB);
        if (!empty($defaultContent)) {
            $this->content = $defaultContent;
        }

        $this->individualTemplateVars = ContractService::getIndividualTemplateVars();
        $this->legalEntityTemplateVars = ContractService::getLegalEntityTemplateVars();
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            TiptapEditor::make('content')
                ->label('Шаблон контракта')
                ->tools([
                    'heading', 'bullet-list', 'ordered-list', 'checked-list', 'blockquote', 'hr',
                    'bold', 'italic', 'strike', 'underline', 'superscript', 'subscript', 'lead', 'small', 'align-left', 'align-center', 'align-right',
                    'link', 'table', 'grid-builder', 'details',
                ])
                ->extraInputAttributes(['style' => 'min-height: 500px;'])
                ->placeholder('Введите текст контракта...')
                ->output(TiptapOutput::Html)
                ->required()
        ]);
    }

    public static function canAccess(): bool
    {
        /** @var User $user */
        $user = request()->user();

        return $user->isSuperAdmin();
    }

    /**
     * @throws ValidationException
     */
    public function save(): RedirectResponse|Redirector
    {
        $this->validate([
            'content' => 'required',
        ]);

        $filename = 'contract_template_' . $this->activeTab . '.html';
        if (Storage::exists('templates/' . $filename)) {
            Storage::delete('templates/' . $filename);
        }

        Storage::put('templates/' . $filename, $this->getHtmlContent($this->content));

        Notification::make()
            ->title('Шаблон сохранен')
            ->body('Шаблон был успешно сохранен.')
            ->icon('heroicon-o-check-circle')
            ->iconColor('success')
            ->send();

        return redirect()->route('filament.admin.pages.contract-templates');
    }

    public function cancel(): void
    {
        $this->content = '';
    }

    public function setIndividualTab(): void
    {
        $this->activeTab = self::INDIVIDUAL_TAB;
        $this->content = $this->getTabContent(self::INDIVIDUAL_TAB);
    }

    public function setLegalEntityTab(): void
    {
        $this->activeTab = self::LEGAL_ENTITY_TAB;
        $this->content = $this->getTabContent(self::LEGAL_ENTITY_TAB);
    }

    private function getHtmlContent(mixed $content): string
    {
        if (is_array($content)) {
            return tiptap_converter()->asHTML($content);
        }

        return $content;
    }

    private function getTabContent(string $tab): string|null
    {
        return Storage::get('templates/contract_template_' . $tab . '.html');
    }
}
