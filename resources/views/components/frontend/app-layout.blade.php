<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>{{ $title }}</title>
</head>

<body class="h-full">
	<!-- Container utama dengan background image -->
	<div class="relative min-h-full bg-cover bg-center"
		style="background-image: url('{{ asset('img/dinkes_foto.jpg') }}');">
		<!-- Overlay putih samar -->
		<div class="absolute inset-0 bg-white opacity-60"></div>

		<!-- Konten di atas overlay -->
		<div class="relative z-10">
			<x-frontend.navbar />
			<main>
				<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
					{{ $slot }}
				</div>
			</main>
			<x-frontend.footer />
		</div>
	</div>
</body>

</html>