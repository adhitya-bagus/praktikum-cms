@extends('dashboard.layouts.main')
@section('content')
    <div class="p-4 bg-white rounded-md">
        <div class="flex items-center justify-between mb-16">
            <h3 class="ml-6 text-xl font-medium">Data User</h3>
            <a class="block px-8 py-2 transition duration-300 bg-gray-300 border border-gray-300 rounded-md hover:bg-gray-400 active:bg-gray-300 "
                href="/dashboard/user/tambah">Tambah</a>
        </div>
        @php
            $tbody = [];
            foreach ($all_user as $item) {
                $tbody[] = [
                    '#' . $item->id,
                    $item->name,
                    $item->is_admin ? 'admin' : 'member',
                    "<div class='flex items-center gap-2'><a class='px-4 py-2 text-black capitalize transition duration-300 bg-gray-300 rounded-md hover:bg-gray-400 active:bg-gray-300' href='/dashboard/user/edit/" .
                    $item->id .
                    "'>edit</a>" .
                    ($item->is_admin
                        ? "<button onClick='alert(\"Admin tidak bisa di hapus\")' class='px-4 py-2 text-white capitalize transition duration-300 bg-red-400 rounded-md hover:bg-red-300 active:bg-red-500'>delete</button>"
                        : "<a class='px-4 py-2 text-white capitalize transition duration-300 bg-red-400 rounded-md hover:bg-red-300 active:bg-red-500' href='/dashboard/user/delete/" .
                            $item->id .
                            "'>delete</a>") .
                    '</div>',
                ];
            }
        @endphp
        @component('dashboard.layouts.partials.tableitem', [
            'thead' => ['id', 'name', 'status', 'opsi'],
            'tbody' => $tbody,
        ])
        @endcomponent
    </div>
@endsection
