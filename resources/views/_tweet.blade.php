<div class="d-flex p-3">
    <a
        href="{{route('profile.show', $tweet->user->username)}}"
        class="mr-2"
    >
        <img
            src="https://avatars.dicebear.com/api/male/{{$tweet->user->username}}.svg?b=%2310a6cb&w=50&h=50"
            alt=""
            class="rounded-circle"
        >
    </a>
    <div class="col">
        <div class="d-flex justify-content-between">

            <a
                href="{{route('profile.show', $tweet->user->username)}}"
                class="text-decoration-none text-dark"
            >
                <h5 class="font-weight-bold">{{ $tweet->user->name }}</h5>
            </a>
            @can('delete', $tweet)
            <form
                action="{{route('tweet.destroy', $tweet)}}"
                method="POST"
            >
                @method('DELETE')
                @csrf
                <button
                    type="submit"
                    class="close"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </form>
            @endcan
        </div>
        <p>{{ $tweet->body }}</p>
    </div>
</div>