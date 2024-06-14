@extends('LAYOUT.index')

@section('title', 'home')

@section('container')


<style>
    .rotate{
        transform: rotate(-25deg);
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 90%);
    }

    .rotate1{
        transform: rotate(20deg);
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
    }
</style>



<section class="bg-gray-100 relative">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 ">
        <div class="mr-auto place-self-center lg:col-span-12">

            <p class=" select-none text-gray-100">zertyui ytreza ytrez uytrez uytreza uytreza uytreza ytreza ytre checkout to global sales tax compliance, companies around the world use Flowbite to simplify their
                payment stack. zertyui ytreza ytrez uytrez uytreza uytreza uytreza ytreza ytre checkout to global sales tax compliance, companies around the world use Flowbite to simplify their
                payment stack.
            </p>

            <h1 class="max-w-4xl mb-4 text-8xl font-bold lg:text-6xl lg:2xl">From <br> its medieval origins<h class=" text-8xl font-MEDIUM text-[#1e56a0] lg:text-6xl"> to the digital</h></h1>
            <p class="max-w-4xl mb-6 font-light text-gray-500 lg:mb-8 text-4xl lg:text-2xl lg:max-w-2xl">From
                checkout to global sales tax compliance, companies around the world use Flowbite to simplify their
                payment stack.</p>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-xl font-medium text-center text-white rounded-lg bg-[#163172] hover:bg-blue-700 ">
                Booking Now
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 text-xl font-medium text-center text-[#163172] border-2 border-gray-300 rounded-lg hover:bg-gray-900 hover:text-white">
                About Us
            </a>

            <p class=" select-none text-gray-100">zertyui ytreza ytrez uytrez uytreza uytreza uytreza ytreza ytre checkout to global sales tax compliance, companies around the world use Flowbite to simplify their
                payment stack. zertyui ytreza ytrez uytrez uytreza uytreza uytreza ytreza ytre checkout to global sales tax compliance, companies around the world use Flowbite to simplify their
                payment stack.</p>
        </div>

        <div class=" bg-gradient-to-b from-gray-300 to-gray-100 w-40 h-[730px] rounded-t-full absolute rotate -bottom-12 right-[150px] "></div>
        <div class=" bg-gradient-to-b from-gray-300 to-gray-100 w-40 h-[500px] rounded-t-full rotate1 absolute -bottom-10 right-[500px]"></div>
        <div class="absolute top-24 right-[350px] w-40 h-40 bg-[#1e56a0] rounded-full opacity-60 "></div>

        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex justify-center items-center ">
            {{-- <img src="images/6.png" alt="mockup" class=" absolute bottom-0 right-28" width=" 800px" height=" 800px">    --}}
        </div>
    </div>
</section>

<section class="bg-gray-50">
    <div class=" col-span-12 h-20 mt-10">
        <div class=" flex justify-center items-center text-center">
            <h1 class=" font-bold text-5xl text-blue-900">Quelles problématiques abordons-nous ?</h1>
        </div>
    </div>
    <div
        class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-2">
        <div class=" relative">
            <img src="images/Frame 795 (1).png" alt="swit">
            <img src="images/ellipse 27.png" alt="" class=" absolute -bottom-20 right-10" width=" 150px" height=" 150px">
        </div>
        <div class=" grid grid-cols-3 gap-5 justify-center items-center px-20">
            <div class=" col-span-1 flex-col justify-center items-center relative">
                
                <div class=" rounded-full w-32 h-32 "></div>
                <img src="images/31.png" alt="" class=" w-16 h-16 absolute top-14 left-8 text-white ml-2">
                <p class=" text-center font-medium">Accélération de la croissance</p>

            </div>

            <div class=" col-span-1 flex-col justify-center items-center relative">
                
                <div class="rounded-full w-32 h-32 "></div>
                <img src="images/35.png" alt="" class="w-16 h-16 absolute top-14 left-8 text-white ml-2">
                <p class=" text-center font-medium">Alignement sur le marché</p>
            </div>

            <div class=" col-span-1 flex-col justify-center items-center relative">
                <div class="rounded-full w-32 h-32 "></div>
                <img src="images/36.png" alt="" class=" w-[64px] h-[64px] absolute top-14 left-5 text-white ml-2">
                <p class=" text-center font-medium">Employabilité et capital RH</p>
            </div>

            <div class=" col-span-1 flex-col justify-center items-center relative">
                <div class="rounded-full w-32 h-32 "></div>
                <img src="images/34.png" alt="" class=" w-16 h-16 absolute top-16 left-8 text-white ml-3">
                <p class=" text-center font-medium pt-5">Investissement et valorisation des produits</p>
            </div>

            <div class=" col-span-1 flex-col justify-center items-center relative">
                <div class="rounded-full w-32 h-32 "></div>
                <img src="images/lamp.png" alt="" class=" w-16 h-16 absolute top-14 left-8 text-white ml-2">                
                <p class=" text-center font-medium pt-4">Soutien à l'innovation et digitalisation</p>
            </div>

            <div class=" col-span-1 flex-col justify-center items-center relative">
                <div class=" b rounded-full w-32 h-32 "></div>
                <img src="images/33.png" alt="" class=" w-16 h-16 absolute top-14 left-8 text-white ml-2">
                <p class=" text-center font-medium pt-3">Soutien à l'economie sociale et solidaire</p>
            </div>

        </div>
    </div>
</section>

<section class="bg-gray-50">
    <div class=" w-full h-80 flex">
        <div class=" w-1/3 "></div>
        <div class=" flex justify-end items-center w-3/4  relative">
            <div class=" w-full  h-56 bg-[#163172] rounded-l-full pl-24 pt-12 ">
                <h1 class=" font-bold text-5xl mb-4 text-white">What We Do .</h1>
                <p class=" w-1/2 text-white">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
                    <span class=" font-medium">industries for previewing</span> layouts and visual mockups</p>
            </div>
            <img src="images/ellipse 27.png" alt="" class=" absolute -bottom-16 right-20" width=" 150px" height=" 150px">
        </div>
    </div>
</section>

<section class="bg-gray-50">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class=" col-span-12 h-20 mb-2">
            <div class=" flex justify-center items-center mb-2">
                <h1 class=" font-bold text-5xl text-blue-900">Pour Quoi Nous Choisir ?</h1>
            </div>
            <div class="  flex justify-center items-center">
                <p class=" text-2xl font-normal text-gray-700">votre succés est notre mission</p>
            </div>
        </div>
        <div class=" grid grid-cols-6 col-span-12 justify-center items-center gap-5 px-20 h-40 ">

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 496.954"><path fill-rule="nonzero" d="M411.653 450.341c-13.994 0-26.665-5.674-35.836-14.844l-.423-.46c-8.92-9.135-14.421-21.621-14.421-35.376 0-9.637 2.7-18.653 7.384-26.328l-21.96-18.668c-22.994 19.216-52.604 30.783-84.913 30.783-19.499 0-38.014-4.214-54.684-11.777a7.688 7.688 0 01-.492 1.622l-11.945 27.727a51.87 51.87 0 013.285 2.489c10.195 8.392 17.192 20.681 18.572 34.87l.003.039c1.364 14.151-3.138 27.531-11.52 37.717-8.392 10.196-20.683 17.197-34.874 18.574-14.167 1.375-27.559-3.127-37.752-11.517-10.198-8.393-17.197-20.683-18.574-34.874-1.373-14.164 3.127-27.558 11.517-37.752 8.393-10.197 20.684-17.195 34.876-18.573l.038-.004a51.382 51.382 0 0120.687 2.217l11.615-26.962a7.634 7.634 0 011.584-2.356 133.115 133.115 0 01-26.025-20.248c-13.761-13.761-24.507-30.533-31.168-49.243l-35.281 6.87a50.468 50.468 0 01-6.555 25.062l-.247.464c-6.994 12.113-18.244 20.252-30.761 23.605-12.513 3.351-26.324 1.926-38.449-5.076-12.114-6.993-20.25-18.237-23.607-30.76-3.306-12.351-1.954-25.969 4.829-37.986l.247-.463c6.995-12.117 18.241-20.252 30.76-23.607 12.515-3.353 26.326-1.922 38.449 5.077 11.397 6.581 19.275 16.925 22.962 28.557l33.354-6.497a132.867 132.867 0 01-3.341-29.692c0-34.436 13.141-65.803 34.675-89.363l-28.728-23.906a49.403 49.403 0 01-5.306 3.851c-10.593 6.659-23.725 9.276-36.867 6.281-13.174-3.006-23.881-11.061-30.535-21.651-6.649-10.581-9.272-23.695-6.288-36.826l.01-.043c3.007-13.173 11.058-23.879 21.648-30.532 10.58-6.65 23.696-9.269 36.823-6.289l.044.01c13.174 3.005 23.881 11.059 30.535 21.648 6.659 10.594 9.276 23.725 6.28 36.868a48.854 48.854 0 01-6.286 15.195l29.657 24.679c23.256-20.196 53.62-32.421 86.835-32.421 4.147 0 8.249.193 12.299.566l3.171-21.299a50.457 50.457 0 01-23.004-13.201c-9.894-9.894-14.846-22.867-14.846-35.836 0-12.969 4.952-25.942 14.846-35.836C263.844 4.952 276.817 0 289.786 0c12.971 0 25.944 4.952 35.838 14.846 9.894 9.894 14.844 22.867 14.844 35.836 0 12.969-4.95 25.942-14.844 35.836-9.28 9.28-21.27 14.211-33.426 14.786l-3.275 21.994c25.579 5.389 48.438 18.151 66.25 35.964a132.724 132.724 0 0127.661 40.413l27.962-10.561a51.577 51.577 0 01-1.752-19.409c1.412-14.2 8.434-26.475 18.643-34.838 10.202-8.357 23.613-12.822 37.804-11.414 14.2 1.412 26.475 8.434 34.838 18.643 8.357 10.201 12.822 23.613 11.414 37.804-1.412 14.199-8.434 26.475-18.643 34.838-10.204 8.359-23.613 12.822-37.804 11.412-14.199-1.412-26.475-8.433-34.838-18.641a51.934 51.934 0 01-3.271-4.462l-29.023 10.962c3.782 12.313 5.82 25.39 5.82 38.942 0 35.324-13.829 67.423-36.364 91.176l20.577 17.494c8.928-7.866 20.64-12.642 33.456-12.642 13.956 0 26.618 5.672 35.805 14.846l.049.05c9.162 9.186 14.828 21.838 14.828 35.786 0 13.971-5.674 26.633-14.844 35.805l-.031.031c-9.172 9.17-21.833 14.844-35.807 14.844zM302.697 235.845c0 5.943-1.076 8.88-3.268 8.88h-26.971v56.884c0 1.344-.935 2.248-2.868 2.766a35.39 35.39 0 01-7.188.745c-.302 0-.616-.009-.914-.009-.357 0-.732.017-1.093.017-2.395 0-4.801-.242-7.119-.819-1.856-.463-2.781-1.419-2.781-2.665v-56.872h-26.973c-2.186 0-3.268-2.984-3.268-8.884a21.92 21.92 0 01.796-6.847c.535-1.422 1.361-2.132 2.472-2.132h75.907c1.163 0 2.017.71 2.501 2.157a22.27 22.27 0 01.788 5.866c0 .318-.007.641-.025.956l.004-.043zm-79.175-17.166c-2.186 0-3.268-2.984-3.268-8.926a25.121 25.121 0 01-.021-.987c0-1.982.274-3.958.823-5.862.519-1.421 1.355-2.132 2.466-2.132h75.907c1.163 0 2.007.72 2.532 2.157.518 1.926.781 3.911.781 5.901 0 .311-.01.616-.018.923 0 5.942-1.085 8.926-3.27 8.926h-75.932zm120.813-48.578c-21.201-21.201-50.497-34.319-82.851-34.319-32.353 0-61.648 13.116-82.85 34.317-21.2 21.202-34.316 50.496-34.316 82.852 0 32.354 13.116 61.65 34.316 82.85 21.202 21.201 50.495 34.316 82.85 34.316 32.356 0 61.65-13.115 82.853-34.316 21.2-21.202 34.316-50.496 34.316-82.85 0-32.356-13.116-61.65-34.318-82.85zM96.114 134.904a33.531 33.531 0 0025.372-4.303c7.285-4.577 12.824-11.928 14.882-20.955a33.522 33.522 0 00-4.303-25.372c-4.488-7.144-11.642-12.604-20.429-14.756a7.66 7.66 0 01-1.097-.249 33.529 33.529 0 00-24.801 4.425c-7.144 4.488-12.604 11.64-14.755 20.428a7.94 7.94 0 01-.249 1.097 33.525 33.525 0 004.425 24.802c4.577 7.285 11.928 12.824 20.955 14.883zM32.998 335.089c8.443 4.875 18.085 5.861 26.834 3.519 8.741-2.341 16.595-8.023 21.478-16.479l.216-.351c4.691-8.361 5.615-17.851 3.303-26.483-2.343-8.743-8.025-16.595-16.48-21.478-8.444-4.875-18.083-5.863-26.834-3.521-8.743 2.343-16.596 8.023-21.479 16.48l-.216.352c-4.691 8.361-5.614 17.851-3.303 26.482 2.343 8.744 8.025 16.596 16.481 21.479zM264.789 25.685c-6.901 6.901-10.354 15.951-10.354 24.997s3.453 18.097 10.354 24.998c6.901 6.9 15.951 10.351 24.997 10.351 9.048 0 18.099-3.451 24.999-10.351 6.901-6.901 10.352-15.952 10.352-24.998 0-9.046-3.451-18.096-10.352-24.997-6.9-6.901-15.951-10.354-24.999-10.354-9.046 0-18.096 3.453-24.997 10.354zM432.313 197.81c5.894 7.195 14.524 12.144 24.482 13.132 9.967.991 19.408-2.163 26.606-8.059 7.196-5.894 12.146-14.524 13.135-24.482.988-9.965-2.165-19.408-8.062-26.606-5.894-7.196-14.523-12.146-24.481-13.135-9.966-.989-19.409 2.165-26.607 8.062-7.196 5.894-12.146 14.523-13.135 24.481-.988 9.968 2.166 19.408 8.062 26.607zM141.776 473.395a36.23 36.23 0 0026.616 8.106c9.97-.965 18.61-5.892 24.514-13.065a36.23 36.23 0 008.16-26.002 7.836 7.836 0 01-.114-1.183c-1.097-9.729-5.97-18.153-13.003-23.945-7.031-5.785-16.233-8.944-26-8.16-.384.067-.78.106-1.182.114-9.732 1.097-18.158 5.968-23.95 13.006a36.247 36.247 0 00-8.106 26.615c.965 9.97 5.892 18.61 13.065 24.514zm244.88-48.737c6.395 6.395 15.234 10.352 24.997 10.352a35.292 35.292 0 0035.351-35.349c0-9.784-3.947-18.622-10.323-24.997l-.03-.031c-6.376-6.376-15.215-10.323-24.998-10.323a35.29 35.29 0 00-35.349 35.351 35.295 35.295 0 009.979 24.65l.373.347z"/></svg> 

                </div>
                <div class=" col-span-2 flex justify-center items-center">                    
                    <h3 class=" font-medium text-center"> Centrés utilisateur</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 
                        1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 
                        1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 
                        1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 
                        1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 
                        0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 
                        4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 
                        4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 
                        2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 
                        1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 
                        1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 
                        1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 
                        1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 
                        3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 
                        6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 
                        3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" 
                    />
                </svg>
                </div>
                <div class=" col-span-2 flex justify-center items-center">                    
                    <h3 class=" font-medium text-center">La Creativite</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20"><path fill="black" d="M14 2.75a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 .75.75v2.5a.75.75 0 0 1-1.5 0v-.69l-4.47 4.47a.75.75 0 0 1-1.06 0L8.5 6.56l-4.22 4.22a.75.75 0 1 1-1.06-1.06l4.75-4.75a.75.75 0 0 1 1.06 0l2.47 2.47l3.94-3.94h-.69a.75.75 0 0 1-.75-.75M3.75 14a.75.75 0 0 1 .75.75v2.5a.75.75 0 0 1-1.5 0v-2.5a.75.75 0 0 1 .75-.75m4.75-2.25a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0zM11.75 13a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5a.75.75 0 0 1 .75-.75m4.75-3.25a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0z"/></svg>
                </div>
                <div class=" col-span-2 flex justify-center items-center">                    
                    <h3 class=" font-medium text-center">La Croissonance</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <svg class=" w-12 h-12" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32"><path fill="black" d="m31.707 19.293l-3-3a1 1 0 0 0-1.414 0L18 25.586V30h4.414l9.293-9.293a1 1 0 0 0 0-1.414M21.586 28H20v-1.586l5-5L26.586 23zM28 21.586L26.414 20L28 18.414L29.586 20zM16 22c-3.364 0-6-2.636-6-6s2.636-6 6-6s6 2.636 6 6s-2.636 6-6 6m0-10c-2.28 0-4 1.72-4 4s1.72 4 4 4s4-1.72 4-4s-1.72-4-4-4"/><path fill="black" d="m27.547 12l1.733-1l-2.336-4.044a2 2 0 0 0-2.373-.894l-2.434.823a11 11 0 0 0-1.312-.758l-.503-2.52A2 2 0 0 0 18.36 2h-4.72a2 2 0 0 0-1.962 1.608l-.503 2.519c-.46.224-.906.469-1.327.753l-2.42-.818a2 2 0 0 0-2.373.894l-2.36 4.088a2 2 0 0 0 .412 2.502l1.931 1.697C5.021 15.495 5 15.745 5 16q0 .387.028.766l-1.92 1.688a2 2 0 0 0-.413 2.502l2.36 4.088a2 2 0 0 0 2.374.894l2.434-.823q.627.423 1.312.758l.503 2.519A2 2 0 0 0 13.64 30H16v-2h-2.36l-.71-3.55a9.1 9.1 0 0 1-2.695-1.572l-3.447 1.166l-2.36-4.088l2.725-2.395a8.9 8.9 0 0 1-.007-3.128l-2.719-2.39l2.361-4.087l3.427 1.16A9 9 0 0 1 12.93 7.55L13.64 4h4.721l.71 3.55a9.1 9.1 0 0 1 2.695 1.572l3.447-1.166z"/></svg>
                </div>
                <div class=" col-span-2 flex justify-center items-center">                    
                    <h3 class=" font-medium text-center">L'agilite</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <svg class=" w-12 h-12" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 18.004H6.657C4.085 18 2 15.993 2 13.517s2.085-4.482 4.657-4.482c.393-1.762 1.794-3.2 3.675-3.773c1.88-.572 3.956-.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99a3.47 3.47 0 0 1 3.307 2.444M20 21l2-2l-2-2m-3 0l-2 2l2 2"/></svg>
                </div>
                <div class=" col-span-2 flex justify-center items-center">                    
                    <h3 class=" font-medium text-center">La Digital</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 
                        1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 
                        1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 
                        1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 
                        1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 
                        0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 
                        4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 
                        4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 
                        2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 
                        1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 
                        1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 
                        1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 
                        1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 
                        3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 
                        6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 
                        3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" 
                    />
                </svg>
                </div>
                <div class=" col-span-2 flex justify-center items-center">                    
                    <h3 class=" font-medium text-center">Le Profit</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<section class=" bg-[#163172] mb-12 my-10">
    <div class=" px-4 ">
        <div class=" flex justify-center items-center pt-20 w-full h-12">
            <h1 class="font-bold text-5xl text-white"> What Our Founders Say</h1>
        </div>
        <div class=" flex justify-center items-center gap-5 w-full h-96  px-60 ">
            <div class="flex gap-10 justify-center items-center h-72 relative">
                <div class=" relative w-fit h-fit">
                    <img src="images/Rectangle 78 (1).png" alt="" width="150px" height="150px">
                    <img src="images/unsplash.png" alt="" width="100px" height="100px"
                        class=" absolute top-16 left-16 rounded-full">
                </div>
                <div class="h-fit w-3/4">
                    <div class=" mb-5">
                        <h1 class=" font-semibold text-6xl text-white">Houda belaydi</h1>
                        <h4 class=" font-medium text-gray-100">CEO && FONDER</h4>
                    </div>
                    <p class=" w-2/3 text-white text-xl font-normal">Each Founder has put their blood, sweat, and tears into building
                        something remarkable. ASG builds on that legacy while liberating
                        Founders to get back to doing what you really love.
                    </p>
                </div>
                <div class=" absolute flex bottom-0 right-28 w-40 rounded-full justify-center items-center gap-3 h-12 bg-[#1e56a0]">
                    <svg class="w-7 h-7 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="white" d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131c.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/></svg>
                    <svg class="w-7 h-7 text-white" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93zM6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37z"/></svg>
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-gray-50 my-8">
    <div
        class="grid max-w-screen-xl px-4 mx-auto  lg:grid-cols-2 ">
        <div class=" col-span-2  mb-8 h-12 flex justify-center items-center font-bold text-5xl text-blue-900">
            You’ll be in good companY
        </div>
        <div class="relative w-full col-span-2 h-16 overflow-hidden mt-8">
            <div class="absolute flex gap-7 items-center h-full  animate-scroll">
                <img src="images/R1.png" alt="Image 1" class="h-24 w-24">
                <img src="images/R2.png" alt="Image 2" class="h-24 w-24">
                <img src="images/R3.png" alt="Image 3" class="h-24 w-24">
                <img src="images/R4.png" alt="Image 4" class="h-24 w-24">
                <img src="images/R1.png" alt="Image 1" class="h-24 w-24">
                <img src="images/R2.png" alt="Image 2" class="h-24 w-24">
                <img src="images/R3.png" alt="Image 3" class="h-24 w-24">
                <img src="images/R4.png" alt="Image 4" class="h-24 w-24">
                <img src="images/R1.png" alt="Image 1" class="h-24 w-24">
                <img src="images/R2.png" alt="Image 2" class="h-24 w-24">
                <img src="images/R3.png" alt="Image 3" class="h-24 w-24">
                <img src="images/R4.png" alt="Image 4" class="h-24 w-24">
                <img src="images/R4.png" alt="Image 4" class="h-24 w-24">
                <img src="images/R1.png" alt="Image 1" class="h-24 w-24">
                <img src="images/R2.png" alt="Image 2" class="h-24 w-24">
                <img src="images/R3.png" alt="Image 3" class="h-24 w-24">
                <img src="images/R4.png" alt="Image 4" class="h-24 w-24">
            </div>
        </div>

    </div>
</section>

<section class="bg-gray-50 my-8">
    <div
        class="grid max-w-screen-xl py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-2 0 px-56">
        <div class=" bg-[#163172] col-span-2 h-56 rounded-lg relative ">
            <img class="rounded-full absolute -top-7 -right-16 " src="images/contact.png" alt="girhn" width="300px" height="300px">
            <h1 class=" absolute font-bold text-3xl w-1/2 top-7 left-10 text-white">Each Founder has put their blood, sweat, and tears into building </h1>
            <button class=" absolute top-40 left-10 bg-[#1e56a0] px-16 py-2 rounded-full text-xl font-medium text-white hover:bg-white hover:text-black">Contact</button>
        </div>
    </div>
</section>



@endsection
















