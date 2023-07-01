<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 affiliateing-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <table class="w-full table-auto">
                        <thead>
                        <tr>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Affiliate ID</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sub ID</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Offer ID</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aff Sub</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aff Sub2</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aff Sub3</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aff Sub4</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aff Sub5</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Postback Url</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($affiliates as $affiliate)
                            <tr>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">{{ $affiliate->affiliate_id ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">{{ $affiliate->name ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">{{ $affiliate->sub_id ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">{{ $affiliate->offer_id ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">{{ $affiliate->aff_sub ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">{{ $affiliate->aff_sub2 ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">{{ $affiliate->aff_sub3 ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">{{ $affiliate->aff_sub4 ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">{{ $affiliate->aff_sub5 ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">{{ $affiliate->postback_url ?? '' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>



                    <div class="mt-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
