<x-app title="Edit">
    <div class="card">
        <div class="card-header">Edit</div>

        <div class="card-body">
            <form
                method="POST"
                action="{{ route('profile.update', $user->username) }}"
            >
                @method('PATCH')
                @csrf

                <div class="form-group row">
                    <label
                        for="name"
                        class="col-md-4 col-form-label text-md-right"
                    >Name</label>

                    <div class="col-md-6">
                        <input
                            id="name"
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            value="{{ $user->name }}"
                            required
                            autocomplete="name"
                            autofocus
                        >

                        @error('name')
                        <span
                            class="invalid-feedback"
                            role="alert"
                        >
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="username"
                        class="col-md-4 col-form-label text-md-right"
                    >Username</label>

                    <div class="col-md-6">
                        <input
                            id="username"
                            type="text"
                            class="form-control @error('username') is-invalid @enderror"
                            name="username"
                            value="{{ $user->username }}"
                            required
                            autocomplete="username"
                            autofocus
                        >

                        @error('username')
                        <span
                            class="invalid-feedback"
                            role="alert"
                        >
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label
                        for="description"
                        class="col-md-4 col-form-label text-md-right"
                    >Description</label>

                    <div class="col-md-6">
                        <textarea
                            id="description"
                            type="text"
                            class="form-control @error('description') is-invalid @enderror"
                            name="description"
                            value="{{ $user->description }}"
                            autocomplete="description"
                        >{{ $user->description }}</textarea>

                        @error('username')
                        <span
                            class="invalid-feedback"
                            role="alert"
                        >
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label
                        for="email"
                        class="col-md-4 col-form-label text-md-right"
                    >E-Mail Address</label>

                    <div class="col-md-6">
                        <input
                            id="email"
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ $user->email }}"
                            required
                            autocomplete="email"
                        >

                        @error('email')
                        <span
                            class="invalid-feedback"
                            role="alert"
                        >
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label
                        for="password"
                        class="col-md-4 col-form-label text-md-right"
                    >Password</label>

                    <div class="col-md-6">
                        <input
                            id="password"
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            required
                            autocomplete="new-password"
                        >

                        @error('password')
                        <span
                            class="invalid-feedback"
                            role="alert"
                        >
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label
                        for="password-confirm"
                        class="col-md-4 col-form-label text-md-right"
                    >Confirm Password</label>

                    <div class="col-md-6">
                        <input
                            id="password-confirm"
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                        >
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button
                            type="submit"
                            class="btn btn-primary mr-2"
                        >
                            Update
                        </button>
                        <a
                            href="{{ route('home') }}"
                            class="hover:underline"
                        >Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>