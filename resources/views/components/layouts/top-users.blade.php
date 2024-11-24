<div class="card mt-3">
    <x-layouts.side-title>Top Users</x-layouts.side-title>

    <div class="card-body">
        @foreach ($top_users as $user)
            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="#!">
                        <img
                        class="avatar-img rounded-circle"
                        src="{{ $user->getProfileUrl() }}"
                        width="20"
                        alt=""
                        />
                    </a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="#!">{{ $user->name }}</a>
                </div>
                <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#">
                    <i class="fa-solid fa-plus"></i>
                </a>
            </div>
        @endforeach
        <x-layouts.footer-btn>show more</x-layouts.footer-btn>
    </div>
</div>
