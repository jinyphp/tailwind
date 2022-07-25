<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <h1>jiny-ui-tailwind css demo</h1>
        <hr>
        <h2>Bordered</h2>
        <x-table>
            <!-- Table Header -->
            <thead>
                <x-tr>
                    <x-th class="text-center">
                        Avatar
                    </x-th>
                    <x-th class="text-left">
                        Name
                    </x-th>
                    <x-th class="text-left">
                        Email
                    </x-th>
                    <x-th class="text-center">
                        Plan
                    </x-th>
                    <x-th class="text-center">
                        Actions
                    </x-th>
                </x-tr>
            </thead>
            <!-- END Table Header -->

            <!-- Table Body -->
            <tbody>
                <x-tr>
                    <x-td class="text-center">
                        <x-avatar src="https://source.unsplash.com/mEZ3PoFGs_k/64x64" alt="User Avatar" size="sm"/>
                    </x-td>
                    <x-td>
                        <p class="font-medium">
                            Nansi Hart
                        </p>
                        <p class="text-gray-500">
                        Web Designer
                        </p>
                    </x-td>
                    <x-td>
                        <p class="text-gray-500">
                            n.hart@example.com
                        </p>
                    </x-td>
                    <x-td class="text-center">
                        <x-badge-pill color="emerald">Agency</x-badge-pill>

                    </x-td>
                    <x-td class="text-center">
                        <x-button-outline size="xs" color="gray">
                            <svg class="hi-solid hi-pencil inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                            <span>Edit</span>
                        </x-button-outline>
                    </x-td>
                </x-tr>

                <x-tr>
                    <x-td class="text-center">
                        <x-avatar src="https://source.unsplash.com/BGz8vO3pK8k/64x64" alt="User Avatar" size="sm"/>
                    </x-td>
                    <x-td>
                        <p class="font-medium">
                            Lia Baker
                        </p>
                        <p class="text-gray-500">
                        Web Developer
                        </p>
                    </x-td>
                    <x-td>
                        <p class="text-gray-500">
                            l.baker@example.com
                        </p>
                    </x-td>
                    <x-td class="text-center">
                        <x-badge-pill color="blue">Freelancer</x-badge-pill>
                    </x-td>
                    <x-td-center>
                        <x-button-outline size="xs" color="gray">
                            <svg class="hi-solid hi-pencil inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                            <span>Edit</span>
                        </x-button-outline>
                    </x-td-center>
                </x-tr>


            </tbody>
            <!-- END Table Body -->
        </x-table>

        <br>
        <br>
        <h2>Striped</h2>
        <x-table>
            <!-- Table Header -->
            <thead>
                <tr>
                    <x-th-center>
                        Avatar
                    </x-th-center>
                    <x-th>
                        Name
                    </x-th>
                    <x-th>
                        Email
                    </x-th>
                    <x-th class="text-center">
                        Plan
                    </x-th>
                    <x-th class="text-center">
                        Actions
                    </x-th>
                </tr>
            </thead>
            <!-- END Table Header -->

            <!-- Table Body -->
            <tbody>
                <tr>
                    <x-td class="text-center">
                        <x-avatar src="https://source.unsplash.com/iFgRcqHznqg/64x64" alt="User Avatar" size="sm"/>
                    </x-td>
                    <x-td>
                        <p class="font-medium">
                        Xavier Rosales
                        </p>
                        <p class="text-gray-500">
                        Author
                        </p>
                    </x-td>
                    <x-td>
                        <p class="text-gray-500">
                            x.rosales@example.com
                        </p>
                    </x-td>
                    <x-td class="text-center">
                        <x-badge-pill color="orange">Trial</x-badge-pill>
                    </x-td>
                    <x-td class="text-center">
                        <button type="button" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-2 py-1 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                            <svg class="hi-solid hi-pencil inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                            <span>Edit</span>
                        </button>
                    </x-td>
                </tr>

                <tr class="bg-gray-50">
                    <x-td class="text-center">
                        <x-avatar src="https://source.unsplash.com/c_GmwfHBDzk/64x64" alt="User Avatar" size="sm"/>
                    </x-td>
                    <x-td>
                        <p class="font-medium">
                        Danyal Clark
                        </p>
                        <p class="text-gray-500">
                        Laravel Developer
                        </p>
                    </x-td>
                    <x-td>
                        <p class="text-gray-500">
                            d.clark@example.com
                        </p>
                    </x-td>
                    <x-td class="text-center">
                        <x-badge-pill color="emerald">Agency</x-badge-pill>
                    </x-td>
                    <x-td class="text-center">
                        <button type="button" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-2 py-1 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                            <svg class="hi-solid hi-pencil inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                            <span>Edit</span>
                        </button>
                    </x-td>
                </tr>

                <tr>
                    <x-td class="text-center">
                        <x-avatar src="https://source.unsplash.com/QXevDflbl8A/64x64" alt="User Avatar" size="sm"/>
                    </x-td>
                    <x-td>
                        <p class="font-medium">
                        Keira Simons
                        </p>
                        <p class="text-gray-500">
                        Marketing Director
                        </p>
                    </x-td>
                    <x-td>
                        <p class="text-gray-500">
                            k.simons@example.com
                        </p>
                    </x-td>
                    <x-td class="text-center">
                        <div class="font-semibold inline-flex px-2 py-1 leading-4 text-xs rounded-full text-blue-700 bg-blue-200">Freelancer</div>
                    </x-td>
                    <x-td class="text-center">
                        <button type="button" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-2 py-1 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                            <svg class="hi-solid hi-pencil inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                            <span>Edit</span>
                        </button>
                    </x-td>
                </tr>
            </tbody>
            <!-- END Table Body -->
        </x-table>

    </body>
</html>
