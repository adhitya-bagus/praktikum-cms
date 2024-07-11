@extends('layouts.main')
@section('content')
    <div class="flex-grow">
        <div class="container max-w-5xl mx-auto">
            <div class="flex justify-center mt-16">
                <h1 class="text-3xl font-semibold capitalize">resume</h1>
            </div>
            <div class="mx-8 mt-8">
                <h2 class="text-2xl font-medium capitalize">experience</h2>
                @if (count($user->resumes) > 0)
                    @foreach ($user->resumes as $resume)
                        <div class="flex flex-col mt-4">
                            <div class="flex flex-row items-center p-4 bg-white rounded-xl">
                                <div class="p-4 rounded-xl bg-stone-200">
                                    <p>
                                        {{ $resume->tahun_mulai }}-{{ $resume->tahun_keluar != null ? $resume->tahun_keluar : 'sekarang' }}
                                    </p>
                                    <br>
                                    <p>
                                        {{ $resume->posisi }}
                                    </p>
                                    <p> {{ $resume->perusahaan }}
                                    </p>
                                    <p>{{ $resume->tempat }}</p>
                                </div>
                                <div class="flex-grow w-full p-4 text-center">
                                    <p>{{ $resume->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection
