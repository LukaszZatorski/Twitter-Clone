<x-app title="Explore">
    <div class="border rounded-lg mb-1">
        @foreach ($tweets as $tweet)
        <div class="d-flex p-3 {{ $loop->last ? '': 'border-bottom'}}">
            <a
                href="#"
                class="mr-2"
            ><img
                    src="https://avatars.dicebear.com/api/male/{{$tweet->user->name}}.svg?b=%2310a6cb&w=50&h=50"
                    alt=""
                    class="rounded-circle"
                ></a>
            <div>
                <a
                    href="#"
                    class="text-decoration-none text-dark"
                >
                    <h5 class="font-weight-bold">{{ $tweet->user->name }}</h5>
                </a>
                <p>{{ $tweet->body }}</p>
            </div>
        </div>
        @endforeach
    </div>

    {{ $tweets->links() }}
</x-app>