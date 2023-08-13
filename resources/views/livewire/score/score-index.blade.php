<div>
    <div class="ml-60 mx-2">
        <div class="block w-full p-3 border border-gray-200 rounded-lg shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ពិន្ទុ
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">បញ្ជីពិន្ទុតាមថ្នាក់សិក្សា</p>
        </div>

        <div class=" py-7 flex justify-between">
            <a href="{{ route('class_index') }}"
                class="px-8 py-3 border rounded-md text-white font-Notokhmer bg-red-800 text-base hover:bg-red-700">
                ចាកចេញ
            </a>
            <div class="flex">
                <div class="flex items-center">
                    <label for="text" class="text-base font-Notokhmer px-2">ស្វែងរកពិន្ទុ</label>
                </div>
                <div>
                    <select wire:model.lazy="type" class="rounded-md font-Notokhmer">
                        <option selected>ជ្រើសរើសប្រភេទ</option>
                        <option value="1">ប្រលងប្រចាំខែ</option>
                        <option value="2">ប្រលងឆមាស</option>
                    </select>
                </div>
                @if ($type == 1)
                    <div class="flex items-center">
                        <label for="text" class="text-base font-Notokhmer px-2">ប្រចាំ</label>
                    </div>
                    <div>
                        <select wire:model="month" class="rounded-md font-Notokhmer">
                            <option selected>ប្រចាំខែ</option>
                            <option value="1">មករា</option>
                            <option value="2">កុម្ភៈ</option>
                            <option value="3">មិនា</option>
                            <option value="4">មេសា</option>
                            <option value="5">ឧសភា</option>
                            <option value="6">មិថុនា</option>
                            <option value="7">កក្កដា</option>
                            <option value="8">សីហា</option>
                            <option value="9">កញ្ញា</option>
                            <option value="10">តុលា</option>
                            <option value="11">វិច្ឆកា</option>
                            <option value="12">ធ្នូ</option>
                        </select>
                    </div>
                @elseif ($type == 2)
                    <div>

                        <label for="text" class="text-base font-Notokhmer px-2">ប្រចាំ</label>
                        <select wire:model="semester" class="rounded-md text-base font-Notokhmer">
                            <option selected>ប្រចាំឆមាស</option>
                            <option value="1">ឆមាស ១</option>
                            <option value="2">ឆមាស ២</option>
                        </select>
                    </div>
                @endif


            </div>
            <div>
                <a href="{{ route('score_create', $academic_class->id) }}"
                    class="px-8 py-3 border rounded-md bg-blue-600 font-Notokhmer text-base text-white hover:bg-blue-500">
                    បញ្ចូលពិន្ទុ
                </a>
                |
                <a href="{{ route('score_report', $academic_class->id) }}"
                    class="px-8 py-3 border rounded-md bg-green-600 font-Notokhmer text-base text-white hover:bg-green-500">
                    របាយការណ៍ពិន្ទុ
                </a>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-1">
                <div class="shadow-lg overflow-hidden border sm:rounded-md">
                    <table class="w-full text-sm text-center font-moul border divide-y divide-gray-200">
                        <thead>
                            <tr class="text-base font-Notokhmer">
                                <th scope="col" class="px-6 py-3 border border-gray-400">
                                    ល.រ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-gray-400">
                                    ឈ្មោះសិស្ស
                                </th>
                                <th scope="col" class="px-6 py-3 border border-gray-400">
                                    ភេទ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-gray-400">
                                    ភាសាខ្មែរ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-gray-400">
                                    គណិតវិទ្យា
                                </th>
                                <th scope="col" class="px-6 py-3 border border-gray-400">
                                    វិទ្យាសាស្រ្ត
                                </th>
                                <th scope="col" class="px-6 py-3 border border-gray-400">
                                    សិក្សាសង្គម
                                </th>
                                <td scope="col" class="px-6 py-3 border border-gray-400 font-Notokhmer font-bold ">
                                    សរុប
                                </td>
                                <th scope="col" class="px-6 py-3 border border-gray-400">
                                    សកម្មភាព
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($semester != null || $month != null)
                                @foreach ($score as $scor)
                                    <tr>
                                        <td scope="col" class="px-6 py-3  border border-gray-400">
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-gray-400 ">
                                            {{ $scor->first_name }} {{ $scor->last_name }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-gray-400">
                                            @if ($scor->gender == 1)
                                                ប
                                            @else
                                                ស
                                            @endif
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-gray-400">
                                            {{ $scor->khmer }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-gray-400">
                                            {{ $scor->math }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-gray-400">
                                            {{ $scor->science }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-gray-400">
                                            {{ $scor->socail }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-red-600 font-bold border border-gray-400">
                                            {{ $scor->khmer + $scor->math + $scor->science + $scor->socail }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 border border-gray-400">
                                            <div class=" flex px-6 py-3 justify-center">
                                                <a href="{{ route('score_edit', [$scor->id]) }}">
                                                    <svg class="h-5 w-5 text-green-500" viewBox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" />
                                                        <path
                                                            d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                        <line x1="16" y1="5" x2="19"
                                                            y2="8" />
                                                    </svg>
                                                </a>
                                                <a wire:click="AttDelete ({{ $scor->id }})">
                                                    <svg class="h-5 w-5 text-red-500" width="24" height="24"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" />
                                                        <line x1="4" y1="7" x2="20"
                                                            y2="7" />
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17" />
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="px-6 py-3 border border-gray-400">
                                    <td colspan="9" class="px-6 py-3 text-black text-lg font-Notokhmer">
                                        គ្មានទិន្នន័យ</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
