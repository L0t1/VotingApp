<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('User count', '22')
            ->description('3%  increase')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
        Card::make('Total ideas', '101')
            ->description('7% decrease')
            ->descriptionIcon('heroicon-s-trending-down')
            ->color('danger'),
        Card::make('Average time on page', '3:12')
            ->description('3% increase')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success')
            
        ];
    }
}
