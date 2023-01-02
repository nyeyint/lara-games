@extends('layouts.app')

{{-- main content --}}
@section('content')
<div class="container mx-auto px-4">
    <div
        class="game-details flex flex-col border-b border-gray-800 pb-12 lg:flex-row"
    >
        <div class="flex-none">
            <img src="/ff7.jpg" alt="cover" />
        </div>
        <div class="mt-8 lg:mt-0 lg:ml-12 lg:mr-64">
            <h2 class="font-simibold mt-1 text-4xl leading-tight">
                Final Fantasy VII Remake
            </h2>
            <div class="text-gray-400">
                <span>Advanture, RPG</span>
                &middot;
                <span>Square Enix</span>
                &middot;
                <span>Playstation 4</span>
            </div>
            <div class="item-center mt-8 flex flex-wrap">
                <div class="flex items-center">
                    <div class="h-16 w-16 rounded-full bg-gray-800">
                        <div
                            class="font-simibold flex h-full items-center justify-center text-xs"
                        >
                            90%
                        </div>
                    </div>
                    <div class="ml-4 text-sm">
                        Member <br />
                        Score
                    </div>
                </div>
                <div class="ml-12 flex items-center">
                    <div class="h-16 w-16 rounded-full bg-gray-800">
                        <div
                            class="font-simibold flex h-full items-center justify-center text-xs"
                        >
                            88%
                        </div>
                    </div>
                    <div class="ml-4 text-sm">
                        Critic <br />
                        Score
                    </div>
                </div>
                <div class="mt-4 flex items-center space-x-4 lg:ml-12 lg:mt-0">
                    <div
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-800"
                    >
                        <a href="#" class="hover:text-gray-400">
                            <svg
                                class="h-5 w-5 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                            >
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M51.7 295.1l31.7 6.3c7.9 1.6 16-.9 21.7-6.6l15.4-15.4c11.6-11.6 31.1-8.4 38.4 6.2l9.3 18.5c4.8 9.6 14.6 15.7 25.4 15.7c15.2 0 26.1-14.6 21.7-29.2l-6-19.9c-4.6-15.4 6.9-30.9 23-30.9h2.3c13.4 0 25.9-6.7 33.3-17.8l10.7-16.1c5.6-8.5 5.3-19.6-.8-27.7l-16.1-21.5c-10.3-13.7-3.3-33.5 13.4-37.7l17-4.3c7.5-1.9 13.6-7.2 16.5-14.4l16.4-40.9C303.4 52.1 280.2 48 256 48C141.1 48 48 141.1 48 256c0 13.4 1.3 26.5 3.7 39.1zm407.7 4.6c-3-.3-6-.1-9 .8l-15.8 4.4c-6.7 1.9-13.8-.9-17.5-6.7l-2-3.1c-6-9.4-16.4-15.1-27.6-15.1s-21.6 5.7-27.6 15.1l-6.1 9.5c-1.4 2.2-3.4 4.1-5.7 5.3L312 330.1c-18.1 10.1-25.5 32.4-17 51.3l5.5 12.4c8.6 19.2 30.7 28.5 50.5 21.1l2.6-1c10-3.7 21.3-2.2 29.9 4.1l1.5 1.1c37.2-29.5 64.1-71.4 74.4-119.5zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM144.5 348.1c-2.1 8.6 3.1 17.3 11.6 19.4l32 8c8.6 2.1 17.3-3.1 19.4-11.6s-3.1-17.3-11.6-19.4l-32-8c-8.6-2.1-17.3 3.1-19.4 11.6zm92-20c-2.1 8.6 3.1 17.3 11.6 19.4s17.3-3.1 19.4-11.6l8-32c2.1-8.6-3.1-17.3-11.6-19.4s-17.3 3.1-19.4 11.6l-8 32zM343.2 113.7c-7.9-4-17.5-.7-21.5 7.2l-16 32c-4 7.9-.7 17.5 7.2 21.5s17.5 .7 21.5-7.2l16-32c4-7.9 .7-17.5-7.2-21.5z"
                                />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-800"
                    >
                        <a href="#" class="hover:text-gray-400">
                            <svg
                                class="h-5 w-5 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"
                            >
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-800"
                    >
                        <a href="#" class="hover:text-gray-400">
                            <svg
                                class="h-5 w-5 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                            >
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-800"
                    >
                        <a href="#" class="hover:text-gray-400">
                            <svg
                                class="h-5 w-5 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"
                            >
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <p class="mt-12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Possimus necessitatibus excepturi rerum laboriosam explicabo
                itaque reiciendis ex sequi veniam dolores incidunt repellat
                earum magnam sapiente velit corrupti, saepe laudantium? Rem!
            </p>
            <div class="mt-12">
                <button
                    class="flex rounded bg-blue-500 px-4 py-4 font-semibold text-white transition duration-150 ease-in-out hover:bg-blue-600"
                >
                    <svg
                        class="w-6 fill-current"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                    >
                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M188.3 147.1C195.8 142.8 205.1 142.1 212.5 147.5L356.5 235.5C363.6 239.9 368 247.6 368 256C368 264.4 363.6 272.1 356.5 276.5L212.5 364.5C205.1 369 195.8 369.2 188.3 364.9C180.7 360.7 176 352.7 176 344V167.1C176 159.3 180.7 151.3 188.3 147.1V147.1zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"
                        />
                    </svg>
                    <span class="ml-2">Play Trailar</span>
                </button>
            </div>
        </div>
    </div>
    <!-- end game-details -->

    <div class="similar-games-container mt-8 border-b border-gray-800 pb-12">
        <h2 class="font-simibold uppercase tracking-wide text-blue-500">
            Images
        </h2>
        <div
            class="images mt-8 grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3"
        >
            @for ($i = 0; $i < 7; $i++)
            <div>
                <a href="#">
                    <img
                        class="transition duration-150 ease-in-out hover:opacity-75"
                        src="/ff7.jpg"
                        alt="screenshoot"
                    />
                </a>
            </div>
            @endfor
        </div>
    </div>
    {{-- end images container --}}
    <div class="images-container mt-8 pb-16">
        <h2 class="font-simibold uppercase tracking-wide text-blue-500">
            Similar Games
        </h2>
        <div
            class="pupular-games grid grid-cols-1 gap-12 text-sm sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6"
        >
            @for ($i = 0; $i < 12; $i++)
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img
                            class="rounded transition duration-150 ease-in-out hover:opacity-75"
                            src="/ff7.jpg"
                            alt="FF7 Image"
                        />
                    </a>
                    <div
                        class="absolute -bottom-5 -right-5 h-16 w-16 rounded-full bg-gray-800"
                    >
                        <div
                            class="font-simibold flex h-full items-center justify-center text-xs"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a
                    href="#"
                    class="font-simibold mt-8 block leading-tight hover:text-gray-400"
                    >Final Fantasy 7 Remark</a
                >
                <div class="mt-1 text-gray-400">PS4</div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection
