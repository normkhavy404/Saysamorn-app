<!-- component -->
<aside
    class="ml-[-100%] fixed z-10 top-0 pb-3 px-1 w-full flex flex-col justify-between h-screen border-r bg-blue-400 transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%]">
    <div>
        <div class="mt-1 text-center ">
            <img class=" ml-16" src="{{ Storage::url('images/thsis.png') }}" width="90" height="90">
        </div>
        <ul class="space-y-1 tracking-wide mt-1">
            <li>
                <a href="{{ route('home') }}" aria-label="dashboard"
                    class="relative px-4 py-3 flex items-center space-x-4 rounded-xl {{ Request::is('/') ? 'text-white bg-gradient-to-r from-blue-200 to-cyan-400' : '' }}">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    <span class="mr-1 font-Notokhmer text-lg">ផ្ទាំងគ្រប់គ្រង</span>
                </a>
            </li>


            <li>
                <a href="{{ route('index') }}"
                    class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="group-hover:text-white font-Notokhmer text-lg  ">គ្រូបង្រៀន</span>
                </a>
            </li>
            <li>
                <a href="{{ route('student_index') }}"
                    class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>

                    <span class="group-hover:text-white text-lg font-Notokhmer">សិស្ស</span>
                </a>
            </li>
            <li>
                <a href="{{ route('year_index') }}"
                    class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                    </svg>


                    <span class="group-hover:text-white text-lg font-Notokhmer">ឆ្នាំសិក្សា</span>
                </a>
            </li>
            <li>
                <a href="{{ route('class_index') }}"
                    class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>

                    <span class="group-hover:text-white font-Notokhmer text-lg">ថ្នាក់សិក្សា</span>
                </a>
            </li>
            <li>
                <div class="ml-4">
                    <p class="text-lg font-Notokhmer">
                        ការកំណត់
                    </p>
                </div>
            </li>
            <li>
                <a href="{{ route('users.index') }}" class="px-4 py-3 flex items-center space-x-4 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                    <span class=" hover:text-white font-Notokhmer text-lg">អ្នកប្រើប្រាស់</span>
                </a>
            </li>
            <li>
                <a href="{{ route('role') }}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg>

                    <span class="group-hover:text-white font-Notokhmer text-lg">តួនាទី</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>


                    <span class="group-hover:text-white font-Notokhmer text-lg">ចាកចេញ</span>
                </a>
            </li>

            {{-- <li>
                <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                      </svg>

                    <span class="group-hover:text-white font-Notokhmer text-base">ពិន្ទុ</span>
                </a>
            </li> --}}

            {{-- <li>
                <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white  ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                      </svg>

                    <span class="group-hover:text-white font-Notokhmer text-base">ស្រង់វត្តមាន</span>
                </a>
            </li> --}}

        </ul>
    </div>

</aside>
<div class="sticky  position-absolute top-0 z-5 flex flex-col ml-auto mb-3 lg:w-[75%] xl:w-[80%] 2xl:w-[85%] ">
    <div class="sticky z-10 top-0 h-16 border-b bg-blue-400 lg:py-2.5">
        <div class="px-10 flex items-center justify-between space-x-4 2xl:container">
            <h5 hidden class="text-3xl text-gray-700 font-muol font-bold lg:block">
                ប្រព័ន្ធគ្រប់គ្រង សាលាបឋមសិក្សា សាយសាម៉ន
            </h5>
            <div class="flex space-x-4">
                <img class="h-10 w-10 "src="{{ Storage::url('images/cambodia.png.png') }}" width="230"
                    height="200" alt="logo">
            </div>
        </div>
    </div>
</div>
