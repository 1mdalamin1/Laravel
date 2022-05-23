<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <i class="" data-feather="file-plus"></i> Submit Add new property
            </h2>

            <div class="min-w-max">
                <a href="{{route('dashboard-property.index')}}" class="fullwidth-btn"><i class="" data-feather="arrow-left"></i> Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('dashboard-property.store')}}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data"> @csrf
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="name_tr">Title - english <span class="required-text">*</span></label>
                            <input class="civanoglu-input" type="text" id="name_tr" name="name_tr" value="{{old('name_tr')}}" required>

                            @error('name_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="name">Title <span class="required-text">*</span></label>
                            <input class="civanoglu-input" type="text" id="name" name="name" value="{{old('name')}}" required>

                            @error('name')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="civanoglu-label" for="featured_image">Featured  image <span class="required-text">*</span></label>
                        <input class="civanoglu-input" type="file" id="featured_image" name="featured_image" required>

                        @error('featured_image')
                        <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="civanoglu-label" for="gallery_images">Gallery image <span class="required-text">*</span></label>
                        <input class="civanoglu-input" type="file" id="gallery_images" name="gallery_images[]" multiple required>

                        @error('gallery_images')
                        <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="location_id">Location <span class="required-text">*</span></label>
                            <select class="civanoglu-input"  name="location_id" id="location_id" required>
                                <option value="">Location choose</option>
                                @foreach($locations as $location)
                                    <option {{old('location_id') == $location->id ? 'selected="selected"' : ''}}  value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                            </select>

                            @error('location_id')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="price">Price <span class="required-text">*</span></label>
                            <input class="civanoglu-input" type="number" id="price" name="price" value="{{old('price')}}" required>

                            @error('price')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="sale">For <span class="required-text">*</span></label>
                            <select class="civanoglu-input"  name="sale" id="sale" required>
                                <option value="">Type choose</option>
                                <option {{old('sale') == '0' ? 'selected="selected"' : ''}} value="0">Rent</option>
                                <option {{old('sale') == '1' ? 'selected="selected"' : ''}} value="1">Sales</option>
                            </select>

                            @error('sale')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="type">Tip <span class="required-text">*</span></label>
                            <select class="civanoglu-input"  name="type" id="type" required>
                                <option value="">Choose property type</option>
                                <option {{old('type') == '0' ? 'selected="selected"' : ''}} value="0">Black</option>
                                <option {{old('type') == '1' ? 'selected="selected"' : ''}} value="1">Apartment</option>
                                <option {{old('type') == '2' ? 'selected="selected"' : ''}} value="2">Villa</option>
                            </select>

                            @error('type')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="drawing_rooms">drawing rooms</label>
                            <select class="civanoglu-input"  name="drawing_rooms" id="drawing_rooms">
                                <option value="">Choose one</option>

                                @for($x = 0; $x <= 3; $x++)
                                <option {{old('drawing_rooms') == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('drawing_rooms')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="bedrooms">bed rooms</label>
                            <select class="civanoglu-input"  name="bedrooms" id="bedrooms">
                                <option value="">Choose one</option>

                                @for($x = 0; $x <= 8; $x++)
                                <option {{old('bedrooms') == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('bedrooms')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="bathrooms">bathrooms</label>
                            <select class="civanoglu-input"  name="bathrooms" id="bathrooms">
                                <option value="">Choose one</option>
                                @for($x = 0; $x <= 6; $x++)
                                    <option {{old('bathrooms') == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('bathrooms')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="kitchens">Kitchens</label>
                            <select class="civanoglu-input"  name="kitchens" id="kitchens">
                                <option value="">Choose one</option>
                                @for($x = 0; $x <= 6; $x++)
                                    <option {{old('kitchens') == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('kitchens')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="net_sqm">Net square meter <span class="required-text">*</span></label>
                            <input class="civanoglu-input" type="number" id="net_sqm" name="net_sqm" value="{{old('net_sqm')}}"  required>

                            @error('net_sqm')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="gross_sqm">gross square meter</label>
                            <input class="civanoglu-input" type="number" id="gross_sqm" name="gross_sqm" value="{{old('gross_sqm')}}" >

                            @error('gross_sqm')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="pool">Pool</label>
                            <select class="civanoglu-input"  name="pool" id="pool">
                                <option value="">Pool choose</option>
                                <option {{old('pool') == '0' ? 'selected="selected"' : ''}} value="0">No</option>
                                <option {{old('pool') == '1' ? 'selected="selected"' : ''}} value="1">Special</option>
                                <option {{old('pool') == '2' ? 'selected="selected"' : ''}} value="2">People</option>
                                <option {{old('pool') == '3' ? 'selected="selected"' : ''}} value="3">Both of them</option>
                            </select>

                            @error('pool')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex -mx-4 mb-6">

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="overview_tr">Overview <span class="required-text">*</span></label>
                            <textarea class="civanoglu-input" name="overview_tr" id="overview_tr" cols="30" rows="3" required>{{old('overview_tr')}}</textarea>

                            @error('overview_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="overview">Overview - English<span class="required-text">*</span></label>
                            <textarea class="civanoglu-input" name="overview" id="overview" cols="30" rows="3" required>{{old('overview')}}</textarea>

                            @error('overview')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>


                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="why_buy_tr">Why buy <span class="required-text">*</span></label>
                            <textarea class="civanoglu-input" name="why_buy_tr" id="why_buy_tr" cols="30" rows="5" required>{{old('why_buy_tr')}}</textarea>

                            @error('why_buy_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="why_buy">Why buy - English <span class="required-text">*</span></label>
                            <textarea class="civanoglu-input" name="why_buy" id="why_buy" cols="30" rows="5" required>{{old('why_buy')}}</textarea>

                            @error('why_buy')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>


                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="description_tr">Explanation <span class="required-text">*</span></label>
                            <textarea class="civanoglu-input" name="description_tr" id="description_tr" cols="30" rows="10" required>{{old('description_tr')}}</textarea>

                            @error('description_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="description">Explanation - English <span class="required-text">*</span></label>
                            <textarea class="civanoglu-input" name="description" id="description" cols="30" rows="10" required>{{old('description')}}</textarea>

                            @error('description')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <button class="btn" type="submit"><i class="" data-feather="upload-cloud"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
