<div>
    <div class="px-64 shadow-lg overflow-hidden sm:rounded-md ml-60">
        <form action="" wire:submit.prevent="YearUpdate">
            <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name_year" class="block font-serif text-sm text-black">Year</label>
                            <input type="text" name="name_year" id="name_year" wire:model="name_year"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('name_year')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="start_date" class="block font-serif text-sm text-black">Start Date</label>
                            <input type="date" wire:model="start_date" name="start_date" id="start_date"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('start_date')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="end_date" class="block font-serif text-sm text-black">End Dae</label>
                            <input type="date" name="end_date" id="end_date" wire:model="end_date"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('end_date')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block mb-2 text-sm font-serif text-gray-900 dark:text-black">
                                Status
                            </label>
                            <select id="status" wire:model="status"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a status</option>
                                <option value="1">កំពុងសិក្សា</option>
                                <option value="2">សិក្សារួច</option>
                            </select>
                            @error('gender')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button wire:click="YearUpdate"
                                class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
