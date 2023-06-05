<div>
    <div class=" ml-60">
        <label for="role_name" wire:model="role_name">
            Role :
        </label>
        <input type="text" name="role_name" id="role_name">
        <button wire:click="save"  class="px-5 py-2 border font-serif border-blue-500" >Save</button>
        <br>
        @foreach ($permission as $per)
            <input type="checkbox" wire:model="pers" value="{{$per->id}}">
            {{ $per->title }}<br>   
        @endforeach
    </div>
    <div class=" ml-60">
        <ul>
            @foreach($roles as $ro)
            <li>
                <span wire:click="edit({{$ro->id}})" class="underline text-blue-500 cursor-pointer">{{ $ro->title }}</span>
                (
                    @foreach($ro->permissions as $ps)
                        {{ ucwords(str_replace('_', ' ', $ps->title)) }},
                    @endforeach
                )
            </li>
            @endforeach
        </ul>
    </div>
</div>
