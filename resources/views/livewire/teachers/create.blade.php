<div>
    <div class="ml-60 mx-2">
        <div class="block w-full p-3 border border-gray-200 rounded shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                គ្រូបង្រៀន
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">ចូរបំពេញព័ត៍មានខាងក្រោម</p>
        </div>
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 mt-3">
            <div class="mt-5 md:mt-0 md:col-span-2 border rounded-xl shadow-xl">
                <div class="overflow-hidden sm:rounded-md">
                    <div class="px-4 sm:p-2">
                        <label for="code" class="block font-Notokhmer text-xl text-black">អត្តលេខ</label>
                        <input type="text" name="code" id="code" wire:model="code"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('code')
                            <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 sm:p-2 flex justify-between gap-2 row items-center">
                        <div class="w-full">
                            <label for="first_name" class="block font-Notokhmer text-xl text-black">នាមត្រកូល</label>
                            <input type="text" name="first_name" id="first_name" wire:model="first_name"
                                class="form-input w-full font-Notokhmer  rounded-md shadow-sm mt-1 block w-100" />
                            @error('first_name')
                                <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label for="last_name" class="block font-Notokhmer text-xl text-black">នាមខ្លួន</label>
                            <input type="text" name="last_name" id="last_name" wire:model="last_name"
                                class="form-input font-Notokhmer rounded-md w-full shadow-sm mt-1 block" />
                            @error('last_name')
                                <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="px-4 sm:p-2">
                        <label for="gender" class="block mb-2 text-xl font-Notokhmer text-gray-900 dark:text-black">
                            ភេទ
                        </label>
                        <select id="gender" wire:model="gender"
                            class="border border-gray-300 text-gray-900 text-xl font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option class=" text-xl font-Notokhmer">ជ្រើសរើស ភេទ</option>
                            <option value="1" class=" text-xl font-Notokhmer">ប្រុស</option>
                            <option value="2" class=" text-xl font-Notokhmer">ស្រី</option>
                        </select>
                        @error('gender')
                            <p class="text-base font-Notokhmer  text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 sm:p-3">
                        <label for="telephone" class="block font-Notokhmer text-xl text-black">លេខទូរស័ព្ទ</label>
                        <input type="text" wire:model="telephone" name="telephone" id="telephone"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('telephone')
                            <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 sm:p-3">
                        <label for="email" class="block font-Notokhmer text-xl text-black">
                            អ៊ីមែល
                        </label>
                        <input type="email" name="email" id="email" wire:model="email"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('email')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div
                            class=" inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-Notokhmer text-base text-white hover:bg-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                            <a href="{{ route('index') }}">
                                ចាកចេញ
                            </a>
                        </div>
                        |
                        <button wire:click="submit"
                            class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-base font-Notokhmer text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
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
</div>
