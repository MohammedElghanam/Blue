    @extends('LAYOUT.index')

    @section('title', 'home')
    
    @section('container')

    <style>
        @media only screen and (min-width: 768px){
            .parent:hover .child {
                opacity:1;
                height:auto;
                overflow:none;
                transform: translateY(0);
            }
            .child {
                opacity:0;
                height:0;
                overflow:hidden;
                transform: translateY(-10%);
            }
        }
        
    </style>
    
    {{-- 

    <section class=" w-full ">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class=" t w-12 h-12 bg-white"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="currentColor" d="M104.704 685.248a64 64 0 0 0 90.496 0l316.8-316.8l316.8 316.8a64 64 0 0 0 90.496-90.496L557.248 232.704a64 64 0 0 0-90.496 0L104.704 594.752a64 64 0 0 0 0 90.496"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M19 8l-4 4h3c0 3.31-2.69 6-6 6c-1.01 0-1.97-.25-2.8-.7l-1.46 1.46C8.97 19.54 10.43 20 12 20c4.42 0 8-3.58 8-8h3l-4-4zM6 12c0-3.31 2.69-6 6-6c1.01 0 1.97.25 2.8.7l1.46-1.46C15.03 4.46 13.57 4 12 4c-4.42 0-8 3.58-8 8H1l4 4l4-4H6z"><animateTransform attributeName="transform" attributeType="XML" dur="5s" from="360 12 12" repeatCount="indefinite" to="0 12 12" type="rotate"/></path></svg>
        <p class="P">oqhegPIEUKH HRSIPFUKEJBN WJDRHGNVIUKJH IUKJQHTDRKGJ </p>
    </section>
     --}}


     
<header class=" flex-col">

    
    <nav class="bg-blue-500  px-4 lg:px-6 pt-2.5 pb-7">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl bg-green-200">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-2xl text-green-600 font-semibold whitespace-nowrap">Nova Hub</span>
            </a>
            
            
            <div class="flex items-center lg:order-2 gap-3">
                {{-- input search  --}}
                <div class="flex md:order-2">
                    <div class="relative mr-3 md:mr-0 hidden md:block">
                      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                      </div>
                      <input type="text" id="email-adress-icon" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2" placeholder="Search...">
                    </div>    
                </div>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    
                    <li class="relative parent">
                        <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-gray-500 hover:text-gray-900 hover:bg-gray-50 space-x-2 ">
                            <span>Oui Somme Nous ?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                        </a>
                        <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
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
                        <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-gray-500 hover:text-gray-900 hover:bg-gray-50 space-x-2 ">
                            <span>Nos realisation</span>
                        </a>                    
                    </li>
                    <li>
                        <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-gray-500 hover:text-gray-900 hover:bg-gray-50 space-x-2 ">
                            <span>Contact Nos</span>
                        </a> 
                    </li>
                </ul>
            </div>
            <div class=" lg:order-3">
                <ul class=" flex list-none">
                    {{-- user  --}}
                    <li class="relative parent">
                        <a href="#" class="flex justify-between md:inline-flex p-4 items-center hover:bg-[#1e56a0] space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                                </g>
                            </svg>
                        </a>
                        <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
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
                    {{-- langage  --}}
                    <li class="relative parent">
                        <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-gray-500 hover:text-gray-900 hover:bg-gray-50 space-x-2 ">
                            <span>En</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                        </a>
                        <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
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
    

    <nav class="flex justify-center items-center px-4 border-b md:shadow-lg  bg-[#1e56a0]">
        <ul class=" flex gap-6 ">
            
            <li class="relative parent">
                <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2 ">
                    <span>PMO</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                </a>
                <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
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
                <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>Service TPM/PME</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                </a>
                <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
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
                <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>Service Digitaux</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                </a>
                <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
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
                <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>Carriere RH</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                </a>
                <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
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
                <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>Formation Professionnelle</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                </a>
                <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
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
                <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-white hover:text-black hover:bg-gray-50 space-x-2">
                    <span>Entreprenariat Et Project D’ess</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                </a>
                <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
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
    
    
    <section>
        <div class=" bg-green-400">
            <h1>hgfdsq</h1>
        </div>
    </section>
      
    @endsection










