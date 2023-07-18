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
            <div class="py-2 flex justify-between ">
                <a href="{{ route('class_create') }}"
                    class="hover:shadow-form rounded-md bg-blue-600 py-3 px-8 font-Notokhmer text-white  ">
                    បង្កើតថ្នាក់សិក្សា
                </a>
            </div>
            {{-- <div class="flex flex-col">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-1">
                    <div class="shadow-lg overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="w-full text-sm text-center border divide-y divide-gray-200">
                            <thead class="text-sm">
                                <tr>
                                    <th scope="col" class="px-6 py-3 ">
                                        លេខរៀង
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-Notokhmer text-base ">
                                        ឈ្មោះថ្នាក់
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-Notokhmer text-base">
                                        គ្រូបន្ទុកថ្នាក់
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-Notokhmer text-base">
                                        ឆ្នាំសិក្សា
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-Notokhmer text-base">
                                        សកម្មភាព
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($academic_classes as $class)
                                    <tr>
                                        <td scope="col" class="px-6 py-3  ">
                                            {{ $class->id }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 font-Notokhmer text-base">

                                        </td>
                                        <td scope="col" class="px-6 py-3 font-Notokhmer text-base">
                                            {{ $class->first_name }} {{ $class->last_name }}
                                        </td>

                                        <td scope="col" class="px-6 py-3 ">
                                            {{ $class->academic_year_name }}
                                        </td>

                                        <td scope="col" class="px-6 py-3 whitespace-nowrap text-sm font-medium ">
                                            <div class=" flex px-6 py-3 justify-center">
                                                <a href="{{ route('class_show', $class->id) }}">
                                                    <svg class="h-7 w-7 text-blue-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                </a>
                                                <a href="{{ route('class_edit', $class->id) }}">
                                                    <svg class="h-7 w-7 text-green-500"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z"/>
                                                        <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                        <line x1="16" y1="5" x2="19" y2="8" />
                                                    </svg>
                                                </a>
                                                <a wire:click="DeleteOnAcademicClass({{ $class->id }})">
                                                    <svg class="h-7 w-7 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="7" x2="20" y2="7" />  <line x1="10" y1="11" x2="10" y2="17" />
                                                        <line x1="14" y1="11" x2="14" y2="17" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
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
