<x-master title={{$title}}>
    <div class="container mt-2">
        <div class="row">
            <div class="col d-flex">
                @include('_sidebar')
            </div>
            <div class="col-8">
                {{ $slot }}
            </div>
            <div class="col d-flex">
                @include('_friends-list')
            </div>
        </div>
    </div>
</x-master>