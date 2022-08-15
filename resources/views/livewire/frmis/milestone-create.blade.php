<div>

    <div wire:loading wire:target="save" class="loaded-success z-50 fixed inset-0 bg-gray-800 bg-opacity-20">
        <div class="absolute left-1/2 top-1/2 transform -translate-y-1/2">
            <div class="relative mx-auto my-12">
                <div class="inline-block">
                    <svg class="animate-spin h-8 w-8 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-shrink max-w-full px-4 w-full">
        <p class="text-xl font-bold mt-3 mb-5">Create new Milestone</p>
    </div>
    <div class="flex-shrink max-w-full px-4 w-full mb-6">
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
            <form  autocomplete="off" wire:submit.prevent="save" >

                <div class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="impacts" class="inline-block mb-2">Select Impact</label>

                    <select required id="impacts" class="select2 masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none
                    focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"

                            wire:model.lazy="selectedImpact">

                        @foreach($impacts as $impact)
                            <option value="{{$impact['id']}}">{{$impact['impact_name']}}</option>
                        @endforeach

                    </select>

                </div>

                <div class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="indicator" class="inline-block mb-2">Select indicators</label>
                    <select required

                        id="indicator"
                        wire:model="selectedIndicator"
                        class="select2 masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">

                        @forelse ($indicators as $indicator)
                            <option value="{{ $indicator['id'] }}">{{ $indicator['indicator'] }}</option>
                        @empty

                        @endforelse
                    </select>
                </div>
                <div wire:ignore class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="inputdes" class="inline-block mb-2">Range of dates for milestone</label>
                    <x-flatpickr required wire:model="range" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" range />
                </div>



                <div wire:ignore class="flex-shrink max-w-full px-4 w-full mb-4">
                    <label for="inputdes" class="inline-block mb-2">Milestone description</label>
                    <textarea required name="" id="description" wire:model.lazy="natureOfSupport" cols="30" rows="10"></textarea>
                </div>




                <div wire:ignore class="flex-shrink max-w-full px-4 w-full mb-4">
                    <div
                        class="bg-white p-8 border border-gray-200 dark:bg-gray-700 dark:bg-opacity-20 dark:border-gray-800">
                        <div id="Accordione" x-data="{selected:0}">
                            <!-- list -->
                            <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white w-full dark:bg-gray-800">
                                <div
                                    class="border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800 py-2 px-4 w-full"
                                    id="HeadingOnee">
                                    <div class="d-grid mb-0">
                                        <button type="button"
                                            class="py-3 px-6 w-full rounded leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0"
                                            @click="selected !== 0 ? selected = 0 : selected = null">
                                            Planned beneficiaries as per milestone
                                            <span>
			                            <svg class="transform transition duration-500"
                                             :class="{ '-rotate-180': selected == 0 }" width="1rem" height="1rem"
                                             viewbox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			                              <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                                clip-rule="evenodd"></path>
			                            </svg>
			                          </span>
                                        </button>
                                    </div>
                                </div>
                                <div id="CollapseOnee" x-show="selected == 0">
                                    <div class="flex justify-between p-6">
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="men" class="inline-block mb-2">Men</label>
                                            <input wire:model.lazy="plannedMen" type="text"
                                                   class="masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                   id="men">
                                        </div>

                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="women" class="inline-block mb-2">Women</label>
                                            <input wire:model.lazy="plannedWomen" type="text"
                                                   class="masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                   id="women">
                                        </div>

                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="youths" class="inline-block mb-2">Youths</label>
                                            <input wire:model.lazy="plannedYouths" type="text"
                                                   class="masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                   id="youths">
                                        </div>


                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="disabilities" class="inline-block mb-2">With disabilities</label>
                                            <input wire:model.lazy="plannedDisabilities"
                                                   class="masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                   id="disabilities">
                                        </div>


                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="plannedBudget" class="inline-block mb-2">Budget</label>
                                            <input wire:model.lazy="plannedBudget" type="text"
                                                   class="masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                   id="plannedBudget">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- list -->
                            <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800">
                                <div
                                    class="border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800 py-2 px-4"
                                    id="HeadingTwoe">
                                    <div class="d-grid mb-0">
                                        <button type="button"
                                            class="py-3 px-6 w-full rounded leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0"
                                            @click="selected !== 1 ? selected = 1 : selected = null">
                                            Achieved beneficiaries
                                            <span>
			                            <svg class="transform transition duration-500"
                                             :class="{ '-rotate-180': selected == 1 }" width="1rem" height="1rem"
                                             viewbox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			                              <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                                clip-rule="evenodd"></path>
			                            </svg>
			                          </span>
                                        </button>
                                    </div>
                                </div>
                                <div id="CollapseTwoe" x-show="selected == 1">
                                    <div class="flex justify-between p-6">
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="men" class="inline-block mb-2">Men</label>
                                            <input wire:model.lazy="achievedMen" type="text"
                                                   class="masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                   id="men">
                                        </div>

                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="women" class="inline-block mb-2">Women</label>
                                            <input wire:model.lazy="achievedWomen" type="text"
                                                   class="masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                   id="women">
                                        </div>

                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="youths" class="inline-block mb-2">Youths</label>
                                            <input wire:model.lazy="achievedYouths" type="text"
                                                   class="masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                   id="youths">
                                        </div>


                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="disabilities" class="inline-block mb-2">With disabilities</label>
                                            <input wire:model.lazy="achievedDisabilities" type="text"
                                                   class="masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                   id="disa">
                                        </div>



                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="budgetId" class="inline-block mb-2">Budget</label>
                                            <input wire:model.lazy="achievedBudget" type="text"
                                                   class="masked w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                   id="budgetId">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex-shrink max-w-full px-4 w-full">
                    <button type="submit"
                            class="py-2 px-4 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">


                        + Confirm milestone addition
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
        <script src="https://unpkg.com/imask"></script>

        <script>
            document.addEventListener('iziToast-closed', function(data){
                livewire.emit('iziToastClosed');

            });

            var currencyMask = IMask(
                document.getElementById('budgetId'),
                {
                    mask: 'rwf num',
                    blocks: {
                        num: {
                            // nested masks are available!
                            mask: Number,
                            thousandsSeparator: ','
                        }
                    }
                });

            var numberMask = IMask(
                document.getElementById('plannedBudget'),
                {
                    mask: 'rwf num',
                    blocks: {
                        num: {
                            // nested masks are available!
                            mask: Number,
                            thousandsSeparator: ','
                        }
                    }
                });

            tinymce.init({
                selector: '#description',
                statusbar: false,
                menubar: false,
                placeholder: 'Describe this milestone',
                forced_root_block: false,
                setup: function (editor) {
                    editor.on('init change', function () {
                        editor.save();
                    });
                    editor.on('change', function (e) {
                        @this.
                        set('natureOfSupport', editor.getContent());
                    });
                }
            });




            $("#impacts").on('change', function (e) {
                let id = $(this).val()
                @this.set('selectedImpact', id);
                livewire.emit('getIndicatorsByImpactId');
            })



            $("#indicator").on('change', function (e) {
                let id = $(this).val()
                @this.set('selectedIndicator', id);
            })


        </script>
@endpush
