<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid gap-6">
                <div class="">
                    <!-- Today's Leads -->
                    <h3 class="text-lg text-white font-medium mb-2 text-center">Today</h3>
                    <div class="grid grid-cols-5 gap-5">
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-4">
                            <h4 class="text-sm font-medium text-gray-600 dark:text-gray-300 text-center">Sold</h4>
                            <p class="text-lg font-bold text-gray-900 dark:text-gray-100 text-center">{{ $todaySold }} Leads</p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-4">
                            <h4 class="text-sm font-medium text-gray-600 dark:text-gray-300 text-center">Declined</h4>
                            <p class="text-lg font-bold text-gray-900 dark:text-gray-100 text-center">{{ $todayDeclined }} Leads</p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-4">
                            <h4 class="text-sm font-medium text-gray-600 dark:text-gray-300 text-center">Pending</h4>
                            <p class="text-lg font-bold text-gray-900 dark:text-gray-100 text-center">{{ $todayPending }} Leads</p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-4">
                            <h4 class="text-sm font-medium text-gray-600 dark:text-gray-300 text-center">Profit</h4>
                            <p class="text-lg font-bold text-gray-900 dark:text-gray-100 text-center">$ {{ number_format($todayProfit, 2) }}</p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-4">
                            <h4 class="text-sm font-medium text-gray-600 dark:text-gray-300 text-center">Redirection</h4>
                            <p class="text-lg font-bold dark:text-gray-100 text-center text-green-400">100%</p>
                        </div>
                        <!-- Add more statistics as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid gap-6">
                <div class="">
                    <!-- Month's Leads -->
                    <h3 class="text-lg text-white font-medium mb-2 text-center">Month</h3>
                    <div class="grid grid-cols-5 gap-5">
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-4">
                            <h4 class="text-sm font-medium text-gray-600 dark:text-gray-300 text-center">Sold</h4>
                            <p class="text-lg font-bold text-gray-900 dark:text-gray-100 text-center">{{ $monthSold }} Leads</p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-4">
                            <h4 class="text-sm font-medium text-gray-600 dark:text-gray-300 text-center">Declined</h4>
                            <p class="text-lg font-bold text-gray-900 dark:text-gray-100 text-center">{{ $monthDeclined }} Leads</p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-4">
                            <h4 class="text-sm font-medium text-gray-600 dark:text-gray-300 text-center">Pending</h4>
                            <p class="text-lg font-bold text-gray-900 dark:text-gray-100 text-center">{{ $monthPending }} Leads</p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-4">
                            <h4 class="text-sm font-medium text-gray-600 dark:text-gray-300 text-center">Profit</h4>
                            <p class="text-lg font-bold text-gray-900 dark:text-gray-100 text-center">$ {{ number_format($monthProfit, 2) }}</p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-full p-4">
                            <h4 class="text-sm font-medium text-gray-600 dark:text-gray-300 text-center">Redirection</h4>
                            <p class="text-lg font-bold  dark:text-gray-100 text-center text-red-400">20%</p>
                        </div>
                        <!-- Add more statistics as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
