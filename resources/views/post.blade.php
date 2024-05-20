<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <article class="py-8 max-w-screen-md">
        <a href="/posts/{{$post['id']}}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 ">{{$post['title']}}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#"> {{ $post['author'] }} </a> | {{ date('M d, Y, H:i:s', time()) }}
        </div>
        <!-- //note: Body -->
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a class="font-medium text-blue-500 hover:none" href="/posts">Back to post &laquo;</a>
    </article>
</x-layout>