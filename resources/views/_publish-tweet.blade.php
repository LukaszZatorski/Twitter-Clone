<div class="border border-info rounded-lg p-3">
    <form
        action="#"
        method="POST"
    >
        @csrf
        <textarea
            name="body"
            class="form-control form-control-lg border-0"
            placeholder="What's on your mind?"
            required
            autofocus
        ></textarea>

        <hr>
        <footer class="d-flex justify-content-between">
            <a href="{{route('profile.show', auth()->user()->username)}}">
                <img
                    src="https://avatars.dicebear.com/api/male/{{auth()->user()->username}}.svg?b=%2310a6cb&w=50&h=50"
                    alt=""
                    class="rounded-circle"
                >
            </a>
            <button
                type="submit"
                class="btn btn-primary rounded-pill px-4"
            >
                Publish
            </button>
        </footer>
    </form>

    @error('body')
    <p>{{ $message }}</p>
    @enderror
</div>