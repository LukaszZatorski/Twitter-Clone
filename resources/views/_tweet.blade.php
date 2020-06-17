<div class="d-flex p-3 {{ $loop->last ? '': 'border-bottom'}}">
    <a
        href="{{route('profile.show', $tweet->user->username)}}"
        class="mr-2"
    ><img
            src="https://avatars.dicebear.com/api/male/{{$tweet->user->username}}.svg?b=%2310a6cb&w=50&h=50"
            alt=""
            class="rounded-circle"
        ></a>
    <div>
        <a
            href="{{route('profile.show', $tweet->user->username)}}"
            class="text-decoration-none text-dark"
        >
            <h5 class="font-weight-bold">{{ $tweet->user->name }}</h5>
        </a>
        <p>{{ $tweet->body }}</p>
    </div>
</div>