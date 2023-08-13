<div>
    <div style="margin-left: 16vw; margin-right: 20px">
        <div class="my-3">
            <div
                class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-Notokhmer text-base text-white uppercase tracking-widest hover:bg-red-700  disabled:opacity-25 transition ease-in-out duration-150">
                <a href="{{ route('attendent_index', $academic_class->id) }}">
                    ចាកចេញ
                </a>
            </div>
        </div>
        <div class="">
            <div class="flex justify-between my-3">
                <div class="flex">
                    <div class="flex items-center">
                        <label for="text" class="text-base font-Notokhmer px-2">ស្វែងរកអវត្តមានសិស្សប្រចាំ</label>
                    </div>
                    <div>
                        <select wire:model="month" class="rounded-md font-Notokhmer">
                            <option value="0">ប្រចាំឆ្នាំ</option>
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
                </div>
                <div>
                    <div>
                        <button
                            class="text-white px-6 py-3 border rounded-md font-Notokhmer bg-blue-500 hover:bg-blue-400"
                            onclick="printDiv('printMe')">
                            បោះពុម្ភ
                        </button>
                    </div>
                </div>

            </div>
            <div class="" id="printMe">
                <div class=" text-center text-base font-muol font-bold">
                    <p>
                        ព្រះជារាណាចក្រកម្ពុជា
                    </p>
                    <p>
                        ជាតិ សាសនា ព្រះមហាក្សត្រ
                    </p>
                </div>
                <div class="ml-10 text-base font-muol font-bold">
                    <p>
                        កម្រងសាលារោងគោ
                    </p>
                    <p>
                        សាលាបឋមសិក្សា សាយសាម៉ន
                    </p>
                </div>
                <div>
                    <div class="text-center text-base font-muol font-bold">
                        <p>របាយការណ៍អវត្តមានសិស្សសរុបប្រចាំ{{ $month ? 'ខែ' . filterMonth($month) : 'ឆ្នាំ' }}
                            នៃថ្នាក់ទី​ <td>{{ $academic_class->name_class }}</td>
                        </p>
                        <p>ឆ្នាំសិក្សា​ <td>{{ $academic_class->academicYear->name_year }}</td>
                        </p>
                    </div>

                    <div class="flex flex-col">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-1">
                            <div class="shadow overflow-hidden border border-gray-900 sm:rounded-lg">
                                <table class="w-full text-sm text-center font-moul border divide-y divide-gray-200">
                                    <thead class=" text-base font-Notokhmer ">
                                        <tr>
                                            <th scope="col" class="border border-gray-900">
                                                លេខរៀង
                                            </th>
                                            <th scope="col" class="px-6 py-3 border border-gray-900">
                                                ឈ្មោះសិស្ស
                                            </th>
                                            <th scope="col" class="px-6 py-3 border border-gray-900">
                                                ភេទ
                                            </th>
                                            <th scope="col" class="px-6 py-3 border border-gray-900">
                                                ច្បាប់
                                            </th>
                                            <th scope="col" class="px-6 py-3 border border-gray-900">
                                                អត់ច្បាប់
                                            </th>
                                            <th scope="col" class="px-6 py-3 border border-gray-900">
                                                សរុប
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 text-base font-Notokhmer">
                                        @foreach ($data as $item)
                                            <tr>
                                                <td scope="col" class="px-6 py-3 border border-gray-900">
                                                    {{ $loop->index + 1 }}
                                                </td>

                                                @foreach ($item as $ret)
                                                    <td class="border border-gray-900">{{ $ret }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class=" flex justify-between">
                                <div class="px-16 my-4">
                                    <p class="text-lg text-black font-Notokhmer">
                                        បានឃើញ និង​​ ឯកភាព
                                    </p>
                                    <p class="text-lg font-bold text-black font-muol px-3 py-4">
                                        នាយិកាសាលា
                                    </p>
                                </div>
                                <div class="py-5">
                                    <p class="text-lg text-black font-Notokhmer mr-10 ">
                                        ថ្ងៃ​.....................ខែ..........ឆ្នាំ...................ព.ស ២៥៦.....
                                    </p>
                                    <p class="text-lg text-black font-Notokhmer px-8 py-4">
                                        សាយសាម៉ន ថ្ងៃទី.........ខែ.............ឆ្នាំ ២០២.......
                                    </p>
                                    <p class="text-lg font-bold text-black font-muol text-center py-5">
                                        គ្រូបន្ទុកថ្នាក់
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
