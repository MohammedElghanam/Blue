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
    0% { transform: translateX(0); }
    100% { transform: translateX(-100%); }
}

.animate-scroll {
    animation: scroll 10s linear infinite;
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
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl">Purifying Gel
                <br> Cleanser
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
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="images/user.png" alt="mockup">
        </div>
    </div>
</section>

<section class="bg-gray-50 border-2 border-green-600">
    <div
        class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-2 border-2 border-cyan-600">
        <div class=" border-2 border-cyan-600 ">
            <img src="images/Frame 795 (1).png" alt="jhgu">
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

<section class="bg-gray-50 border-2 border-green-600">
    <div class=" w-full h-80 flex border-2 border-red-600">
        <div class=" w-1/3 border-2 border-yellow-600"></div>
        <div class=" flex justify-end items-center w-3/4 border-2 border-yellow-600 end-0">
            <div class=" w-full  h-56 border-2 border-cyan-600 rounded-l-full pl-24 pt-9">
                <h1 class=" font-bold text-3xl mb-4">hello testemonial </h1>
                <p class=" w-1/2">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
                    industries for previewing layouts and visual mockups</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 border-2 border-green-600">
    <div class=" w-full h-40 flex border-2 border-red-600">
        <div class=" w-1/3 border-2 border-yellow-600"></div>
        <div class=" pt-7 pl-36 w-3/4 border-2 border-yellow-600 ">
            <h1 class=" font-bold text-3xl mb-4">hello testemonial </h1>
            <p class=" w-1/2">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
                industries for previewing layouts and visual mockups</p>
        </div>
    </div>
</section>

<section class="bg-gray-50 border-2 border-green-600">
    <div class="  gap-3 w-full px-4 py-8 border-2 border-cyan-600">
        <div class=" border-2 border-cyan-600 h-6 mb-2">
            <h1 class=" flex justify-center items-center">testemonial </h1>
        </div>
        <div class=" grid grid-cols-12 justify-center items-center gap-5 px-20 border-2 border-cyan-600 h-40 ">
            <div class=" pl-28 col-span-2 h-20 border-2 border-red-400">
                <svg class="border-2 border-green-400" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                    viewBox="0 0 24 24">
                    <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </g>
                </svg>
                <h3>hello</h3>
            </div>
            <div class=" pl-28 col-span-2 h-20 border-2 border-red-400">
                <svg class="border-2 border-green-400" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                    viewBox="0 0 24 24">
                    <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </g>
                </svg>
                <h3>hello</h3>
            </div>
            <div class=" pl-28 col-span-2 h-20 border-2 border-red-400">
                <svg class="border-2 border-green-400" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                    viewBox="0 0 24 24">
                    <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </g>
                </svg>
                <h3>hello</h3>
            </div>
            <div class=" pl-28 col-span-2 h-20 border-2 border-red-400">
                <svg class="border-2 border-green-400" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                    viewBox="0 0 24 24">
                    <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </g>
                </svg>
                <h3>hello</h3>
            </div>
            <div class=" pl-28 col-span-2 h-20 border-2 border-red-400">
                <svg class="border-2 border-green-400" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                    viewBox="0 0 24 24">
                    <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </g>
                </svg>
                <h3>hello</h3>
            </div>
            <div class=" pl-28 col-span-2 h-20 border-2 border-red-400">
                <svg class="border-2 border-green-400" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                    viewBox="0 0 24 24">
                    <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </g>
                </svg>
                <h3>hello</h3>
            </div>

        </div>
    </div>
</section>

<section class="bg-gray-50 border-2 border-green-600">
    <div class=" px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16  border-2 border-cyan-600">
        <div class=" flex justify-center items-center border-2 border-red-600 w-full h-10 mb-4">
            <h1> What Our Founders Say</h1>
        </div>
        <div class=" flex justify-center items-center gap-5 border-2 border-red-600 w-full  px-60 ">
            <div class="flex gap-20 justify-center items-center  border-2 border-red-600 h-96 relative">
                <div class=" relative border-2 border-green-500 w-fit h-fit">
                    <img src="images/Rectangle 78 (1).png" alt="" width="150px" height="150px">
                    <img src="images/unsplash.png" alt="" width="100px" height="100px"
                        class=" absolute top-16 left-16 rounded-full">
                </div>
                <div class="border-2 border-blue-600 h-fit">
                    <div class=" bg-yellow-300 mb-5">
                        <h1 class=" font-extrabold text-4xl">Houda belaydi</h1>
                        <h4 class="">CEO</h4>
                    </div>
                    <p class=" w-2/3">Each Founder has put their blood, sweat, and tears into building
                        something remarkable. ASG builds on that legacy while liberating
                        Founders to get back to doing what you really love.
                    </p>
                </div>
                <div class=" absolute top-80 left-3/4 w-16 h-4 border-2 border-pink-600">
                    hello
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="bg-gray-50 border-2 border-green-600">
    <div
        class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-2 border-2 border-cyan-600">
        <div class="relative w-full h-40 overflow-hidden">
        <div class="absolute flex items-center h-full animate-scroll">
            <img src="images/image1.jpg" alt="Image 1" class="h-full">
            <img src="images/image2.jpg" alt="Image 2" class="h-full">
            <img src="images/image3.jpg" alt="Image 3" class="h-full">
            <img src="images/image4.jpg" alt="Image 4" class="h-full">
            <img src="images/image5.jpg" alt="Image 5" class="h-full">
        </div>
        </div>

    </div>
</section>

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