<div>

    <div wire:loading wire:target="shower" class="loaded-success z-50 fixed inset-0 bg-gray-800 bg-opacity-20">
        <div class="absolute left-1/2 top-1/2 transform -translate-y-1/2">
            <div class="relative mx-auto my-12">
                <div class="inline-block">
                    <svg class="animate-spin h-8 w-8 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-shrink max-w-full px-4 w-full">
        <p class="text-xl font-bold mt-3 mb-5">Create new Impact</p>
    </div>
    <div class="flex-shrink max-w-full px-4 w-full mb-6">
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
            <form autocomplete="off" wire:submit.prevent="shower" class="flex flex-wrap flex-row -mx-4">
                <div class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="inputtitle" class="inline-block mb-2">Impact title</label>
                    <input  wire:model.lazy="impactTitle" type="text"
                           class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                           id="inputtitle">


                </div>
                <div wire:ignore class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="inputdes" class="inline-block mb-2">Impact description</label>
                    <textarea name="" id="description" wire:model.lazy="impactDescription" cols="30" rows="10"></textarea>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="district" class="inline-block mb-2">Select district</label>
                    <select id="district" class="select2 w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none
                    focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                            multiple
                            wire:model.lazy="selectedDistrict">

                        @foreach($districts as $dist)
                            <option value="{{$dist['id']}}">{{$dist['district_name']}}</option>
                        @endforeach

                    </select>
                    <div wire:loading class="inline-block">
                        <svg class="animate-spin h-5 w-5 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                </div>


                <div class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="sector" class="inline-block mb-2">Select sectors</label>
                    <select
                        multiple
                        id="sector"
                        wire:model="selectedSector"
                        class="select2 w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">

                        @forelse ($sectors as $sector)
                            <option value="{{ $sector['id'] }}">{{ $sector['sector_name'] }}</option>
                        @empty

                        @endforelse
                    </select>
                </div>


                <div class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="cell" class="inline-block mb-2">Select Cells</label>
                    <select
                        multiple
                        id="cell"
                        wire:model="selectedCell"
                        class="block w-full mt-1 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 select2">

                        @forelse ($cells as $cell)
                            <option value="{{ $cell['id'] }}">{{ $cell['cell_name'] }}</option>
                        @empty

                        @endforelse
                    </select>
                </div>


                <div class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="inputdes" class="inline-block mb-2">Select Parishes</label>
                    <select
                        multiple
                        id="parish"
                        wire:model="selectedParish"
                        class="block w-full mt-1 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 select2">

                        @forelse ($parishes as $parish)
                            <option value="{{ $parish['id'] }}">{{ $parish['parish_name'] }}</option>
                        @empty

                        @endforelse
                    </select>
                </div>


                <div class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="inputdes" class="inline-block mb-2">Select Centrale</label>
                    <select
                        multiple
                        id="centrale"
                        wire:model="selectedCentrale"
                        wire:change="getCellsBySectorId"
                        class="block w-full mt-1 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 select2">

                        @forelse ($centrales as $centrale)
                            <option value="{{ $centrale['id'] }}">{{ $centrale['centrale_name'] }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>


                <div class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="imiryango" class="inline-block mb-2">Select CEBs(imiryangoremezo)</label>

                    <select
                        multiple
                        id="imiryango2"
                        wire:model="selectedImiryango"
                        class="block w-full mt-1 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 select2">

                        @forelse ($imiryangos as $imiryango)
                            <option value="{{ $imiryango['id'] }}">{{ $imiryango['name'] }}</option>
                        @empty

                        @endforelse
                    </select>
                </div>


                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                    <label for="inputbudget" class="inline-block mb-2">Budget planned for whole project
                        (RWF) </label>
                    <input wire:model.lazy="totalBudget" type="text"
                           class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                           id="inputbudget">
                </div>
                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                    <label for="inputtask" class="inline-block mb-2">Planned deadline</label>
                    <input wire:model.lazy="deadline" type="date"
                           class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                           id="inputtask">
                </div>




                <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                    <label for="women" class="inline-block mb-2">Women</label>
                    <input wire:model.lazy="women" type="number"
                           class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                           id="women" required="">
                </div>
                <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                    <label for="men" class="inline-block mb-2">Men</label>
                    <input wire:model.lazy="men" type="number"
                           class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                           id="men" required="">
                </div>

                <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                    <label for="youths" class="inline-block mb-2">Youth</label>
                    <input wire:model.lazy="youths" type="number"
                           class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                           id="youths" required="">
                </div>

                <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                    <label for="disability" class="inline-block mb-2">With disability</label>
                    <input wire:model.lazy="disability" type="number"
                           class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                           id="disability" required="">
                </div>

                <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                    <label for="baseline" class="inline-block mb-2">Baseline</label>
                    <input wire:model.lazy="baseline" type="text"
                           class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                           id="disability" required="">
                </div>

                <div class="flex-shrink max-w-full px-4 w-full">
                    <button type="submit"
                            class="py-2 px-4 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">


                        Add new impact
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                             class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg" viewbox="0 0 16 16">
                            <path
                                d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"></path>
                        </svg>
                    </button>
                </div>


            </form>
        </div>
    </div>
    @push('js')

        <script>

            tinymce.init({
                selector: '#description',
                statusbar: false,
                menubar: false,
                placeholder: 'Describe this impact',
                forced_root_block: false,
                setup: function (editor) {
                    editor.on('init change', function () {
                        editor.save();
                    });
                    editor.on('change', function (e) {
                        @this.
                        set('impactDescription', editor.getContent());
                    });
                }
            });

            $("#district").on('change', function (e) {
                let id = $(this).val()
                @this.set('selectedDistrict', id);
                livewire.emit('getSectorsByDistrictId');
                livewire.emit('getParishesByDistrictId');
            })


            $("#sector").on('change', function (e) {
                let id = $(this).val()
                @this.set('selectedSector', id);
                livewire.emit('getCellsBySectorId', id);
            })

            $("#parish").on('change', function (e) {
                let id = $(this).val()
                @this.set('selectedParish', id);
                livewire.emit('getCentralesByParishId', id);
            })

            $("#centrale").on('change', function (e) {
                let id = $(this).val()
                @this.set('selectedCentrale', id);
                livewire.emit('getImiryangosByCentraleId', id);
            })
            $("#cell").on('change', function (e) {
                let id = $(this).val()
                @this.set('selectedCell', id);
                livewire.emit('getCellsBySectorId', id);
            })

            $("#imiryango2").on('change', function (e) {
                let id = $(this).val()
                @this.set('selectedImiryango', id);
            })


        </script>
@endpush
