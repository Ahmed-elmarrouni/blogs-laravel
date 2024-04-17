<x-app-layout>
    <x-slot name="header">
        <ul>
            <li class="font-semibold text-xl text-gray-800 leading-tight ">
                {{ __('Home') }}
            </li>

            <li class="" style="margin-left: 70%">

                <form class="max-w-md mx-auto" action="{{ route('search') }}" method="GET">
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
                                            <span class="text-sm font-semibold antialiased block leading-tight">User
                                                name</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('detailspg', ['id' => $item->id]) }}">

                                        <img class="h-48 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100 mt-5"
                                            src="{{ $item->url_image ? asset('storage/url_images/' . $item->url_image) : asset('images/noImage.jpg') }}"
                                            alt="article_image" style="width: 85%; margin-left: 8%;">
                                    </a>
                                    {{-- <a href="#">
                                        <img src="{{ $item->url_image ? asset('storage/url_images/' . $item->url_image) : asset('images/noImage.jpg') }}"
                                            alt="article_image" style="width: 15rem; margin-left: 8%;"
                                            alt="article image">
                                    </a> --}}



                                    <h2 class="mx-4 mt-6">{{ $item->titre }}</h2>
                                    <div class="flex items-center justify-between mx-4 mt-3 mb-2">
                                        <div class="flex gap-5">
                                            {{-- Likes --}}
                                            {{-- <form method="POST" action="{{route('likes')}}">
                                                @csrf

                                                <input type="hidden" value="{{$item->id}}"  name="post_id">
                                                
                                                <button>
                                                    <svg fill="#262626" height="24" viewBox="0 0 48 48"
                                                        width="24">
                                                        <path
                                                            d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                                        </path>
                                                    </svg>
                                                </button>

                                            </form> --}}
                                        </div>
                                    </div>
                                    <div class="font-semibold text-sm mx-4 mt-2 mb-4">{{count($item->Like)}} likes</div>
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
