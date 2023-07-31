<div>
    <div class="ml-60">
        <div class="flex justify-between">
            <div
                class="my-2 inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-Notokhmer text-base text-white hover:bg-red-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                <a href="{{ route('score_index', $academic_class->id) }}">
                    ចាកចេញ
                </a>
            </div>
            <div class="mx-2">
                @if($month || $semester)
                <button class="text-white px-6 py-3 border rounded-md font-Notokhmer bg-blue-500 hover:bg-blue-400"
                    onclick="printDiv('printMe')">
                    បោះពុម្ភ
                </button>
                @endif
            </div>
        </div>
        <div class="flex">
            <div class="flex items-center">
                <label for="text" class="text-base font-Notokhmer px-2">របាយការណ៍ពិន្ទុ</label>
            </div>
            <div>
                <select wire:model.lazy="type" class="rounded-md font-Notokhmer">
                    <option selected>ជ្រើសរើសប្រភេទ</option>
                    <option value="1">ប្រលងប្រចាំខែ</option>
                    <option value="2">ប្រលងឆមាស</option>
                </select>
            </div>
            @if($type == 1)
            <div class="flex items-center">
                <label for="text" class="text-base font-Notokhmer px-2">របាយការណ៍ពិន្ទុ</label>
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

                <label for="text" class="text-base font-Notokhmer px-2">របាយការណ៍ពិន្ទុ</label>
                <select wire:model="semester" class="rounded-md text-base font-Notokhmer">
                    <option selected>ប្រចាំឆមាស</option>
                    <option value="1">ឆមាស ១</option>
                    <option value="2">ឆមាស ២</option>
                </select>
            </div>
            @endif


        </div>
        @if($month || $semester)
        <div id="printMe">
            <div class=" text-center text-lg font-muol font-bold">
                <p>
                    ព្រះជារាណាចក្រកម្ពុជា
                </p>
                <p>
                    ជាតិ សាសនា ព្រះមហាក្សត្រ
                </p>
            </div>
            <div class="ml-10 py-2 text-base font-muol font-bold">
                <p>
                    កម្រងសាលារោងគោ
                </p>
                <p>
                    សាលាបឋមសិក្សា សាយសាម៉ន
                </p>
            </div>
            <div class="text-center text-lg font-muol font-bold">
                <p>
                    ចំណាត់ថ្នាក់សិស្សប្រចាំ
                </p>
                <p>
                    ថ្នាក់ទី <td>{{ $academic_class->name_class }}</td>
                </p>
                <p>
                    ក្នុងឆ្នាំសិក្សា <td>{{ $academic_class->academic_year_name }}</td>
                </p>
            </div>
            <div class="flex flex-col">
                <div class="py-4 align-middle inline-block min-0w-full sm:px-6 lg:px-1">
                    <div class="shadow overflow-hidden border border-gray-200 sm:rounded-lg">
                        <table class="w-full text-sm text-center border divide-y divide-gray-200">
                            <thead class="text-base font-Notokhmer text-gray-900">
                                <tr class="border">
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border border-black">
                                        លេខរៀង
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border border-black">
                                        គោត្តនាម និង នាម
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border border-black">
                                        ភេទ
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border border-black">
                                        ពិន្ទុសរុប
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border-black border">
                                        មធ្យមភាគ
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border-black border">
                                        ចំណាត់ថ្នាក់
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border-black border">
                                        និទ្ទេស
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border-black border">
                                        ផ្សេងៗ
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 text-black">
                                @foreach ($studies as $sco)
                                    <tr>
                                        <td scope="col" class="px-6 py-3 text-base text-center border border-black">
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                            {{ $sco->name }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                            @if ($sco->gender == 1)
                                                ប្រុស
                                            @else
                                                ស្រី
                                            @endif
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 text-center border border-black text-blue-600">
                                            {{ $sco->khmer + $sco->math + $sco->science + $sco->socail }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 text-base border border-black text-blue-600">
                                            {{ ($sco->khmer + $sco->math + $sco->science + $sco->socail) / 4 }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 text-base border border-black text-red-600 font-bold">

                                            {{ $sco->rank }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 text-base font-Notokhmer text-red-600 font-bold border border-black">
                                            @if ($sco->rank == 1)
                                                ល្អណាស់
                                            @elseif ($sco->rank == 2)
                                                ល្អណាស់
                                            @elseif ($sco->rank == 3)
                                                ល្អណាស់
                                            @elseif ($sco->rank == 4)
                                                ល្អ
                                            @elseif ($sco->rank == 5)
                                                ល្អ
                                            @elseif ($sco->rank == 6)
                                                ល្អ
                                            @elseif ($sco->rank == 7)
                                                ល្អ
                                            @elseif ($sco->rank == 8)
                                                ល្អ
                                            @elseif ($sco->rank == 9)
                                                ល្អ
                                            @elseif ($sco->rank == 10)
                                                ល្អ
                                            @endif
                                        </td>
                                        <td scope="col" class="px-6 py-3 text-base border border-black">

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $teachers->links() }} --}}
                    </div>
                    <div class="flex justify-between py-4">
                        <div class="ml-3 text-black text-lg font-Notokhmer">
                            <p>
                                បានឃើញ និងឯងភាព
                            </p>
                            <p class="ml-6 py-2 text-lg font-muol">
                                នាយិកាសាលា
                            </p>
                        </div>
                        <div>
                            <p class="text-lg ml-3 mr-4 font-Notokhmer">
                                ថ្ងៃ.........................ខែ...................ឆ្នាំ...................ព.ស​.២៥៦...
                            </p>
                            <p class="text-lg font-Notokhmer ml-16">
                                សាយសាម៉ន ថ្ងៃទី.........ខែ...............ឆ្នាំ ២០២.....
                            </p>
                            <p class="text-lg my-10 font-muol ml-64">
                                គ្រូបន្ទុកថ្នាក់
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    </div>
    @push('scripts')
    <script>
        function printDiv(divName) {
            let printContents = document.getElementById(divName).innerHTML;
            let originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

        }
        window.onafterprint = function() {
            window.location.reload(true);
        };
    </script>
@endpush
