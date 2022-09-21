<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Cause;
use App\Models\Event;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Database\Eloquent\Model;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('News uploaded', Blog::all()->count())

                ->color('success'),
            Card::make('Causes', Cause::all()->count())

                ->color('danger'),

                Card::make('Events planeed', Event::all()->count())

                    ->chart([7, 2, 10, 3, 15, 4, 17])
                    ->color('success'),

        ];
    }


}
