@extends('LAYOUT.index')

@section('title', 'Notre Vision')

@section('container')

<style>
    .rotate{
        transform: rotate(-17deg);
        clip-path: polygon(0 0, 100% 0, 0% 100%, 0 100%);
    }

    .rotate1{
        transform: rotate(20deg);
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }

    .rotate2{
        transform: rotate(-17deg);
        /* clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%); */
    }
</style>






<section class="bg-gray-50 border-2 border-red-600 relative h-[600px]">
    
    <div class=" rotate bg-gradient-to-b from-gray-300 to-gray-100 w-40 h-[500px] rounded-t-full absolute bottom-4 -right-[83px] "></div>
    <div class=" rotate2 w-24 h-60 rounded-full absolute right-10 bottom-44 bg-blue-900 opacity-50"></div>
    <div class=" rotate1 bg-gradient-to-b from-gray-300 to-gray-100 w-40 h-[500px] rounded-t-full absolute bottom-10 -left-[70px]"></div>
    <div class="absolute left-72 -bottom-[80px] w-40 h-40 bg-blue-900 rounded-full opacity-60 "></div>

    {{-- <div class=" h-full w-full bg-green-700 items-center pt-10">

        <div class=" text-7xl font-bold flex justify-center items-center h-24 bg-red-500 ">
            VISION, ENGAGEMENT 
        </div>

        <div class=" text-4xl font-semibold flex justify-center items-center h-24 bg-red-500 ">
            Un équipe engagée pour le développement.
        </div>

    </div> --}}

</section>

<section class="bg-gray-50  pb-20 border-2 border-red-600 relative ">
    
    {{-- <div class=" rotate bg-gradient-to-b from-blue-500 to-red-500 w-40 h-[500px] rounded-t-full absolute bottom-4 -right-[83px] "></div>
    <div class=" rotate2 w-24 h-60 rounded-full absolute right-10 bottom-44 bg-blue-900 opacity-50"></div>

    <div class=" rotate1 bg-gradient-to-b from-gray-300 to-gray-100 w-40 h-[500px] rounded-t-full absolute bottom-10 -left-[70px]"></div> --}}
    {{-- <div class="absolute top-24 right-[350px] w-40 h-40 bg-blue-900 rounded-full opacity-60 "></div> --}}

    <div class="grid max-w-screen-xl  mx-auto  lg:grid-cols-12">
        
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex justify-center items-center h-[500px] border-[30px] rounded-full border-blue-100">
            {{-- <img src="images/engagement.png" alt="mockup" class=" h-full w-full right-0 rounded-full border-[7px] border-white"> --}}
        </div>

        <div class="hidden absolute right-96 w-[500px] h-[500px] lg:mt-0 lg:col-span-5 lg:flex justify-center items-center">
            
            <div class=" absolute flex items-center top-0 left-10 gap-4">
                <svg class=" w-16 h-16" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="#1e00ff" stroke-width="2" d="M12 13a4 4 0 1 0 0-8a4 4 0 0 0 0 8Zm-6 9v-3a6 6 0 1 1 12 0v3M13 5c.404-1.664 2.015-3 4-3c2.172 0 3.98 1.79 4 4c-.02 2.21-1.828 4-4 4h-1h1c3.288 0 6 2.686 6 6v2M11 5c-.404-1.664-2.015-3-4-3c-2.172 0-3.98 1.79-4 4c.02 2.21 1.828 4 4 4h1h-1c-3.288 0-6 2.686-6 6v2"/></svg>
                {{-- <h1 class=" text-2xl font-bold text-blue-700">NOTRE VISION</h1> --}}
            </div>
            <div class="">
                <h2 class=" absolute font-medium text-xl left-10 top-20">Accélérer votre développement</h2>
                <p class=" absolute left-10 top-32 text-xl">Allant au-delà de notre expertise, notre raison d'être est de vous offrir
                    simultanément, efficacité, inspiration, innovation et renouvellement.
                    Nous vous accompagnons dans vos projets, vos évolutions et vos
                    transformations tout en veillant à la performance et à la durabilité.
                </p>
                <p class=" absolute left-10 top-[320px] text-xl">
                    Nous collaborons parfaitement avec vous pour concevoir des solutions
                    sur mesure, spécialement adaptées pour relever vos défis. Cependant,
                    notre perspective s'étend bien au-delà de l'horizon immédiat. Nous
                    croyons en l'interdépendance entre la croissance des organisations et
                    l'évolution de la société. En constituant des partenariats solides, notre
                    objectif est de contribuer à votre épanouissement, ainsi qu'à
                    l'émergence d'une économie prospère et inclusive.

                </p>
            </div>
        </div>
    </div>

