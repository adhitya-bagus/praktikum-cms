<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $user->name }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex flex-col h-screen">
        @include('layouts.partials.navbar')
        @yield('content')
        <footer class="flex flex-col items-center mt-4 mb-4">
            <p>Copyright @ {{ $user->name }} 2024</p>
        </footer>
    </div>
    <div class="fixed inset-0 bg-black/25" id="signin-modal" style="display: none;">
        <div class="flex flex-col items-center justify-center w-full h-full">
            <div class="w-full max-w-2xl p-4 bg-white rounded-lg">
                <div class="flex flex-row items-center justify-between">
                    <h2 class="text-xl font-medium capitalize">sign in</h2>
                    <button
                        class="text-gray-800 transition duration-300 hover:text-gray-400 active:text-gray-700 hover:scale-105 active:scale-105"
                        type="button" id="close-signin-modal"><svg class="w-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg></button>
                </div>
                <form class="flex flex-col items-start mt-8" action="/signin" method="POST">
                    @csrf
                    <input class="w-full px-4 py-2 border border-gray-300 rounded-md outline-none" type="email"
                        name="email" id="email" placeholder="Email">
                    <input class="w-full px-4 py-2 mt-4 border border-gray-300 rounded-md outline-none" type="password"
                        name="password" id="password" placeholder="password">
                    <button
                        class="px-8 py-2 mt-4 text-white capitalize transition duration-300 bg-blue-500 rounded-md hover:bg-blue-400 active:bg-blue-500"
                        type="submit">login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="/assets/js/script.js"></script>
</body>

</html>
