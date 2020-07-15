@extends('eproductsdev.eshopbase')


@section('main')
<div class="flex justify-center">
    <div class="w-full max-w-xl ">
    <p class="text-center text-3xl font-semibold">Product Info</p>
    <form class="bg-white shadow-md rounded px-8 pt-10 pb-10 mb-4" method="post" action="{{route('eproducts.eshopdevstore')}}">
        @csrf
        <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="ProductName">
            Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Name" name="name">
        </div>

        <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="DescName">
            Description
        </label>
        <textarea class="resize-y border rounded focus:outline-none focus:shadow-outline w-full" name="desc"></textarea>
        </div>

        <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="Amount">
            Amount
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="amount" type="text" placeholder="Amount" name="amount">       
        </div>
        

        <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="Categories">
            Categories
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="categories" type="text" placeholder="Categories" name="categories">
        </div>

        <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="Status">
            Status
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="status" type="text" placeholder="Status" name="status">
        

        <div class="flex items-center justify-center pt-8 ">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Create
            </button>
        </div>
    </form>
  
</div>
  
</div>
@endsection
