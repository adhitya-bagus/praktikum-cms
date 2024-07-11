@extends('layouts.main')
@section('content')
    <div class="flex-grow">
        <div class="container max-w-5xl pt-8 pb-16 mx-auto mt-16 rounded-lg bg-stone-200">
            <div class="flex justify-center mt-8">
                <div class="flex flex-col items-center">
                    <h1 class="text-3xl font-semibold capitalize">Contact</h1>
                    <p class="mt-2 font-light">Lets Work Together!</p>
                </div>
            </div>
            <form method="POST" action="/" class="flex flex-col items-center max-w-xl mx-auto mt-8">
                <input class="w-full px-4 py-2 bg-white rounded-md" type="text" name="full_name" id="full_name"
                    placeholder="Full Name">
                <input class="w-full px-4 py-2 mt-4 bg-white rounded-md" type="email" name="email" id="email"
                    placeholder="Email">
                <input class="w-full px-4 py-2 mt-4 bg-white rounded-md" type="number" name="phone" id="phone"
                    placeholder="Phone Number">
                <textarea class="w-full px-4 py-2 mt-4 bg-white rounded-md" rows="5" name="message" id="message"
                    placeholder="Message"></textarea>

                <button
                    class="block w-full py-2 mt-4 text-white transition duration-300 bg-blue-500 rounded-full hover:bg-blue-400 active:bg-blue-500"
                    type="submit">submit</button>
            </form>
        </div>
    </div>
@endsection
