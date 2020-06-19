<div class="position-fixed col-2 p-2 bg-light border rounded-lg">
    <h4 class="d-flex justify-content-center mb-4">Following</h4>
    <ul class="list-unstyled">
        @forelse (current_user()->follows as $user)
        <li class="d-flex align-items-center {{$loop->last ? '' : 'mb-2'}}">
            <a
                href="{{route('profile.show', $user->username)}}"
                class="mr-2"
            >
                <img
                    src="https://avatars.dicebear.com/api/male/{{$user->username}}.svg?b=%2310a6cb&w=40&h=40"
                    alt=""
                    class="rounded-circle"
                >
            </a>
            <a
                href="{{route('profile.show', $user->username)}}"
                class="text-decoration-none text-dark"
            >
                <h6 class="font-weight-bold">{{ $user->name }}</h5>
            </a>
        </li>
        @empty
        <li class="d-flex justify-content-center">No friends yet!</li>
        @endforelse
        <li class="mb-3">
            <a href=""></a>
        </li>
    </ul>
</div>