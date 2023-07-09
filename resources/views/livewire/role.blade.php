<div>
    <div class="ml-60 px-2">
        <div class="block w-full p-3 border border-gray-200 rounded-lg shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                តួនាទី
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">ចូរបំពេញព័ត៍មានខាងក្រោម</p>
        </div>
        <div class="py-2">
            <label for="role_name" class=" text-xl font-Notokhmer">
                តួនាទី :
            </label>
            <input type="text" name="role_name" id="role_name" wire:model="role_name" class=" rounded-md">
            <button wire:click="save"
                class="px-5 py-2 border text-white font-Notokhmer rounded-md border-blue-500 bg-blue-500">បង្កើត</button>
        </div>

        <div class="block p-6 border border-gray-400 bg-gray-100 rounded-lg shadow-lg w-full">
            <div class="grid grid-cols-3 gap-1">
                @foreach ($permission as $per)
                    <div>
                        <input type="checkbox" class=" font-serif" wire:model="pers" value="{{ $per->id }}">
                        {{ $per->title }}
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="ml-60 px-2 py-3">
        <div class="p-4 bg-gray-100 border border-gray-400 rounded-lg shadow-lg ">
            <ul>
                @foreach ($roles as $ro)
                    <li>
                        <span wire:click="edit({{ $ro->id }})"
                            class="underline text-blue-700 font-serif cursor-pointer dark:font-serif">{{ $ro->title }}</span>
                        (
                        @foreach ($ro->permissions as $ps)
                            {{ ucwords(str_replace('_', ' ', $ps->title)) }},
                        @endforeach
                        )
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
