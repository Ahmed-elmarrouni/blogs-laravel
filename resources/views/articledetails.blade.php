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
            <a class="text-gray-400 hover:text-white" href="{{ route('guestarticles') }}">Back</a>
        </div>
    </nav>
    <main class="container mx-auto mt-8">
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-8/12 px-4 mb-8">
                <img src="{{ $article->url_image ? asset('storage/url_images/' . $article->url_image) : asset('images/noImage.jpg') }}"
                    alt="article Image" class="w-full h-64 object-cover rounded">
                <h2 class="text-4xl font-bold mt-4 mb-2">{{ $article->titre }}</h2>
                <p class="text-gray-700 mb-4">
                    {{ $article->contenu }}
                </p>
            </div>
            <div class="w-full md:w-4/12 px-4 mb-8">
                <div class="bg-gray-100 px-4 py-6 rounded">
                    <h3 class="text-lg font-bold mb-2">Categories</h3>
                    <ul class="list-disc list-inside">
                        <li><a href="#" class="text-gray-700 hover:text-gray-900">Technology</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-gray-900">Travel</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-gray-900">Food</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    {{-- comment --}}
    {{-- <div class=" md:w-4/12 px-4 mb-8" style="width:100%; ">
        <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased" style="border-radius: 20px;">
            <div class="max-w-2xl mx-auto px-4">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Comments (20)</h2>
                </div>
                <form class="mb-6">
                    <div
                        class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="6"
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                            placeholder="Write a comment..." required></textarea>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Post comment
                    </button>
                </form>

            </div> --}}
        </section>
    </div>
</body>

</html>
