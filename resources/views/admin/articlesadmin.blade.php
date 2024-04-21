<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USERS ARTICLES</title>

    @vite('resources/css/app.css')


    <style>
        #settings,
        #home,
        #articles,
        #authors,
        #statistics {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
            color: aliceblue;
            transition: background-color 0.3s ease;

        }

        #settings:hover,
        #home:hover,
        #articles:hover,
        #authors:hover,
        #statistics:hover {
            background: linear-gradient(135deg, #d53369 0%, #daae51 100%);
        }
    </style>

</head>

<body>


    <!-- component -->
    <div class="flex w-screen h-screen text-gray-700 ">

        <!-- Component Start -->

        <div class="flex flex-col items-center w-40 pb-4 overflow-auto border-r border-gray-300">
            <a class="flex items-center justify-center flex-shrink-0 w-full h-16 bg-gray-300" href="#"
                style="background-color: #d53369; color: white;">
                <span class="ml-2 leading-none">
                    GlobalVoices Hub
                </span>

            </a>


            {{-- Home --}}
            <a class="flex items-center flex-shrink-0 h-10 px-6 mt-6 text-sm font-medium bg-gray-200 rounded hover:bg-gray-300"
                href="{{ route('admindashboard') }}" id="home">
                <svg class="w-5 h-5 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="ml-2 leading-none"> Home</s pan>
            </a>
            {{-- Articls --}}
            <a class="flex items-center flex-shrink-0 h-10 px-6 mt-6 text-sm font-medium bg-gray-200 rounded hover:bg-gray-300"
                href="{{ route('articlesadmin') }}" id="articles">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="ml-2 leading-none">Articles</s pan>
            </a>
            {{-- Authors --}}
            <a class="flex items-center flex-shrink-0 h-10 px-6 mt-6 text-sm font-medium bg-gray-200 rounded hover:bg-gray-300"
                href="{{ route('usersadmin') }}" id="authors">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
                <span class="ml-2 leading-none"> Authors</s pan>
            </a>
            {{-- Add new articles --}}
            <a class="flex items-center flex-shrink-0 h-10 px-6 mt-6 text-sm font-medium bg-gray-200 rounded hover:bg-gray-300"
                href="{{ route('newarticles') }}" id="statistics">

                <span class="ml-2 leading-none">+Add Article</s pan>
            </a>

            {{-- Settings --}}
            <a class="flex items-center flex-shrink-0 h-10 px-6 mt-6 text-sm font-medium bg-gray-200 rounded hover:bg-gray-300"
                href="#" id="settings">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
                <span class="ml-2 leading-none">Settings</s pan>
            </a>


            {{-- User --}}
            <a class="flex items-center flex-shrink-0 h-10 px-6 mt-auto text-sm font-medium bg-gray-200 rounded hover:bg-gray-300"
                href="#"style="background-color: #d53369; color: white;">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 leading-none">userName</s pan>
            </a>



        </div>

        <div class="flex flex-col flex-grow">
            <div class="flex items-center flex-shrink-0 h-16 px-8 border-b border-gray-300"
                style="background: linear-gradient(90deg, #d53369 0%, #daae51 100%); color: white;">
                <h1 class="text-lg font-medium">Manage Articlce</h1>
                <a href="{{ route('home') }}"
                    class="flex items-center justify-center h-10 px-4 ml-auto text-sm font-medium rounded hover:bg-gray-300">
                    Log Out
                </a>
            </div>
            <div class="flex-grow p-6 overflow-auto bg-gray-200">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-16">

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-white-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Article image
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Article Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Author name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Number of Likes
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Delete
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edit
                                </th>

                            </tr>
                        </thead>
                        @foreach ($articles as $item)
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-white-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-100">

                                    <td class="p-4">
                                        <img src="{{ $item->url_image ? asset('storage/url_images/' . $item->url_image) : asset('images/noImage.jpg') }}"
                                            alt="article_image" style="width: 100px; margin-left: 8%;"
                                            alt="article image">


                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-black-900 whitespace-nowrap dark:text-gray-900">
                                        {{ $item->titre }}
                                    </th>

                                    <td class="px-6 py-4">
                                        {{ $item->user->name }}
                                    </td>
                                    <td class="px-6 py-4 text-gray-900">
                                        {{ count($item->Like) }}
                                    </td>
                                    <td class="px-6 py-4">

                                        <form id="delete-form" method="POST"
                                            action="{{ route('author.deleteArticle', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="article_id" id="article_id">
                                            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                                class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                                type="button">
                                                Delete
                                            </button>
                                            <div id="popup-modal" tabindex="-1"
                                                style="top: 50%; left: 50%; transform: translate(-50%, -50%);"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed max-h-full">
                                                <!-- Popup modal content goes here -->
                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-500">
                                                        <button type="button"
                                                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="popup-modal">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="p-4 md:p-5 text-center">
                                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 20 20">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                            </svg>
                                                            <h3
                                                                class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                Are you sure you want to delete this article?</h3>
                                                            <button data-modal-hide="popup-modal" type="submit"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                Yes, I'm sure
                                                            </button>
                                                            <button data-modal-hide="popup-modal" type="button"
                                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                                cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>



                                        {{-- EDITE ARTICLE --}}
                                    <td class="px-6 py-4">

                                        <!-- Modal toggle -->
                                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Edit
                                        </button>

                                        <!-- Main modal -->
                                        <div id="crud-modal" tabindex="-1" aria-hidden="true"
                                            style="top: 50%; left: 65%; transform: translate(-50%, -50%); width: 60%"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed  ">

                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3
                                                            class="text-lg font-semibold text-gray-900 dark:text-white">
                                                            Edit article
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-toggle="crud-modal">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <form class="p-4 md:p-5">
                                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                                            <div class="col-span-2">
                                                                <label for="name"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edit
                                                                    article title</label>
                                                                <input type="text" name="name" id="name"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                    placeholder="Type product name" required="">
                                                            </div>
                                                            <div class="col-span-2">
                                                                <label for="name"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Uploade
                                                                    new image</label>
                                                                <input name="url_image"
                                                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                                    aria-describedby="user_avatar_help"
                                                                    id="user_avatar" type="file">
                                                            </div>
                                                            <div class="col-span-2">
                                                                <label for="description"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                    Edit article</label>
                                                                <textarea id="description" rows="4"
                                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Save
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>



                </div>
            </div>
            <!-- Component End  -->

        </div>



</body>

</html>
