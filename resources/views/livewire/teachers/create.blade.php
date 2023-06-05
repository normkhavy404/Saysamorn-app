<div>
    <div class="px-64 shadow-lg overflow-hidden sm:rounded-md ml-60">
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="code" class="block font-serif text-sm text-black">Code</label>
                        <input type="text" name="code" id="code" wire:model="code"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('code')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6 flex justify-between">
                        <div>
                            <label for="first_name" class="block font-serif text-sm text-black">First Name</label>
                            <input type="text" name="first_name" id="first_name" wire:model="first_name"
                                class="form-input rounded-md shadow-sm mt-1 block w-100" />
                            @error('first_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="last_name" class="block font-serif text-sm text-black">Last Name</label>
                            <input type="text" name="last_name" id="last_name" wire:model="last_name"
                                class="form-input rounded-md shadow-sm mt-1 block w-auto" />
                            @error('last_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gender" class="block mb-2 text-sm font-serif text-gray-900 dark:text-black">
                            Gender
                        </label>
                        <select id="gender" wire:model="gender"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                        @error('gender')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="telephone" class="block font-serif text-sm text-black">Telephone</label>
                        <input type="text" wire:model="telephone" name="telephone" id="telephone"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('telephone')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="email" class="block font-serif text-sm text-black">Email</label>
                        <input type="email" name="email" id="email" wire:model="email"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('email')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button wire:click="submit"
                            class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Create
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
