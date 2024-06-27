@extends('LAYOUT.index')

@section('title', 'A proposde nous')

@section('container')

<style>
.container{
    display: flex;
    width: 250px;
    padding: 25px 0;
    border-radius: 8px;
    background: #ffffff;
    box-shadow: 0px 7px 15px #dedbdb;
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

{{-- SECTION 3 --}}
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

@endsection



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