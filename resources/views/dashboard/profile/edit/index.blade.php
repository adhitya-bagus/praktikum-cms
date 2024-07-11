@extends('dashboard.layouts.main')
@section('content')
    <div class="p-4 bg-white rounded-md">
        <div class="flex items-center justify-between mb-16">
            <h3 class="ml-6 text-xl font-medium">Edit Profile Pribadi</h3>
        </div>
        <form action="/dashboard/profile/edit" method="POST">
            @csrf
            <input type="hidden" name="profile_id" id="profile_id" value="{{ $user->profile->id }}">
            @component('dashboard.layouts.partials.detailcard', [
                'items' => [
                    [
                        'key' => 'nama lengkap',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="text" name="full_name" id="full-name" value="' .
                            $user->name .
                            '">',
                    ],
                    [
                        'key' => 'nomor handphone',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="number" name="phone_number" id="phone-number" value="' .
                            $user->profile->phone_number .
                            '">',
                    ],
                    [
                        'key' => 'alamat instagram',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="text" name="instagram" id="instagram" value="' .
                            $user->profile->instagram .
                            '">',
                    ],
                    [
                        'key' => 'alamat facebook',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="text" name="facebook" id="facebook" value="' .
                            $user->profile->facebook .
                            '">',
                    ],
                    [
                        'key' => 'alamat email',
                        'value' =>
                            '<input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="email" name="email" id="email" value="' .
                            $user->email .
                            '" disabled>',
                    ],
                    [
                        'key' => 'about me',
                        'value' =>
                            '<textarea class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" rows=5 type="text" name="about" id="about">' .
                            $user->profile->about .
                            '</textarea>',
                    ],
                ],
            ])
            @endcomponent
            <div class="flex justify-end gap-4">
                <a href="/dashboard/profile"
                    class="px-4 py-2 text-black capitalize transition duration-300 bg-gray-300 rounded-md hover:bg-gray-400 active:bg-gray-300">batal</a>
                <button
                    class="px-4 py-2 text-white capitalize transition duration-300 bg-blue-500 rounded-md hover:bg-blue-400 active:bg-blue-500"
                    type="submit">simpan</button>
            </div>
        </form>
    </div>
@endsection
