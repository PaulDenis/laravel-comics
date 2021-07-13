<header>
    <div class="w-70">
        <img src="images/dc-logo.png" alt="logo">
        <div class="links">
            <ul class="inline-list">
                @foreach ($links as $link)
                    <li><a href="#">{{ $link }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</header>