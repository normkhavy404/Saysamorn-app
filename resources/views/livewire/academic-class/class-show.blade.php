<div>
    <div style="margin-left: 16vw; margin-right: 20px">
        <div>
            <div class="py-2 px-6 flex">
                <div
                    class="hover:shadow-form rounded-md bg-red-800 hover:bg-red-700 py-3 px-8 text-base font-Notokhmer text-white">
                    <a href="{{ route('class_index') }}">
                        ចាកចេញ
                    </a>
                </div>
            </div>
            <div class="flex justify-end">
                <button class="text-black px-6 py-3 border border-black rounded-md font-Notokhmer"
                    onclick="printDiv('printMe')">
                    បោះពុម្ភ
                </button>
            </div>
        </div>
        <div class="" id="printMe">
            <div class=" text-center text-base font-Notokhmer font-bold">
                <p>
                    ព្រះជារាណាចក្រកម្ពុជា
                </p>
                <p>
                    ជាតិ សាសនា ព្រះមហាក្សត្រ
                </p>
            </div>
            <div class="ml-10 text-base font-Notokhmer font-bold">
                <p>
                    កម្រងសាលារោងគោ
                </p>
                <p>
                    សាលាបឋមសិក្សា សាយសាម៉ន
                </p>
            </div>
            <div>
                <div class="text-center text-base font-Notokhmer font-bold">
                    <p>បញ្ជីរាយនាមសិស្សថ្នាក់ទី​ <td>{{ $academic_class->name_class }}</td>
                    </p>
                    <p>ឆ្នាំសិក្សា​ <td>{{ $academic_class->academic_year_name }}</td>
                    </p>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-1">
                    <div class="shadow overflow-hidden border sm:rounded-sm">
                        <table class="w-full text-sm text-center divide-y divide-gray-200">
                            <tr class=" text-base font-Notokhmer">
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ល.រ
                                </th>
                                <th scope="col" class="px-6 py-3 border  border-black">
                                    អត្តលេខ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    នាម និងគោត្តនាម
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ភេទ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ថ្ងៃខែឆ្នាំកំណើត
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    អាយុ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ឈ្មោះឪពុក
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ឈ្មោះម្ដាយ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ផ្សេងៗ
                                </th>
                            </tr>
                            <tbody class="bg-white divide-y divide-gray-200 text-base font-Notokhmer">
                                @foreach ($students as $class)
                                    <tr>
                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ $loop->index + 1 }}
                                        </td>

                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ $class->code }}
                                        </td>

                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ $class->first_name }} {{ $class->last_name }}
                                        </td>

                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ $class->gender == 1 ? 'ប' : 'ស' }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ date('d-m-Y', strtotime($class->dob)) }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ calcAge($class->dob) }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ $class->fa_name }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ $class->mo_name }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 border border-black">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="py-3">
                        <p class="text-base text-black font-Notokhmer">
                            សិស្សសរុប {{ count($students) }} នាក់
                            ស្រី {{ $total_f }} នាក់
                        </p>
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
                        <div>
                            <p class="text-lg text-black font-Notokhmer mr-10">
                                ថ្ងៃ​.....................ខែ..........ឆ្នាំ...................ព.ស ២៥៦...
                            </p>
                            <p class="text-lg text-black font-Notokhmer px-8">
                                សាយសាម៉ន ថ្ងៃទី.........ខែ.............ឆ្នាំ ២០២....
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
