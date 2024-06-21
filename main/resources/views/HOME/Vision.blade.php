@extends('LAYOUT.index')

@section('title', 'Notre Vision')

@section('container')

<style>
 
    #FLOAT {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(to bottom, #163172, #3a7cd2);
        border-radius: 47% 53% 16% 84% / 75% 66% 34% 25% ;
        animation: spinx 1s linear infinite, moveCircular 30s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT1 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(to bottom, #163172, #3a7cd2);
        /* opacity: 0.1; */
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular1 25s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT3 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(to bottom, #163172, #3a7cd2);
        border-radius: 30% 70% 80% 20% / 67% 79% 21% 33% ;
        animation: spinx 1s linear infinite, moveCircular3 20s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT4 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(to bottom, #163172, #3a7cd2);
        border-radius: 30% 70% 50% 50% / 22% 63% 37% 78% ;
        animation: spinx 1s linear infinite, moveCircular4 15s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }


    @keyframes spinx {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
    }
    @keyframes moveCircular {
        0% {
            transform: translate(50%, -50%) rotate(0deg) translateX(200px) rotate(0deg);
        }
        100% {
            transform: translate(50%, -50%) rotate(360deg) translateX(200px) rotate(-360deg);
        }
    }

    @keyframes moveCircular1 {
        0% {
            transform: translate(100%, 100%) rotate(0deg) translateX(200px) rotate(0deg);
        }
        100% {
            transform: translate(100%, 100%) rotate(360deg) translateX(200px) rotate(-360deg);
        }
    }

    @keyframes moveCircular3 {
        0% {
            transform: translate(-50%, -10%) rotate(0deg) translateX(200px) rotate(0deg);
        }
        100% {
            transform: translate(-50%, -10%) rotate(360deg) translateX(200px) rotate(-360deg);
        }
    }
    @keyframes moveCircular4 {
        0% {
            transform: translate(60%, 100%) rotate(0deg) translateX(150px) rotate(0deg);
        }
        100% {
            transform: translate(60%, 100%) rotate(360deg) translateX(150px) rotate(-360deg);
        }
    }


    
    .IMG{
    
       
    margin-right: 20px;
    animation-name: left;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;
    animation-fill-mode: forwards;


}

.DATA {
    margin-left: 20px;
    animation-name: right1;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;
    animation-fill-mode: forwards;
}

@keyframes right1 {
  0% {
    transform: translateX(500px); 
  }

  100% {
    transform: translateX(-18%);
  }
}


@keyframes left{
  0%{ 
    transform:  translateX(-510px);
  }

  100%{
    width: 500px;
    transform:  translateX(15%);
  }
}
















.IMG1{  
    margin-right: 20px;
    animation-name: left2;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;
    animation-fill-mode: forwards;


}

.DATA1{
    margin-left: 20px;
    animation-name: right2;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;
    animation-fill-mode: forwards;
}

@keyframes right2 {
    0%{ 
    transform:  translateX(-510px);
  }

  100%{
    width: 500px;
    transform:  translateX(15%);
  }
}


@keyframes left2{

    0% {
    transform: translateX(500px); 
  }

  100% {
    transform: translateX(-10%);
  }
}

</style>




{{-- Notre vision  --}}
<section class="bg-gray-50 py-20 relative ">
        {{-- <div id="FLOAT"></div>
        <div id="FLOAT1"></div> --}}
    <div class="grid max-w-screen-xl  mx-auto  lg:grid-cols-12">
        
        <div class="IMG hidden lg:mt-0 lg:col-span-5 lg:flex justify-center items-center h-full ">
            <img src="images/61.jpg" alt="mockup" class=" h-full w-full right-0 rounded-xl">
        </div>

        <div class="DATA hidden absolute -right-20 w-[700px] h-[400px] lg:mt-0 lg:col-span-5 lg:flex justify-center items-center">
            
            <div class=" absolute flex items-center top-0 left-10 gap-4">
                <img class=" w-16 h-16" src="AP/4.png" alt="">
                <h1 class=" text-2xl font-bold text-gray-900">NOTRE VISION</h1>
            </div>
            <div class="">
                <h2 class=" absolute font-medium text-xl left-10 top-20">Accélérer votre développement</h2>
                <p class=" absolute left-10 top-32 text-[18px] w-[650px]">Allant au-delà de notre expertise, notre raison d'être est de vous offrir
                    simultanément, efficacité, inspiration, innovation et renouvellement.
                    Nous vous accompagnons dans vos projets, vos évolutions et vos
                    transformations tout en veillant à la performance et à la durabilité.
                </p>
                <p class=" absolute left-10 top-[250px] text-[18px] w-[650px]">
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

{{-- notre engagement  --}}
<section class="py-24">
    {{-- <div id="FLOAT3"></div>
    <div id="FLOAT4"></div>   --}}
    <div class="flex justify-between items-center  max-w-screen-xl mx-auto grid-cols-12">
        
        <div class="DATA1 hidden mr-32 flex-col w-[700px] h-[400px] lg:mt-0 lg:col-span-5 lg:flex justify-center items-center relative ">
            
            <div class=" absolute flex items-center top-0 left-0 gap-4">
                <img class=" w-16 h-16" src="AP/1.png" alt="">
                <h1 class=" text-2xl font-bold text-gray-900 ">NOTRE ENGAGEMENT</h1>
            </div>
            <div class="">
                <h2 class=" absolute font-medium text-xl left-10 top-20">Un équipe engagée pour le développement.</h2>
                <p class="absolute left-10 top-32 text-[18px]">
                    Chez BLUE STRATEGY, nous sommes bien plus
                    qu'un simple cabinet. Nous sommes un
                    équipe engagée, déterminée à contribuer au
                    développement du Maroc et de l'Afrique de
                    demain.
                </p>
                <p class="absolute left-10 top-[250px] text-[18px]">
                    Notre mission fondamentale consiste à élever
                    nos partenaires vers l'excellence, afin qu'ils
                    deviennent des acteurs de référence dans la
                    construction d'un avenir meilleur.
                                    
                </p>
            </div>
        </div>

        <div class=" IMG1 hidden lg:mt-0 lg:col-span-5 lg:flex justify-center items-center h-full ">
            <img src="images/team.jpg" alt="mockup" class=" h-full w-full right-0 rounded-xl">
        </div>

    </div>

</section>

@endsection





{{-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="#1e00ff" stroke-width="2" d="M12 13a4 4 0 1 0 0-8a4 4 0 0 0 0 8Zm-6 9v-3a6 6 0 1 1 12 0v3M13 5c.404-1.664 2.015-3 4-3c2.172 0 3.98 1.79 4 4c-.02 2.21-1.828 4-4 4h-1h1c3.288 0 6 2.686 6 6v2M11 5c-.404-1.664-2.015-3-4-3c-2.172 0-3.98 1.79-4 4c.02 2.21 1.828 4 4 4h1h-1c-3.288 0-6 2.686-6 6v2"/></svg> --}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#1e00ff" d="M17 4a1 1 0 1 1 0-2h4a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0V5.414l-5.793 5.793a1 1 0 0 1-1.414 0L10 8.414l-5.293 5.293a1 1 0 0 1-1.414-1.414l6-6a1 1 0 0 1 1.414 0L13.5 9.086L18.586 4zM5 18v3a1 1 0 1 1-2 0v-3a1 1 0 1 1 2 0m5-4a1 1 0 1 0-2 0v7a1 1 0 1 0 2 0zm4 1a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0v-5a1 1 0 0 1 1-1m6-4a1 1 0 1 0-2 0v10a1 1 0 1 0 2 0z"/></svg> --}}