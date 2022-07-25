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

        <div class="grid grid-cols-2 sm:grid-cols-5 lg:grid-cols-10 gap-4 text-center">
            <div>
              <!-- Badge (small gray) -->
              <x-badge color="gray">Badge</x-badge>
            </div>
            <div>
              <!-- Badge (small emerald) -->
              <x-badge color="emerald">Badge</x-badge>
            </div>
            <div>
              <!-- Badge (small teal) -->
              <x-badge color="teal">Badge</x-badge>
            </div>
            <div>
              <!-- Badge (small blue) -->
              <x-badge color="blue">Badge</x-badge>
            </div>
            <div>
              <!-- Badge (small indigo) -->
              <x-badge color="indigo">Badge</x-badge>
            </div>
            <div>
              <!-- Badge (small purple) -->
              <x-badge color="purple">Badge</x-badge>
            </div>
            <div>
              <!-- Badge (small pink) -->
              <x-badge color="pink">Badge</x-badge>
            </div>
            <div>
              <!-- Badge (small red) -->
              <x-badge color="red">Badge</x-badge>
            </div>
            <div>
              <!-- Badge (small orange) -->
              <x-badge color="orange">Badge</x-badge>
            </div>
            <div>
              <!-- Badge (small yellow) -->
              <x-badge color="yellow">Badge</x-badge>
            </div>
        </div>

        <h2>Pill</h2>
        <div class="grid grid-cols-2 sm:grid-cols-5 lg:grid-cols-10 gap-4 text-center">
            <div>
                <!-- Badge (small gray) -->
                <x-badge-pill color="gray">Badge</x-badge-pill>
            </div>
            <div>
                <!-- Badge (small emerald) -->
                <x-badge-pill color="emerald">Badge</x-badge-pill>
            </div>
            <div>
                <!-- Badge (small teal) -->
                <x-badge-pill color="teal">Badge</x-badge-pill>
            </div>
            <div>
                <!-- Badge (small blue) -->
                <x-badge-pill color="blue">Badge</x-badge-pill>
            </div>
            <div>
                <!-- Badge (small indigo) -->
                <x-badge-pill color="indigo">Badge</x-badge-pill>
            </div>
            <div>
                <!-- Badge (small purple) -->
                <x-badge-pill color="purple">Badge</x-badge-pill>
            </div>
            <div>
                <!-- Badge (small pink) -->
                <x-badge-pill color="pink">Badge</x-badge-pill>
            </div>
            <div>
                <!-- Badge (small red) -->
                <x-badge-pill color="red">Badge</x-badge-pill>
            </div>
            <div>
                <!-- Badge (small orange) -->
                <x-badge-pill color="orange">Badge</x-badge-pill>
            </div>
            <div>
                <!-- Badge (small yellow) -->
                <x-badge-pill color="yellow">Badge</x-badge-pill>
            </div>
        </div>


    </body>
</html>
