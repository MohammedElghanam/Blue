@extends('LAYOUT.index')

@section('title', 'home')

@section('container')


<style>
    .LEFT {
        height: 256px;
        animation-name: left;
        animation-duration: 4s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-out;
        animation-fill-mode: forwards;
    }

    .BORDER1 {
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spin 20s linear infinite;
    }

    .BORDER2 {
        border-radius: 52% 48% 43% 57% / 35% 25% 75% 65%;
        animation: spin 8s linear infinite;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .COUNT {
        position: relative;
        /* width: 100vw;
        height: 100vh; */
        overflow: hidden;
        background-color: #163172;
        background-image: url(70.jpg);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #FLOAT {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background-color: white;
        opacity: 0.1;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular 30s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT1 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background-color: white;
        opacity: 0.1;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular1 40s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    @keyframes spinx {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes moveCircular {
        0% {
            transform: translate(-50%, -50%) rotate(0deg) translateX(200px) rotate(0deg);
        }

        100% {
            transform: translate(-50%, -50%) rotate(360deg) translateX(200px) rotate(-360deg);
        }
    }

    @keyframes moveCircular1 {
        0% {
            transform: translate(50%, 50%) rotate(0deg) translateX(200px) rotate(0deg);
        }

        100% {
            transform: translate(50%, 50%) rotate(360deg) translateX(200px) rotate(-360deg);
        }
    }








    #FLOAT2 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(to bottom, #dddada, #e3e5e7);
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular2 30s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT3 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(to bottom, #f7f6f6, #e6e8eb);
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular3 40s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    @keyframes moveCircular2 {
        0% {
            transform: translate(60%, 100%) rotate(0deg) translateX(150px) rotate(0deg);
        }

        100% {
            transform: translate(60%, 100%) rotate(360deg) translateX(150px) rotate(-360deg);
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



    #FLOAT4 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        /* background-color: red; */
        background: linear-gradient(to bottom, #f2eeee, #eceef0);
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1s linear infinite, moveCircular4 30s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    #FLOAT5 {
        z-index: 0;
        position: absolute;
        width: 500px;
        height: 500px;
        /* background-color: #ff0000; */
        background: linear-gradient(to bottom, #f7f6f6, #e6e8eb);
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: spinx 1ms linear infinite, moveCircular5 30s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    }

    @keyframes moveCircular4 {
        0% {
            transform: translate(100%, 5%) rotate(0deg) translateX(150px) rotate(0deg);
        }

        100% {
            transform: translate(100%, 50%) rotate(360deg) translateX(150px) rotate(-360deg);
        }
    }

    @keyframes moveCircular5 {
        0% {
            transform: translate(120%, 10%) rotate(0deg) translateX(200px) rotate(0deg);
        }

        100% {
            transform: translate(120%, 10%) rotate(360deg) translateX(200px) rotate(-360deg);
        }
    }


    .FONT {
        letter-spacing: -.03em;
        margin-top: 0;
        margin-bottom: 10px;
        font-family: sans-serif;
        font-size: 100px;
        font-weight: 300;
        line-height: 1em;
    }

    .FONT1 {
        letter-spacing: -.03em;
        margin-top: 0;
        margin-bottom: 10px;
        font-family: sans-serif;
        font-weight: bolder;
        font-size: 100px;
        font-weight: 300;
        line-height: 1em;
    }




    .ZOOMIN {
        width: 500px;
        height: 420px;
        animation-name: zoomIn;
        animation-duration: 4s;
        animation-iteration-count: 1;
        animation-timing-function: ease-out;
        animation-fill-mode: forwards;
    }

    @keyframes zoomIn {
        0% {
            opacity: 0;
            transform: scale(0.5);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }


    .container {
        display: flex;
        width: 250px;
        padding: 25px 0;
        border-radius: 8px;
        /* background: #ffffff; */
        /* box-shadow: 0px 7px 15px #dedbdb; */
        row-gap: 30px;
        flex-direction: column;
        align-items: center;
        transition: transform 0.3s ease-in-out;
    }

    .container:hover {
        transform: scale(1.1);
    }

    .circular-progress {
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background: conic-gradient(#163172 3.6deg, #ededed 0deg);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .circular-progress::before {
        content: "";
        position: absolute;
        height: 120px;
        width: 120px;
        border-radius: 50%;
        background-color: #ffffff;
    }

    .progress-value {
        position: relative;
        font-size: 40px;
        font-weight: 600;
        color: #1e56a0;
    }

    .text {
        font-size: 20px;
        font-weight: 600;
        color: #606060;
    }

    .ROUN {
        border-start-start-radius: 600px;
        border-end-start-radius: 600px;
    }

</style>

<section class="bg-white ">
    <div class="grid max-w-screen-xl xl:px-20 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7 z-50">

            <h1 class=" FONT max-w-2xl mb-4 text-7xl font-extrabold leading-none md:text-5xl xl:text-6xl text-gray-900">
                Payments, <br></h1>
            <h1 class=" FONT1 text-gray-900">tool software</h1>
            <p class="max-w-2xl mb-6 font-normal text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">From checkout to global
                sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-xl font-medium text-center text-white rounded-lg bg-gradient-to-r from-[#163172] to-[#1e56a0] hover:bg-blue-700 ">
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

        </div>
        {{-- <div class=" BORDER1 bg-gradient-to-b from-[#f7f6f6] to-[#e6e8eb] absolute top-52 right-24 w-96 h-96">
        </div> --}}
        {{-- <div id="FLOAT4"></div> --}}
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="AP/6.jpg" alt="mockup" class=" absolute top-56 right-16 z-0" width=" 580px" height=" 580px">
        </div>
    </div>
</section>

{{-- SECTION 2 --}}
<section class=" h-lvh flex justify-center items-center gap-5 px-28 bg-gray-50">

    <div class=" w-1/2 h-full grid justify-center items-center relative">
        <img class=" w[70%] h-[70%]" src="AP/18.png" alt="">
        <div class=" w-32 h-32 rounded-full bg-blue-700 absolute -bottom-20 right-24 opacity-75"></div>
        <img class=" absolute -bottom-10 right-4" src="AP/19.png" alt="">
    </div>

    <div class=" grid grid-cols-6 gap-5 justify-center items-center w-1/2 h-full py-20 ">

        <div class="container col-span-3">
            <div class="circular-progress CP0">
                <span class="progress-value PV0">0%</span>
            </div>
            <span class="text">Acquisitions</span>
        </div>

        <div class="container col-span-3">
            <div class="circular-progress CP1">
                <span class="progress-value PV1">0%</span>
            </div>
            <span class="text">HTML & CSS</span>
        </div>

        <div class="container col-span-3">
            <div class="circular-progress CP2">
                <span class="progress-value PV2">0%</span>
            </div>
            <span class="text">Growth Rate</span>
        </div>

        <div class="container col-span-3">
            <div class="circular-progress CP3">
                <span class="progress-value PV3">0%</span>
            </div>
            <span class="text">Founder NPS</span>
        </div>

    </div>
</section>

{{-- section 3 --}}
<section class="flex py-16">
    <div class="w-1/6"></div>
    <div class=" ROUN xl:w-full h-80 bg-blue-900 relative">
        <h1 class="font-bold text-5xl mb-4 text-white absolute left-1/2 transform -translate-x-1/2 top-16 sm:left-60 sm:translate-x-0 sm:text-violet-800 text-center sm:text-left">CE QUE NOUS FAISONS.</h1>
        <p class="w-11/12 sm:w-3/4 text-white absolute left-1/2 transform -translate-x-1/2 top-36 sm:left-60 sm:translate-x-0 text-xl text-center sm:text-left">
            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
            <span class="font-medium">industries for previewing</span> layouts and visual mockups. Lorem ipsum is placeholder text commonly <span class="font-medium">used in the graphic,</span> print, and publishing.
        </p>
        <div class="absolute -bottom-28 right-36 w-36 h-36 bg-blue-600 rounded-full opacity-50 hidden md:block"></div>
        <img class="absolute -bottom-16 right-4 hidden md:block" src="AP/19.png" alt="">
    </div>
</section>

{{-- section 4 --}}
<form action="https://fabform.io/f/xxxxx" method="post">

    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 grid-cols-1">
                <div class="lg:mb-0 mb-10">
                    <div class="group w-full h-full">
                        <div class="relative h-full">
                            <img src="https://pagedone.io/asset/uploads/1696488602.png" alt="ContactUs tailwind section"
                                class="w-full h-full lg:rounded-l-2xl rounded-2xl bg-blend-multiply bg-indigo-700" />
                            <h1 class="font-manrope text-white text-4xl font-bold leading-10 absolute top-11 left-11">
                                Contact us</h1>
                            <div class="absolute bottom-0 w-full lg:p-11 p-5">
                                <div class="bg-white rounded-lg p-6 block">
                                    <a href="javascript:;" class="flex items-center mb-6">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.3092 18.3098C22.0157 18.198 21.8689 18.1421 21.7145 18.1287C21.56 18.1154 21.4058 18.1453 21.0975 18.205L17.8126 18.8416C17.4392 18.9139 17.2525 18.9501 17.0616 18.9206C16.8707 18.891 16.7141 18.8058 16.4008 18.6353C13.8644 17.2551 12.1853 15.6617 11.1192 13.3695C10.9964 13.1055 10.935 12.9735 10.9133 12.8017C10.8917 12.6298 10.9218 12.4684 10.982 12.1456L11.6196 8.72559C11.6759 8.42342 11.7041 8.27233 11.6908 8.12115C11.6775 7.96998 11.6234 7.82612 11.5153 7.5384L10.6314 5.18758C10.37 4.49217 10.2392 4.14447 9.95437 3.94723C9.6695 3.75 9.29804 3.75 8.5551 3.75H5.85778C4.58478 3.75 3.58264 4.8018 3.77336 6.06012C4.24735 9.20085 5.64674 14.8966 9.73544 18.9853C14.0295 23.2794 20.2151 25.1426 23.6187 25.884C24.9335 26.1696 26.0993 25.1448 26.0993 23.7985V21.2824C26.0993 20.5428 26.0993 20.173 25.9034 19.8888C25.7076 19.6046 25.362 19.4729 24.6708 19.2096L22.3092 18.3098Z"
                                                stroke="#4F46E5" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <h5 class="text-black text-base font-normal leading-6 ml-5">470-601-1911</h5>
                                    </a>
                                    <a href="https://veilmail.io/irish-geoff" class="flex items-center mb-6">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.81501 8.75L10.1985 13.6191C12.8358 15.2015 14.1544 15.9927 15.6032 15.9582C17.0519 15.9237 18.3315 15.0707 20.8905 13.3647L27.185 8.75M12.5 25H17.5C22.214 25 24.5711 25 26.0355 23.5355C27.5 22.0711 27.5 19.714 27.5 15C27.5 10.286 27.5 7.92893 26.0355 6.46447C24.5711 5 22.214 5 17.5 5H12.5C7.78595 5 5.42893 5 3.96447 6.46447C2.5 7.92893 2.5 10.286 2.5 15C2.5 19.714 2.5 22.0711 3.96447 23.5355C5.42893 25 7.78595 25 12.5 25Z"
                                                stroke="#4F46E5" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <h5 class="text-black text-base font-normal leading-6 ml-5">
                                            https://veilmail.io/irish-geoff</h5>
                                    </a>
                                    <a href="javascript:;" class="flex items-center">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25 12.9169C25 17.716 21.1939 21.5832 18.2779 24.9828C16.8385 26.6609 16.1188 27.5 15 27.5C13.8812 27.5 13.1615 26.6609 11.7221 24.9828C8.80612 21.5832 5 17.716 5 12.9169C5 10.1542 6.05357 7.5046 7.92893 5.55105C9.8043 3.59749 12.3478 2.5 15 2.5C17.6522 2.5 20.1957 3.59749 22.0711 5.55105C23.9464 7.5046 25 10.1542 25 12.9169Z"
                                                stroke="#4F46E5" stroke-width="2" />
                                            <path
                                                d="M17.5 11.6148C17.5 13.0531 16.3807 14.219 15 14.219C13.6193 14.219 12.5 13.0531 12.5 11.6148C12.5 10.1765 13.6193 9.01058 15 9.01058C16.3807 9.01058 17.5 10.1765 17.5 11.6148Z"
                                                stroke="#4F46E5" stroke-width="2" />
                                        </svg>
                                        <h5 class="text-black text-base font-normal leading-6 ml-5">654 Sycamore Avenue,
                                            Meadowville, WA 76543</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-5 lg:p-11 lg:rounded-r-2xl rounded-2xl">
                    <h2 class="text-indigo-600 font-manrope text-4xl font-semibold leading-10 mb-11">Send Us A Message
                    </h2>
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400  shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10"
                        placeholder="Name">
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10"
                        placeholder="Email">
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10"
                        placeholder="Phone">
                    <div class="mb-10">
                        <h4 class="text-gray-500 text-lg font-normal leading-7 mb-4">Preferred method of communication
                        </h4>
                        <div class="flex">
                            <div class="flex items-center mr-11">
                                <input id="radio-group-1" type="radio" name="radio-group"
                                    class="hidden checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100">
                                <label for="radio-group-1"
                                    class="flex items-center cursor-pointer text-gray-500 text-base font-normal leading-6">
                                    <span class="border border-gray-300 rounded-full mr-2 w-4 h-4  ml-2 "></span> Email
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="radio-group-2" type="radio" name="radio-group"
                                    class="hidden checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100">
                                <label for="radio-group-2"
                                    class="flex items-center cursor-pointer text-gray-500 text-base font-normal leading-6">
                                    <span class="border border-gray-300  rounded-full mr-2 w-4 h-4  ml-2 "></span> Phone
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 bg-transparent text-lg shadow-sm font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10"
                        placeholder="Message">
                    <button
                        class="w-full h-12 text-white text-base font-semibold leading-6 rounded-full transition-all duration-700 hover:bg-indigo-800 bg-indigo-600 shadow-sm">Send</button>
                </div>
            </div>
    </section>
    
</form>

{{-- section 3 --}}
{{-- <section class=" flex py-16 ">
    <div class=" w-1/6"></div>
    <div class=" ROUN xl:w-full h-80 bg-blue-900 relative ">

        <h1 class=" font-bold text-5xl mb-4 text-white absolute left-60 top-16 sm:text-violet-800">CE QUE NOUS FAISONS .</h1>
        <p class=" w-3/4 text-white absolute left-60 top-36 text-xl">Lorem ipsum is placeholder text commonly used in
            the graphic, print, and
            publishing
            <span class=" font-medium">industries for previewing</span> layouts and visual mockups
            Lorem ipsum is placeholder text commonly <span class=" font-medium"> used in the graphic, </span> print, and
            publishing

        </p>
        <div class=" absolute -bottom-28 right-36 w-36 h-36 bg-blue-600 rounded-full opacity-50"></div>
        <img class=" absolute -bottom-16 right-4" src="AP/19.png" alt="">
    </div>
</section> --}}

<section class="bg-gray-50">
    {{-- <div id="FLOAT5"></div> --}}
    <div class="grid max-w-screen-xl px-4 py-8 mt-10 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class=" col-span-12 h-20 mb-2">
            <div class=" flex justify-center items-center mb-2 ">
                <h1 class=" font-bold text-5xl text-gray-900 z-50">Pour Quoi Nous Choisir ?</h1>
            </div>
            <div class="  flex justify-center items-center">
                <p class=" text-2xl font-normal text-gray-700 z-50">votre succés est notre mission</p>
            </div>
        </div>
        <div class=" grid grid-cols-6 col-span-12 justify-center items-center gap-5 px-20 h-40 z-50">

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <img src="images/71.png" alt="" class=" w-12 h-12">
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center"> Centrés utilisateur</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <img src="images/72.png" alt="" class=" w-12 h-12">
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center">La Creativite</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <img src="images/73.png" alt="" class=" w-12 h-12">
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center">La Croissonance</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <img src="images/74.png" alt="" class=" w-12 h-12">
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center">L'agilite</h3>
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-3 justify-center items-center col-span-1">
                <div class=" col-span-2 flex justify-center items-center">
                    <img src="images/75.png" alt="" class=" w-12 h-12">
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
                        3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class=" col-span-2 flex justify-center items-center">
                    <h3 class=" font-medium text-center">Le Profit</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<section class=" COUNT mb-12 my-10 relative">

    {{-- <div id="FLOAT"></div> --}}
    {{-- <div id="FLOAT1"></div> --}}
    <div class=" px-4 z-50">
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
                        <h1 class=" font-semibold text-5xl text-white">Houda belaydi</h1>
                        <h4 class=" font-medium text-gray-100">CEO && FONDER</h4>
                    </div>
                    <p class=" w-full text-white text-xl font-normal">Each Founder has put their blood, sweat, and tears
                        into building
                        something remarkable. ASG builds on that legacy while liberating
                        Founders to get back to doing what you really love.
                    </p>
                </div>
                <div
                    class=" absolute flex bottom-0 -right-24 w-40 rounded-full justify-center items-center gap-3 h-12 bg-[#1e56a0]">
                    <svg class="w-7 h-7 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <path fill="white"
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131c.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg>
                    <svg class="w-7 h-7 text-white" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        viewBox="0 0 24 24">
                        <path fill="white"
                            d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93zM6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37z" />
                    </svg>
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="bg-gray-50 my-8 ">

    <div class="grid max-w-screen-xl py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-2 0 px-56">
        <div class=" bg-[#163172] col-span-2 h-64 rounded-lg relative ">
            {{-- <div id="FLOAT"></div> --}}
            {{-- <div id="FLOAT1"></div> --}}
            {{-- <img src="images/70.jpg" alt="" class=" w-full h-full rounded-lg"> --}}
            <img class="rounded-full absolute -top-7 -right-16 " src="images/contact.png" alt="girhn" width="350px"
                height="350px">
            <h1 class=" absolute font-bold text-3xl w-1/2 top-7 left-10 text-white">Each Founder has put their blood,
                sweat, and tears into building </h1>
            <button
                class=" absolute top-40 left-10 bg-[#1e56a0] px-16 py-2 rounded-full text-xl font-medium text-white hover:bg-white hover:text-black">Contact</button>
        </div>
    </div>
</section>



@endsection


<script>

    document.addEventListener("DOMContentLoaded", function () {
        const section = document.getElementByClass('section');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    section.classList.add('ZOOMIN');
                    observer.unobserve(section);
                }
            });
        }, {
            threshold: 0.5
        });

        observer.observe(section);
    });

</script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!-- Counter-Up Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<script>
    jQuery(document).ready(function ($) {
        $('.COUNT0').counterUp({
            delay: 200,
            time: 2000
        });

        $('.COUNT1').counterUp({
            delay: 200,
            time: 2000
        });

        $('.COUNT2').counterUp({
            delay: 200,
            time: 2000
        });

        $('.COUNT3').counterUp({
            delay: 200,
            time: 2000
        });
    });
</script>



<script>
    document.addEventListener("DOMContentLoaded", () => {
        let CP0 = document.querySelector(".CP0"),
            PV0 = document.querySelector(".PV0"),
            CP1 = document.querySelector(".CP1"),
            PV1 = document.querySelector(".PV1"),
            CP2 = document.querySelector(".CP2"),
            PV2 = document.querySelector(".PV2"),
            CP3 = document.querySelector(".CP3"),
            PV3 = document.querySelector(".PV3");

        let progressStartValue0 = 0,
            progressStartValue1 = 0,
            progressStartValue2 = 0,
            progressStartValue3 = 0,
            progressEndValue0 = 60,
            progressEndValue1 = 70,
            progressEndValue2 = 90,
            progressEndValue3 = 45,
            speed = 15;

        let progress = setInterval(() => {
            if (progressStartValue0 < progressEndValue0) {
                progressStartValue0++;
                PV0.textContent = `${progressStartValue0}%`;
                CP0.style.background = `conic-gradient(#1e56a0 ${progressStartValue0 * 3.6}deg, #ededed ${progressStartValue0 * 3.6}deg)`;

            }

            if (progressStartValue1 < progressEndValue1) {
                progressStartValue1++;
                PV1.textContent = `${progressStartValue1}%`;
                CP1.style.background = `conic-gradient(#1e56a0 ${progressStartValue1 * 3.6}deg, #ededed ${progressStartValue1 * 3.6}deg)`;
            }

            if (progressStartValue2 < progressEndValue2) {
                progressStartValue2++;
                PV2.textContent = `${progressStartValue2}%`;
                CP2.style.background = `conic-gradient(#1e56a0 ${progressStartValue2 * 3.6}deg, #ededed ${progressStartValue2 * 3.6}deg)`;
            }

            if (progressStartValue3 < progressEndValue3) {
                progressStartValue3++;
                PV3.textContent = `${progressStartValue3}%`;
                CP3.style.background = `conic-gradient(#1e56a0 ${progressStartValue3 * 3.6}deg, #ededed ${progressStartValue3 * 3.6}deg)`;
            }

            if (progressStartValue0 >= progressEndValue0 &&
                progressStartValue1 >= progressEndValue1 &&
                progressStartValue2 >= progressEndValue2 &&
                progressStartValue3 >= progressEndValue3) {
                clearInterval(progress);
            }
        }, speed);
    });

</script>