<div>
    <div class="ml-60 mx-2">
        <div class="block w-full p-3 border border-gray-200 rounded shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ថ្នាក់សិក្សា
            </p>
            <p class=" text-base text-blue-500  font-Notokhmer">ចូរកែប្រែព័ត៍មានខាងក្រោម</p>
        </div>
        <div class=" flex justify-between float-right">
            <div class=" text-blue-600 float-right">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="max-w-4xl mx-auto py-5 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow-lg border border-gray-100 overflow-hidden sm:rounded-md">
                    <div class="px-4 sm:p-3">
                        <label for="name_class" class="block font-Notokhmer text-base text-black">ឈ្មោះថ្នាក់</label>
                        <input type="text" name="name_class" id="name_year" wire:model="name_class"
                            class="form-input rounded-md shadow-sm mt-1 block w-full  font-Notokhmer text-base" />
                        @error('name_class')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 sm:p-3">
                        <label for="status"
                            class="block mb-2 text-base font-Notokhmer  text-gray-900 dark:text-black">
                            គ្រូបន្ទុកថ្នាក់
                        </label>
                        <select id="teacher_id" wire:model="teacher_id"
                            class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ជ្រើសរើស គ្រូបន្ទុកថ្នាក់</option>
                            @foreach ($teachers as $tea)
                                <option value="{{ $tea->id }}">{{ $tea->first_name }} {{ $tea->last_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('teacher_id')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 sm:p-3">
                        <label for="academic_year_id"
                            class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                            ឆ្នាំសិក្សា
                        </label>
                        <select id="academic_year_id" wire:model="academic_year_id"
                            class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ជ្រើសរើស ឆ្នាំសិក្សា</option>
                            @foreach ($academic_years as $year)
                                <option value="{{ $year->id }}">{{ $year->name_year }}</option>
                            @endforeach
                        </select>
                        @error('teacher_id')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end px-4 py-2 text-right sm:px-6">
                        <div
                            class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 -ml-2 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                            <a href="{{ route('class_index') }}">
                                ចាកចេញ
                            </a>
                        </div>
                        |
                        <button wire:click="UpdateOnAcdemicClass"
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
</div>
