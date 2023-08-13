<div>
    <div style="margin-left: 16vw; margin-right: 20px">
        <div class="block w-full p-3 border border-gray-200 rounded shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ថ្នាក់សិក្សា
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">បញ្ជីឈ្មោះថ្នាក់សិក្សា</p>
        </div>
        <div class="relative overflow-x-auto  sm:rounded-lg">
            <div class=" flex justify-between float-right">
                <div class=" text-blue-600 float-right">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="py-2 flex justify-between">
                <a href="{{ route('class_create') }}"
                    class="hover:shadow-form rounded-md bg-blue-600 py-3 px-8 font-Notokhmer text-white  ">
                    បង្កើតថ្នាក់សិក្សា
                </a>
                <div class="mr-8">
                    <label for="year" class="text-base font-Notokhmer">ឆ្នាំសិក្សា</label>
                    <select id="year" class=" rounded-md" wire:model="academic_year">
                        @foreach ($academic_years as $year)
                            <option value="{{ $year->id }}">{{ $year->name_year }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class=" ml-2 grid grid-cols-3 gap-2 py-1">
                <tbody>
                    @foreach ($academic_classes as $class)
                        <div class="w-full border max-w-sm overflow-hidden rounded-lg bg-white shadow-md duration-300">
                            <div class=" text-center py-2">
                                <p class="text-5xl font-Notokhmer">{{ $class->name_class }}</p>
                            </div>
                            <h1 class="mt-2 text-center text-2xl font-Notokhmer text-gray-900">{{ $class->first_name }}
                                {{ $class->last_name }}</h1>
                            <div class="text-center">
                                <a href="{{ route('class_edit', $class->id) }}">
                                    <button
                                        class="inline-block rounded-md bg-cyan-300 px-1 py-2 font-Notokhmer text-base text-white shadow-md duration-75 hover:bg-cyan-600">កែប្រែ</button>
                                </a>
                            </div>
                            <div class="space-x-4 bg-gray-100 py-4">
                                <div>
                                    <a href="{{ route('class_show', $class->id) }}">
                                        <button
                                            class="inline-block rounded-md bg-yellow-700 px-1 py-2 font-Notokhmer text-base text-red-100 shadow-md duration-75 hover:bg-yellow-500">
                                            បញ្ជីឈ្មោះសិស្ស
                                        </button>
                                    </a>
                                    <a href="{{ route('class_student_create', $class->id) }}">
                                        <button
                                            class="inline-block rounded-md bg-blue-800 px-1 py-2 font-Notokhmer text-base text-green-100 shadow-md duration-75 hover:bg-blue-600">
                                            ទាញសិស្សចូលថ្នាក់
                                        </button>
                                    </a>

                                    <a href="{{ route('attendent_index', $class->id) }}">
                                        <button
                                            class="inline-block rounded-md bg-green-800 px-1 py-2 font-Notokhmer text-base text-green-100 shadow-md duration-75 hover:bg-green-600">
                                            សម្រង់វត្តមាន
                                        </button>
                                    </a>
                                    <a href="{{ route('score_index', $class->id) }}">
                                        <button
                                            class="inline-block rounded-md bg-gray-800 px-3 py-2 font-Notokhmer text-base text-green-100 shadow-md duration-75 hover:bg-gray-600">
                                            ពិន្ទុ
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>
</div>
