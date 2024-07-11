@extends('dashboard.layouts.main')
@section('content')
    <div class="p-4 bg-white rounded-md">
        <div class="flex items-center justify-between mb-16">
            <h3 class="ml-6 text-xl font-medium">Data Resune</h3>
            <a class="block px-8 py-2 transition duration-300 bg-gray-300 border border-gray-300 rounded-md hover:bg-gray-400 active:bg-gray-300 "
                href="/dashboard/resume/tambah">Tambah</a>
        </div>
        @php
            $tbody = [];
            foreach ($user->resumes as $item) {
                $tbody[] = [
                    '#' . $item->id,
                    $item->posisi,
                    $item->perusahaan,
                    $item->tahun_mulai,
                    $item->tahun_keluar != null ? $item->tahun_keluar : 'sekarang',
                    "<div class='flex items-center gap-2'><a class='px-4 py-2 text-black capitalize transition duration-300 bg-gray-300 rounded-md hover:bg-gray-400 active:bg-gray-300' href='/dashboard/resume/edit/" .
                    $item->id .
                    "'>edit</a><a href='/dashboard/resume/delete/" .
                    $item->id .
                    "' onClick=\"return confirm('Are you sure you want to delete this')\" class='px-4 py-2 text-white capitalize transition duration-300 bg-red-400 rounded-md hover:bg-red-300 active:bg-red-500'>delete</a></div>",
                ];
            }
        @endphp
        @component('dashboard.layouts.partials.tableitem', [
            'thead' => ['id', 'posisi', 'persahaan', 'tahun mulai', 'tahun keluar', 'opsi'],
            'tbody' => $tbody,
        ])
        @endcomponent
    </div>
@endsection
