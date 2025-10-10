<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row w-full justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ Auth::user()->hasRole('owner') ? __('Apotik Orders') : __('My Transactions') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white flex flex-col gap-y-5 overflow-hidden p-10 shadow-sm sm:rounded-lg">

                <div class="item-card flex flex-row justify-between">
                    <div class="flex flex-row items-center gap-x-3">
                        <div>
                            <p class="text-base text-slate-500">
                                Total Transaksi
                            </p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                Rp. 150.000,-
                            </h3>
                        </div>
                    </div>
                    <div>
                        <p class="text-base text-slate-500">
                            Date
                        </p>
                        <h3 class="text-xl font-bold text-indigo-950">
                            10 Oktober 2025
                        </h3>
                    </div>
                    <div class="flex flex-row items-center gap-x-3">
                        <p class="font-bold py-1 px-3 rounded-full text-white text-sm bg-orange-500">PENDING</p>
                    </div>
                    <div class="flex flex-row items-center gap-x-3">
                        <a href="#" class="font-bold py-3 px-5 rounded-full text-white bg-indigo-700">View
                            Details</a>
                    </div>
                </div>
                <hr class="my-3">

            </div>
        </div>
    </div>
</x-app-layout>
