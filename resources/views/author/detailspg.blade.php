<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article Details</title>
    @vite('resources/css/app.css')

</head>

<body>
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-white text-2xl font-bold">GlobalVoices Hub</h1>
            <a class="text-gray-400 hover:text-white" href="{{ route('dashboard') }}">Back</a>
        </div>
    </nav>




    <main class="container mx-auto mt-8 ">

        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-8/12 px-4 mb-8">
                <img src="{{ $article->url_image ? asset('storage/url_images/' . $article->url_image) : asset('images/noImage.jpg') }}"
                    alt="article Image" class="w-full h-64 object-cover rounded">

                {{-- Likes --}}
                <div>
                    @if ($Isliked)
                        <div>
                            @csrf

                            <input type="hidden" value="{{ $article->id }}" name="post_id">

                            <button style="background-color: red; border-radius: 50%" class="mt-6">
                                <svg fill="#262626" height="24" viewBox="0 0 48 48" width="24"
                                    style="color: black">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="text-xl font-bold mt-4 mb-2">{{ count($article->Like) }} likes</div>
                    @else
                        <form method="POST" action="{{ route('likes') }}" {{ $Isliked ? disabled : '' }}>
                            @csrf
                            <input type="hidden" value="{{ $article->id }}" name="post_id">
                            <button class="mt-6">
                                <svg fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                            </button>

                        </form>
                        <div class="text-xl font-bold mt-4 mb-2">{{ count($article->Like) }} likes</div>
                    @endif
                </div>
                <h2 class="text-4xl font-bold mt-4 mb-2">{{ $article->titre }}</h2>
                <p class="text-gray-700 mb-4">
                    {{ $article->contenu }}
                </p>
            </div>
        </div>

    </main>

    {{-- comment --}}
    <div class="md:w-4/12 px-4 mb-8 mt-16" style="width:100%;">
        <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased" style="border-radius: 20px;">
            <div class="max-w-2xl mx-auto px-4">

                <form action="{{ route('comments.store') }}" method="POST" class="mb-6">
                    @csrf
                    <div
                        class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" name="contenu" rows="6"
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                            placeholder="Write a comment..." required></textarea>
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    </div>
                    <button type="submit"
                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-red-600 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Post comment
                    </button>
                </form>
            </div>
            @if (isset($comments))
                <div>
                    @foreach ($comments as $comment)
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Comments
                                    ({{ count($comments) }})
                                </h2>
                            </div>
                            <h3>User: {{ $comment->user->name }}</h3>
                            <p>Comment: {{ $comment->contenu }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="p-6">
                    <p>No comments found.</p>
                </div>
            @endif

    </div>

    </section>



    </div>
</body>

</html>
