<main>
    <div class="title">
        <h2>Current Series</h2>
    </div>
    <div class="wrapper">
        @foreach ($comics as $comic)
            @include('partials/comic')
        @endforeach
    </div>
    <div class="btn">LOAD MORE</div>
</main>