<div class="max-w-full mx-auto">
    <div class="flex flex-col max-h-full">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-y-auto">
                    <table class="min-w-full">
                        <thead class="border-b">
                            <tr>
                                @foreach ($thead as $item)
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-700 px-6 py-4 text-left capitalize">
                                        {{ $item }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($tbody) > 0)
                                @foreach ($tbody as $items)
                                    <tr
                                        class="border-b transition duration-300 ease-in-out hover:bg-gray-200 rounded-md font-medium">
                                        @foreach ($items as $item)
                                            <td class="text-sm text-gray-500 px-6 py-4 capitalize">
                                                {!! $item !!}
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            @else
                                <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-gray-200 rounded-md font-medium">
                                    <td colspan="{{ count($thead) }}"
                                        class="text-sm text-gray-500 px-6 py-4 capitalize text-center">
                                        empty data
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
