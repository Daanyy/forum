<div class="links">

    <a href="/">Home</a>

    @foreach( $pages as $page )

    <a href="/{{$page->slug}}">{{$page->title}}</a>

    @endforeach

    {{--<a href="/blog">Blog</a>

    <a href="/about">About</a>

    <a href="/contact">Contact</a>--}}
    
</div>