<x-app-layout>
    <main class="pt-20 -mt-2">
        <x-slot name="sidebar">
            @include('frmis.inc.sidebar')
        </x-slot>
        @livewire('frmis.indicator')
    </main>
</x-app-layout>
