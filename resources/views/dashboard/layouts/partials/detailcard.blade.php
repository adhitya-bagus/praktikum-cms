<div class="max-w-full">
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <tbody>
                            @foreach ($items as $item)
                                @if ($item['value'] != '')
                                    <tr class="font-medium transition duration-300 ease-in-out bg-white">
                                        <td class="px-6 py-2.5 w-10 whitespace-nowrap text-sm text-gray-700 capitalize">
                                            {!! $item['key'] !!}
                                        </td>
                                        <td class="px-6 py-2.5 text-sm text-gray-500">
                                            {!! $item['value'] !!}
                                        </td>
                                    </tr>
                                @else
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
