<div class="card">
    <x-layouts.side-title>Search</x-layouts.side-title>
    <div class="card-body">
        <form action="{{ route('search') }}">
            @csrf
            <input placeholder="..." class="form-control w-100" type="text" id="search" name="search" value="{{old('search')}}"/>
            <x-layouts.btn class="btn btn-dark mt-2">Search</x-layouts.btn>
        </form>
    </div>
</div>
