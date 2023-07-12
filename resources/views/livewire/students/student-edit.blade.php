<div>
    <div class="ml-60 px-2">
        <div class="block w-full p-3 border border-gray-200 rounded-lg shadow ">
            <p class=" text-sm font-semibold font-Notokhmer">
                សិស្ស
            </p>
            <p class=" text-base text-blue-700 font-Notokhmer">
                កែប្រែព័ត៍មានសិស្ស
            </p>
        </div>

        <form wire:submit.prevent="update">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-6 mt-3">
                <div class="mt-5 md:mt-0 md:col-span-2 border border-slate-300 rounded-xl shadow-xl">
                    <div class=" overflow-hidden sm:rounded-md">
                        <div class="px-4 sm:p-3">
                            <label for="code" class="block font-Notokhmer text-base text-black">អត្តលេខ</label>
                            <input type="text" name="code" id="code" wire:model="code"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('code')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 sm:p-3 flex justify-between gap-2 row items-center">
                            <div class="w-full">
                                <label for="first_name"
                                    class="block font-Notokhmer text-base text-black">នាមត្រកូល</label>
                                <input type="text" name="first_name" id="first_name" wire:model="first_name"
                                    class="form-input rounded-md w-full shadow-sm font-Notokhmer mt-1 block " />
                                @error('first_name')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class=" w-full">
                                <label for="last_name"
                                    class="block font-Notokhmer text-base text-black">នាមខ្លួន</label>
                                <input type="text" name="last_name" id="last_name" wire:model="last_name"
                                    class="form-input rounded-md font-Notokhmer shadow-sm mt-1 block w-full" />
                                @error('last_name')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="px-4 sm:p-3">
                            <label for="gender"
                                class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                                ភេទ
                            </label>
                            <select id="gender" wire:model="gender"
                                class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>សូមជ្រើសរើស ភេទ</option>
                                <option value="1">ប្រុស</option>
                                <option value="2">ស្រី</option>
                            </select>
                            @error('gender')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 sm:p-3">
                            <label for="dob"
                                class="block font-Notokhmer text-base text-black">ថ្ងៃខែឆ្នាំកំណើត</label>
                            <input type="date" wire:model="dob" name="dob" id="dob"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('fa_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 sm:p-3">
                            <label for="fa_name" class="block font-Notokhmer text-base text-black">ឈ្មោះឪពុក</label>
                            <input type="text" name="fa_name" id="fa_name" wire:model="fa_name"
                                class="form-input rounded-md font-Notokhmer shadow-sm mt-1 block w-full" />
                            @error('fa_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 sm:p-3">
                            <label for="mo_name" class="block font-Notokhmer text-base text-black">ឈ្មោះម្ដាយ</label>
                            <input type="text" name="_moname" id="mo_name" wire:model="mo_name"
                                class="form-input rounded-md font-Notokhmer shadow-sm mt-1 block w-full" />
                            @error('mo_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 text-right sm:px-6">
                            <div
                                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-Notokhmer text-base text-white hover:bg-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                                </svg>
                                <a href="{{ route('student_index') }}" class="ml-2">
                                    ចាកចេញ
                                </a>
                            </div>
                            |
                            <div>
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                                    </svg>
                                    រក្សាទុក
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
