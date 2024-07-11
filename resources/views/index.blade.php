@extends('layouts.main')
@section('content')
    <div class="flex-grow">
        <div class="container mx-auto">
            <div class="flex flex-col-reverse items-center justify-between md:flex-row">
                <div class="flex flex-col justify-center">
                    <div class="mt-8 ml-auto text-center w-fit h-fit md:ml-8 md:mt-20 md:text-start">
                        <h2 class="text-xl font-bold uppercase">welcome to my world</h2>
                        <p class="mt-2 text-lg capitalize">hey i'm</p>
                        <p class="mt-2 text-2xl font-semibold capitalize whitespace-nowrap">{{ $user->name }}
                        </p>
                        <div class="flex items-center justify-between gap-4 mt-8 capitalize">
                            <a class="px-8 py-1.5 rounded-full bg-blue-500 text-white border border-gray-300 hover:bg-blue-400 active:bg-blue-500 transition duration-300"
                                href="/resume">resume</a>
                            <a class="px-8 py-1.5 rounded-full bg-white text-black border border-gray-300 hover:bg-gray-200 active:bg-gray-300 transition duration-300"
                                href="/contact">contact</a>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center ml-4 md:ml-auto lg:mr-64 md:mr-auto">
                    <img class="h-[34rem] w-fit object-cover" src="/assets/images/adhitya.png" alt="adhitya">
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 py-4 mt-8 bg-stone-300 md:-mt-4">
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="text-2xl font-medium capitalize">about me</h2>
                <p class="max-w-2xl mt-3 text-lg">{{ $user->profile->about }}</p>
                <div class="flex items-center justify-between gap-4 mt-4">
                    <a class="rounded-full bg-gradient-to-t from-fuchsia-600 to-purple-600 fill-white p-1.5"
                        href="https://www.instagram.com/{{ $user->profile->instagram }}" target="_blank"
                        rel="noopener noreferrer"><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg></a>
                    <a class="rounded-full bg-gradient-to-t bg-blue-800/80 fill-white p-1.5"
                        href="https://www.facebook.com/{{ $user->profile->facebook }}" target="_blank"
                        rel="noopener noreferrer"><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                        </svg></a>
                    <a class="rounded-full bg-gradient-to-t bg-red-600 fill-white p-1.5"
                        href="malto:{{ $user->email }}"><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M386.1 228.5c1.8 9.7 3.1 19.4 3.1 32C389.2 370.2 315.6 448 204.8 448c-106.1 0-192-85.9-192-192s85.9-192 192-192c51.9 0 95.1 18.9 128.6 50.3l-52.1 50c-14.1-13.6-39-29.6-76.5-29.6-65.5 0-118.9 54.2-118.9 121.3 0 67.1 53.4 121.3 118.9 121.3 76 0 104.5-54.7 109-82.8H204.8v-66h181.3zm185.4 6.4V179.2h-56v55.7h-55.7v56h55.7v55.7h56v-55.7H627.2v-56h-55.7z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
@endsection
