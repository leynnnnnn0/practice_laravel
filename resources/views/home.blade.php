<x-layout>
    <x-slot:heading>
        {{$heading}}
    </x-slot:heading>
    <div class="space-y-4">
        <h1 class="font-bold text-lg text-gray-900">POSTS</h1>
        <div class="grid grid-cols-2 gap-4 w-full">
            @foreach($posts as $post)
                <section class="hover:bg-white border border-gray-300 rounded-lg p-5 h-auto drop-shadow-lg">
                    <a href="/post/{{ $post->user_id }}" class="cursor-pointer underline font-bold text-blue-900 text-xs">{{ strtoupper($post->user->username) }}</a>
                    <h1 class="font-bold text-gray-900 text-xs">{{ $post->title }}</h1>
                    <p class="text-black text-md">{{ $post->body }}</p>
                </section>
            @endforeach
        </div>
    </div>
</x-layout>
