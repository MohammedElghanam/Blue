@extends('LAYOUT.index')

@section('title', 'A proposde nous')

@section('container')

<section class=" h-lvh flex gap-16 px-10">
    <div class=" w-1/2 h-full grid justify-center items-center relative">
        <img class=" w-full h-3/4" src="images/795.png" alt="">
        <div class=" w-40 h-40 rounded-full bg-blue-700 absolute bottom-0 right-20 opacity-45"></div>
    </div>
    <div class=" grid grid-cols-8 justify-center items-center gap-8 w-1/2 h-full py-10">
        <div class=" col-span-4 h-60 grid justify-center items-center">
            <div class=" rounded-full bg-blue-500 w-52 h-52 flex justify-center items-center border-[15px] border-red-600">
                <h1 class="text-[90px] font-bold  text-gray-800">+</h1>
                <h1 class="COUNT text-[90px] font-bold  text-gray-800">63</h1>
            </div>
            <h1 class=" text-4xl font-sans text-center">Acquisitions</h1>
        </div>
        <div class=" col-span-4 h-60 grid justify-center items-center relative">
            <div class=" rounded-full bg-blue-500 w-52 h-52 flex justify-center items-center border-[15px] border-red-600">
                <h1 class="COUNT1 text-[90px] font-bold  text-gray-800">300</h1>
            </div>
            <h1 class=" text-4xl font-sans text-center">Growth Rate </h1>
        </div>
        <div class=" col-span-4 h-60 grid justify-center items-center relative">
            <div class=" rounded-full bg-blue-500 w-52 h-52 flex justify-center items-center border-[15px] border-red-600">
                <h1 class="COUNT2 text-[90px] font-bold  text-gray-800">76</h1>
            </div>
            <h1 class=" text-4xl font-sans text-center">Acquisitions</h1>
        </div>
        <div class=" col-span-4 h-60 grid justify-center items-center relative">
            <div class=" rounded-full bg-blue-500 w-52 h-52 flex justify-center items-center border-[15px] border-red-600">
                <h1 class="COUNT3 text-[90px] font-bold  text-gray-800">95</h1>
                <p class=" text-[90px] font-bold  text-gray-800">%</p>
            </div>
            <h1 class=" text-4xl font-sans text-center">Founder NPS</h1>
        </div>
    </div>
</section>

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Counter-Up Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<script>
    jQuery(document).ready(function( $ ) {
        $('.COUNT').counterUp({
            delay: 200, // the delay time in ms
            time: 2000  // the speed time in ms
        });

        $('.COUNT1').counterUp({
            delay: 200, // the delay time in ms
            time: 2000  // the speed time in ms
        });

        $('.COUNT2').counterUp({
            delay: 200, // the delay time in ms
            time: 2000  // the speed time in ms
        });

        $('.COUNT3').counterUp({
            delay: 200, // the delay time in ms
            time: 2000  // the speed time in ms
        });
    });
</script>