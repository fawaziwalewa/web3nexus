<?php

namespace App\Filament\Pages;

use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use App\Models\SocialLink as SocialLinkModel;
use Filament\Forms\Concerns\InteractsWithForms;

class SocialLink extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $social_links = SocialLinkModel::get();

        if (!$social_links->isEmpty()) {
            foreach ($social_links as $social_link) {
                $this->data[$social_link->name.'_url'] = $social_link->page_handle;
                $this->data[$social_link->name.'_status'] = $social_link->status;
            }
            $this->form->fill($this->data);
        }
    }

    protected static ?string $navigationIcon = 'heroicon-o-at-symbol';

    protected static string $view = 'filament.pages.social-link';

    protected static ?string $navigationGroup = 'Content Manager';

    protected static ?int $navigationSort = 3;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Facebook')->schema([
                    TextInput::make('facebook_url')
                        ->placeholder('Enter the Facebook page URL.')
                        ->url()
                        ->suffixIcon('icon-facebook')
                        ->label('URL'),
                    Toggle::make('facebook_status')
                        ->onColor('success')
                        ->offColor('danger')
                        ->label('Status'),
                ]),

                Section::make('WhatsApp')->schema([
                    TextInput::make('whatsapp_url')
                        ->placeholder('Enter the WhatsApp page URL.')
                        ->url()
                        ->suffixIcon('icon-whatsapp')
                        ->label('URL'),
                    Toggle::make('whatsapp_status')
                        ->onColor('success')
                        ->offColor('danger')
                        ->label('Status'),
                ]),

                Section::make('Telegram')->schema([
                    TextInput::make('telegram_url')
                        ->placeholder('Enter the Telegram page URL.')
                        ->url()
                        ->suffixIcon('icon-telegram')
                        ->label('URL'),
                    Toggle::make('telegram_status')
                        ->onColor('success')
                        ->offColor('danger')
                        ->label('Status'),
                ]),

                Section::make('Youtube')->schema([
                    TextInput::make('youtube_url')
                        ->placeholder('Enter the Youtube page URL.')
                        ->url()
                        ->suffixIcon('icon-youtube')
                        ->label('URL'),
                    Toggle::make('youtube_status')
                        ->onColor('success')
                        ->offColor('danger')
                        ->label('Status'),
                ]),

                Section::make('Tiktok')->schema([
                    TextInput::make('tiktok_url')
                        ->placeholder('Enter the Tiktok page URL.')
                        ->url()
                        ->suffixIcon('icon-tiktok')
                        ->label('URL'),
                    Toggle::make('tiktok_status')
                        ->onColor('success')
                        ->offColor('danger'),
                ]),

                Section::make('Twitter')->schema([
                    TextInput::make('twitter_url')
                        ->placeholder('Enter the Twitter page URL.')
                        ->url()
                        ->suffixIcon('icon-twitter')
                        ->label('URL'),
                    Toggle::make('twitter_status')
                        ->onColor('success')
                        ->offColor('danger'),
                ]),

            ])
            ->statePath('data');
    }

    public function save()
    {
        $social_links = $this->form->getState();

        // Facebook
        SocialLinkModel::updateOrInsert(
            ['name' => 'facebook'],
            [
                'name' => 'facebook',
                'page_handle' => $social_links['facebook_url'],
                'status' => $social_links['facebook_status'] ? 1 : 0
            ]
        );

        // WhatsApp
        SocialLinkModel::updateOrInsert(
            ['name' => 'whatsapp'],
            [
                'name' => 'whatsapp',
                'page_handle' => $social_links['whatsapp_url'],
                'status' => $social_links['whatsapp_status'] ? 1 : 0
            ]
        );

        // Telegram
        SocialLinkModel::updateOrInsert(
            ['name' => 'telegram'],
            [
                'name' => 'telegram',
                'page_handle' => $social_links['telegram_url'],
                'status' => $social_links['telegram_status'] ? 1 : 0
            ]
        );

        // Youtube
        SocialLinkModel::updateOrInsert(
            ['name' => 'youtube'],
            [
                'name' => 'youtube',
                'page_handle' => $social_links['youtube_url'],
                'status' => $social_links['youtube_status'] ? 1 : 0
            ]
        );

        // Tiktok
        SocialLinkModel::updateOrInsert(
            ['name' => 'tiktok'],
            [
                'name' => 'tiktok',
                'page_handle' => $social_links['tiktok_url'],
                'status' => $social_links['tiktok_status'] ? 1 : 0
            ]
        );

        // Twitter
        SocialLinkModel::updateOrInsert(
            ['name' => 'twitter'],
            [
                'name' => 'twitter',
                'page_handle' => $social_links['twitter_url'],
                'status' => $social_links['twitter_status'] ? 1 : 0
            ]
        );

        Notification::make()
            ->title('Saved successfully.')
            ->success()
            ->send();
    }

    public function getFormActions(): array
    {
        return [
            Action::make('save')
                ->submit('save')
        ];
    }
}
