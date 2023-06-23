<div>
    <div class="ml-60 mx-2">
        <div class="max-w-6xl mx-auto py-10 sm:px-20 lg:px-20">
            <div class="block mb-8">
                <a href="{{ route('index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">ថយក្រោយ</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full text-base font-Notokhmer">
                                {{-- <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $teachers->id }}
                                    </td>
                                </tr> --}}
                                <tr class="border-b ">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-black tracking-wider">
                                        អត្តលេខ
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $teachers->code }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-black uppercase tracking-wider">
                                        គោត្តនាម និង​ នាម
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-base bg-white divide-y divide-gray-200">
                                        {{ $teachers->first_name }} {{ $teachers->last_name }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-black tracking-wider">
                                        ភេទ
                                    </th>
                                    <td scope="col" class="px-6 py-3 ">
                                        @if ($teachers->gender == 1)
                                        ប្រុស
                                        @else
                                        ស្រី
                                        @endif
                                    </td>
                                </tr>

                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-black uppercase tracking-wider">
                                        លេខទូរស័ព្ទ
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $teachers->telephone }}
                                    </td>
                                </tr>

                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-base font-Notokhmer text-black  tracking-wider">
                                        អ៊ីម៉ែល
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $teachers->email }}
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block mt-8">
                <a href="{{ route('index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">ថយក្រោយ</a>
            </div>
        </div>
    </div>
</div>
