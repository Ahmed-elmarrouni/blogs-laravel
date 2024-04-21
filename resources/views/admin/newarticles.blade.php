<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
                <h1 class="text-lg font-medium">Add New Articles</h1>
                <a href="{{ route('home') }}"
                    class="flex items-center justify-center h-10 px-4 ml-auto text-sm font-medium rounded hover:bg-gray-300">
                    Log Out
                </a>
            </div>
            <div class="flex-grow p-6 overflow-auto bg-gray-200">

                {{-- <form class="mx-auto" method="POST" action={{ route('addNewArticle') }} enctype="multipart/form-data"> --}}
                @csrf
                <div style="width: 80%; margin: 0 auto">
                    {{-- ARTICLE TITRE --}}
                    <div class="mb-5">
                        <label for="base-input" class="block mt-6 text-sm font-medium text-gray-900 ">Article title
                            :</label>
                        <input type="text" id="base-input" name="titre"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    {{-- ARTICLE IMAGE --}}

                    <label class="block mt-6 text-sm font-medium text-gray-900 " for="user_avatar">Upload
                        image :</label>
                    <input name="url_image"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    <div class="mt-1 text-sm text-gray-500 " id="user_avatar_help">An article picture is useful to
                        include in
                        the article.</div>


                    {{-- ARTICLE CONTENT --}}
                    <label for="message" class="block mt-6 text-sm font-medium text-gray-900 ">Article content
                        :</label>
                    <textarea id="message" rows="16" name="contenu"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your article here...">
                        </textarea>



                    <button type="submit" style="width: 100%"
                        class="focus:outline-none mt-6 text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm  py-2.5 mb-8 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Submit
                    </button>

                </div>
                </form>

            </div>
        </div>
        <!-- Component End  -->

    </div>

</body>

</html>
