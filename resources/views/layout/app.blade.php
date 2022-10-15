<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir=rtl>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env("APP_NAME") }}</title>

        @vite('resources/css/app.css')
    </head>

    <body class="antialiased" x-data="{ mobilenav: false }">
        @include('layout.sidebar')

        <div class="flex flex-col flex-1 gap-4 md:pl-60">
            @include('layout.header')


            <!-- Page Content -->
            <main>

                <div class="py-6">
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                    </div>
                    </a>

                    <div>
                        <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                            <!-- Replace with your content -->
                            <div class="py-4">
                                <div class="border-4 border-gray-200 border-dashed rounded-lg min-h-[24rem] px-4">
                                    {{ $slot }}
                                </div>
                                <!-- /End replace -->
                            </div>
                        </div>
                    </div>
            </main>

        </div>

        @vite("resources/js/app.js")
    </body>

</html>
