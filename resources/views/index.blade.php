@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    {{-- Start For Popular Game Section --}}
    <div class="popular-games">
        <h2 class="text-blue-500 uppercase tracking-wide font-simibold">Popular Games</h2>
        <div class="pupular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            @for ($i = 0; $i < 12; $i++)
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img class="rounded hover:opacity-75 transition ease-in-out duration-150" src="/ff7.jpg" alt="FF7 Image">
                        </a>
                        <div class="absolute w-16 h-16 bg-gray-800 rounded-full -bottom-5 -right-5">
                            <div class="font-simibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="font-simibold block mt-8 leading-tight hover:text-gray-400">Final Fantasy 7 Remark</a>
                    <div class="text-gray-400 mt-1">PS4</div>
                </div>
            @endfor
        </div>
    </div>
    {{-- End of popular game section --}}

    <div class="flex my-10">
        <div class="recently-viewed w-3/4 mr-32">
             <h2 class="text-blue-500 uppercase tracking-wide font-simibold">Recently Reviewed</h2>
             @for ($i = 0; $i < 3; $i++)
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img class="w-48 rounded hover:opacity-75 transition ease-in-out duration-150" src="/ff7.jpg" alt="FF7 Image">
                            </a>
                            <div class="absolute w-16 h-16 bg-gray-900 rounded-full -bottom-5 -right-5">
                                <div class="font-simibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="font-simibold text-lg block mt-4 leading-tight hover:text-gray-400">Final Fantasy 7 Remark</a>
                            <div class="text-gray-400 mt-1">Playstatioun 4</div>
                            <p class="mt-6 text-gray-400">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti ea odit rem amet aspernatur earum eveniet. Asperiores quo laboriosam, magnam vero praesentium at error modi. Sint cupiditate accusantium magni doloremque.
                            </p>
                        </div>
                    </div>
                </div>
             @endfor
        </div>
        <div class="most-anticipated w-1/4">
             <h2 class="text-blue-500 uppercase tracking-wide font-simibold">Most Anticipated</h2>
             <div class="most-anticipated-container space-y-10 mt-8">
                @for ($i = 0; $i < 4; $i++)
                    <div class="game flex">
                        <a href="#">
                            <img class="rounded w-16 hover:opacity-75 transition ease-in-out duration-150" src="/ff7.jpg" alt="FF7 Image">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300"> Cyberpunk 2017</a>
                            <div class="text-gray-400 text-sm mt-1"> Sept 16, 2017</div>
                        </div>
                    </div>
                @endfor
             </div>
             <h2 class="text-blue-500 uppercase tracking-wide font-simibold mt-8">Cooming Soon</h2>
             <div class="most-anticipated-container space-y-10 mt-8">
                @for ($i = 0; $i < 4; $i++)
                    <div class="game flex">
                        <a href="#">
                            <img class="rounded w-16 hover:opacity-75 transition ease-in-out duration-150" src="/ff7.jpg" alt="FF7 Image">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300"> Cyberpunk 2017</a>
                            <div class="text-gray-400 text-sm mt-1"> Sept 16, 2017</div>
                        </div>
                    </div>
                @endfor
             </div>
        </div>
    </div>

</div>
@endsection