<x-app-layout>
    <x-slot name="sidebar">
        @include('frmis.inc.sidebar')
    </x-slot>

    <main class="pt-20 -mt-2">
        <style>
            @media print {
                #sidebar-menu, #desktop-menu, footer, #btn-invoice {
                    display: none;
                }
                main.pt-20 {
                    margin-top: -60px;
                    padding-top: 0;
                }
            }
        </style>
        <div class="mx-auto p-2">
            <!-- row -->
            <div class="flex flex-wrap flex-row">
                <div id="title-invoice" class="flex justify-between max-w-full px-4 py-4 w-full">
                    <p class="text-xl font-bold mt-3 mb-5">{{$impact->impact_name}}</p>
                    <button type="button" id="btn-invoice" onclick="window.print();" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ltr:mr-2 rtl:ml-2 inline-block bi bi-printer" viewbox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"></path>
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"></path>
                        </svg>Print report</button>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="flex justify-between items-center pb-4 border-b border-gray-200 dark:border-gray-700 mb-3">
                            <div class="flex flex-col">
                                <div class="text-3xl font-bold mb-1">
                                    <img class="inline-block w-12 h-auto ltr:mr-2 rtl:ml-2" src="../src/img/favicon.png">FRMIS
                                </div>
                                <p class="text-sm">Muhanga, Kabgayi<br>Economat</p>
                            </div>
                            <div class="text-4xl uppercase font-bold">Report</div>
                        </div>
                        <div class="flex py-3">
                            <div class="flex-1">
                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">PROJECT TITLE:</div><div class="flex-1 ltr:text-right rtl:text-left">{{$impact->impact_name}}</div>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">Project manager:</div><div class="flex-1 ltr:text-right rtl:text-left">{{auth()->user()->name}}</div>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">Due date:</div><div class="flex-1 ltr:text-right rtl:text-left">{{Carbon\Carbon::parse($impact->deadline)->format('dS-F-Y')}}</div>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">Department:</div><div class="flex-1 ltr:text-right rtl:text-left">{{$impact->impact_name}}</div>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">Total beneficiaries #:</div><div class="flex-1 ltr:text-right rtl:text-left">{{$impact->men + $impact->women}}</div>
                                </div>

                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">Total budget #:</div><div class="flex-1 ltr:text-right rtl:text-left">{{$impact->total_budget}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <table class="table-bordered w-full ltr:text-left rtl:text-right text-gray-600">
                                <thead class="border-b dark:border-gray-700">
                                <tr class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20">
                                    <th>#</th>
                                    <th class="text-center">Nature of support</th>
                                    <th class="text-center">pBe</th>
                                    <th class="text-center">aBe</th>
                                    <th class="text-center">pBu</th>
                                    <th class="text-center">uBu</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($milestones as $milestone=>$value)
                                    <tr>

                                        <td class="text-center">{{$milestone+1}}</td>
                                        <td class="text-center">{!! $value->nature_of_support !!}</td>
                                        <td class="text-center">{{$value->planned_men}}</td>
                                        <td class="text-center">{{$value->achieved_men}}</td>
                                        <td class="text-center">{{$value->planned_budget}}</td>
                                        <td class="text-center">{{$value->achieved_budget}}</td>

                                    </tr>
                                @endforeach


                                </tbody>
                                <tfoot></tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
