<x-app-layout>
    <x-slot name="header">
        <ul>
            <li class="font-semibold text-xl text-gray-800 leading-tight ">
                {{ __('Home') }}
            </li>

            <li class="" style="margin-left: 70%">

                <form class="max-w-md mx-auto" action="{{ route('search') }}" method="GET">
                    @csrf
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-20 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search " required name="query" />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

            </li>

        </ul>
    </x-slot>



    {{-- POST ARTICLES --}}


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- component -->

                @if (isset($articles))
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 ">
                        @foreach ($articles as $item)
                            <div class="bg-gray-100 p-4">
                                <div class="bg-white border rounded-sm">
                                    <div class="flex items-center px-4 py-3">
                                        <div class="ml-3">
                                            <span
                                                class="text-sm font-semibold antialiased block leading-tight">{{ $item->user->name }}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('detailspg', ['id' => $item->id]) }}">

                                        <img class="h-48 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100 mt-5"
                                            src="{{ $item->url_image ? asset('storage/url_images/' . $item->url_image) : asset('images/noImage.jpg') }}"
                                            alt="article_image" style="width: 85%; margin-left: 8%;">
                                    </a>
                                    <h2 class="mx-4 mt-6">{{ $item->titre }}</h2>
                                    <div class="font-semibold text-sm mx-4 mt-2 mb-4">{{ count($item->Like) }} likes
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="p-6 text-gray-900">
                        <p>No articles found.</p>
                    </div>
                @endif
            </div>

            <br><br>
            <div style="margin-right: 40%">
                {{-- Pagination --}}
                {{ $articles->links() }}
            </div>
        </div>
    </div>

</x-app-layout>
