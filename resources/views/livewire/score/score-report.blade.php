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
                <button class="text-white px-6 py-3 border rounded-md font-Notokhmer bg-blue-500 hover:bg-blue-400"
                    onclick="printDiv('printMe')">

                    បោះពុម្ភ
                </button>
            </div>
        </div>
        <div id="printMe">
            <div class=" text-center text-lg font-muol font-bold">
                <p>
                    ព្រះជារាណាចក្រកម្ពុជា
                </p>
                <p>
                    ជាតិ សាសនា ព្រះមហាក្សត្រ
                </p>
            </div>
            <div class="ml-10 py-2 text-lg font-muol font-bold">
                <p>ការិយាល័យអប់រំ យុវជន​ និងកីឡាស្រុកមង្គលបូរី </p>
                <p class="">
                    កម្រងសាលារោងគោ
                </p>
                <p>
                    សាលាបឋមសិក្សា សាយសាម៉ន
                </p>
            </div>
            <div class="text-center text-lg font-muol font-bold">
                <p>
                    បញ្ជីឈ្មោះគ្រូបង្រៀនមូលដ្ឋាន
                </p>
                <p>
                    ក្នុងឆ្នាំសិក្សា ២០២៣​ - ២០២៤
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
                                @foreach ($score as $sco)
                                    <tr>
                                        <td scope="col" class="px-6 py-3 text-base text-center border border-black">
                                            {{ $sco->id }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                            {{ $sco->first_name }} {{ $sco->last_name }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                            @if ($sco->gender == 1)
                                                ប្រុស
                                            @else
                                                ស្រី
                                            @endif
                                        </td>
                                        <td scope="col" class="px-6 py-3 text-black text-center border border-black">
                                            {{ $sco->khmer + $sco->math + $sco->science + $sco->socail }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 text-base border border-black">
                                            {{ ($sco->khmer + $sco->math + $sco->science + $sco->socail) / 4 }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 text-base border border-black">

                                        </td>
                                        <td scope="col" class="px-6 py-3 text-base border border-black">

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
                            <p class="text-lg font-muol  ml-48 py-2">
                                អ្នកធ្វើតារាង
                            </p>
                            <p class="text-lg font-muol ml-64">
                                ជា ឡិនជី
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
    </div>
