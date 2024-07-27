<x-layout>
    <x-slot:heading>
        {{ $heading }}
    </x-slot:heading>
    <h1 class="font-bold text-lg text-gray-900">POST</h1>
    <div class="p-5 bg-white drop-shadow-lg rounded-lg">
        {{ $post['body'] }}
    </div>
    <a href="/" class="underline">Back to home</a>
</x-layout>
