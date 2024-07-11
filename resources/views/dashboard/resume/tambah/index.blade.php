@extends('dashboard.layouts.main')
@section('content')
    <div class="p-4 bg-white rounded-md">
        <div class="flex items-center justify-between mb-16">
            <h3 class="ml-6 text-xl font-medium">Tambah Resume</h3>
        </div>
        <form action="/dashboard/resume/tambah" method="POST">
            @csrf
            @component('dashboard.layouts.partials.detailcard', [
                'items' => [
                    [
                        'key' => 'posisi',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="text" name="posisi" id="posisi">',
                    ],
                    [
                        'key' => 'perusahaan',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="text" name="perusahaan" id="perusahaan">',
                    ],
                    [
                        'key' => 'tempat',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="text" name="tempat" id="tempat">',
                    ],
                    [
                        'key' => 'deskripsi',
                        'value' =>
                            '<textarea class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" rows=5 type="text" name="description" id="description"></textarea>',
                    ],
                    [
                        'key' => 'tahun mulai',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="number" name="tahun_mulai" id="tahun-mulai">',
                    ],
                    [
                        'key' => 'tahun keluar',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="number" name="tahun_keluar" id="tahun-keluar">',
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
