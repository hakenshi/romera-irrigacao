<x-layout title="Romera Irrigação">
    <section class="min-h-dvh md:min-h-[75.4vh] flex flex-col items-center gap-10">
        <h2 class="bg-romera-green-500 w-full h-fit p-5 uppercase text-center text-white font-semibold">Trabalhamos com as melhores tecnologias do mercado!</h2>
        <div class="bg-white w-11/12 md:w-7/12 md:h-[45vh] rounded-lg p-5">
            <h3 class="text-center text-2xl font-semibold p-3">{{ $descricao }}</h3>
            <div class="flex flex-col md:flex-row justify-center items-center gap-10 text-justify">
                <div>
                    <img class="rounded-full w-40 h-40 md:w-80 md:h-80 object-cover" src="{{ $img }}" alt="{{ $descricao }}">
                </div>
                <div class="md:w-1/2">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
</x-layout>