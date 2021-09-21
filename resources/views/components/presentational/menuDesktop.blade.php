<div class="menu__link">
    <ul>
        <li class="{{ (request()->is('bintaro-new/about')) ? 'active' : '' }}"><a href="{{route('about')}}">About Us</a></li>
        <li class="{{ (request()->is('bintaro-new/experiences')) ? 'active' : '' }}"><a href="{{route('experiences')}}">Experiences</a></li>
        <li class="{{ (request()->is('bintaro-new/partners')) ? 'active' : '' }}"><a href="{{route('partners')}}">Partners</a></li>
        <li class="{{ (request()->is('bintaro-new/products')) ? 'active' : '' }}"><a href="{{route('products')}}">Products</a></li>
        <li class="{{ (request()->is('bintaro-new/news')) ? 'active' : '' }}"><a href="{{route('news')}}">News/ Articles</a></li>
        <li class="{{ (request()->is('bintaro-new/contact-us')) ? 'active' : '' }}"><a href="{{route('contact')}}">Contact Us</a></li>
    </ul>
</div>