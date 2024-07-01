<x-app-layout>
    <x-slot name="header">      
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Here are the list of your clients:") }}
                    @foreach ($clients as $client)
                    <div class="py-3 text-black ">
                        <h3 class="text-lg text-white">{{$client->name}}</h3>
                        <p><b>Client ID: </b>{{$client->id}}</p>
                        <p><b>Redirect URI: </b>{{$client->redirect}}</p>
                        <p><b>Secret: </b>{{$client->secret}}</p>
                     @endforeach

                    </div>
                <div class="mt-2 p-6 border-b border-gray-200">
                    <form action="/oauth/clients" method="POST">
                        <div>
                            <x-input-label for="name">Name</x-input-label>
                            <x-text-input type="text" name="name" placeholder="Client's name"></x-text-input>

                            <x-input-label for="redirect">Redirect</x-input-label>
                            <x-text-input type="text" name="redirect" placeholder="https://my-url.com/callback"></x-text-input>
                        </div>

                        <div class="mt-3">
                            @csrf
                            <x-primary-button>Create client</x-primary-button>
                    </form>
        </div>
    </div>
</x-app-layout>
