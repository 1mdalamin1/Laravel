<div class="sticky-header top-0 fixed w-full py-4 px-4 md:px-12 flex justify-between items-center z-30 {{ request()->routeIs('home') ? '' : 'general-header'}}">
    <div class="min-w-max mr-8 md:mr-0">
        <a href="{{route('home')}}"><img width="120" src="/img/logo.png" alt=""></a>
    </div>
    <div class="w-full hidden md:block">
        <ul class="flex justify-center">
            <li><a href="{{route('properties')}}" class="p-4 inline-block text-white">allProperties</a></li>
            <li><a href="{{route('properties')}}/?type=0" class="p-4 inline-block text-white">Land</a></li>
            <li><a href="{{route('properties')}}/?type=2" class="p-4 inline-block text-white">{{__('Villa')}}</a></li>
            <li><a href="{{route('properties')}}/?type=1" class="p-4 inline-block text-white">Apartment</a></li>
            <li><a href="{{route('page', 'about-us')}}" class="p-4 inline-block text-white">{{__('About Us')}}</a></li>
            <li><a href="{{route('page', 'contact-us')}}" class="p-4 inline-block text-white">{{__('Contact Us')}}</a></li>
        </ul>
    </div>

    <div class="min-w-max mr-4 md:mr-10 text-2xl">
        {{-- <a class="inline-block mr-5 text-white" href="?currency=usd">$</a>
        <a class="inline-block mr-5 text-white" href="?currency=lira">₺</a> --}}
        <a class="inline-block mr-5 text-white" href="?currency=tk">৳</a>
    </div>

    <div class="min-w-max flex">
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}"><img width="30" class="p-1" src="/img/en.png" alt=""></a>
        <a href="{{ LaravelLocalization::getLocalizedURL('bn') }}"><img width="30" class="p-1" src="/img/bn.png" alt=""></a>
        <a href="{{ LaravelLocalization::getLocalizedURL('tr') }}"><img width="30" class="p-1" src="/img/tr.png" alt=""></a>
        <a class="p-1 rounded text-white text-2xl bg-green-500" href="{{route('login')}}" target="_blank"><i class="text-white" data-feather="log-in"></i></a>
    </div>

    <div class="min-w-max ml-10 md:hidden"><button><i class="text-white" data-feather="menu"></i></button></div>

</div>
