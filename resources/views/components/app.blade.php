<x-master title="{{isset($title) ? $title . ' / Tweets' : 'Tweets' }}">
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                @include('_sidebar')
            </div>
            <div class="col-8">
                {{ $slot }}
            </div>
            <div class="col-2 mt-4">
                @include('_friends-list')
            </div>
        </div>
    </div>
</x-master>