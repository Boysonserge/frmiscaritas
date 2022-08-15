<x-app-layout title="Create indicator -FRMIS">
    <x-slot name="sidebar">
        @include('frmis.inc.sidebar')
    </x-slot>
    <main class="pt-20 -mt-2">
        @livewire('frmis.indicator-create')
    </main>


    <x-slot name="scripts">
        @include('frmis.inc.scripts')
    </x-slot>

</x-app-layout>
