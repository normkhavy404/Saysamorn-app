<div>
    <div class="ml-60 mx-2">
        <div class="block w-full p-3 border border-gray-200 rounded shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ថ្នាក់សិក្សាសិស្ស
            </p>
            <p class="text-base text-blue-500 font-Notokhmer">ចូរបំពេញព័ត៌មានខាងក្រោម</p>
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
                <div class="shadow-lg border overflow-hidden sm:rounded-md">

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="status" class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                            ឈ្មោះសិស្ស
                        </label>
                        <select id="teacher_id" wire:model="student_id"
                            class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ជ្រើសរើស​ សិស្ស</option>
                            @foreach ($students as $stu)
                                <option value="{{ $stu->id }}">{{ $stu->first_name }} {{ $stu->last_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('student_id')
                            <p class="text-base font-Notokhmer text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    {{--
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="academic_year_id" class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                            ថ្នាក់សិក្សា
                        </label>
                        <select id="academic_class_id" wire:model="academic_class_id"
                            class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ជ្រើសរើស ថ្នាក់សិក្សា</option>
                            @foreach ($academic_classes as $class)
                            <option value="{{$class->id}}">{{$class->name_class}}</option>

                            @endforeach
                        </select>
                        @error('academic_year_id')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div> --}}

                    {{-- <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="status" class="block mb-2 text-base font-Notokhmer text-gray-900 dark:text-black">
                            ស្ថានភាព
                        </label>
                        <select id="status" wire:model="status"
                            class="border border-gray-300 text-gray-900 text-base font-Notokhmer rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ជ្រើសរើស ស្ថានភាព</option>
                            <option value="1">កំពុងសិក្សា</option>
                            <option value="2">ឈប់សិក្សា</option>
                        </select>
                        @error('gender')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror --}}

                </div>

                <div class="flex items-center justify-end px-4 py-3  text-right sm:px-6">
                    <a href="{{ route('class_index') }}"
                        class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        ថយក្រោយ
                    </a>
                    |
                    <button wire:click="CreateOnClassStudent"
                        class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        រក្សាទុក
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
