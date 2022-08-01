<div>
    <div class="flex-shrink max-w-full px-4 w-full">
        <p class="text-xl font-bold mt-3 mb-5">Create new Impact</p>
    </div>
    <div class="flex-shrink max-w-full px-4 w-full mb-6">
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
            <label class="inline-block">
        <span class="text-gray-700">
            Choose City
        </span>
                <select multiple
                        id="city"
                        wire:model="selectedCityId"
                        wire:change="getZonesByCityId"
                        class="block w-full mt-1 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 select2">
                    <option value="">---</option>
                    @forelse ($cities as $city)
                        <option value="{{ $city['id'] }}">{{ $city['district_name'] }}</option>
                    @empty

                    @endforelse
                </select>
            </label>

            <label class="inline-block">
        <span class="text-gray-700">
            Choose Zone
        </span>
                <select
                    multiple
                    id="zone"
                    wire:model="selectedZoneId"
                    wire:change="getAreasByZoneId"
                    class="block w-full mt-1 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 select2">
                    <option value="">---</option>
                    @forelse ($zones as $zone)
                        <option value="{{ $zone['id'] }}">{{ $zone['sector_name'] }}</option>
                    @empty

                    @endforelse
                </select>
            </label>


            <label class="inline-block">
        <span class="text-gray-700">
            Choose Area
        </span>
                <select
                    id="area"
                    wire:model="selectedAreaId"
                    class="block w-full mt-1 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 select2">
                    <option value="">---</option>
                    @forelse ($areas as $area)
                        <option value="{{ $area['id'] }}">{{ $area['name'] }}</option>
                    @empty

                    @endforelse
                </select>
            </label>
        </div>

    </div>


</div>


@push('js')

    <script>

        $("#city").on('change', function (e) {
            let id = $(this).val()
            @this.set('selectedCityId', id);
            livewire.emit('getZonesByCityId');
        })


        $("#zone").on('change', function (e) {
            let id = $(this).val()
            @this.set('selectedZoneId', id);
            livewire.emit('getAreasByZoneId', id);
        })

    </script>


@endpush
