<?php

namespace App\Http\Livewire;

use App\Models\Milestone;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Livewire\Component;

class Test extends Component implements HasTable
{
    use InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Milestone::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('id')->sortable(),
            TextColumn::make('nature_of_support')->limit(20)->html(),
            TextColumn::make('from')->date()->searchable(),
            TextColumn::make('to')->date()->searchable()
            ,TextColumn::make('planned_men')->searchable()
            ,TextColumn::make('planned_women')->searchable()
            ,TextColumn::make('planned_youths')->searchable()
            ,TextColumn::make('indicators.indicator')->label('Indicator')->searchable(),
            TextColumn::make('indicators.impacts.impact_name')->label('Impact')

        ];
    }

    protected function getTableEmptyStateIcon(): ?string

    {

        return 'heroicon-o-bookmark';

    }



    protected function getTableEmptyStateHeading(): ?string

    {

        return 'No milestones yet';

    }



    protected function getTableEmptyStateDescription(): ?string

    {

        return 'You may create a post using the button below.';

    }



    protected function getTableEmptyStateActions(): array

    {

        return [

            Action::make('create')

                ->label('Create post')

                ->url(route('milestone.create'))

                ->icon('heroicon-o-plus')

                ->button()->color('blue-600'),

        ];

    }



    public function render()
    {
        return view('livewire.test');
    }
}
