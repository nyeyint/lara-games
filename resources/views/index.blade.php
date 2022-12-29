@extends('layouts.app') 

@section('content')
<div class="container mx-auto px-4">
    {{-- Start For Popular Game Section --}}
    <div class="popular-games">
        <h2 class="font-simibold uppercase tracking-wide text-blue-500">
            Popular Games
        </h2>
        <div
            class="pupular-games grid grid-cols-1 gap-12 border-b border-gray-800 pb-16 text-sm sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6"
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
    {{-- End of popular game section --}}

    <div class="my-10 flex flex-col lg:flex-row">
        <div class="recently-viewed w-full lg:mr-32 lg:w-3/4">
            <h2 class="font-simibold uppercase tracking-wide text-blue-500">
                Recently Reviewed
            </h2>
            @for ($i = 0; $i < 3; $i++)
            <div class="recently-reviewed-container mt-8 space-y-12">
                <div
                    class="game flex rounded-lg bg-gray-800 px-6 py-6 shadow-md"
                >
                    <div class="relative flex-none">
                        <a href="#">
                            <img
                                class="w-48 rounded transition duration-150 ease-in-out hover:opacity-75"
                                src="/ff7.jpg"
                                alt="FF7 Image"
                            />
                        </a>
                        <div
                            class="absolute -bottom-5 -right-5 h-16 w-16 rounded-full bg-gray-900"
                        >
                            <div
                                class="font-simibold flex h-full items-center justify-center text-xs"
                            >
                                80%
                            </div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a
                            href="#"
                            class="font-simibold mt-4 block text-lg leading-tight hover:text-gray-400"
                            >Final Fantasy 7 Remark</a
                        >
                        <div class="mt-1 text-gray-400">Playstatioun 4</div>
                        <p class="mt-6 hidden text-gray-400 lg:block">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Deleniti ea odit rem amet aspernatur earum
                            eveniet. Asperiores quo laboriosam, magnam vero
                            praesentium at error modi. Sint cupiditate
                            accusantium magni doloremque.
                        </p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <div class="most-anticipated mt-12 lg:mt-0 lg:w-1/4">
            <h2 class="font-simibold uppercase tracking-wide text-blue-500">
                Most Anticipated
            </h2>
            <div class="most-anticipated-container mt-8 space-y-10">
                @for ($i = 0; $i < 4; $i++)
                <div class="game flex">
                    <a href="#">
                        <img
                            class="w-16 rounded transition duration-150 ease-in-out hover:opacity-75"
                            src="/ff7.jpg"
                            alt="FF7 Image"
                        />
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">
                            Cyberpunk 2017</a
                        >
                        <div class="mt-1 text-sm text-gray-400">
                            Sept 16, 2017
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <h2
                class="font-simibold mt-8 uppercase tracking-wide text-blue-500"
            >
                Cooming Soon
            </h2>
            <div class="most-anticipated-container mt-8 space-y-10">
                @for ($i = 0; $i < 4; $i++)
                <div class="game flex">
                    <a href="#">
                        <img
                            class="w-16 rounded transition duration-150 ease-in-out hover:opacity-75"
                            src="/ff7.jpg"
                            alt="FF7 Image"
                        />
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">
                            Cyberpunk 2017</a
                        >
                        <div class="mt-1 text-sm text-gray-400">
                            Sept 16, 2017
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
