<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\FAQ;
use App\Models\Portfolio;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = -4;


    protected function getStats(): array
    {
        return [
            Stat::make('Portfolios', count(Portfolio::get()))
                ->description('Total Items')
                ->color('success')
                ->chart([7, 30, 10, 3, 15, 4, 17]),
            Stat::make('Contacts', count(Contact::get()))
                ->description('Total Items')
                ->color('info')
                ->chart([7, 30, 10, 3, 15, 4, 17]),
            Stat::make('FAQs', count(FAQ::get()))
                ->description('Total Items')
                ->color('warning')
                ->chart([7, 30, 10, 3, 15, 4, 17]),
        ];
    }
}
