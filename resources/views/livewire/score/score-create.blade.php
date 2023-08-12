<div>
    <div class="ml-60 px-2">
        <div class="block w-full p-3 border border-gray-200 rounded-lg shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ពិន្ទុ
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">បំពេញព័ត៍មានខាងក្រោម</p>
        </div>
        <div class="max-w-4xl mx-auto py-5 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow-lg overflow-hidden sm:rounded-md">
                    <div class=" flex justify-center">
                        <div class="px-4 sm:p-3">
                            <label for="academic_class_student_id"
                                class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                                ឈ្មោះសិស្ស
                            </label>
                            <select id="academic_class_student_id" wire:model="academic_class_student_id"
                                class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ជ្រើសរើស​ សិស្ស</option>
                                @foreach ($students as $stu)
                                    <option value="{{ $stu->id }}">
                                        {{ $stu->first_name }} {{ $stu->last_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('academic_class_student_id')
                                <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 sm:p-3">
                            <label for="text"
                                class="block mb-2 text-base font-Notokhmer text-black dark:text-black">ប្រឡង</label>
                            <select wire:model="types"
                                class="border border-gray-300 text-black text-base rounded-lg font-Notokhmer dark:border-gray-600">
                                <option selected>ជ្រើសរើស ប្រភេទ</option>
                                <option value="1">ប្រចាំ ឆមាស</option>
                                <option value="2">ប្រចាំ ខែ</option>
                            </select>
                        </div>
                        <div class=" px-4 sm:p-3">
                            <label for="status"
                                class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                                ឆមាស
                            </label>
                            <select wire:model="semester"
                                class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ជ្រើសរើស​ ឆមាស</option>
                                <option value="1">
                                    ឆមាស ១
                                </option>
                                <option value="2">
                                    ឆមាស​ ២
                                </option>
                            </select>
                            @error('semester')
                                <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-center col-6">
                        @if ($this->types == 2)
                            <div>
                                <select id="teacher_id" wire:model="type"
                                    class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>ជ្រើសរើស​ ខែ</option>

                                    <option value="1">
                                        មករា
                                    </option>
                                    <option value="2">
                                        កុម្ភៈ
                                    </option>
                                    <option value="3">
                                        មីនា
                                    </option>
                                    <option value="4">
                                        មេសា
                                    </option>
                                    <option value="5">
                                        ឧសភា
                                    </option>
                                    <option value="6">
                                        មិថុនា
                                    </option>
                                    <option value="7">
                                        កក្កដា
                                    </option>
                                    <option value="8">
                                        សីហា
                                    </option>
                                    <option value="9">
                                        កញ្ញា
                                    </option>
                                    <option value="10">
                                        តុលា
                                    </option>
                                    <option value="11">
                                        វិច្ឆិកា
                                    </option>
                                    <option value="12">
                                        ឆ្នូ
                                    </option>
                                </select>
                                @error('type')
                                    <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        @endif
                    </div>

                    {{-- <div class="px-4 sm:p-3">
                        <label for="status" class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                            ប្រចាំខែ
                        </label>
                        <select id="teacher_id" wire:model="type"
                            class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ជ្រើសរើស​ ខែ</option>
                            <option value="0">
                                ឆមាស
                            </option>
                            <option value="1">
                                មករា
                            </option>
                            <option value="2">
                                កុម្ភៈ
                            </option>
                            <option value="3">
                                មីនា
                            </option>
                            <option value="4">
                                មេសា
                            </option>
                            <option value="5">
                                ឧសភា
                            </option>
                            <option value="6">
                                មិថុនា
                            </option>
                            <option value="7">
                                កក្កដា
                            </option>
                            <option value="8">
                                សីហា
                            </option>
                            <option value="9">
                                កញ្ញា
                            </option>
                            <option value="10">
                                តុលា
                            </option>
                            <option value="11">
                                វិច្ឆិកា
                            </option>
                            <option value="12">
                                ឆ្នូ
                            </option>
                        </select>
                        @error('type')
                            <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                        @enderror
                    </div> --}}
                    <div class="text-center font-bold text-2xl">បញ្ចូលពិន្ទុ</div>
                    <div class=" flex justify-around mt-4">
                        <div>
                            <div class="ml-4">
                                <label for="khmer" class="text-base font-Notokhmer">ភាសាខ្មែរ</label>
                                <input type="number" wire:model="khmer" name="khmer" id="khmer"
                                    class="px-2 py-1 rounded-md shadow-sm ml-2">
                                @error('khmer')
                                    <p class="text-base font-Notokhmer text-red-600 ml-20">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="ml-4 my-5">
                                <label for="math" class="text-base font-Notokhmer">គណិតវិទ្យា</label>
                                <input type="number" name="math" wire:model="math" id="math"
                                    class="px-2 py-1 rounded-md shadow-sm">
                                @error('math')
                                    <p class="text-base font-Notokhmer text-red-600 ml-20">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="mr-4 ml-2">
                                <label for="science" class="text-base font-Notokhmer">វិទ្យាសាស្រ្ត</label>
                                <input type="number" wire:model="science" name="sciencce" id="sciencce"
                                    class="px-2 py-1 rounded-md shadow-sm">
                                @error('science')
                                    <p class="text-base font-Notokhmer text-red-600 ml-20">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mr-3 my-5 ml-1">
                                <label for="socail" class="text-base font-Notokhmer">សិក្សាសង្គម</label>
                                <input type="number" wire:model="socail" name="socail" id="socail"
                                    class="px-2 py-1 rounded-md shadow-sm">
                                @error('socail')
                                    <p class="text-base font-Notokhmer text-red-600 ml-20">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end px-4 py-3  text-right sm:px-6">
                    <a href="{{ route('score_index', $academic_class->id) }}"
                        class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        ចាកចេញ
                    </a>
                    |
                    <button wire:click="CreateOnScore"
                        class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        រក្សាទុក
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
