<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <i class="" data-feather="map"></i> Locations
            </h2>

            <div class="min-w-max">
                <a href="{{route('dashboard-location.create')}}" class="fullwidth-btn">Add New Location <i class="" data-feather="plus"></i></a>
            </div>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto mb-6">
                        <thead>
                        <tr>
                            <th class="border px-4 py-2">Name</th>
                            <th style="width: 300px" class="border px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($locations as $location)
                            <tr>
                                <td class="border px-4 py-2">{{$location->name}}</td>
                                <td class="border px-4 py-2 text-center">
                                    <a class="bg-blue-500 text-white px-4 py-2 text-xs rounded" href="{{route('dashboard-location.edit', $location->id)}}"><i class="" data-feather="edit-3"></i></a>
                                    <a class="bg-green-500 text-white px-4 py-2 text-xs rounded" href="{{route('single-location', $location->id)}}" target="_blank"><i class="" data-feather="eye"></i></a>
                                    <form onsubmit="return confirm('Konumu gerçekten silmek istiyor musunuz?');" action="{{route('dashboard-location.destroy', $location->id)}}" method="post" class="inline-block"> @csrf @method('delete')
                                        <button style="height: 27px;top:1.5px" type="submit" class="bg-red-500 text-white px-4 py-2 text-xs rounded relative"><i class="" data-feather="trash-2"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{$locations->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
