@props(['post'])
<article
    class="transition-colors duration-300 bg-slate-800 hover:bg-slate-700 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl ml-4">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img src="{{ asset('/storage/' . $post->thumbnail) }}" alt="" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$post->category"/>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl text-teal-700">
                        <a href="/posts/{{$post->slug}}">{{ $post->title }}</a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                                        <time>{{ $post->created_at->diffForHumans() }} yayınlandı</time>
                                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 text-green-600">
                <p>
                    {{$post->excerpt}}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold text-red-800"><a
                                href="?author={{$post->author->username}}">{{ $post->author->username }}</a></h5>
                        <h6>Instigator..</h6>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/posts/{{$post->slug}}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Devam et</a>
                </div>
            </footer>
        </div>
    </div>
</article>
