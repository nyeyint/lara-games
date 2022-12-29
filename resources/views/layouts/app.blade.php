<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Lara Video Games</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-900 text-white">
        <header class="border-b border-gray-800">
            <nav
                class="container mx-auto flex flex-col items-center justify-between px-4 py-6 lg:flex-row"
            >
                <div class="flex flex-col items-center lg:flex-row">
                    <a href="/">
                        <img
                            class="w-48 flex-none"
                            src="/logo.svg"
                            alt="Lara Video Games Logo"
                        />
                    </a>
                    <ul class="ml-0 mt-6 flex space-x-8 lg:ml-16 lg:mt-0">
                        <li>
                            <a href="#" class="hover:text-gray-400">Games</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-gray-400">Reviews</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-gray-400"
                                >Coming Soon</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="mt-6 flex items-center lg:mt-0">
                    <div class="relative">
                        <input
                            type="text"
                            class="focus:shadow-outline w-64 rounded-full bg-gray-800 px-3 py-1 pl-8 text-sm focus:outline-none"
                            placeholder="Search..."
                        />
                        <div
                            class="absolute top-0 ml-2 flex h-full items-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                class="w-4 text-gray-400"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607z"
                                />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6">
                        <a href="#">
                            <img
                                class="w-8 rounded-full"
                                src="/avatar.jpg"
                                alt="avater"
                            />
                        </a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-8">@yield('content')</main>
        <footer class="border-t border-gray-800">
            <div class="container mx-auto px-4 py-6 text-center">
                Powered By
                <a href="#" class="underline hover:text-gray-400"> IGDB API</a>
            </div>
        </footer>
    </body>
</html>
