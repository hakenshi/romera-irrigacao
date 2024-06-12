const cestari = "./cestari.png"
const weg = "./weg.png"
const ksb = "./ksb.png"
const maggion = "./waggion.png"
const senninger = "./senninger.png"

const images = {cestari,weg, maggion, senninger, ksb}

const data = [
    {
        content: "Fabricação de Pivôs de irrigação envolve a produção de sistemas eficientes para irrigação de culturas agrícolas. Isso inclui a montagem de componentes como tubulações, aspersores e sistemas de controle de água.",
        image: "slide-1.jpg",
        title: "Fabricação de Pivôs de irrigação"
    },
    {
        content: "Venda de Produtos Agrícolas abrange uma ampla variedade de itens, incluindo sementes de diversas culturas, fertilizantes para nutrir o solo, pesticidas para o controle de pragas e doenças, além de equipamentos agrícolas como tratores, colheitadeiras e implementos.",
        image: "slide-4.jpg",
        title: "Venda de Produtos Agrícolas"
    },
    {
        content: "Montagem e Manutenção de Pivôs é essencial para garantir o funcionamento adequado desses sistemas de irrigação. Isso envolve a instalação inicial, ajustes para otimização do fluxo de água, e manutenção regular para prevenir obstruções e vazamentos.",
        image: "slide-5.jpg",
        title: "Montagem e Manutenção de Pivôs"
    }
];

document.querySelectorAll('#main-container .flex').forEach((div, index) => {
    div.addEventListener('click', () => {
        const {content, image, title} = data[index];
        document.querySelector("#info-container").innerHTML = `
            <div class="bg-white items-center justify-center lg:items-start flex flex-col md:flex-row w-full md:w-3/4 lg:w-1/2 p-5 shadow-md rounded-lg">
                <img class="w-36 h-36 md:w-80 md:h-80 object-cover rounded-full border-white border-4 mb-4 md:mr-6" src="${image}" alt="${title}">
                <div class="flex flex-col">
                    <h3 class="text-center uppercase text-xl font-semibold p-5">${title}</h3>
                    <p class="text-base text-justify">${content}</p>
                </div>
            </div>
        `;
    });
});


document.querySelector("#img-container").innerHTML = Object.entries(images).map(([key, value]) => `<img class="w-16 md:w-32" src="${value}" alt="${key}">`).join('');