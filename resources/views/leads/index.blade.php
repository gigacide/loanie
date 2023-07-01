<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800  overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <table class="w-full table-auto">
                        <thead>
                        <tr>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lead Id</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ip Address</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Affiliate ID</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Offer ID</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lead Status</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Affiliate Lead Price</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Buyer Lead Price</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Profit</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Redirected</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Timestamp</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($leads as $lead)
                            <tr>
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{ $lead->id ?? '' }}</td>
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{ $lead->source->ipAddress ?? '' }}</td>
                                <td class="px-2 py-1 border-b border-gray-300 text-xs">
    <span class="inline-block px-1 py-0.5 rounded-lg text-white bg-gradient-to-r from-gray-400 to-purple-600-400-500 text-xs">
        {{ $lead->affiliate_id ?? '' }}
    </span>
                                </td>

                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{ $lead->offer_id ?? '' }}</td>
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{ $lead->applicant->firstName ?? '' }}</td>
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{ $lead->applicant->lastName ?? '' }}</td>
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{ $lead->applicant->email ?? '' }}</td>
                                <td class="px-2 py-1 text-white border-b border-gray-300">
                                    @if ($lead->leadStatus === 1)
                                        <span class="inline-block bg-green-400 text-white px-1 py-0.5 rounded-full shadow-sm text-xs">Sold</span>
                                    @elseif ($lead->leadStatus === 0)
                                        <span class="inline-block bg-red-400 text-white px-1 py-0.5 rounded-full shadow-sm text-xs">Decline</span>
                                    @elseif ($lead->leadStatus === 3)
                                        <span class="inline-block bg-yellow-400 text-white px-1 py-0.5 rounded-full shadow-sm text-xs">Pending</span>
                                    @endif
                                </td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">${{ $lead->affiliate_lead_price ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300 text-xs">${{ $lead->buyer_lead_price ?? '' }}</td>
                                <td class="px-2 py-1 text-green-400  border-b border-gray-300 text-xs">${{ ($lead->buyer_lead_price - $lead->affiliate_lead_price) ?? '' }}</td>
                                <td class="px-2 py-1 text-white  border-b border-gray-300">
                                    @if ($lead->isRedirected)
                                        <span class="inline-block bg-green-400 text-white px-1 py-0.5 rounded-full shadow-sm text-xs">100%</span>
                                    @else
                                        <span class="inline-block bg-red-400 text-white px-1 py-0.5 rounded-full shadow-sm text-xs">0%</span>
                                    @endif
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{ $lead->created_at ? $lead->created_at->format('d-m-Y H:i:s') : '' }}</td>


                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                    <div class="mt-4">
                         {{ $leads->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
