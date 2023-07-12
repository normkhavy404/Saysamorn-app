<div>
    <div class="ml-60 mx-2">
        <div class="block w-full p-3 border border-gray-200 rounded shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ទាញសិស្សចូលតាមថ្នាក់
            </p>
            <p class="text-base text-blue-500 font-Notokhmer">សូមជ្រើសរើសសិស្សដើម្បីទាញសិស្សចូលថ្នាក់</p>
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
                </div>

                <div class="flex items-center justify-end px-4 py-3  text-right sm:px-6">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 -ml-2 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                        <a href="{{ route('class_index') }}">
                            ចាកចេញ
                        </a>
                    </div>
                    |
                    <button wire:click="CreateOnClassStudent"
                        class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
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
