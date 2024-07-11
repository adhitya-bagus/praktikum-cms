<div class="flex-1 h-full bg-white max-w-72">
    <div class="flex justify-center mt-8">
        <h2 class="text-xl font-semibold">Adhitya Admin</h2>
    </div>
    <div class="flex flex-col mx-4 text-lg mt-28">
        <a class="block px-4 py-2 rounded-md {{ Request::path() == 'dashboard' ? 'font-medium bg-black/5' : 'hover:bg-black/5 rounded-md active:bg-black/10 transition duration-300' }}"
            href="/dashboard">
            <svg class="inline w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                viewBox="28 236 17 16">
                <path
                    d="M28 250h6v-2h-6v2Zm16-14H28v2h16v-2Zm-3 6H28v2h13.25c1.1 0 2 .9 2 2s-.9 2-2 2H39v-2l-3 3 3 3v-2h2c2.21 0 4-1.79 4-4s-1.79-4-4-4Z"
                    fill-rule="evenodd" data-name="ic_wrap_text_24px" />
            </svg>
            Dashboard
        </a>
        <a class="block px-4 py-2 rounded-md {{ Request::path() == 'dashboard/profile' ? 'font-medium' : 'hover:bg-black/5 rounded-md active:bg-black/10 transition duration-300' }}"
            href="/dashboard/profile">
            <svg class="inline w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                viewBox="28 236 17 16">
                <path
                    d="M28 250h6v-2h-6v2Zm16-14H28v2h16v-2Zm-3 6H28v2h13.25c1.1 0 2 .9 2 2s-.9 2-2 2H39v-2l-3 3 3 3v-2h2c2.21 0 4-1.79 4-4s-1.79-4-4-4Z"
                    fill-rule="evenodd" data-name="ic_wrap_text_24px" />
            </svg>
            Data Profile
        </a>
        <a class="block px-4 py-2 rounded-md {{ Request::path() == 'dashboard/user' ? 'font-medium' : 'hover:bg-black/5 rounded-md active:bg-black/10 transition duration-300' }}"
            href="/dashboard/user">
            <svg class="inline w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                viewBox="28 236 17 16">
                <path
                    d="M28 250h6v-2h-6v2Zm16-14H28v2h16v-2Zm-3 6H28v2h13.25c1.1 0 2 .9 2 2s-.9 2-2 2H39v-2l-3 3 3 3v-2h2c2.21 0 4-1.79 4-4s-1.79-4-4-4Z"
                    fill-rule="evenodd" data-name="ic_wrap_text_24px" />
            </svg>
            Data User
        </a>
        <a class="block px-4 py-2 rounded-md {{ Request::path() == 'dashboard/resume' ? 'font-medium' : 'hover:bg-black/5 rounded-md active:bg-black/10 transition duration-300' }}"
            href="/dashboard/resume">
            <svg class="inline w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                viewBox="28 236 17 16">
                <path
                    d="M28 250h6v-2h-6v2Zm16-14H28v2h16v-2Zm-3 6H28v2h13.25c1.1 0 2 .9 2 2s-.9 2-2 2H39v-2l-3 3 3 3v-2h2c2.21 0 4-1.79 4-4s-1.79-4-4-4Z"
                    fill-rule="evenodd" data-name="ic_wrap_text_24px" />
            </svg>
            Data Resume
        </a>
    </div>
</div>
