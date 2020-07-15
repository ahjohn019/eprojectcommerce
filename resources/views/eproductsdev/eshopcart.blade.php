@extends('eproductsdev.eshopbase')

@section('main')
<table class="table-auto">
  <thead>
    <tr>
      <th class="px-4 py-2">Product Name</th>
      <th class="px-4 py-2">Product Image</th>
      <th class="px-4 py-2">Description</th>
      <th class="px-4 py-2">Quantity</th>
      <th class="px-4 py-2">Price (RM)</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="border px-4 py-2"><p class="text-center">PS5</p></td>
      <td class="border px-4 py-2"></td>
      <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</td>
      <td class="border px-4 py-2"><p class="text-center">1</p</td>
      <td class="border px-4 py-2"><p class="text-center">2000</p></td>
    </tr>
    <tr class="bg-gray-100">
      <td class="border px-4 py-2"><p class="text-center">PS5</p></td>
      <td class="border px-4 py-2"></td>
      <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</td>
      <td class="border px-4 py-2"><p class="text-center">3</p</td>
      <td class="border px-4 py-2"><p class="text-center">2000</p></td>
    </tr>
    <tr>
      <td class="border px-4 py-2"><p class="text-center">PS5</p></td>
      <td class="border px-4 py-2"></td>
      <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</td>
      <td class="border px-4 py-2"><p class="text-center">1</p</td>
      <td class="border px-4 py-2"><p class="text-center">2000</p></td>
    </tr>
  </tbody>
</table>

<div class="grid gap-4 bg-gray-200">
    <div class="flex">
    <div class="flex-1 px-4 py-2 m-2">
        <p class="float-left text-lg font-bold">TOTAL PRODUCT</p>
    </div>
    <div class="flex-1 text-center px-4 py-2 m-2">
        <p class="float-right text-lg pr-1">6000</p>
    </div>
    </div>

    <div class="flex">
    <div class="flex-1 px-4 py-2 m-2">
        <p class="float-left text-lg font-bold">TOTAL SHIPPING</p>
    </div>
    <div class="flex-1 text-center px-4 py-2 m-2">
        <p class="float-right text-lg pr-1">10</p>
    </div>
    </div>

    <div class="flex">
    <div class="flex-1 px-4 py-2 m-2">
        <p class="float-left text-lg font-bold">TOTAL</p>
    </div>
    <div class="flex-1 text-center px-4 py-2 m-2">
        <p class="float-right text-lg pr-1">6010</p>
    </div>
    </div>

    <div class="flex">
    <div class="flex-1 text-center px-4 py-2 m-2">
        <p class="float-right text-lg pr-1"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    CHECKOUT
    </button></p>
    </div>
    </div>

</div>


@endsection