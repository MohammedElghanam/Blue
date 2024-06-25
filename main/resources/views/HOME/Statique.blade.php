@extends('LAYOUT.index')

@section('title', 'A proposde nous')

@section('container')

<style>
    /* .CERCLE{
        clip-path: polygon(100% 100%, 0% 0%, 100% 0%);
    } */
</style>

<section class=" flex bg-gray-50 py-16 mb-32">
    <div class=" w-[15%]"></div>
    <div class=" w-[85%] h-80 bg-[#163172] rounded-s-full relative ">
       
        <h1 class=" font-bold text-5xl mb-4 text-white absolute left-60 top-8">CE QUE NOUS FAISONS .</h1>
        <p class=" w-[64%] text-white absolute left-60 top-28 text-xl">Lorem ipsum is placeholder text commonly used in the graphic, print, and
            publishing
            <span class=" font-medium">industries for previewing</span> layouts and visual mockups
            Lorem ipsum is placeholder text commonly <span class=" font-medium"> used in the graphic, </span> print, and
            publishing
            
        </p>
        <div class=" absolute w-36 h-36 bg-[#1e56a0] rounded-full opacity-70 -bottom-32 right-32"></div>
        <img class=" absolute -bottom-16 right-4" src="AP/19.png" alt="">
    </div>
</section>

@endsection



