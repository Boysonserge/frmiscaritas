<div class="mx-auto p-2">
    <!-- row -->
    <div class="flex flex-wrap flex-row">
        <div class="flex-shrink max-w-full px-4 w-full">
            <p class="text-xl font-bold mt-3 mb-5">My Projects</p>
        </div>
        <div class="flex-shrink max-w-full px-4 w-full mb-6">
            <div class="py-4 px-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                <div class="flex flex-wrap flex-row">
                    <div class="flex-shrink max-w-full w-full">
                        <div class="md:flex md:justify-between">
                            <a href="{{route('impact.create')}}"
                               class="py-2 px-4 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add
                                new project
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
                                <input type="text"
                                       class="block w-full py-1.5 ltr:pl-10 ltr:pr-4 rtl:pr-10 rtl:pl-4 leading-normal rounded-2xl focus:outline-none bg-gray-100 border border-gray-100 focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-700"
                                       placeholder="Search project">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap flex-row">

        @foreach($impacts as $impa)
            <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-6">
                    <div class="flex flex-row justify-between pb-4">
                        <div class="flex flex-col">
                            <h3 class="text-base font-bold">{{$impa->impact_name}}</h3>
                        </div>
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = ! open"
                                    class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                     class="w-6 h-6 bi bi-three-dots" viewbox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false"
                                 class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700"
                                 style="min-width: 12rem; display: none;">
                                <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900"
                                   href="#">Update</a>
                                <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900"
                                   href="#">Delete</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col pb-4">
                        <div class="flex flex-row items-center">
                            <img src="../src/img/brand/logo.png"
                                 class="w-20 h-auto max-w-full ltr:mr-3 rtl:ml-3">
                            <p class="text-sm text-gray-500">{!! \Illuminate\Support\Str::limit($impa->impact_description,170)  !!} </p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mb-4">
                                <span
                                    class="px-2 py-1 flex items-center font-semibold text-xs rounded text-yellow-700 bg-yellow-200">On Progress</span>
                        <span
                            class="px-2 py-1 flex items-center font-semibold text-xs rounded text-red-400 border border-red-400  bg-white">Due date: {{date('d-m-Y', strtotime($impa->deadline));}}</span>
                    </div>

                    <div class="relative mb-4">
                        <a href="#">
                            <img
                                class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1"
                                src="../src/img/avatar/avatar2.png" alt="Image Description">
                        </a>
                        <a href="#">
                            <img
                                class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1"
                                src="../src/img/avatar/avatar3.png" alt="Image Description">
                        </a>
                        <a href="#">
                            <img
                                class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1"
                                src="../src/img/avatar/avatar4.png" alt="Image Description">
                        </a>
                        <a href="#">
                            <span class="ltr:ml-5 rtl:mr-5 text-sm text-gray-500 font-semibold self-center">+2 more</span>
                        </a>
                    </div>

                    <div class="w-full h-4 bg-gray-200 rounded-full mt-2">
                        <div class="h-full text-center text-xs text-white bg-yellow-500 rounded-full"
                             style="width:55%">
                            <span class="text-xs text-white text-center">55%</span>
                        </div>
                    </div>

                    <div class="flex justify-between mt-3">
                        <div>
                                    <span
                                        class="text-sm inline-block text-gray-500 dark:text-gray-100">Task done : <span
                                            class="text-gray-700 dark:text-white font-bold">26</span>/50</span>
                        </div>
                        <div>
                            <span class="px-2 py-1 text-xs rounded font-semibold text-green-500 bg-green-50">Front End</span>
                            <span class="px-2 py-1 text-xs rounded text-indigo-500 font-semibold bg-indigo-100">UI/UX</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- project item -->

        <!-- project item -->
        <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-6">
                <div class="flex flex-row justify-between pb-4">
                    <div class="flex flex-col">
                        <h3 class="text-base font-bold">Web Development</h3>
                    </div>
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = ! open"
                                class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 class="w-6 h-6 bi bi-three-dots" viewbox="0 0 16 16">
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false"
                             class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700"
                             style="min-width: 12rem; display: none;">
                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900"
                               href="#">Update</a>
                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900"
                               href="#">Delete</a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col pb-4">
                    <div class="flex flex-row items-center">
                        <img src="../src/img/brand/logo3.png"
                             class="w-20 h-auto max-w-full ltr:mr-3 rtl:ml-3">
                        <p class="text-sm text-gray-500">Creating a website redesign project plan is vital
                            to making your redesign go smoothly.There’s who you think your customers are,
                            who you want your customers to be. </p>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-4">
                                <span
                                    class="px-2 py-1 flex items-center font-semibold text-xs rounded text-green-700 bg-green-200">Complete</span>
                    <span
                        class="px-2 py-1 flex items-center font-semibold text-xs rounded text-red-400 border border-red-400  bg-white">Due date: 15-11-2022</span>
                </div>

                <div class="relative mb-4">
                    <a href="#">
                        <img
                            class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1"
                            src="../src/img/avatar/avatar2.png" alt="Image Description">
                    </a>
                    <a href="#">
                        <img
                            class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1"
                            src="../src/img/avatar/avatar3.png" alt="Image Description">
                    </a>
                    <a href="#">
                        <img
                            class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1"
                            src="../src/img/avatar/avatar4.png" alt="Image Description">
                    </a>
                    <a href="#">
                        <span class="ltr:ml-5 rtl:mr-5 text-sm text-gray-500 font-semibold self-center">+2 more</span>
                    </a>
                </div>

                <div class="w-full h-4 bg-gray-200 rounded-full mt-2">
                    <div class="h-full text-center text-xs text-white bg-green-500 rounded-full"
                         style="width:100%">
                        <span class="text-xs text-white text-center">100%</span>
                    </div>
                </div>

                <div class="flex justify-between mt-3">
                    <div>
                                    <span
                                        class="text-sm inline-block text-gray-500 dark:text-gray-100">Task done : <span
                                            class="text-gray-700 dark:text-white font-bold">50</span>/50</span>
                    </div>
                    <div>
                        <span class="px-2 py-1 text-xs rounded font-semibold text-green-500 bg-green-50">Front End</span>
                        <span class="px-2 py-1 text-xs rounded text-indigo-500 font-semibold bg-indigo-100">UI/UX</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
