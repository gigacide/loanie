<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Postback') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800  overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <table class="w-full table-auto">
                        <thead>
                        <tr>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">URL</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Request</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Response</th>
                            <th class="px-2 py-1 bg-gray-200 border-b rounded-t-lg border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Timestamp</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($postbacklogs as $postback)
                            <tr>
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{$postback->id}}</td>
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{$postback->url}}</td>
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{$postback->request}}</td>
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{$postback->response}}</td>
                                <td class="px-2 py-1 text-white border-b border-gray-300 text-xs">{{$postback->created_at}}</td>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                    <div class="mt-4">
{{--                         {{ $postbacks->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
