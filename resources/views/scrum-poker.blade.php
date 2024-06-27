<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Scrum Poker</title>

    <style>
    body {
      background-image: url('/assets/bg.jpg');
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: flex-end;
    }
  </style>
  <title>Document</title>
</head>
<body>
  <div class="cards flex flex-col justify-end items-center h-full">
    <p class="mb-4 text-white text-2xl">Choose your card</p>
    <ul class="flex flex-row justify-center items-center mb-4">
      <li class="text-xl border rounded-md m-2 py-12 px-8 text-white">0</li>
      <li class="text-xl border rounded-md m-2 py-12 px-8 text-white">1</li>
      <li class="text-xl border rounded-md m-2 py-12 px-8 text-white">2</li>
      <li class="text-xl border rounded-md m-2 py-12 px-8 text-white">3</li>
      <li class="text-xl border rounded-md m-2 py-12 px-8 text-white">5</li>
      <li class="text-xl border rounded-md m-2 py-12 px-8 text-white">8</li>
      <li class="text-xl border rounded-md m-2 py-12 px-7 text-white">13</li>
      <li class="text-xl border rounded-md m-2 py-12 px-7 text-white">21</li>
      <li class="text-xl border rounded-md m-2 py-12 px-7 text-white">34</li>
      <li class="text-xl border rounded-md m-2 py-12 px-7 text-white">55</li>
      <li class="text-xl border rounded-md m-2 py-12 px-7 text-white">89</li>
      <li class="text-xl border rounded-md m-2 py-12 px-9 text-white">?</li>
      <li class="text-xl border rounded-md m-2 py-10 px-3 text-white"><img src="/assets/coffee.png" alt="coffee" width="60"></li>
    </ul>
  </div>
</body>
</html>