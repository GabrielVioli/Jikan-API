<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busca de Animes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-2xl bg-white p-12 border border-gray-200">
        <h1 class="text-2xl font-light text-gray-900 mb-8 tracking-wide uppercase text-center">Buscar Anime</h1>

        <form action="{{ route('anime.search.results') }}" method="POST" class="flex flex-col sm:flex-row gap-6 mb-10">
            @csrf
            <div class="flex-grow">
                <label for="name" class="sr-only">Nome do Anime</label>
                <input type="text" name="name" id="name" placeholder="Digite o nome..." required
                    class="w-full px-2 py-3 bg-transparent border-b border-gray-300 focus:outline-none focus:border-gray-900 text-gray-800 placeholder-gray-400 transition-colors rounded-none">
            </div>
            <button type="submit" 
                class="px-8 py-3 bg-gray-900 hover:bg-gray-800 text-white text-sm tracking-wider uppercase transition-colors duration-200">
                Procurar
            </button>
        </form>

        @if(isset($url) && isset($description) && isset($title) && isset($episodes))
            <div class="mt-12 flex flex-col md:flex-row gap-8 items-start pt-8 border-t border-gray-100">
                <img src="{{ $url }}" alt="Capa do Anime" class="w-full md:w-56 h-auto object-cover grayscale-0 hover:grayscale transition-all duration-500">
                <div class="flex-1">
                    <h2 class="text-xl font-medium text-gray-900 tracking-wide uppercase mb-1">
                        {{ $title }}
                    </h2>
                    <span class="text-xs text-gray-500 uppercase tracking-widest block mb-4">
                        Episódios: {{ $episodes }}
                    </span>
                    <p class="text-gray-600 leading-relaxed text-justify text-sm">
                        {{ $description }}
                    </p>
                </div>
            </div>
        @endif
    </div>

</body>
</html>