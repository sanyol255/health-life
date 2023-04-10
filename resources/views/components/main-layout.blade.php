@props(['title'])
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>Health Life{{ $title ?? "" }}</title>
    </head>
    <body class="bg-[#ffc] text-[#006]">
        <nav class="bg-[#090] h-16 text-white w-full fixed top-0">
            <ul class="flex flex-row justify-center">
                <li class="mt-5 space-x-32">
                    <a href="#" class="hover:text-orange-300">Home</a>
                    <a href="#" class="hover:text-orange-300">Health tests</a>
                    <a href="#" class="hover:text-orange-300">Workout exercises</a>
                    <a href="#" class="hover:text-orange-300">Articles</a>
                    <a href="#" class="hover:text-orange-300">Login/Sign up</a>
                </li>
            </ul>
        </nav>
        {{ $slot }}
        <footer class="fixed bottom-0 bg-[#090] text-white w-full h-12 text-center pt-3">
            <i>&copy;Health Life {{ date('Y') }}</i>
        </footer>
    </body>
</html>
