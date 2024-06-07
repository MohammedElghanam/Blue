@extends('LAYOUT.index')

@section('title', 'Notre Vision')

@section('container')

<div class=" text-4xl font-bold flex justify-center items-center h-24 w-full">
    VISION, ENGAGEMENT 
</div>

<section class="bg-gray-50  pb-20">
   
    <div class="grid max-w-screen-xl  mx-auto  lg:grid-cols-12">
        
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex justify-center items-center h-[500px] border-[30px] rounded-full border-blue-100">
            <img src="images/engagement.png" alt="mockup" class=" h-full w-full right-0 rounded-full border-[7px] border-white">
        </div>

        <div class="hidden absolute right-96 w-[500px] h-[500px] lg:mt-0 lg:col-span-5 lg:flex justify-center items-center">
            
            <div class=" absolute flex items-center top-0 left-10 gap-4">
                <svg class=" w-16 h-16" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="#1e00ff" stroke-width="2" d="M12 13a4 4 0 1 0 0-8a4 4 0 0 0 0 8Zm-6 9v-3a6 6 0 1 1 12 0v3M13 5c.404-1.664 2.015-3 4-3c2.172 0 3.98 1.79 4 4c-.02 2.21-1.828 4-4 4h-1h1c3.288 0 6 2.686 6 6v2M11 5c-.404-1.664-2.015-3-4-3c-2.172 0-3.98 1.79-4 4c.02 2.21 1.828 4 4 4h1h-1c-3.288 0-6 2.686-6 6v2"/></svg>
                <h1 class=" text-2xl font-bold text-blue-700">NOTRE VISION</h1>
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