<div>
    <div class="ml-60 px-2">
        <div class="block w-full p-3 border border-gray-200 rounded-lg shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ស្រង់អវត្តមាន
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">បំពេញព័ត៍មានខាងក្រោម</p>
        </div>
        <div class="max-w-4xl mx-auto py-5 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow-lg border overflow-hidden sm:rounded-md">

                    <div class="px-4 sm:p-3">
                        <label for="status" class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                            ឈ្មោះសិស្ស
                        </label>
                        <select id="academic_class_student_id" wire:model="academic_class_student_id"
                            class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ជ្រើសរើស​ សិស្ស</option>
                            @foreach ($students as $stu)
                                <option value="{{ $stu->id }}">{{ $stu->first_name }} {{ $stu->last_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('academic_class_student_id')
                            <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 sm:p-3">
                        <label for="status" class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                            ប្រភេទ
                        </label>
                        <select id="teacher_id" wire:model="type"
                            class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ជ្រើសរើស​ ប្រភេទ</option>
                            <option value="1">ច្បាប់</option>
                            <option value="2">អត់ច្បាប់</option>
                        </select>
                        @error('type')
                            <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-end px-4 py-3  text-right sm:px-6">
                    <a href="{{ route('attendent_index', $academic_class->id) }}"
                        class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        ថយក្រោយ
                    </a>
                    |
                    <button wire:click="CreateAtt"
                        class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        រក្សាទុក
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
