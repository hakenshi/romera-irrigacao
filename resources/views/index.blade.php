<x-layout title="Romera Irrigação">
    <x-navbar :links="['Início', 'Produtos', 'Financiamento', 'Contato']" />
    <div class="bg-romera-green-600 text-white p-5 text-center font-semibold text-xl">
        <p>AUMENTE SUA PRODUÇÃO COM NOSSOS SISTEMAS DE IRRIGAÇÃO!</p>
    </div>
    <section class="flex items-center justify-center w-full h-screen md:h-[78.3vh] bg-cover bg-center bg-no-repeat bg-[url('/public/home.jpg')] relative">
        <div class="w-11/12 md:w-2/3 lg:w-1/2 text-white flex gap-10 flex-col bg-green-400/70 p-5 rounded-lg shadow-lg">
            <h2 class="uppercase font-semibold text-3xl text-center">Romera Irrigação</h2>
            <p class="text-pretty text-justify text-xl">
                Controle total da fertirrigação da sua lavoura ou hidroponia na palma da mão.
                Romera Sistemas De Irrigação, há 40 anos no mercado, oferecendo soluções avançadas para irrigação.
                Sensores e softwares de automação agrícola garantem precisão, monitoramento constante e maior eficiência
                para sua produção.
            </p>
        </div>
    </section>
    <section class="bg-romera-blue-300/50 p-6">
        <h2 class="text-center uppercase font-semibold p-2 text-2xl">Por que escolher a Romera?</h2>
        <div class="flex justify-center p-5 gap-6">
            <div class="bg-white rounded-lg p-4 shadow-lg">
                <ul class="space-y-2 list-disc list-inside">
                    <li>Aumentamos sua produtividade com tecnologia avançada</li>
                    <li>Oferecemos suporte técnico especializado</li>
                    <li>Garantimos eficiência no uso da água e nutrientes</li>
                    <li>40 anos de experiência no mercado</li>
                    <li>Soluções personalizadas para cada necessidade</li>
                    <li>Automação e monitoramento em tempo real</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="p-6">
        <h2 class="text-center uppercase font-semibold p-2 text-2xl">Produtos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Add product cards here -->
        </div>
    </section>
    <section class="p-6 bg-green-500">
        <h2 class="text-center uppercase font-semibold p-2 text-2xl">Contato</h2>
        <div class="flex flex-col items-center">
            <!-- Add contact form or contact details here -->
        </div>
    </section>
    <x-footer />
</x-layout>
