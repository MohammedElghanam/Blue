@extends('LAYOUT.index')

@section('title', 'home')

@section('container')

<style>
    .hover-div {
        display: none;
        position: absolute;
        top: -50px;
    }

    .disable-hover {
        pointer-events: none;
    }

    @media only screen and (min-width: 768px) {
        .parent:hover .child {
            opacity: 1;
            height: auto;
            overflow: none;
            transform: translateY(0);
        }

        .child {
            opacity: 0;
            height: 0;
            overflow: hidden;
            transform: translateY(-10%);
        }

    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .animate-scroll {
        animation: scroll 40s linear infinite;
    }
</style>



<header class="flex flex-col pb-2">
    <!-- Nav 1 -->
    <nav id="nav1" class=" px-4 lg:px-6 pt-2.5 pb-0.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl bg-green-200">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="images/logo.png" class="mr-3 h-14 w-14" alt="Logo">
            </a>
            <div class="flex items-center lg:order-2 gap-3">
                <!-- Input search -->
                <div class="flex md:order-2">
                    <div class="relative mr-3 md:mr-0 hidden md:block">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="email-adress-icon"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2"
                            placeholder="Search...">
                    </div>
                </div>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li class="relative parent">
                        <a href="#"
                            class="flex justify-between md:inline-flex p-4 items-center text-gray-500 hover:text-gray-900 hover:bg-gray-50 space-x-2">
                            <span>Oui Somme Nous ?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1"
                                viewBox="0 0 24 24">
                                <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                            </svg>
                        </a>
                        <ul
                            class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                            <li>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                    Web development
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                    Web Design
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                    Machine Learning
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"
                            class="flex justify-between md:inline-flex p-4 items-center text-gray-500 hover:text-gray-900 hover:bg-gray-50 space-x-2">
                            <span>Nos realisation</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex justify-between md:inline-flex p-4 items-center text-gray-500 hover:text-gray-900 hover:bg-gray-50 space-x-2">
                            <span>Contact Nos</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="lg:order-3">
                <ul class="flex list-none">
                    <!-- User -->
                    <li class="relative parent">
                        <a href="#"
                            class="flex justify-between md:inline-flex p-4 items-center hover:bg-[#1e56a0] space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </g>
                            </svg>
                        </a>
                        <ul
                            class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                            <li>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                    Log in
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                    Sign up
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Language -->
                    <li class="relative parent">
                        <a href="#"
                            class="flex justify-between md:inline-flex p-4 items-center text-gray-500 hover:text-gray-900 hover:bg-gray-50 space-x-2">
                            <span>En</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1"
                                viewBox="0 0 24 24">
                                <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                            </svg>
                        </a>
                        <ul
                            class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                            <li>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                    Fr
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nav 2 -->
    <nav id="nav2" class="flex justify-center items-center px-4 pb-2 border-b md:shadow-lg bg-[#1e56a0]">
        <ul class="flex gap-6">
            <li class="relative parent">
                <a href="#"
                    class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>PMO</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                    </svg>
                </a>
                <ul
                    class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web development
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web Design
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Machine Learning
                        </a>
                    </li>
                </ul>
            </li>
            <li class="relative parent">
                <a href="#"
                    class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>Service TPM/PME</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                    </svg>
                </a>
                <ul
                    class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web development
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web Design
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Machine Learning
                        </a>
                    </li>
                </ul>
            </li>
            <li class="relative parent">
                <a href="#"
                    class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>Service Digitaux</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                    </svg>
                </a>
                <ul
                    class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web development
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web Design
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Machine Learning
                        </a>
                    </li>
                </ul>
            </li>
            <li class="relative parent">
                <a href="#"
                    class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>Carriere RH</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                    </svg>
                </a>
                <ul
                    class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web development
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web Design
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Machine Learning
                        </a>
                    </li>
                </ul>
            </li>
            <li class="relative parent">
                <a href="#"
                    class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>Formation Professionnelle</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                    </svg>
                </a>
                <ul
                    class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web development
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web Design
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Machine Learning
                        </a>
                    </li>
                </ul>
            </li>
            <li class="relative parent">
                <a href="#"
                    class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>Entreprenariat Et Project D’ess</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"></path>
                    </svg>
                </a>
                <ul
                    class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b">
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web development
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Web Design
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                            Machine Learning
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<section class="bg-gray-50">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 ">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl">From its medieval origins<h class=" text-5xl font-extrabold text-[#1e56a0]"> to the digital</h>
                 
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">From
                checkout to global sales tax compliance, companies around the world use Flowbite to simplify their
                payment stack.</p>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-[#1e56a0] hover:bg-green-700 ">
                Booking Now
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-900 hover:text-white">
                Buy Now
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex justify-center items-center">
            {{-- <img src="images/Ellipse 26.png" alt="" class=" " width="400px" height="400px"> --}}
            <img src="images/user.png" alt="mockup" class=" ">
        </div>
    </div>
</section>

<section class="bg-gray-50">
    <div
        class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-2 border-2 border-cyan-600">
        <div class=" border-2 border-cyan-600 relative">
            <img src="images/Frame 795 (1).png" alt="jhgu">
            <img src="images/ellipse 27.png" alt="" class=" absolute -bottom-12 right-10" width=" 100px" height=" 100px">
        </div>
        <div class=" grid grid-cols-3 gap-5 justify-center items-center px-20 border-2 border-cyan-600 ">
            <div class=" col-span-1 flex-col justify-center items-center relative">
                <img src=" images/Frame 796.png" alt="" class=" border-2 border-green-400">
                <svg class=" absolute top-0 left-O border-2 border-red-400" xmlns="http://www.w3.org/2000/svg"
                    width="40px" height="40px" viewBox="0 0 24 24">
                    <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </g>
                </svg>
                <p>irshjEURHNIUKJ ERUGNBIQUE </p>
            </div>
            <div class=" col-span-1">
                <img src=" images/Frame 796.png" alt="" class=" ">
                <p>irshjEURHNIUKJ ERUGNBIQUE</p>
            </div>
            <div class=" col-span-1">
                <img src=" images/Frame 796.png" alt="" class=" ">
                <p>irshjEURHNIUKJ ERUGNBIQUE</p>
            </div>
            <div class=" col-span-1">
                <img src=" images/Frame 796.png" alt="" class=" ">
                <p>irshjEURHNIUKJ ERUGNBIQUE</p>
            </div>
            <div class=" col-span-1">
                <img src=" images/Frame 796.png" alt="" class=" ">
                <p>irshjEURHNIUKJ ERUGNBIQUE</p>
            </div>
            <div class=" col-span-1">
                <img src=" images/Frame 796.png" alt="" class=" ">
                <p>irshjEURHNIUKJ ERUGNBIQUE</p>
            </div>


        </div>
    </div>
</section>

<section class="bg-gray-50">
    <div class=" w-full h-80 flex">
        <div class=" w-1/3 "></div>
        <div class=" flex justify-end items-center w-3/4  relative">
            <div class=" w-full  h-56 bg-gray-900 rounded-l-full pl-24 pt-12 ">
                <h1 class=" font-bold text-5xl mb-4 text-white">What We Do .</h1>
                <p class=" w-1/2 text-white">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
                    <span class=" font-medium">industries for previewing</span> layouts and visual mockups</p>
            </div>
            <img src="images/ellipse 27.png" alt="" class=" absolute -bottom-2 right-20" width=" 100px" height=" 100px">
        </div>
    </div>
</section>

<section class=" bg-gray-50">
    <div class=" w-full h-40 flex ">
        <div class=" w-1/3 "></div>
        <div class=" pt-7 pl-36 w-3/4  ">
            <h1 class=" font-bold text-5xl mb-4">Why Us ?</h1>
            <p class=" w-1/2 font-normal">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
                industries for previewing layouts and visual mockups</p>
        </div>
    </div>
</section>

<section class="bg-gray-50 border-2 border-green-600">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class=" col-span-12 h-20 mb-2">
            <div class=" flex justify-center items-center mb-2">
                <h1 class=" font-bold text-5xl">Pour Quoi Nous Choisir ?</h1>
            </div>
            <div class="  flex justify-center items-center">
                <p class=" text-2xl font-normal text-gray-700">nous somme centre sur</p>
            </div>
        </div>
        <div class=" grid grid-cols-6 col-span-12 justify-center items-center gap-5 px-20 h-40 ">

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
                    <h3 class=" font-medium text-center">D'utilisateur</h3>
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
                    <h3 class=" font-medium text-center">La Croissonance</h3>
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
                    <h3 class=" font-medium text-center">L'agilite</h3>
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

<section class=" bg-blue-600 mb-12">
    <div class=" px-4">
        <div class=" flex justify-center items-center mt-6 pt-20 w-full h-12">
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
                        <h1 class=" font-semibold text-4xl text-white">Houda belaydi</h1>
                        <h4 class=" font-medium text-gray-800">CEO && FONDER</h4>
                    </div>
                    <p class=" w-2/3 text-white font-medium">Each Founder has put their blood, sweat, and tears into building
                        something remarkable. ASG builds on that legacy while liberating
                        Founders to get back to doing what you really love.
                    </p>
                </div>
                <div class=" absolute flex bottom-0 right-28 w-40 rounded-full justify-center items-center gap-3 h-12 bg-blue-800 hover:bg-white">
                    <svg class="w-7 h-7 text-white hover:text-black" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                    <svg class="w-7 h-7 text-white hover:text-black" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                    <svg class="w-7 h-7 text-white hover:text-black" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-gray-50 ">
    <div
        class="grid max-w-screen-xl px-4 mx-auto  lg:grid-cols-2 ">
        <div class=" col-span-2  mb-4 h-12 flex justify-center items-center font-bold text-5xl">
            Hello
        </div>
        <div class="relative w-full col-span-2 h-20 overflow-hidden ">
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

<section class="bg-gray-50 ">
    <div
        class="grid max-w-screen-xl py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-2 0 px-56">
        <div class=" bg-slate-700 col-span-2 h-56 rounded-lg relative">
            <img class=" absolute bottom-0 right-0 " src="images/user.png" alt="girhn" width="250px" height="250px">
            <h1 class=" absolute font-bold text-3xl w-1/2 top-7 left-10">eough uedrhg uitdhg udgh uerhgpv qpergh uihgi uiervhn </h1>
            <button class=" absolute top-40 left-10 bg-blue-500 px-16 py-2 rounded-full text-xl font-medium">Contact</button>
        </div>
    </div>
</section>


<footer class="p-4 bg-black sm:p-6">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between px-16">
            <div class="mb-6 md:mb-0 flex flex-col gap-4">
                <a href="https://flowbite.com" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Nova Hub</span>
                </a>

                <label for="email" class=" text-xl font-medium text-gray-400">Subscribe to newsllater</label>
                <form action="#" id="email">
                    <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                        <div class="relative w-full">
                            <label for="email" class="hidden mb-2 text-sm font-medium text-gray-900">Email address</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                            </div>
                            <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your email" type="email" id="email" required="">
                        </div>
                        <div>
                            <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <hr class="my-6 border-gray-200 w-full sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#" class="hover:underline">Your website</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                 </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                </a>
            </div>
        </div>
    </div>
</footer>


@endsection

















<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.child').hover(
            function () {
                $('#nav2').addClass('disable-hover');
            },
            function () {
                $('#nav2').removeClass('disable-hover');
            }
        );
    });
</script>