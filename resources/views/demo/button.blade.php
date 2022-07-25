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
        <x-button size="large" color="red">Hello</x-button>
        <x-button size="sm" color="blue">Hello</x-button>


        <br>

        <x-button-light size="large" color="red">Hello</x-button-light>
        <x-button-outline size="large" color="blue">Hello</x-button-outline>
    </body>
</html>
