<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <div class="relative flex flex-row h-screen overflow-hidden">
        @include('dashboard.layouts.partials.sidebar')
        <div class="flex-1 w-full px-8 pt-8 overflow-auto">
            <div class="flex flex-row items-center justify-between">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="304 28 20 12">
                        <path d="M304 38v2h20v-2h-20Zm0-5v2h20v-2h-20Zm0-5v2h20v-2h-20Z" fill-rule="evenodd"
                            data-name="ic_dehaze_24px" />
                    </svg>
                </button>
                <form action="/dashboard/logout" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center gap-4">
                        <p>admin</p>
                        <img class="object-cover w-8 h-8 rounded-full" src="/assets/images/adhitya.png" alt="">
                    </button>
                </form>
            </div>
            <div class="flex flex-col h-[calc(100%-2.4rem)] mt-6">
                <h2 class="text-2xl font-medium">Dashboard</h2>
                <ul class="flex items-center gap-2 mt-2 text-base font-medium capitalize">
                    <li><a href="/">home</a></li>
                    <li>/</li>
                    <li><a href="/dashboard">admin</a></li>
                    <li>/</li>
                    <li class="font-normal">{{ str_replace('dashboard/', '', Request::path()) }}</li>
                </ul>
                <div class="flex-grow mt-10">
                    @yield('content')
                </div>
                <footer class="py-4 text-center">Copyright @ Adhitya Bagus Kurniawan 2024</footer>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="/assets/js/script.js"></script>
</body>

</html>
