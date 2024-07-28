<x-layout>
    <x-slot:heading>
        {{ $heading }}
    </x-slot:heading>
    <div class="space-y-5">
        <h1 class="font-bold text-gray-900 text-lg">{{ ucfirst($user->username) }} Posts</h1>
        <div class="grid grid-cols-2 gap-4">
            @if(count($user->posts) > 0)
                @foreach($user->posts as $post)
                    <section class="hover:bg-white border border-gray-300 rounded-lg p-5 h-auto drop-shadow-lg">
                        <h1 class="font-bold text-gray-900 text-xs">{{ $post->title }}</h1>
                        <p class="text-black text-md">{{ $post->body }}</p>
                        <div class="border-b border-gray-300 w-full my-5"></div>
                        <section class="block space-y-2">
                            <h1 class="font-bold text-gray-900 text-lg">Comments</h1>
                            @foreach($post->comments as $comment)
                                <section class="flex flex-col border-b border-gray-300 p-5">
                                    <a href="/post/{{ $comment->user->id }}" class="underline font-bold text-blue-900 text-xs">{{ $comment->user->username }}</a>
                                    <p class="text-black text-md">{{ $comment['body'] }}</p>
                                </section>
                            @endforeach
                        </section>
                        <form action="/post/{{ $post->id }}/comment/{{ $user->id }}" method="POST" class="rounded-lg p-5 w-full space-y-3">
                            @csrf
                            <input type="text"
                                   name="body"
                                   placeholder="add comment..."
                                   class="h-10 rounded-md border border-gray-300 w-full"
                            >
                            @error('body')
                                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-end">
                                <button class="py-1 px-5 rounded-lg bg-blue-500 text-white text-xs">Add</button>
                            </div>
                        </form>
                    </section>
                @endforeach
            @else
                <h1 class="font-bold text-gray-900 text-lg">NO POST TO SHOW</h1>
            @endif
        </div>
        <a href="/" class="underline">Back to home</a>
    </div>
</x-layout>
