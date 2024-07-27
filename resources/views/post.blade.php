<x-layout>
    <x-slot:heading>
        {{ $heading }}
    </x-slot:heading>
    <div class="space-y-5">
        <h1 class="font-bold text-gray-900 text-lg">{{ ucfirst($user->username) }} Posts</h1>
        <div class="grid grid-cols-2 gap-4">
            @foreach($user->posts as $post)
                <section class="hover:bg-white border border-gray-300 rounded-lg p-5 h-auto drop-shadow-lg">
                    <h1 class="font-bold text-gray-900 text-xs">{{ $post->title }}</h1>
                    <p class="text-black text-md">{{ $post->body }}</p>
                </section>
            @endforeach
        </div>
        <a href="/" class="underline">Back to home</a>
    </div>
</x-layout>
