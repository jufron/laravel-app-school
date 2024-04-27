<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])
</head>
<body>
		<div x-data="{ count: 0 }">
			<button @click="count++">Add</button>
			<span x-text="count">0</span>
		</div>
</body>
</html>
