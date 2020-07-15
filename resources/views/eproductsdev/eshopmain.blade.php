@extends('eproductsdev.eshopbase')

@section('main')
        <div class="pt-8">
            <div><p class="text-3xl font-bold">Latest Products</p></div>
        </div>
        <div class="grid grid-cols-3 gap-4 pt-8">
            @foreach($products as $prod)
            <div class="inline-block max-w-sm rounded overflow-hidden shadow-lg">
                <div class="px-1">
                    <img class="w-full h-auto block" src="https://cnet1.cbsistatic.com/img/MdKl1BKoa6AynpwOjqj0fUQCfoU=/940x0/2020/06/11/28f5f569-3c58-4669-b850-754514d46569/sony-playstation-5.png">
                </div>
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">{{$prod->name}}</div>
                </div>
                <div class="px-4 py-4 pt-4">
                    <p class="text-center text-2xl font-bold text-red-600">RM 1200</p>
                </div>

                <div class="flex px-4 py-4 pt-6 justify-center">
                    <div class="text-center px-2 py-2 m-1 ">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 text-sm">
                                Buy Now
                        </button>
                    </div>
                    <div class="text-center px-2 py-2 m-1">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 text-sm">
                                More Details
                        </button>
                    </div>
                </div>

            </div>
            @endforeach
            <div class="inline-block max-w-sm rounded overflow-hidden shadow-lg">
                <div class="px-1">
                    <img class="w-full h-auto block" src="https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683__340.png" alt="Sunset in the mountains">
                </div>
                
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                </div>
                <div class="px-4 py-4 pt-1 float-right">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 text-sm">
                            More Details
                    </button>
                </div>
            </div>
            <div class="inline-block max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683__340.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                </div>
                <div class="px-4 py-4 pt-1 float-right">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 text-sm">
                            More Details
                    </button>
                </div>
            </div>
        </div>
        <div class="pt-8">
            <div><p class="text-3xl font-bold">Trending Products</p></div>
        </div>
        <div class="grid grid-cols-3 gap-4 pt-8 pb-8">
            <div class="inline-block max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683__340.png" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Trending Products</span>
                    </div>
                    <div class="px-4 py-4 pt-1 float-right">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 text-sm">
                                More Details
                        </button>
                    </div>
            </div>
            <div class="inline-block max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683__340.png" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Trending Products</span>
                    </div>
                    <div class="px-4 py-4 pt-1 float-right">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 text-sm">
                                More Details
                        </button>
                    </div>
            </div>
            <div class="inline-block max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683__340.png" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 ">Trending Products</span>
                    </div>
                    <div class="px-4 py-4 pt-1 float-right">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 text-sm">
                                More Details
                        </button>
                    </div>
            </div>
        </div>
@endsection