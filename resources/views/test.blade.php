<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>test</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- http://127.0.0.1:8000/dashboard/testimoni --}}
</head>
<body>
  <div x-data="dropdown">
    <button @click="toggle">...</button>
    <div x-show="open">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores laudantium fugiat repudiandae amet totam in, magni quae architecto sed nulla fuga corrupti saepe aliquid cupiditate rerum velit consectetur delectus? Modi.
    </div>
  </div>
</body>
</html>