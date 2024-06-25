@extends('LAYOUT.index')

@section('title', 'home')

@section('container')


<style>

    .LEFT{
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

    .COUNT{
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
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
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
    

    .FONT{
        letter-spacing: -.03em;
        margin-top: 0;
        margin-bottom: 10px;
        font-family:sans-serif;
        font-size: 100px;
        font-weight: 300;
        line-height: 1em;
    }
    .FONT1{
        letter-spacing: -.03em;
        margin-top: 0;
        margin-bottom: 10px;
        font-family:sans-serif;
        font-weight: bolder;
        font-size: 100px;
        font-weight: 300;
        line-height: 1em;  
    }




    .ZOOMIN{
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


.container{
    display: flex;
    width: 250px;
    padding: 25px 0;
    border-radius: 8px;
    background: #ffffff;
    box-shadow: 2px 7px 15px #dedbdb;
    row-gap: 30px;
    flex-direction: column;
    align-items: center;
    transition: transform 0.3s ease-in-out;
}
.container:hover{
    transform: scale(1.1);
}

.circular-progress{
    position: relative;
    height: 150px;
    width: 150px;
    border-radius: 50%;
    background: conic-gradient(#163172 3.6deg, #ededed 0deg);
    display: flex;
    align-items: center;
    justify-content: center;
}
.circular-progress::before{
    content: "";
    position: absolute;
    height: 120px;
    width: 120px;
    border-radius: 50%;
    background-color: #ffffff;
}
.progress-value{
    position: relative;
    font-size: 40px;
    font-weight: 600;
    color: #1e56a0;
}
.text{
    font-size: 20px;
    font-weight: 600;
    color: #606060;
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
        {{-- <div class=" BORDER1 bg-gradient-to-b from-[#f7f6f6] to-[#e6e8eb] absolute top-52 right-24 w-96 h-96"></div> --}}
        {{-- <div id="FLOAT4"></div> --}}
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex"> 
           <img src="AP/6.jpg" alt="mockup" class=" absolute top-56 right-16 z-0" width=" 580px" height=" 580px">
        </div>
    </div>
</section>

{{-- SECTION 2  --}}
<section class=" h-lvh flex gap-5 px-28 ">

    <div class=" w-1/2 h-full grid justify-center items-center relative ">
        <img class=" w[60%] h-[60%]" src="AP/18.png" alt="">
        <div class=" w-32 h-32 rounded-full bg-blue-700 absolute bottom-16 right-24 opacity-45"></div>
        <img class=" absolute -bottom-10 right-4" src="AP/19.png" alt="">
    </div>

    <div class=" grid grid-cols-6 gap-5 justify-center items-center w-1/2 h-full py-20">

        <div class="container col-span-3">
            <div class="circular-progress CP0">
                <span class="progress-value PV0">0%</span>
            </div>
            <span class="text">HTML & CSS</span>
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
            <span class="text">HTML & CSS</span>
        </div>

        <div class="container col-span-3">
            <div class="circular-progress CP3">
                <span class="progress-value PV3">0%</span>
            </div>
            <span class="text">HTML & CSS</span>
        </div>

    </div>
</section>

{{-- section 3 --}}
<section class=" flex bg-gray-50 py-16 mt-20">
    <div class=" w-[15%]"></div>
    <div class=" w-[85%] h-80 bg-[#163172] rounded-s-full relative ">
       
        <h1 class=" font-bold text-5xl mb-4 text-white absolute left-60 top-16">CE QUE NOUS FAISONS .</h1>
        <p class=" w-[64%] text-white absolute left-60 top-36 text-xl">Lorem ipsum is placeholder text commonly used in the graphic, print, and
            publishing
            <span class=" font-medium">industries for previewing</span> layouts and visual mockups
            Lorem ipsum is placeholder text commonly <span class=" font-medium"> used in the graphic, </span> print, and
            publishing
            
        </p>
        <div class=" absolute w-36 h-36 bg-[#1e56a0] rounded-full opacity-70 -bottom-32 right-32"></div>
        <img class=" absolute -bottom-16 right-4" src="AP/19.png" alt="">
    </div>
</section>



<section class="bg-gray-50">
    <div id="FLOAT5"></div>
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
    
    <div id="FLOAT"></div>
    <div id="FLOAT1"></div>
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
            <div id="FLOAT"></div>
            <div id="FLOAT1"></div>
            {{-- <img src="images/70.jpg" alt="" class=" w-full h-full rounded-lg"> --}}
            <img class="rounded-full absolute -top-7 -right-16 " src="images/contact.png" alt="girhn" width="350px" height="350px">
            <h1 class=" absolute font-bold text-3xl w-1/2 top-7 left-10 text-white">Each Founder has put their blood,
                sweat, and tears into building </h1>
            <button
                class=" absolute top-40 left-10 bg-[#1e56a0] px-16 py-2 rounded-full text-xl font-medium text-white hover:bg-white hover:text-black">Contact</button>
        </div>
    </div>
</section>



@endsection


<script >

    document.addEventListener("DOMContentLoaded", function() {
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
    jQuery(document).ready(function( $ ) {
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
        speed = 20;

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

