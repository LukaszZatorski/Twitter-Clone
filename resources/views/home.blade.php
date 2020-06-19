<x-app title="Home">
    @include('_publish-tweet')

    @forelse ($tweets as $tweet)
    <div class="border rounded-lg mb-1">
        @include('_tweet')
    </div>
    @empty
    <p class="d-flex justify-content-center mt-3 h5">No tweets yet.</p>
    @endforelse

    {{ $tweets->links() }}
</x-app>