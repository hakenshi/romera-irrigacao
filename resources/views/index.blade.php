<x-layout title="Romera Irrigação">
    <div class="bg-romera-green-600 text-white p-5 text-center font-semibold text-xl">
        <p>AUMENTE SUA PRODUÇÃO COM NOSSOS SISTEMAS DE IRRIGAÇÃO!</p>
    </div>
    <section
        class="flex items-center justify-center w-full h-screen md:h-[78.3vh] bg-cover bg-center bg-no-repeat bg-[url('/public/home.jpg')] relative">
        <div class="w-11/12 md:w-2/4 lg:w-1/3 text-white flex gap-10 flex-col bg-green-800/70 p-5 rounded-lg shadow-lg">
            <h2 class="uppercase font-semibold text-3xl text-center">Romera Irrigação</h2>
            <div class="text-pretty text-justify text-xl">

                <p>A ROMERA SISTEMAS DE IRRIGAÇÃO é uma empresa de capital nacional, atuante no mercado há quase 40
                    anos.</p>
                <br>
                <p>
                    O objetivo principal da empresa é fornecer sistemas de irrigação que caracterizem-se por sua
                    resistência, eficiência, facilidade de operação e manutenção a custos compatíveis com a realidade do
                    agricultor brasilerio.
                </p>
                <br>
                <p>
                    Profissionalismo, experiência e força de vontade são características que fazem da ROMERA a escolha
                    lógica para o atendimento de suas necessidades.
                </p>

            </div>
        </div>
    </section>
    <section class="bg-gray-100">
        <h2 class="text-center uppercase font-semibold text-2xl p-6 bg-romera-light-blue-500 text-white">Produtos e
            Serviços</h2>
        <div id="main-container" class="flex flex-col md:flex-row justify-around items-center p-5 gap-5 ">
            <div 
                class="flex items-center gap-5 bg-gradient-to-tr from-green-500/70 to-blue-500/70 p-5 rounded-lg shadow-lg transform transition-transform hover:scale-105 w-full md:max-w-lg max-w-md">
                <img class="w-16 h-16 md:w-32 md:h-32 object-cover rounded-full border-4 border-white"
                    src="{{ asset('slide-1.jpg') }}">
                <p  class="text-white font-semibold">Fabricação de Pivôs de irrigação</p>
            </div>
            <div 
                class="flex items-center gap-5 bg-gradient-to-tr from-green-500/70 to-blue-500/70 p-5 rounded-lg shadow-lg transform transition-transform hover:scale-105 w-full md:max-w-lg max-w-md">
                <img class="w-16 h-16 md:w-32 md:h-32 object-cover rounded-full border-4 border-white"
                    src="{{ asset('slide-4.jpg') }}">
                <p  class="text-white font-semibold">Venda de Produtos Agrícolas</p>
            </div>
            <div 
                class="flex items-center gap-5 bg-gradient-to-tr from-green-500/75 to-blue-500/70 p-5 rounded-lg shadow-lg transform transition-transform hover:scale-105 w-full md:max-w-lg max-w-md">
                <img class="w-16 h-16 md:w-32 md:h-32 object-cover rounded-full border-4 border-white"
                    src="{{ asset('slide-5.jpg') }}">
                <p  class="text-white font-semibold">Montagem e Manutenção de Pivôs</p>
            </div>
        </div>

        <div id="info-container" class="p-5 bg-gray-100 mt-5 flex justify-center">
            <div class="bg-white items-center justify-center lg:items-start flex flex-col md:flex-row w-full md:w-3/4 lg:w-1/2 p-5 shadow-md rounded-lg">
                <img class="w-36 h-36 md:w-80 md:h-80 object-cover rounded-full border-white border-4 mb-4 md:mr-6" src="{{ asset("slide-1.jpg") }}" alt="pivôs">
                <div class="flex flex-col">
                    <h3 class="text-center uppercase text-xl font-semibold p-5">Fabricação de Pivôs de Irrigação</h3>
                    <p class="text-base text-justify">Fabricação de Pivôs de irrigação envolve a produção de sistemas eficientes para irrigação de culturas agrícolas. Isso inclui a montagem de componentes como tubulações, aspersores e sistemas de controle de água.</p>
                </div>
            </div>
        </div>
        
        
        <div class="w-full bg-white">
            <h2 class="text-center uppercase text-2xl p-5 font-semibold">Empresas Parceiras</h2>
            <div id="img-container" class="flex justify-evenly p-5"></div>
        </div>
    </section>
    <section>
        <h2 class="text-center uppercase font-semibold text-2xl bg-romera-green-500 text-white h-full p-6">Contato e Localização</h2>
        <div class="flex flex-col items-center h-[50vh]">
            <div id="map" class="w-96 h-96 m-5"></div>
        <div class="p-5"><a href="http://api.whatsapp.com/send?1=pt_BR&amp;phone=551936241220" target="_blank" class="bg-romera-green-400 hover:bg-romera-green-500 p-5 rounded-lg text-white"><i class="fa-brands fa-whatsapp text-lg"></i> Envie uma mensagem!</a></div>
        </div>
    </section>
</x-layout>
