<div class="mx-auto p-2">

    <div class="flex flex-wrap flex-row">
        <div class="flex-shrink max-w-full px-4 w-full">
            <p class="text-xl font-bold mt-3 mb-5">My indicators</p>
        </div>
        <div class="flex-shrink max-w-full px-4 w-full mb-6">
            <div class="py-4 px-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                <div class="flex flex-wrap flex-row">
                    <div class="flex-shrink max-w-full w-full">
                        <div class="md:flex md:justify-between">
                            <a href="{{route('indicator.create')}}"
                               class="py-2 px-4 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">+ New indicator
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                     fill="currentColor"
                                     class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg"
                                     viewbox="0 0 16 16">
                                    <path
                                        d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"></path>
                                </svg>
                            </a>

                            <!-- search -->
                            <div
                                class="relative flex items-center w-full md:w-60 h-full group mt-4 md:mt-0 md:self-center">
                                <svg
                                    class="absolute ltr:left-0 rtl:right-0 z-20 w-4 h-4 ltr:ml-4 rtl:mr-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 block"
                                    xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20">
                                    <path
                                        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                                </svg>
                                <input type="text" wire:model="searchQuery"
                                       class="block w-full py-1.5 ltr:pl-10 ltr:pr-4 rtl:pr-10 rtl:pl-4 leading-normal rounded-2xl focus:outline-none bg-gray-100 border border-gray-100 focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-700"
                                       placeholder="Search indicators">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-shrink max-w-full px-4 w-full">
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
            <div class="overflow-x-auto">
                <table class="table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead>
                    <tr>
                        <th>
                           Indicator
                        </th>
                        <th>
                            Impact
                        </th>
                        <th class="hidden lg:table-cell">
                           Created at
                        </th>
                    </tr>
                    </thead>
                    <tbody>


                        @foreach($myIndicators as $indicator)
                            <tr>
                            <td>
                                <div class="flex flex-wrap flex-row items-center">
                                    <div class="leading-5 font-semibold dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                                        {{$indicator->indicator}}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-sm text-center px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">
                                    {{$indicator->impacts->impact_name}}</div>
                            </td>
                            <td class="hidden lg:table-cell">
                                <div class="text-sm leading-5 text-gray-600">{{$indicator->created_at->diffForHumans()}}</div>
                            </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
