<div>
    <div class="ml-60 mx-2">
        <div class="max-w-6xl mx-auto py-10 sm:px-20 lg:px-20">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-gray-600 tracking-wider">
                                        លេខរៀង
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $students->id }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-gray-600  tracking-wider">
                                        អត្តលេខ
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $students->code }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-gray-600  tracking-wider">
                                        គោត្តនាម និង​ នាម
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-base font-Notokhmer text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $students->first_name }} {{ $students->last_name }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-gray-600  tracking-wider">
                                        ភេទ
                                    </th>
                                    <td scope="col" class="px-6 py-3 text-base font-Notokhmer">
                                        @if ($students->gender == 1)
                                        ប្រុស
                                        @else
                                        ស្រី
                                        @endif
                                    </td>
                                </tr>

                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-gray-600  tracking-wider">
                                        ថ្ងៃខែឆ្នាំកំណើត
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $students->dob }}
                                    </td>
                                </tr>

                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-gray-600  tracking-wider">
                                        ឈ្មោះឪពុក
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-base font-Notokhmer text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $students->fa_name }}
                                    </td>
                                </tr>

                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-gray-600  tracking-wider">
                                        ឈ្មោះម្ដាយ
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-base font-Notokhmer text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $students->mo_name }}
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block mt-8">
                <a href="{{ route('student_index') }}"
                    class="bg-red-600 hover:bg-red-900 text-white text-base font-Notokhmer py-2 px-4 rounded">
                    ថយក្រោយ
                </a>
            </div>
        </div>
    </div>
</div>
