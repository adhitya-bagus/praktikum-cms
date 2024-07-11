@extends('dashboard.layouts.main')
@section('content')
    <div class="p-4 bg-white rounded-md">
        <div class="flex items-center justify-between mb-16">
            <h3 class="ml-6 text-xl font-medium">Profile Pribadi</h3>
            <a class="block px-8 py-2 transition duration-300 bg-gray-300 border border-gray-300 rounded-md hover:bg-gray-400 active:bg-gray-300 "
                href="/dashboard/profile/edit">Edit Profile</a>
        </div>
        @component('dashboard.layouts.partials.detailcard', [
            'items' => [
                [
                    'key' => 'nama lengkap',
                    'value' => '<span class="capitalize">: ' . $user->name . '</span>',
                ],
                [
                    'key' => 'nomor handphone',
                    'value' => '<span class="capitalize">: ' . $user->profile->phone_number . '</span>',
                ],
                [
                    'key' => 'alamat instagram',
                    'value' => '<span class="lowercase">: ' . $user->profile->instagram . '</span>',
                ],
                [
                    'key' => 'alamat facebook',
                    'value' => '<span class="capitalize">: ' . $user->profile->facebook . '</span>',
                ],
                [
                    'key' => 'alamat email',
                    'value' => '<span class="lowercase">: ' . $user->email . '</span>',
                ],
                [
                    'key' => 'about me',
                    'value' => ': ' . $user->profile->about,
                ],
            ],
        ])
        @endcomponent
    </div>
@endsection
