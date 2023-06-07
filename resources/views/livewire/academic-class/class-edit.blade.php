<div>
    <div class="px-64 shadow-lg overflow-hidden sm:rounded-md ml-60">
        <div class=" flex justify-between float-right">
            <div class=" text-blue-600 float-right">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
        <h1 class="px-8 text-lg text-blue-600">Create Academic Class</h1>
        <div class="max-w-4xl mx-auto py-7 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="name_class" class="block font-serif text-sm text-black">Name Class</label>
                        <input type="text" name="name_class" id="name_year" wire:model="name_class"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('name_class')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="status" class="block mb-2 text-sm font-serif text-gray-900 dark:text-black">
                            Primary Teacher
                        </label>
                        <select id="teacher_id" wire:model="teacher_id" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose A Primary Teachers</option>
                            @foreach ($teachers as $tea )
                                <option value="{{$tea->id}}">{{$tea->first_name}} {{$tea->last_name}}</option>
                            @endforeach
                        </select>
                        @error('teacher_id')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="academic_year_id" class="block mb-2 text-sm font-serif text-gray-900 dark:text-black">
                            Academic Year
                        </label>
                        <select id="academic_year_id" wire:model="academic_year_id"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a Academic Year</option>
                            @foreach ($academic_years as $year )
                            <option value="{{$year->id}}">{{$year->name_year}}</option>

                            @endforeach
                        </select>
                        @error('teacher_id')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <a href="{{route('class_index')}}" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red    -700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Back</a> |
                        <button wire:click="UpdateOnAcdemicClass"
                            class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Update
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
