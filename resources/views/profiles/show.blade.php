<x-app title="{{$user->name}}">
    <img
        class="w-100 rounded"
        src="https://picsum.photos/seed/{{$user->username}}/800/200"
        alt=""
    >
    <div class="row justify-content-between">
        <div class="col-4 mt-2">
            <h3 class="font-weight-bold">{{$user->name}}</h3>
            <div class="row justify-content-between">
                <p class="col font-weight-light">{{$user->username}}</p>
                <p class="col font-weight-light">{{$user->tweetsCount()}} Tweets</p>
            </div>
        </div>
        <div
            class="col-4 d-flex justify-content-center "
            style="bottom: 75px"
        >
            <img
                src="https://avatars.dicebear.com/api/male/{{$user->username}}.svg?b=%2310a6cb&w=150&h=150"
                alt=""
                class="rounded-circle"
                style=""
            >
        </div>
        <div class="col-4 d-flex justify-content-end h-50 mt-2">
            @can('edit', $user)
            <a
                href="{{route('profile.edit', $user->username)}}"
                class="btn btn-primary rounded-pill px-4 font-weight-bold"
            >
                Edit Profile
            </a>
            @endcan
            @auth
            @unless (current_user()->is($user))
            <form
                action="{{route('follow', $user->username)}}"
                method="POST"
            >
                @csrf
                <button
                    type="submit"
                    class="btn btn-primary rounded-pill px-4 font-weight-bold"
                >
                    {{current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
                </button>
            </form>
            @endunless
            @endauth
        </div>
    </div>
    <div class="mt-n5">
        @isset($user->description)
        <p>
            {{$user->description}}
        </p>
        @endisset
        <p class="text-black-50">Joined {{$user->created_at->diffForHumans()}}</p>
    </div>

    @forelse ($tweets as $tweet)
    <div class="border rounded-lg mb-1">
        @include('_tweet')
    </div>
    @empty
    <p class="d-flex justify-content-center mt-3 h5">No tweets yet.</p>
    @endforelse
    {{ $tweets->links() }}
</x-app>