{{-- @extends('LAYOUT.index')

@section('title', 'A proposde nous')

@section('container')

<style>
    /* .CERCLE{
        clip-path: polygon(100% 100%, 0% 0%, 100% 0%);
    } */
</style>



@endsection


 --}}

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neomorphic Circular Progress Bar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #e0e0e0;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }

        .progress-container {
            position: relative;
            width: 150px;
            height: 150px;
        }

        .progress-circle {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #e0e0e0;
            box-shadow: 
                6px 6px 12px #2200ff, 
                -6px -6px 12px #e90000;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .progress-circle::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 120px;
            height: 120px;
            background: #e0e0e0;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 
                inset 6px 6px 12px #bebebe, 
                inset -6px -6px 12px #ffffff;
        }

        .progress-value {
            font-size: 24px;
            font-weight: bold;
            color: #555;
            position: absolute;
        }

        .circle {
            fill: none;
            stroke-width: 15;
            stroke-linecap: round;
            transform: translate(5px, 5px);
        }

        .background-circle {
            stroke: #d3d3d3;
        }

        .progress-circle .progress {
            stroke: #6c63ff;
            stroke-dasharray: 440;
            stroke-dashoffset: 440;
            transition: stroke-dashoffset 0.5s;
        }
    </style>
</head>
<body>
    <div class="progress-container">
        <svg class="progress-circle" width="140" height="140">
            {{-- <circle class="background-circle" cx="70" cy="70" r="70"></circle> --}}
            <circle class="progress" cx="70" cy="70" r="70"></circle>
        </svg>
        <span class="progress-value">0%</span>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const progressCircle = document.querySelector('.progress-circle .progress');
            const progressValue = document.querySelector('.progress-value');

            let progressStartValue = 0;
            const progressEndValue = 75; // Set this to your desired progress value
            const speed = 50;

            const progress = setInterval(() => {
                progressStartValue++;

                progressValue.textContent = `${progressStartValue}%`;
                progressCircle.style.strokeDashoffset = 440 - (440 * progressStartValue) / 100;

                if (progressStartValue === progressEndValue) {
                    clearInterval(progress);
                }
            }, speed);
        });
    </script>
</body>
</html>
