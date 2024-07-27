<x-layout>
    <x-slot:heading>
        {{$heading}}
    </x-slot:heading>
    <div class="container">
        <h1 class="font-bold text-lg text-gray-900">POSTS</h1>
        <div class="flex flex-col gap-2">
            @foreach($posts as $post)
                <div class="bg-white rounded-lg p-5 h-24 drop-shadow-lg">
                    <a href="/post/{{ $post['id'] }}">{{ $post['body'] }}</a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
