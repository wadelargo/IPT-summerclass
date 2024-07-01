<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto mt-5 py-8">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                            @foreach($products as $product)
                                <div class="bg-white border p-4 rounded-lg shadow-md">
                                    <a href="{{ url('/products/' . $product->id) }}">
                                        <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                                        <p class="text-gray-600">{{ $product->description }}</p>
                                        <p class="text-xl font-bold mt-2 text-red-600">P{{ $product->price }}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>