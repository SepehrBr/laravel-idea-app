<div class="row">
    <div class="mb-3">
        <form action="{{route('ideas.create')}}" method="post" id="create-idea">
            @csrf
            <textarea class="form-control" id="idea" rows="3" name="content"></textarea>
        </form>
    </div>
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="text-danger">{{ $error }}</p>
        @endforeach
    @endif --}}
    @error('content')
        <p class="text-danger">{{ $message   }}</p>
    @enderror
    <x-layouts.btn onclick="document.getElementById('create-idea').submit();">Share</x-layouts.btn>
</div>
