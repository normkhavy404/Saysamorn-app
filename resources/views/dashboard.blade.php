@extends('layouts.app')

@section('content')
    <div class="ml-60 px-2">
        <div class="grid grid-cols-3 gap-1 sm:py-1 text-center">
            <div>
                <button
                    class="text-black border border-black focus:outline-none focus:ring-1 focus:ring-black font-Notokhmer text-xl rounded-xl px-24 py-10 text-center mr-2 mb-2 bg-black">
                    <a href="{{ route('index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-center ml-4 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        <div class="text-base font-Notokhmer text-white">
                            គ្រូបង្រៀន
                            <div>
                                សរុប {{ $teacher }} នាក់
                            </div>
                        </div>
                    </a>
                </button>
            </div>

            <div>
                <button
                    class="py-10 px-24 mr-2 mb-2 text-xl font-Notokhmer text-black focus:outline-non rounded-xl border border-black focus:z-10 focus:ring-1 focus:ring-black bg-blue-500">
                    <a href="{{ route('student_index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 ml-4 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                        <div class=" text-base font-Notokhmer text-white">
                            <p>
                                សិស្ស
                            </p>
                            <p>
                                សរុប {{ $student }} នាក់
                            </p>
                        </div>
                    </a>
                </button>
            </div>

            <div>
                <button
                    class=" px-24 py-10 text-black focus:outline-none focus:ring-1 focus:ring-black font-Notokhmer rounded-xl focus:z-10 text-xl mr-2 mb-2 border border-black bg-green-500">
                    <a href="{{ route('class_index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 ml-7 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                        </svg>
                        <div class="text-base font-Notokhmer text-white">
                            <p>
                                ថ្នាក់សិក្សា
                            </p>
                            <p>
                                សរុប {{ $academic_classes }} ថ្នាក់សិក្សា
                            </p>
                        </div>
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
