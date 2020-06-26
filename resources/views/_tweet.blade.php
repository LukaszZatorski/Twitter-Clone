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
        <form
            action="{{route('like', $tweet)}}"
            method="POST"
        >
            @csrf
            <button
                type="submit"
                class="bg-transparent border-0 d-flex align-items-center {{$tweet->liked(current_user()) ? "text-primary" : "" }}"
            >
                <svg
                    class="bi bi-heart mr-2"
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"
                    />
                </svg>
                <p class='mb-0'> {{ $tweet->likesCount() ?: 0 }}</p>
            </button>
        </form>
    </div>
</div>