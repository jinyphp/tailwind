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

        <div class="grid grid-cols-1 sm:grid-cols-5 gap-4 lg:gap-8 text-center">
            <div>
                <!-- Avatar (extra small) -->
                <x-avatar src="https://source.unsplash.com/iFgRcqHznqg/160x160" alt="User Avatar" size="xs"/>
            </div>
            <div>
                <!-- Avatar (small) -->
                <x-avatar src="https://source.unsplash.com/iFgRcqHznqg/160x160" alt="User Avatar" size="sm"/>
            </div>
            <div>
                <!-- Avatar -->
                <x-avatar src="https://source.unsplash.com/iFgRcqHznqg/160x160" alt="User Avatar"/>
            </div>
            <div>
                <!-- Avatar (large) -->
                <x-avatar src="https://source.unsplash.com/iFgRcqHznqg/160x160" alt="User Avatar" size="lg"/>
            </div>
            <div>
                <!-- Avatar (extra large) -->
                <x-avatar src="https://source.unsplash.com/iFgRcqHznqg/160x160" alt="User Avatar" size="xl"/>
            </div>
        </div>

    </body>
</html>
