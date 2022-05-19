<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h2>

        <div class="min-w-max">
            <a href="{{route('add-property')}}" class="fullwidth-btn">Yeni Mülk Ekle</a>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto mb-6">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">İsim</th>
                                <th class="border px-4 py-2">Konum</th>
                                <th class="border px-4 py-2">Fiyat</th>
                                <th style="width: 300px" class="border px-4 py-2">Hareketler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($properties as $property)
                            <tr>
                                <td class="border px-4 py-2">{{$property->name}}</td>
                                <td class="border px-4 py-2">{{$property->location->name}}</td>
                                <td class="border px-4 py-2">{{$property->price}}</td>
                                <td class="border px-4 py-2 text-center">
                                    {{-- <a class="bg-blue-500 text-white px-4 py-2 text-xs rounded" href="{{route('dashboard-property.edit', $property->id)}}">Düzenlemek</a>
                                    <a class="bg-green-500 text-white px-4 py-2 text-xs rounded" href="{{route('single-property', $property->id)}}" target="_blank">görüş</a>
                                    <form onsubmit="return confirm('Mülkü gerçekten silmek istiyor musunuz?');" action="{{route('dashboard-property.destroy', $property->id)}}" method="post" class="inline-block"> @csrf @method('delete')
                                        <button style="height: 27px;top:1.5px" type="submit" class="bg-red-500 text-white px-4 py-2 text-xs rounded relative">Silmek</button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$properties->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>