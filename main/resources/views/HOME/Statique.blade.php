@extends('LAYOUT.index')

@section('title', 'A proposde nous')

@section('container')

<style>
    /* .CERCLE{
        clip-path: polygon(100% 100%, 0% 0%, 100% 0%);
    } */
</style>

<section class=" h-lvh flex gap-5 px-28 mb-40">

    <div class=" w-1/2 h-full grid justify-center items-center relative ">
        <img class=" " src="AP/18.png" alt="">
        <div class=" w-40 h-40 rounded-full bg-blue-700 absolute bottom-0 right-20 opacity-45"></div>
    </div>

    <div class="  justify-center items-center w-1/2 h-full py-10 pt-[130px] ">

        <div class="  w-full flex justify-around items-center mb-10">

            <div class="  h-[194px] grid justify-center items-center relative">
                <div class=" rounded-full   w-40 h-40 flex justify-center items-center border-[20px] border-gray-300 ">
                    <h1 class="text-[50px] font-bold  text-gray-800">+</h1>
                    <h1 class="COUNT text-[80px] font-bold  text-gray-800">63</h1>
                </div>
                <h1 class=" text-2xl font-semibold text-center text-gray-800">Acquisitions</h1>
            </div>

            <div class=" h-[194px] grid justify-center items-center relative">
                <div class=" CERCLE rounded-full w-40 h-40 flex justify-center items-center border-[20px] border-gray-300">
                    <h1 class="COUNT1 text-[80px] font-bold  text-gray-800">30</h1>
                </div>
                <h1 class=" text-2xl font-semibold text-center text-gray-800">Growth Rate </h1>
            </div>

        </div>

        <div class="  flex justify-around items-center">

            <div class="h-[194px] grid justify-center items-center relative">
                <div class=" rounded-full  w-40 h-40 flex justify-center items-center border-[20px] border-gray-300">
                    <h1 class="COUNT2 text-[80px] font-bold  text-gray-800">76</h1>
                </div>
                <h1 class=" text-2xl font-semibold text-center text-gray-800">Acquisitions</h1>
            </div>

            <div class=" h-[194px] grid justify-center items-center relative">
                <div class=" rounded-full  w-40 h-40 flex justify-center items-center border-[20px] border-gray-300">
                    <h1 class="COUNT3 text-[80px] font-bold  text-gray-800">95</h1>
                    <p class=" text-[45px] font-bold  text-gray-800">%</p>
                </div>
                <h1 class=" text-2xl font-semibold text-center text-gray-800">Founder NPS</h1>
            </div>

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


