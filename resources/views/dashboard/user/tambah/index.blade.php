@extends('dashboard.layouts.main')
@section('content')
    <div class="p-4 bg-white rounded-md">
        <div class="flex items-center justify-between mb-16">
            <h3 class="ml-6 text-xl font-medium">Tambah User</h3>
        </div>
        <form action="/dashboard/user/tambah" method="POST">
            @csrf
            @component('dashboard.layouts.partials.detailcard', [
                'items' => [
                    [
                        'key' => 'name',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="text" name="name" id="posisi">',
                    ],
                    [
                        'key' => 'email',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="email" name="email" id="email">',
                    ],
                    [
                        'key' => 'password',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="password" name="password" id="password">',
                    ],
                ],
            ])
            @endcomponent
            <div class="flex justify-end gap-4">
                <a href="/dashboard/resume"
                    class="px-4 py-2 text-black capitalize transition duration-300 bg-gray-300 rounded-md hover:bg-gray-400 active:bg-gray-300">batal</a>
                <button
                    class="px-4 py-2 text-white capitalize transition duration-300 bg-blue-500 rounded-md hover:bg-blue-400 active:bg-blue-500"
                    type="submit">simpan</button>
            </div>
        </form>
    </div>
@endsection