</section>


<section class="bg-gray-50 py-24">
    <div class="flex justify-between items-center  max-w-screen-xl mx-auto grid-cols-12">
        
        <div class="hidden mr-32 flex-col w-[500px] h-[500px] lg:mt-0 lg:col-span-5 lg:flex justify-center items-center relative ">
            
            <div class=" absolute flex items-center top-0 left-0 gap-4">
                <svg class=" w-16 h-16 " xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#1e00ff" d="M17 4a1 1 0 1 1 0-2h4a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0V5.414l-5.793 5.793a1 1 0 0 1-1.414 0L10 8.414l-5.293 5.293a1 1 0 0 1-1.414-1.414l6-6a1 1 0 0 1 1.414 0L13.5 9.086L18.586 4zM5 18v3a1 1 0 1 1-2 0v-3a1 1 0 1 1 2 0m5-4a1 1 0 1 0-2 0v7a1 1 0 1 0 2 0zm4 1a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0v-5a1 1 0 0 1 1-1m6-4a1 1 0 1 0-2 0v10a1 1 0 1 0 2 0z"/></svg>                
                <h1 class=" text-2xl font-bold text-blue-700">NOTRE ENGAGEMENT</h1>
            </div>
            <div class="">
                <h2 class=" absolute font-medium text-xl left-10 top-20">Un équipe engagée pour le développement.</h2>
                <p class="absolute left-10 top-32 text-xl">
                    Chez BLUE STRATEGY, nous sommes bien plus
                    qu'un simple cabinet. Nous sommes un
                    équipe engagée, déterminée à contribuer au
                    développement du Maroc et de l'Afrique de
                    demain.
                </p>
                <p class="absolute left-10 top-[320px] text-xl">
                    Notre mission fondamentale consiste à élever
                    nos partenaires vers l'excellence, afin qu'ils
                    deviennent des acteurs de référence dans la
                    construction d'un avenir meilleur.
                                    
                </p>
            </div>
        </div>

        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex justify-center items-center h-[500px] border-[30px] rounded-full border-blue-100">
            <img src="images/engagement.png" alt="mockup" class=" h-full w-full right-0 rounded-full border-[7px] border-white">
        </div>

    </div>

</section>

@endsection





{{-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="#1e00ff" stroke-width="2" d="M12 13a4 4 0 1 0 0-8a4 4 0 0 0 0 8Zm-6 9v-3a6 6 0 1 1 12 0v3M13 5c.404-1.664 2.015-3 4-3c2.172 0 3.98 1.79 4 4c-.02 2.21-1.828 4-4 4h-1h1c3.288 0 6 2.686 6 6v2M11 5c-.404-1.664-2.015-3-4-3c-2.172 0-3.98 1.79-4 4c.02 2.21 1.828 4 4 4h1h-1c-3.288 0-6 2.686-6 6v2"/></svg> --}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#1e00ff" d="M17 4a1 1 0 1 1 0-2h4a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0V5.414l-5.793 5.793a1 1 0 0 1-1.414 0L10 8.414l-5.293 5.293a1 1 0 0 1-1.414-1.414l6-6a1 1 0 0 1 1.414 0L13.5 9.086L18.586 4zM5 18v3a1 1 0 1 1-2 0v-3a1 1 0 1 1 2 0m5-4a1 1 0 1 0-2 0v7a1 1 0 1 0 2 0zm4 1a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0v-5a1 1 0 0 1 1-1m6-4a1 1 0 1 0-2 0v10a1 1 0 1 0 2 0z"/></svg> --}}