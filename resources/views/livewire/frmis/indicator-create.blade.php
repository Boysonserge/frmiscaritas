<div>

    <div wire:loading wire:target="save" class="loaded-success z-50 fixed inset-0 bg-gray-800 bg-opacity-20">
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

            <div wire:ignore class="flex-shrink max-w-full px-4 w-full mb-4">
                <label for="impact" class="inline-block mb-2">Select impact</label>
                <select id="impact" class="select2 w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none
                    focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                        wire:model.debounce.500ms="selectedImpacts">
                    <option value="" disabled selected>--Choose a working impact--</option>

                    @foreach($impacts as $impact)
                        <option value="{{$impact['id']}}">{{$impact['impact_name']}}</option>
                    @endforeach

                </select>


            </div>
            <div wire:ignore class="flex-shrink max-w-full px-4 w-full mb-1 mt-8">
                <label for="youths" class="inline-block mb-2">Indicator</label>
            </div>



            <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                @foreach($inputs as $key => $input)
                    <div class="my-6" id="coupon">
                        <label class="col-12 mb-2 hidden" for="input-coupon">Enter your coupon here</label>
                        <div class="flex flex-wrap flex-row items-stretch w-full relative mb-6">
                            <input wire:model.defer="inputs.{{$key}}.indicator" type="text"
                                   placeholder="New indicator" id="indicator_{{$key}}_indicator"
                                   class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0">
                            @if($key > 1)
                                <span class="flex-mr-px">

                                        <input wire:click="removeInput({{$key}})" type="button" value="X"
                                               id="button-coupon"
                                               class="py-2 px-4 flex items-center py-2 px-4 ltr:-ml-1 ltr:rounded-r rtl:rounded-r rtl:-mr-1 leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0">
                                    </span>
                            @endif
                        </div>
                        <div class="text-red-500">
                            @error('inputs.'.$key.'.indicator') <span
                                class="text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>

                    </div>
                @endforeach

            </div>


            <div class="flex space-x-4 max-w-full px-4 w-full">
                <div class="p-3">
                    <input wire:click="addInputs" type="button" value="+ New indicator?" id="button-coupon"
                           class="py-2 px-4 flex items-center py-2 px-4 ltr:-ml-1 ltr:rounded-r rtl:rounded-r rtl:-mr-1 leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0">
                </div>

                <div class="p-3">
                    <button wire:click="save"
                            class="cursor-pointer py-2 px-4 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                        Save
                    </button>
                </div>
            </div>

        </div>
    </div>

</div>

@push('js')
    <script>
        $("#impact").on('change', function (e) {
            let id = $(this).val()
            @this.set('selectedImpacts', id);
        })
    </script>
@endpush
