@extends('LAYOUT.index')

@section('title', 'A proposde nous')

@section('container')


<style>

    

    #FLOAT {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(to bottom, #f7f6f6, #e6e8eb);
        border-radius: 47% 53% 16% 84% / 75% 66% 34% 25% ;
        animation: spinx 1s linear infinite, moveCircular 30s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT1 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(to bottom, #f7f6f6, #e6e8eb);
        /* opacity: 0.1; */
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular1 25s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT3 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(to bottom, #f7f6f6, #e6e8eb);
        border-radius: 30% 70% 80% 20% / 67% 79% 21% 33% ;
        animation: spinx 1s linear infinite, moveCircular3 20s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT4 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(to bottom, #f7f6f6, #e6e8eb);
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

    .HOV {
        transition: width 15ms, height 15ms;
    }

    .HOV:hover{
        width: 410px;
        height: 232px;
        
    }


    .IMG{
    
       
        margin-right: 20px;
        animation-name: left;
        animation-duration: 2s;
        animation-iteration-count: 1;
        animation-timing-function: ease-in;
        animation-fill-mode: forwards;
    
    
    }

    .DATA {
        margin-left: 20px;
        animation-name: right1;
        animation-duration: 2s;
        animation-iteration-count: 1;
        animation-timing-function: ease-in;
        animation-fill-mode: forwards;
    }

    @keyframes right1 {
      0% {
        transform: translateX(500px); 
      }

      100% {
        transform: translateX(10%);
      }
    }


    @keyframes left{
      0%{ 
        transform:  translateX(-510px);
      }

      100%{
        width: 500px;
        transform:  translateX(5%);
      }
    }

</style>


{{-- description  --}}
<section class=" px-32">

    <div id="FLOAT"></div>
    <div id="FLOAT1"></div>
    <div class="grid max-w-screen-xl py-8 mx-auto gap-20 lg:py-16 lg:grid-cols-12 justify-center ">

        <div class="IMG hidden lg:mt-0 lg:col-span-5 lg:flex justify-center items-center h-full z-10">
            <img src="images/team.jpg" alt="mockup" class=" h-full w-full right-0 rounded-lg">
        </div>

        <div class="DATA mr-auto place-self-center lg:col-span-6 z-10">
            <h1 class="max-w-2xl mb-3 xl:text-5xl font-bold  text-gray-800">Description</h1>

            <p class="max-w-2xl mb-6 font-medium text-gray-500 lg:mb-8 md:text-lg xl:text-[14px] dark:text-gray-600">BLUE
                STRATEGY est un cabinet d'études, d'accompagnement et PMO
                multidisciplinaire, lancé en 2023, dédié aux entreprises et aux organisations
                des secteurs public et privé.
                Nous accompagnons nos clients (TPE, PME, STARTUPS, ONG..) dans la réalisation
                de leurs projets de développement et dans l'exploration de nouveaux leviers de
                performance, afin de stimuler l'évolution et la croissance de leurs activités sur
                le marché dynamique d'aujourd'hui.
                BLUE STRATEGY s’est construit sur la conviction que le succès des
                transformations repose sur l'adoption d'une vision 360° et une équipe
                diversifiée, combinant les compétences les plus solides en matière de
                business, de technologie et de durabilité.
            </p>

        </div>

    </div>

    <div class=" grid grid-cols-4 absolute w-1/3 right-[460px] -bottom-[50px]">
        <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
            <div class=" col-span-2 flex justify-center items-center">
                <?xml version="1.0" encoding="utf-8"?><svg class=" w-12 h-12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 113.02 122.88" style="enable-background:new 0 0 113.02 122.88" xml:space="preserve"><style type="text/css"><![CDATA[
                    .st0{fill-rule:evenodd;clip-rule:evenodd;}
                ]]></style><g><path class="st0" d="M70.12,40.96l2.86,2.86c0.75,0.75,0.75,1.99,0,2.74l-2.31,2.31c0.64,1.19,1.12,2.47,1.43,3.81h2.99 c1.07,0,1.94,0.87,1.94,1.94v4.05c0,1.07-0.87,1.94-1.94,1.94h-3.26c-0.4,1.32-0.97,2.56-1.69,3.71l2.11,2.11 c0.75,0.75,0.75,1.99,0,2.74l-2.86,2.86c-0.75,0.75-1.99,0.75-2.74,0l-2.3-2.3c-1.19,0.64-2.47,1.12-3.82,1.43v2.99 c0,1.07-0.87,1.94-1.94,1.94h-4.05c-1.07,0-1.94-0.87-1.94-1.94v-3.26c-1.32-0.4-2.56-0.97-3.71-1.69L46.8,71.3 c-0.75,0.75-1.99,0.75-2.74,0l-2.86-2.86c-0.75-0.75-0.75-1.99,0-2.74l2.3-2.3c-0.64-1.19-1.12-2.47-1.43-3.81h-2.99 c-1.06,0-1.94-0.87-1.94-1.94v-4.05c0-1.07,0.87-1.94,1.94-1.94h3.26c0.4-1.32,0.97-2.56,1.69-3.71l-2.11-2.11 c-0.75-0.75-0.75-1.99,0-2.74l2.86-2.86c0.75-0.75,1.99-0.75,2.74,0l2.31,2.31c1.19-0.64,2.47-1.12,3.81-1.43v-2.99 c0-1.07,0.87-1.94,1.94-1.94h4.05c1.07,0,1.94,0.87,1.94,1.94v3.26c1.32,0.4,2.56,0.97,3.71,1.69l2.11-2.11 C68.14,40.2,69.37,40.2,70.12,40.96L70.12,40.96L70.12,40.96z M44.13,102.07c-1.14,0.03-2.14-0.81-2.3-1.96 c-0.17-1.2,0.64-2.31,1.82-2.54c-1.3-7.37-4.85-11.43-8.6-15.72c-2.92-3.34-5.95-6.81-8.34-11.92c-2.35-5.03-3.64-10.23-3.6-15.63 c0.05-5.4,1.42-10.96,4.4-16.71c0.02-0.04,0.04-0.07,0.06-0.11l0,0c3.91-6.62,9.38-11.04,15.47-13.52c5.11-2.09,10.66-2.8,16.1-2.3 c5.42,0.5,10.73,2.2,15.37,4.94c5.9,3.49,10.75,8.67,13.42,15.21c1.44,3.54,2.42,7.49,2.54,11.82c0.12,4.31-0.62,8.96-2.61,13.88 c-2.66,6.59-6.18,10.68-9.47,14.51c-3.03,3.53-5.85,6.81-7.42,11.84c0.89,0.21,1.59,0.94,1.73,1.9c0.17,1.24-0.7,2.39-1.94,2.56 L70,98.43c-0.14,1.09-0.23,2.26-0.27,3.51l0.25-0.04c1.24-0.17,2.39,0.7,2.56,1.94c0.17,1.24-0.7,2.39-1.94,2.56l-0.78,0.11 c0.01,0.15,0.02,0.3,0.03,0.45l0,0c0.07,0.88,0.08,1.73,0.03,2.54l0.13-0.02c1.25-0.15,2.38,0.74,2.54,1.98 c0.15,1.25-0.74,2.38-1.98,2.54l-1.68,0.21c-1.2,3.11-3.34,5.48-5.87,6.94c-1.74,1.01-3.67,1.59-5.61,1.71 c-1.97,0.12-3.96-0.25-5.78-1.13c-2.08-1.02-3.94-2.71-5.29-5.14c-0.65-0.33-1.13-0.97-1.23-1.75c-0.04-0.31-0.01-0.61,0.07-0.89 c-0.39-1.16-0.68-2.43-0.87-3.83l-0.07,0.01c-1.24,0.17-2.39-0.7-2.56-1.94s0.7-2.39,1.94-2.56l0.54-0.08 C44.19,104.33,44.18,103.17,44.13,102.07L44.13,102.07L44.13,102.07z M2.18,58.86C1.01,58.89,0.04,57.98,0,56.81 c-0.04-1.17,0.88-2.14,2.05-2.18l8.7-0.3c1.17-0.04,2.14,0.88,2.18,2.05c0.04,1.17-0.88,2.14-2.05,2.18L2.18,58.86L2.18,58.86 L2.18,58.86z M110.69,50.25c1.16-0.12,2.2,0.73,2.32,1.89c0.12,1.16-0.73,2.2-1.89,2.32l-8.66,0.91c-1.16,0.12-2.2-0.73-2.32-1.89 c-0.12-1.16,0.73-2.2,1.89-2.32L110.69,50.25L110.69,50.25L110.69,50.25z M94.92,14.78c0.65-0.97,1.96-1.23,2.93-0.58 c0.97,0.65,1.23,1.96,0.58,2.93l-4.84,7.24c-0.65,0.97-1.96,1.23-2.93,0.58c-0.97-0.65-1.23-1.96-0.58-2.93L94.92,14.78 L94.92,14.78L94.92,14.78z M57.63,2.06c0.03-1.17,1-2.09,2.16-2.06c1.17,0.03,2.09,1,2.06,2.16l-0.22,8.7 c-0.03,1.17-1,2.09-2.16,2.06c-1.17-0.03-2.09-1-2.06-2.16L57.63,2.06L57.63,2.06L57.63,2.06z M13.88,15.53 c-0.86-0.8-0.9-2.14-0.11-2.99c0.8-0.86,2.14-0.9,2.99-0.11l6.37,5.94c0.86,0.8,0.9,2.14,0.11,2.99c-0.8,0.86-2.14,0.9-2.99,0.11 L13.88,15.53L13.88,15.53L13.88,15.53z M47.88,96.96l18.49-2.63c1.59-6.7,5.05-10.73,8.8-15.08c3.08-3.58,6.36-7.4,8.76-13.34 c1.76-4.35,2.41-8.43,2.31-12.19c-0.1-3.75-0.96-7.21-2.24-10.34c-2.3-5.63-6.51-10.11-11.65-13.15c-4.11-2.43-8.8-3.94-13.59-4.37 c-4.77-0.44-9.64,0.19-14.13,2.02c-5.26,2.15-9.99,5.97-13.39,11.72c-2.64,5.12-3.86,10.02-3.9,14.73 c-0.04,4.74,1.11,9.33,3.2,13.8c2.13,4.56,4.97,7.8,7.69,10.92C42.47,83.91,46.48,88.5,47.88,96.96L47.88,96.96L47.88,96.96z M65.62,99.03l-17.27,2.45c0.05,1.1,0.07,2.25,0.05,3.47l17.05-2.42C65.47,101.3,65.52,100.13,65.62,99.03L65.62,99.03L65.62,99.03 z M48.49,109.53c0.12,0.92,0.3,1.76,0.53,2.54l16.55-2.04c0.11-0.86,0.13-1.77,0.05-2.74l0,0v-0.02l-0.01-0.17L48.49,109.53 L48.49,109.53L48.49,109.53z M51.37,116.37c0.64,0.67,1.35,1.19,2.1,1.55c1.15,0.56,2.42,0.79,3.67,0.72 c1.29-0.08,2.57-0.47,3.74-1.15c1.1-0.64,2.09-1.53,2.88-2.65L51.37,116.37L51.37,116.37L51.37,116.37z M57.09,48.17 c4.39,0,7.96,3.56,7.96,7.96s-3.56,7.96-7.96,7.96s-7.96-3.56-7.96-7.96C49.13,51.73,52.7,48.17,57.09,48.17L57.09,48.17 L57.09,48.17z"/></g></svg>
            </div>
            <div class=" col-span-2 flex justify-center items-center">
                <h3 class=" font-medium text-center ">Innovation</h3>
            </div>
        </div>
        <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
            <div class=" col-span-2 flex justify-center items-center">
            <img src="images/34.png" alt="" class=" w-12 h-12">
            </div>
            <div class=" col-span-2 flex justify-center items-center">
                <h3 class=" font-medium text-center ">Authenticité</h3>
            </div>
        </div>
        <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
            <div class=" col-span-2 flex justify-center items-center">
                <?xml version="1.0" encoding="utf-8"?><svg class=" w-12 h-12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 101.01" style="enable-background:new 0 0 122.88 101.01" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M61.44,0l5.88,4.77l7.48-1.2l2.69,7.08l7.08,2.69l-1.2,7.48l4.77,5.88l-4.77,5.88l1.2,7.48l-7.08,2.69 l-2.69,7.08l-7.48-1.2l-5.88,4.77l-5.88-4.77l-7.48,1.2l-2.69-7.08l-7.08-2.69l1.2-7.48l-4.77-5.88l4.77-5.88l-1.2-7.48l7.08-2.69 l2.69-7.08l7.48,1.2L61.44,0L61.44,0z M66.41,84.78h21.91c1.76-1.75,3.69-3.57,5.64-5.42c4.11-3.89,8.4-7.95,12.81-13.03 c5.04-5.81,5.58-7.82,7.11-13.51c0.29-1.07,0.61-2.27,1.03-3.76l2.62-9.21l0.03-0.1c1.4-4.1,1.51-6.81,0.93-8.37 c-0.18-0.48-0.41-0.8-0.68-0.97c-0.21-0.14-0.49-0.19-0.78-0.16c-0.68,0.07-1.45,0.5-2.15,1.27l-7.78,18.53 c-0.07,0.17-0.17,0.33-0.28,0.47c-0.46,0.83-1.08,1.64-1.88,2.41l-13.8,15.39c-0.75,0.84-2.04,0.91-2.87,0.16 c-0.84-0.75-0.91-2.04-0.16-2.87c1.87-2.08,16.37-16.31,15.63-19.5c-0.92-3.93-10.8,6.16-11.98,7.2l-0.03,0.03 c-5.79,5.48-8.28,6.78-12.82,9.15c-0.95,0.5-1.99,1.04-3.28,1.74c-0.51,0.28-1.01,0.62-1.5,0.99c-0.52,0.4-1.02,0.81-1.49,1.21 c-2.4,2.02-3.66,3.66-4.38,5.47c-0.75,1.88-1.02,4.17-1.39,7.31c-0.15,1.26-0.26,2.52-0.35,3.77 C66.47,83.59,66.44,84.19,66.41,84.78L66.41,84.78L66.41,84.78z M56.47,84.78H34.55c-1.76-1.75-3.69-3.57-5.65-5.42 c-4.11-3.89-8.4-7.95-12.81-13.03c-5.04-5.81-5.58-7.82-7.11-13.51c-0.29-1.07-0.61-2.27-1.03-3.76l-2.62-9.21l-0.03-0.1 c-1.4-4.1-1.51-6.81-0.93-8.37c0.18-0.48,0.41-0.8,0.68-0.97c0.21-0.14,0.49-0.19,0.78-0.16c0.68,0.07,1.45,0.5,2.15,1.27 l7.78,18.53c0.07,0.17,0.17,0.33,0.28,0.47c0.46,0.83,1.08,1.64,1.88,2.41l13.8,15.39c0.75,0.84,2.04,0.91,2.87,0.16 c0.84-0.75,0.91-2.04,0.16-2.87C32.9,63.52,18.4,49.29,19.14,46.1c0.92-3.93,10.8,6.16,11.98,7.2l0.03,0.03 c5.79,5.48,8.28,6.78,12.82,9.15c0.95,0.5,1.99,1.04,3.28,1.74c0.51,0.28,1.01,0.62,1.5,0.99c0.52,0.4,1.02,0.81,1.49,1.21 c2.4,2.02,3.66,3.66,4.38,5.47c0.75,1.88,1.02,4.17,1.39,7.31c0.15,1.26,0.26,2.52,0.35,3.77C56.41,83.59,56.44,84.19,56.47,84.78 L56.47,84.78L56.47,84.78z M29.45,85.48c-0.31,0.36-0.5,0.83-0.5,1.34v12.14c0,1.13,0.92,2.04,2.04,2.04h27.58 c1.13,0,2.04-0.92,2.04-2.04V86.71c0-1.3-0.08-2.7-0.17-4c-0.09-1.33-0.21-2.65-0.36-3.96c-0.4-3.43-0.7-5.94-1.66-8.35 c-0.99-2.47-2.58-4.6-5.53-7.09c-0.54-0.46-1.09-0.92-1.67-1.35c-0.61-0.46-1.27-0.9-2.01-1.31c-1.2-0.65-2.32-1.24-3.34-1.78 c-4.2-2.2-6.5-3.4-11.91-8.52c-0.04-0.04-0.09-0.08-0.13-0.11l-5.22-4.61c-2.64-3.09-7.87-6.77-11.68-3.43 c-2.03-4.83-4.03-15.36-10.67-16.01c-1.21-0.12-2.38,0.14-3.4,0.8c-0.97,0.63-1.77,1.61-2.27,2.96c-0.88,2.35-0.86,6,0.86,11.05 l2.6,9.15c0.38,1.32,0.71,2.59,1.02,3.71c1.7,6.35,2.3,8.6,7.97,15.12c4.49,5.17,8.89,9.33,13.1,13.32 C27.23,83.36,28.33,84.41,29.45,85.48L29.45,85.48L29.45,85.48z M33.35,88.86c0.27,0.06,0.55,0.06,0.83,0h22.34v8.06H33.03v-8.06 H33.35L33.35,88.86z M93.43,85.48c0.31,0.36,0.5,0.83,0.5,1.34v12.14c0,1.13-0.91,2.04-2.04,2.04H64.32 c-1.13,0-2.04-0.92-2.04-2.04V86.71c0-0.07,0-0.15,0.01-0.22c0.03-1.31,0.08-2.58,0.16-3.78c0.09-1.33,0.21-2.65,0.36-3.96 c0.4-3.43,0.7-5.94,1.66-8.35c0.99-2.47,2.58-4.6,5.53-7.09c0.54-0.46,1.09-0.92,1.67-1.35c0.61-0.46,1.27-0.9,2.01-1.31 c1.2-0.65,2.32-1.24,3.34-1.78c4.2-2.2,6.5-3.4,11.91-8.52c0.04-0.04,0.09-0.08,0.13-0.11l5.22-4.61 c2.64-3.09,7.87-6.77,11.68-3.43c0.99-2.37,4.41-11.65,5.59-13.07c1.46-1.75,3.31-2.77,5.08-2.95c1.21-0.12,2.38,0.14,3.4,0.8 c0.97,0.63,1.77,1.61,2.27,2.96c0.88,2.35,0.86,6-0.86,11.05l-2.6,9.15c-0.38,1.32-0.71,2.59-1.02,3.71 c-1.7,6.35-2.3,8.6-7.97,15.12c-4.49,5.17-8.88,9.33-13.1,13.32C95.65,83.36,94.55,84.41,93.43,85.48L93.43,85.48L93.43,85.48z M89.53,88.86c-0.27,0.06-0.55,0.06-0.83,0H66.36v8.06h23.49v-8.06H89.53L89.53,88.86z M61.44,17.18l2.75,6.72l7.25,0.54 l-5.54,4.69l1.73,7.06l-6.18-3.83l-6.18,3.83L57,29.14l-5.56-4.69l7.25-0.54l2.75-6.72H61.44L61.44,17.18z M61.44,11.61 c8.33,0,15.08,6.76,15.08,15.08c0,8.33-6.76,15.08-15.08,15.08c-8.33,0-15.08-6.76-15.08-15.08 C46.36,18.37,53.11,11.61,61.44,11.61L61.44,11.61z"/></g></svg>
            </div>
            <div class=" col-span-2 flex justify-center items-center">
                <h3 class=" font-medium text-center ">Excellence</h3>
            </div>
        </div>
        <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
            <div class=" col-span-2 flex justify-center items-center">
                <img src="images/ch.png" alt="" class=" w-14 h-14">
            </div>
            <div class=" col-span-2 flex justify-center items-center">
                <h3 class=" font-medium text-center ">Proximité</h3>
            </div>
        </div>
    </div>

</section>

{{-- Quelles problématiques abordons-nous ?  --}}
<section class="">
    <div id="FLOAT3"></div>
    <div id="FLOAT4"></div>  
    <div class="grid max-w-screen-xl px-4 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 mt-16">
        <div class=" col-span-12 h-20">
            <div class=" flex justify-center items-center mb-2 text-center">
                <h1 class=" font-bold text-4xl w-1/2 text-gray-900 z-50">Quelles problématiques abordons-nous ?</h1>
            </div>
        </div>
        <div class=" grid grid-cols-6 col-span-12 justify-center items-center gap-5 px-20 h-20 z-50">

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1 relative">
                <div class=" col-span-2 flex justify-center items-center ">
                    <img src="images/31.png" alt="" class=" w-16 h-16 top-14 left-8 text-white ml-2">
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center">Accélération de la croissance</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <img src="images/35.png" alt="" class="w-16 h-16 top-14 left-8 text-white ml-2">
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center ">Alignement sur
                        le marché</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <img src="images/36.png" alt="" class=" w-[64px] h-[64px] top-14 left-5 text-white ml-2">
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center ">Employabilité
                        et capital RH
                    </h3>
                </div>
            </div>

            <div class=" grid grid-cols-2  justify-center items-center col-span-1 mt-9">
                <div class=" col-span-2 flex justify-center items-end mb-3">
                    <img src="images/63.png" alt="" class=" w-16 h-16 text-white ml-3">
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center ">Investissement et valorisation des produits</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <img src="images/lamp.png" alt="" class=" w-16 h-16 top-14 left-8 text-white ml-2">                
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center ">Soutien à l'innovation
                        et digitalisation</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <img src="images/33.png" alt="" class="w-16 h-16 top-14 left-8 text-white ml-2">
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center ">Soutien à l'economie
                        sociale et solidaire
                    </h3>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- business unites  --}}
<section class="bg-gray-50 my-16">

    <div class="grid grid-cols-12 max-w-screen-xl px-4 pb-10 gap-5 mx-auto">
        <div class=" col-span-12 h-20 ">
            <div class=" flex justify-center items-center">
                <h1 class=" font-bold text-4xl text-gray-900 z-50">Nos Domaines D'expertirse</h1>
            </div>
        </div>

        <div class="grid grid-cols-6 col-span-12 gap-5">
            
            <div class="HOV col-span-2 h-56 rounded-2xl relative backdrop-blur-xl shadow-xl select-none">

                <h2 class=" absolute left-16 top-9 text-6xl font-bold text-gray-900">01</h2>
                <h2 class=" absolute text-2xl font-bold w-1/2 left-36 top-16">PMO</h2>

                <img src="AP/2.png" alt="" class=" absolute left-5 top-28 w-24 h-24">
                <p class=" absolute w-[250px] text-xl font-medium left-36 top-28">
                    est un cabinet d'études, d'accompagnement et PMO multidisciplinaire,
                </p>
                <svg class=" w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="1" d="M0,224L30,229.3C60,235,120,245,180,240C240,235,300,213,360,213.3C420,213,480,235,540,234.7C600,235,660,213,720,202.7C780,192,840,192,900,186.7C960,181,1020,171,1080,170.7C1140,171,1200,181,1260,186.7C1320,192,1380,192,1410,192L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
            </div>

            <div class="HOV col-span-2 h-56 rounded-2xl backdrop-blur-xl shadow-xl relative select-none">

                <h2 class=" absolute left-16 top-9 text-6xl font-bold text-gray-900">02</h2>
                <h2 class=" absolute text-2xl font-bold w-1/2 left-36 top-8 text-gray-900">SERVICES AUX
                    TPE / PME
                </h2>

                <img src="AP/1.png" alt="" class=" absolute left-5 top-24 w-24 h-24">
                <p class=" absolute w-[250px] text-xl font-medium text-gray-900 left-36 top-28">
                    est un cabinet d'études, d'accompagnement et PMO multidisciplinaire,
                </p>

            </div>

            <div class="HOV col-span-2 h-56 rounded-2xl backdrop-blur-xl shadow-xl relative select-none">

                <h2 class=" absolute left-16 top-9 text-6xl font-bold text-gray-900">03</h2>
                <h2 class=" absolute text-2xl font-bold w-1/2 left-36 top-8 text-gray-900">SERVICES
                    DIGITAUX
                </h2>

                <img src="images/75.png" alt="" class=" absolute left-5 top-24 w-24 h-24">
                <p class=" absolute w-[250px] text-xl font-medium left-36 top-28 text-gray-900">
                    est un cabinet d'études, d'accompagnement et PMO multidisciplinaire,
                </p>

            </div>

            <div class="HOV col-span-2 h-56 rounded-2xl backdrop-blur-xl shadow-xl relative select-none">

                <h2 class=" absolute left-16 top-9 text-6xl font-bold text-gray-900">04</h2>
                <h2 class=" absolute text-2xl font-bold text-gray-900 w-1/2 left-36 top-16">CARRIERE ET RH
                </h2>

                <img src="AP/4.png" alt="" class=" absolute left-5 top-24 w-20 h-20">
                <p class=" absolute w-[250px] text-xl font-medium text-gray-900 left-36 top-28">
                    est un cabinet d'études, d'accompagnement et PMO multidisciplinaire,
                </p>

            </div>

            <div class="HOV col-span-2 h-56 rounded-2xl backdrop-blur-xl shadow-xl relative select-none">

                <h2 class=" absolute left-16 top-9 text-6xl font-bold text-gray-900">05</h2>
                <h2 class=" absolute text-2xl font-bold text-gray-900 w-1/2 left-36 top-8">FORMATION
                    PROFESSIONNELLE
                </h2>

                <img src="images/5.png" alt="" class=" absolute left-5 top-24">
                <p class=" absolute w-[250px] text-xl font-medium text-gray-900 left-36 top-28">
                    est un cabinet d'études, d'accompagnement et PMO multidisciplinaire,
                </p>

            </div>

            <div class="HOV col-span-2 h-56 rounded-2xl backdrop-blur-xl shadow-xl relative select-none">

                <h2 class=" absolute left-16 top-9 text-6xl font-bold text-gray-900">06</h2>
                <h2 class=" absolute text-2xl font-bold text-gray-900 w-[300px] left-36 top-8">ENTREPRENARIAT ET PROJETS D'ESS
                </h2>

                <img src="AP/3.png" alt="" class=" w-24 h-24 absolute left-8 top-28">
                <p class=" absolute w-[250px] text-xl font-medium text-gray-900 left-36 top-28">
                    est un cabinet d'études, d'accompagnement et PMO multidisciplinaire,
                </p>

            </div>

           
        </div>
    </div>


</section>


@endsection