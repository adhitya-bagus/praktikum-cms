<nav class="px-4 py-8">
    <div class="container flex items-center mx-auto">
        <a class="block text-xl font-medium text-center uppercase" href="/"><span
                class="whitespace-nowrap">{{ $user->name }}</a>
        <ul class="items-center justify-end hidden w-full text-xl capitalize md:flex lg:mr-52 md:mr-auto">
            <li><a class="block px-8 hover:text-blue-500 active:text-blue-400 transition duration-300 {{ Request::path() == '/' ? 'font-semibold' : '' }}"
                    href="/">home</a></li>
            <li><a class="block px-8 hover:text-blue-500 active:text-blue-400 transition duration-300 {{ Request::path() == 'resume' ? 'font-semibold' : '' }}"
                    href="/resume">resume</a></li>
            <li><a class="block px-8 hover:text-blue-500 active:text-blue-400 transition duration-300 {{ Request::path() == 'contact' ? 'font-semibold' : '' }}"
                    href="/contact">contact</a></li>
            <li><button class="block px-8 transition duration-300 hover:text-blue-500 active:text-blue-400"
                    id="signin-btn">Login</button>
            </li>
        </ul>
    </div>
</nav>
