{{-- <a href="{{route('single-property', $property->id)}}" class="{{$width}} px-3 relative rounded-md mb-6 block">
    <div class="shadow-lg">
        <div class="py-20 bg-center" style="background-image: url('/img/hero-bg.jpg')"></div>
        <div class="p-3">
            <h2 class="leading-0 text-base">{{$property->name}}</h2>
            <h3 class="text-2xl py-3">{{$property->dynamic_pricing($property->price)}}</h3>

            <div class="border-t-2">
                <ul class="flex items-center -mx-1 my-4">
                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bedrooms}} bedrooms</li>
                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bathrooms}} bathrooms</li>
                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->gross_sqm}} M<sup>2</sup></li>
                </ul>
                <span class="btn w-full text-center">More details</span>
            </div>
        </div>
    </div>
</a> --}}


<div class="flex-1 mx-2 shadow-lg relative rounded-md mb-6">
    <a href=""
       class="absolute left-3 w-9 h-9 leading-10 self-center text-base top-3 bg-black text-white bg-opacity-25 text-center hover:bg-yellow-500 hover:text-white duration-200 rounded-full text-base"><i
            class="fa fa-heart-o"></i></a>
    <div class="py-20 bg-center" style="background-image: {{ url('uploads/'.$property->featured_image) }}"></div>
    <div class="p-3">
        {{-- <h2 class="leading-0 text-base">{{$property->featured_image}}</h2> {{ url('/uploads/'.$property->featured_image) }} {{ asset('uploads/' . $property->featured_image) }} --}}
        <h2 class="leading-0 text-base">{{$property->name}}</h2>
        <h3 class="text-2xl py-3">{{$property->price}} TL</h3>
        <div class="border-t-2">
            <ul class="flex items-center -mx-1 my-4">
                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">7 bedrooms</li>
                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">5 bedrooms</li>
                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">15000 ft<sup>2</sup></li>
            </ul>
            <a href="{{route('single-property', $property->id)}}" class="btn w-full text-center">More details</a>

        </div>
    </div>
</div>
