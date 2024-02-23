<!DOCTYPE html>
<html lang="en" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Student Information</title>
</head>
<body>
    @if (session()->has('success'))
        <x-alert title="{{session('success')}}" />
    @endif

    <section class="bg-white">
        {{$slot}}
    </section>
    <script>
        var sidebar = document.getElementById("sidebar");
        var isopen = false;
        var alertbox = document.getElementById("alertbox");
        var alertclose = false;

        function openSB(){
            if(isopen){
                sidebar.classList.add('block');
                sidebar.classList.remove('hidden');

            }else{
                sidebar.classList.add('hidden');
                sidebar.classList.remove('block');

            }
            isopen=!isopen

        }

        function alert()
        {
            alertbox.remove();
        }
    </script>
</body>
</html>