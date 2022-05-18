<div class="sticky-header top-0 fixed w-full py-4 px-12 flex justify-between items-center z-30 {{ request()->routeIs('home') ? '' : 'general-header'}}">
    <div class="min-w-max">
        <a href="{{route('home')}}">
        <img width="120" src="/img/logo.png" alt="">
    </a>
    </div>
    <div class="w-full">
        <ul class="flex justify-center">
            <li><a href="{{route('properties')}}" class="p-4 inline-block text-white">allProperties</a></li>
            <li><a href="{{route('properties')}}/?type=0" class="p-4 inline-block text-white">Land</a></li>
            <li><a href="{{route('properties')}}/?type=2" class="p-4 inline-block text-white">Villa</a></li>
            <li><a href="{{route('properties')}}/?type=1" class="p-4 inline-block text-white">Apartment</a></li>
            <li><a href="{{route('page', 'about-us')}}" class="p-4 inline-block text-white">About Us</a></li>
            <li><a href="{{route('page', 'contact-us')}}" class="p-4 inline-block text-white">Contact Us</a></li>
        </ul>
    </div>
    <div class="min-w-max tex-3xl">
        <a href="#">🇺🇸</a>
        <a href="#">🏳️‍🌈</a>
        <a href="#">🏴‍☠️</a>
    </div>
</div>
