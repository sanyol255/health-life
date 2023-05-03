<x-main-layout :title="' - Articles'">
    <x-flash-success />
    <x-flash-failure />
    <header>
        <h2 class="text-2xl text-center mb-4">Articles</h2>
    </header>
    @can('create', \App\Models\Article::class)
    <aside class="text-right mr-12">
        <a href="{{ route('articles.create') }}" class="bg-[#c30] text-white p-3 rounded-full hover:bg-[#802000] hover:text-orange-300 text-end">Add Article</a>
    </aside>
    @endcan
    <main class="mt-6 ml-8 mr-6">
        <section>
            @foreach($articles as $article)
                <hr class="mb-3">
                <article class="mb-4">
                    <h2 class="text-center text-xl mb-2">
                        @can('view', $article)
{{--                        @if(isset(auth()->user()->id))--}}
                            <a href="{{ route('articles.show', $article->id) }}" class="hover:text-teal-600">{{ $article->title }}</a>
                        @elsecannot('view', $article)
                            {{ $article->title }}
                        @endcan
                    </h2>
                    <p class="indent-12">{{ $article->body}}</p>
                    <span class="float-left">Author: {{ $article->author->firstname }} {{ $article->author->lastname }}</span><span class="float-right">Date: {{ $article->created_at->format('M d, Y H:i') }}</span>
                </article>
                <br>
            @endforeach
        </section>
    </main>
</x-main-layout>
