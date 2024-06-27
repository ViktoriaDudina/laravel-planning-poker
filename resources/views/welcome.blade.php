<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

        <title>Scrum Poker</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        body{
            background-image: url('/assets/table.jpg');
            background-size: cover; 
            
        }
    </style>
   
    </head>
    <body>
        
<div class="flex flex-col items-center justify-center h-screen">
<h1  class="text-5xl text-white  font-bold">Welcome to the Scrum Poker</h1>
<button class="border hover:border-4 rounded-lg text-xl mt-12 p-3 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-sky-500  hover:mt-10"><a href="/name">Start new game</a></button>
</div>


    </body>
</html>
