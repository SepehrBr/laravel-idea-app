<div  {{$attributes->merge([ 'class' => 'card-footer text-center py-2 w-100' ])}}>
    <a class="btn btn-link btn-sm" href="{{route('users.show', Auth::id())}}">{{ $slot }}</a>
</div>
