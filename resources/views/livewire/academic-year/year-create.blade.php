<div>
    <div class="ml-60 px-2">
        <div class="block w-full p-3 border border-gray-200 rounded shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ឆ្នាំសិក្សា
            </p>
            <p class=" text-base text-blue-500  font-Notokhmer">ចូលបំពេញព័ត៌មានខាងក្រោម</p>
        </div>
        <div class="max-w-4xl mx-auto sm:px-3 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class=" border shadow-lg overflow-hidden sm:rounded-md">
                    <div class="px-4 sm:p-3">
                        <label for="name_year" class="block font-Notokhmer text-base text-black">ឆ្នាំសិក្សា</label>
                        <input type="text" name="name_year" id="name_year" wire:model="name_year"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('name_year')
                            <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 sm:p-3">
                        <label for="start_date" class="block font-Notokhmer text-base text-black">ថ្ងៃចាប់ផ្ដើម</label>
                        <input type="date" name="start_date" id="start_date" wire:model="start_date"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('start_date')
                            <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 sm:p-3">
                        <label for="end_date" class="block font-Notokhmer text-base text-black">ថ្ងៃបញ្ចប់</label>
                        <input type="date" wire:model="end_date" name="end_date" id="end_date"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('end_date')
                            <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 sm:p-3">
                        <label for="status" class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                            ស្ថានភាព
                        </label>
                        <select id="status" wire:model="status"
                            class="border border-gray-300 text-base font-Notokhmer text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option >ជ្រើសរើស ស្ថានភាព</option>
                            <option value="1" class="">កំពុងសិក្សា</option>
                            <option value="2">សិក្សារួច</option>
                            <option value="3">រង់ចាំ...</option>
                        </select>
                        @error('status')
                            <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                        @enderror

                    <div class="flex items-center justify-end px-4 py-4 text-right sm:px-6">
                        <a href="{{route('year_index')}}" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            ថយក្រោយ
                        </a> |
                        <button wire:click="YearOnCreate"
                            class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            រក្សាទុក
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
