<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Articles') }}
        </h2>
    </x-slot>




    <form class="mx-auto" method="POST" action={{route('addNewArticle')}} enctype="multipart/form-data">
        @csrf
        <div style="width: 80%; margin: 0 auto">
            {{-- ARTICLE TITRE --}}
            <div class="mb-5">
                <label for="base-input" class="block mt-6 text-sm font-medium text-gray-900 ">Article title :</label>
                <input type="text" id="base-input" name="titre"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            {{-- ARTICLE IMAGE --}}

            <label class="block mt-6 text-sm font-medium text-gray-900 " for="user_avatar">Upload
                image :</label>
            <input name="url_image"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="user_avatar" type="file">
            <div class="mt-1 text-sm text-gray-500 " id="user_avatar_help">An article picture is useful to include in
                the article.</div>


            {{-- ARTICLE CONTENT --}}
            <label for="message" class="block mt-6 text-sm font-medium text-gray-900 ">Article content :</label>
            <textarea id="message" rows="16" name="contenu"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your article here...">
            </textarea>



            <button type="submit" style="width: 100%"
                class="focus:outline-none mt-6 text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm  py-2.5 mb-8 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Submit
            </button>

        </div>
    </form>

</x-app-layout>
