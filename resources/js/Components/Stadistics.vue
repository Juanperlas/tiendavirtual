<script setup>
import { Link } from "@inertiajs/vue3";
import { usePermission } from "@/composables/permissions";
const { hasRole } = usePermission();
</script>
<template>
    <div class="antialiased bg-slate-100 w-full text-slate-700 relative py-1">
        <div
            class="grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-[90%] my-10 px-2"
        >
            <div
                id="menu"
                class="bg-white col-span-3 rounded-lg p-4 shadow-xl hidden md:block"
            >
                <h1
                    class="font-bold text-lg lg:text-3xl bg-gradient-to-br from-black via-black/80 to-transparent bg-clip-text text-transparent text-center uppercase"
                >
                    <span class="text-indigo-400">.</span>Admin
                    <slot name="oficina"></slot
                    ><span class="text-indigo-400">.</span>
                </h1>
                <p class="text-slate-700 text-md mb-2 text-center">
                    Bienvenido de vuelta
                </p>
                <a
                    href="#"
                    class="flex flex-col space-y-2 mb-5 items-center hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2 justify-center text-center"
                >
                    <div>
                        <img
                            class="rounded-full w-16 h-16 relative object-cover col-auto"
                            src="https://img.freepik.com/free-photo/no-problem-concept-bearded-man-makes-okay-gesture-has-everything-control-all-fine-gesture-wears-spectacles-jumper-poses-against-pink-wall-says-i-got-this-guarantees-something_273609-42817.jpg?w=1800&t=st=1669749937~exp=1669750537~hmac=4c5ab249387d44d91df18065e1e33956daab805bee4638c7fdbf83c73d62f125"
                            alt=""
                        />
                    </div>
                    <div>
                        <p
                            class="font-bold text-xl group-hover:text-indigo-400 leading-8"
                        >
                            <slot name="usuario">Juanito Mamani</slot>
                        </p>
                        <span class="text-md text-slate-400">
                            <slot name="correo">juanito@gmail.com</slot>
                        </span>
                    </div>
                </a>

                <hr class="my-2 border-slate-700" />
                <div id="menu" class="flex flex-col space-y-2 my-5">
                    <h1 class="text-center font-bold text-lg text-slate-700">
                        Botones de Acceso Directo
                    </h1>
                    <Link
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                        class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group bg-slate-200"
                    >
                        <div
                            class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center"
                        >
                            <div>
                                <svg
                                    width="30"
                                    height="30"
                                    viewBox="0 0 1024 1024"
                                    class="icon"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="#000000"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M503.8 817.7h16v128.9h-16zM503.7 62.7h16v127.7h-16z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M511.7 214h379.2v600.7H132.6V214h379.1"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M511.7 206h8v16h-8zM867.1 222h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.5 0H725v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16H646v16z m-31.5 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16zM882.9 206h16v16h-16zM898.9 790.9h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.7h-16V459h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16V380z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16V301h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8zM882.9 806.7h16v16h-16zM867.1 822.7h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.5 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16H646v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0H567v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.5 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.5 0h-15.8v-16H267v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0H188v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16zM124.6 806.7h16v16h-16zM140.6 790.9h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.7h-16V459h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16V380z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16V301h16v15.8z m0-31.6h-16v-15.8h16v15.8z m0-31.6h-16v-15.8h16v15.8zM124.6 206h16v16h-16zM488 222h-15.8v-16H488v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0H409v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.5 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16z m-31.5 0H188v-16h15.8v16z m-31.6 0h-15.8v-16h15.8v16zM503.7 206h8v16h-8zM333.7 957.6l-7.6-14.1 185.7-100.9 182 101-7.8 14-174.3-96.8z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M754.6 537.7c0 74.9-60.7 135.6-135.6 135.6s-135.6-60.7-135.6-135.6S544.1 402.1 619 402.1v135.6h135.6z"
                                            fill="#55B7A8"
                                        ></path>
                                        <path
                                            d="M619 681.4c-79.2 0-143.6-64.4-143.6-143.6S539.8 394.1 619 394.1h8v135.6h135.6v8c0 79.2-64.4 143.7-143.6 143.7z m-8-271c-66.7 4.1-119.6 59.7-119.6 127.4 0 70.4 57.3 127.6 127.6 127.6 67.7 0 123.2-53 127.4-119.6H611V410.4z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M794.5 513.8H642.9V362.2h8c79.2 0 143.6 64.4 143.6 143.6v8z m-135.6-16h119.4c-4-64-55.4-115.4-119.4-119.4v119.4z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M750.4 477.8c0-39.5-32-71.5-71.5-71.5v71.5h71.5z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M229.1 583.2h16v90.2h-16zM288.7 411.5h16v261.9h-16zM348.3 512.5h16v160.9h-16zM407.9 613.5h16v59.9h-16z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M106.9 188.3h51.4v51.4h-51.4z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M166.3 247.7H98.9v-67.4h67.4v67.4z m-51.4-16h35.4v-35.4h-35.4v35.4z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M106.9 791h51.4v51.4h-51.4z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M166.3 850.4H98.9V783h67.4v67.4z m-51.4-16h35.4V799h-35.4v35.4z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M865.2 188.3h51.4v51.4h-51.4z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M924.6 247.7h-67.4v-67.4h67.4v67.4z m-51.4-16h35.4v-35.4h-35.4v35.4z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M865.2 791h51.4v51.4h-51.4z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M924.6 850.4h-67.4V783h67.4v67.4z m-51.4-16h35.4V799h-35.4v35.4z"
                                            fill="#0A0408"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-700 leading-4 group-hover:text-indigo-400"
                                >
                                    Ver todas mis compras
                                </p>
                                <p
                                    class="text-slate-500 text-sm hidden md:block"
                                >
                                    Vista general de tus compras
                                </p>
                            </div>
                        </div>
                    </Link>
                    <Link
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                        class="hover:bg-slate-200 transition duration-150 ease-linear rounded-lg py-3 px-2 group"
                    >
                        <div
                            class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center"
                        >
                            <div>
                                <svg
                                    width="30"
                                    height="30"
                                    viewBox="0 0 1024 1024"
                                    class="icon"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="#000000"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M96.4 364.2h830.3v529.5H96.4z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M926.7 901.7h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-22.3-9.7h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 860h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 828h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 796h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 764h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 732h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 700h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 668h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 636h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 604h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 572h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 540h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 508h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 476h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 444h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 412h-16v-16h16v16z m830.3-13.9h-16v-16h16v16zM104.4 380h-16v-23.8h8.2v8h7.8V380z m822.3-7.8h-14.1v-16h22.1v9.9h-8v6.1z m-30.1 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z m-32 0h-16v-16h16v16z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M172.6 438.3h677.8v381.4H172.6z"
                                            fill="#F4BE6F"
                                        ></path>
                                        <path
                                            d="M96.4 258.8h830.3v105.9H96.4z"
                                            fill="#55B7A8"
                                        ></path>
                                        <path
                                            d="M934.7 372.7H88.4V250.8h846.3v121.9z m-830.3-16h814.3v-89.9H104.4v89.9z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M457.3 107.2h108.5v203.7H457.3z"
                                            fill="#EBB866"
                                        ></path>
                                        <path
                                            d="M573.8 318.9H449.3V99.2h124.5v219.7z m-108.5-16h92.5V115.2h-92.5v187.7z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M308.7 560.2m-65.9 0a65.9 65.9 0 1 0 131.8 0 65.9 65.9 0 1 0-131.8 0Z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M308.7 634.1c-40.8 0-73.9-33.2-73.9-73.9s33.2-73.9 73.9-73.9 73.9 33.2 73.9 73.9-33.1 73.9-73.9 73.9z m0-131.9c-32 0-57.9 26-57.9 57.9s26 57.9 57.9 57.9 57.9-26 57.9-57.9-25.9-57.9-57.9-57.9z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M418.7 767.9c0-60.7-49.2-109.9-109.9-109.9s-109.9 49.2-109.9 109.9h219.8z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M426.7 775.9H190.8v-8c0-65 52.9-117.9 117.9-117.9s117.9 52.9 117.9 117.9v8z m-219.6-16h203.3c-4.1-52.5-48.1-93.9-101.6-93.9s-97.6 41.4-101.7 93.9zM457.3 662.8h313.9v16H457.3zM457.3 751.2h261.8v16H457.3z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M457.3 512.7h313.9v65.9H457.3z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M779.2 586.7H449.3v-81.9h329.9v81.9z m-313.9-16h297.9v-49.9H465.3v49.9z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M512 258.6m-20.3 0a20.3 20.3 0 1 0 40.6 0 20.3 20.3 0 1 0-40.6 0Z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M512 287c-15.6 0-28.3-12.7-28.3-28.3s12.7-28.3 28.3-28.3 28.3 12.7 28.3 28.3S527.6 287 512 287z m0-40.7c-6.8 0-12.3 5.5-12.3 12.3S505.2 271 512 271s12.3-5.5 12.3-12.3-5.5-12.4-12.3-12.4z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M71.5 868.8h49.8v49.8H71.5z"
                                            fill="#DC504F"
                                        ></path>
                                        <path
                                            d="M129.2 926.6H63.5v-65.8h65.8v65.8z m-49.7-16h33.8v-33.8H79.5v33.8z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M899.4 868.8h49.8v49.8h-49.8z"
                                            fill="#DC504F"
                                        ></path>
                                        <path
                                            d="M957.1 926.6h-65.8v-65.8h65.8v65.8z m-49.7-16h33.8v-33.8h-33.8v33.8z"
                                            fill="#0A0408"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-700 leading-4 group-hover:text-indigo-400"
                                >
                                    Ver más productos
                                </p>
                                <p
                                    class="text-slate-500 text-sm hidden md:block"
                                >
                                    Busca lo que tu quieras
                                </p>
                            </div>
                        </div>
                    </Link>
                    <Link
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                        class="hover:bg-slate-200 transition duration-150 ease-linear rounded-lg py-3 px-2 group"
                    >
                        <div
                            class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center"
                        >
                            <div>
                                <svg
                                    width="30"
                                    height="30"
                                    viewBox="0 0 1024 1024"
                                    class="icon"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="#000000"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M153.9 105.9h715.4v812.8H153.9z"
                                            fill="#55B7A8"
                                        ></path>
                                        <path
                                            d="M877.3 926.8H145.9V97.9h731.4v828.9z m-715.4-16h699.4V113.9H161.9v796.9z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M221.3 182.9h580.5v658.8H221.3z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M793.8 833.8h16v16h-16zM777.7 849.8h-16.1v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0H568v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16z m-32.3 0H439v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16z m-32.3 0H310v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16zM213.3 833.8h16v16h-16zM229.3 818.1h-16v-15.7h16v15.7z m0-31.4h-16V771h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16V724z m0-31.3h-16V677h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16V332h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16V285z m0-31.4h-16V238h16v15.6z m0-31.3h-16v-15.7h16v15.7zM213.3 174.9h16v16h-16zM777.7 190.9h-16.1v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0H568v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16z m-32.3 0H439v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16z m-32.3 0H310v-16h16.1v16z m-32.3 0h-16.1v-16h16.1v16z m-32.2 0h-16.1v-16h16.1v16zM793.8 174.9h16v16h-16zM809.8 818.1h-16v-15.7h16v15.7z m0-31.4h-16V771h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16V724z m0-31.3h-16V677h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16V332h16v15.7z m0-31.3h-16v-15.7h16v15.7z m0-31.4h-16v-15.7h16V285z m0-31.4h-16V238h16v15.6z m0-31.3h-16v-15.7h16v15.7z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M364.5 306.6m-44.8 0a44.8 44.8 0 1 0 89.6 0 44.8 44.8 0 1 0-89.6 0Z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M364.5 359.4c-29.1 0-52.8-23.7-52.8-52.8s23.7-52.8 52.8-52.8 52.8 23.7 52.8 52.8-23.7 52.8-52.8 52.8z m0-89.6c-20.3 0-36.8 16.5-36.8 36.8s16.5 36.8 36.8 36.8 36.8-16.5 36.8-36.8-16.5-36.8-36.8-36.8zM459.3 262.6h144.1v16H459.3zM459.3 332.2h244.1v16H459.3z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M364.5 516.3m-44.8 0a44.8 44.8 0 1 0 89.6 0 44.8 44.8 0 1 0-89.6 0Z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M364.5 569.1c-29.1 0-52.8-23.7-52.8-52.8s23.7-52.8 52.8-52.8 52.8 23.7 52.8 52.8-23.7 52.8-52.8 52.8z m0-89.6c-20.3 0-36.8 16.5-36.8 36.8 0 20.3 16.5 36.8 36.8 36.8s36.8-16.5 36.8-36.8c0-20.3-16.5-36.8-36.8-36.8zM459.3 472.3h144.1v16H459.3zM459.3 541.9h244.1v16H459.3z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M364.5 726m-44.8 0a44.8 44.8 0 1 0 89.6 0 44.8 44.8 0 1 0-89.6 0Z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M364.5 778.8c-29.1 0-52.8-23.7-52.8-52.8s23.7-52.8 52.8-52.8 52.8 23.7 52.8 52.8-23.7 52.8-52.8 52.8z m0-89.6c-20.3 0-36.8 16.5-36.8 36.8 0 20.3 16.5 36.8 36.8 36.8s36.8-16.5 36.8-36.8c0-20.3-16.5-36.8-36.8-36.8zM459.3 682h144.1v16H459.3zM459.3 751.6h244.1v16H459.3z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M359 72.4h305.2v75.9H359z"
                                            fill="#EBB866"
                                        ></path>
                                        <path
                                            d="M672.2 156.2H351V64.4h321.2v91.8z m-305.2-16h289.2V80.4H367v59.8z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M808.3 807.9m-141.7 0a141.7 141.7 0 1 0 283.4 0 141.7 141.7 0 1 0-283.4 0Z"
                                            fill="#EBB866"
                                        ></path>
                                        <path
                                            d="M808.3 957.6c-82.5 0-149.7-67.1-149.7-149.7s67.1-149.7 149.7-149.7S958 725.4 958 807.9s-67.2 149.7-149.7 149.7z m0-283.4c-73.7 0-133.7 60-133.7 133.7s60 133.7 133.7 133.7S942 881.6 942 807.9s-60-133.7-133.7-133.7z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M810.3 727.1l26 52.5 58 8.5-42 40.9 9.9 57.8-51.9-27.3-51.9 27.3 9.9-57.8-41.9-40.9 58-8.5z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M872.8 901.4l-62.5-32.9-62.5 32.9 11.9-69.6-50.6-49.3 69.9-10.2 31.3-63.3 31.3 63.3 69.9 10.2-50.6 49.3 11.9 69.6z m-62.5-51l41.3 21.7-7.9-45.9 33.4-32.5L831 787l-20.6-41.8-20.7 41.8-46.1 6.7 33.4 32.5-7.9 45.9 41.2-21.7z"
                                            fill="#0A0408"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-700 leading-4 group-hover:text-indigo-400"
                                >
                                    Historial de búsquedas
                                </p>
                                <p
                                    class="text-slate-500 text-sm hidden md:block"
                                >
                                    Ver búsquedas recientes
                                </p>
                            </div>
                        </div>
                    </Link>
                    <Link
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                        class="hover:bg-slate-200 transition duration-150 ease-linear rounded-lg py-3 px-2 group"
                    >
                        <div
                            class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center"
                        >
                            <div>
                                <svg
                                    width="30"
                                    height="30"
                                    viewBox="0 0 1024 1024"
                                    class="icon"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="#000000"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M74 183.7h216V918H74z"
                                            fill="#55B7A8"
                                        ></path>
                                        <path
                                            d="M298 926H66V175.7h232V926zM82 910h200V191.7H82V910z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M125.6 246.6h116.8v229.2H125.6z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M250.4 483.8H117.6V238.6h132.8v245.2z m-116.8-16h100.8V254.6H133.6v213.2z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M178.8 783.9m-55.2 0a55.2 55.2 0 1 0 110.4 0 55.2 55.2 0 1 0-110.4 0Z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M178.8 847.1c-34.8 0-63.2-28.3-63.2-63.2s28.3-63.2 63.2-63.2c34.8 0 63.2 28.3 63.2 63.2s-28.4 63.2-63.2 63.2z m0-110.4c-26 0-47.2 21.2-47.2 47.2s21.2 47.2 47.2 47.2 47.2-21.2 47.2-47.2-21.2-47.2-47.2-47.2z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M519.4 224.2L728 168.3l190.1 709.3-208.6 55.9"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M517.346 216.397l7.727-2.07 4.14 15.454-7.727 2.07zM544.1 225.8l-4.1-15.5 14.9-4 4.1 15.5-14.9 4z m29.7-7.9l-4.1-15.5 14.9-4 4.1 15.5-14.9 4z m29.7-8l-4.1-15.5 14.9-4 4.1 15.5-14.9 4z m29.7-8l-4.1-15.5 14.9-4 4.1 15.5-14.9 4zM663 194l-4.1-15.5 14.9-4 4.1 15.5-14.9 4z m29.7-8l-4.1-15.5 14.9-4 4.1 15.5-14.9 4zM722.4 178.1l-4.2-15.5 15.5-4.1 4.1 15.4zM904.2 856.5l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.9l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.2-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.2-30.9l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.8l-4.1-15.4L866 652l4.1 15.4-15.5 4.1z m-8.3-30.9l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.2-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.9l-4.1-15.4 15.5-4.1L837 544l-15.5 4.1z m-8.2-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.9l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.2-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.9l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.2-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.9l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.2-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.9l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1z m-8.3-30.8l-4.1-15.4 15.5-4.1 4.1 15.4-15.5 4.1zM908.303 871.94l15.454-4.142 4.143 15.455-15.455 4.142zM734.2 935.1l-4.1-15.5 14.9-4 4.1 15.5-14.9 4z m29.7-7.9l-4.1-15.5 14.9-4 4.1 15.5-14.9 4z m29.7-8l-4.1-15.5 14.9-4 4.1 15.5-14.9 4z m29.7-7.9l-4.1-15.5 14.9-4 4.1 15.5-14.9 4z m29.7-8l-4.1-15.5 14.9-4 4.1 15.5-14.9 4z m29.7-8l-4.1-15.5 14.9-4 4.1 15.5-14.9 4zM707.443 925.66l7.727-2.07 4.141 15.454-7.727 2.07z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M583.619 272.12l112.817-30.229 59.317 221.385-112.817 30.228z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M637.3 503.3l-63.5-236.8L702.1 232l63.5 236.8-128.3 34.5z m-43.9-225.6l55.2 205.9 97.4-26.1-55.2-205.9-97.4 26.1z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M722.664239 791.097256a55.2 55.2 0 1 0 106.63871-28.571762 55.2 55.2 0 1 0-106.63871 28.571762Z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M776 840c-27.9 0-53.5-18.6-61-46.8-9-33.7 11-68.4 44.7-77.4s68.4 11 77.4 44.7c9 33.6-11 68.4-44.7 77.4-5.5 1.4-11 2.1-16.4 2.1z m0-110.4c-4 0-8.1 0.5-12.2 1.6-25.1 6.7-40.1 32.7-33.4 57.8 6.7 25.1 32.7 40.1 57.8 33.4 25.1-6.7 40.1-32.7 33.4-57.8-5.7-21-24.8-35-45.6-35z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M888.182 860.34l47.04-12.603 12.603 47.04-47.04 12.603z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M895.2 917.2l-16.8-62.5 62.5-16.8 16.8 62.5-62.5 16.8zM898 866l8.5 31.6 31.6-8.5-8.5-31.6L898 866z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M698.202 151.04l47.04-12.604 12.603 47.04-47.04 12.603z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M705.1 207.9l-16.8-62.5 62.5-16.8 16.8 62.5-62.5 16.8z m2.9-51.2l8.5 31.6 31.6-8.5-8.5-31.6-31.6 8.5z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M291.4 183.7h216V918h-216z"
                                            fill="#EBB866"
                                        ></path>
                                        <path
                                            d="M515.4 926h-232V175.7h232V926z m-216-16h200V191.7h-200V910z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M343 246.6h116.8v229.2H343z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M467.8 483.8H335V238.6h132.8v245.2z m-116.8-16h100.8V254.6H351v213.2z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M396.2 783.9m-55.2 0a55.2 55.2 0 1 0 110.4 0 55.2 55.2 0 1 0-110.4 0Z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M396.2 847.1c-34.8 0-63.2-28.3-63.2-63.2s28.3-63.2 63.2-63.2c34.8 0 63.2 28.3 63.2 63.2s-28.4 63.2-63.2 63.2z m0-110.4c-26 0-47.2 21.2-47.2 47.2s21.2 47.2 47.2 47.2 47.2-21.2 47.2-47.2-21.2-47.2-47.2-47.2z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M712.5 941.5L518.4 217.2"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M510.727 219.228l15.454-4.141 194.074 724.328-15.454 4.141z"
                                            fill="#0A0408"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-700 leading-4 group-hover:text-indigo-400"
                                >
                                    Reportes
                                </p>
                                <p
                                    class="text-slate-500 text-sm hidden md:block"
                                >
                                    Realizar reportes
                                </p>
                            </div>
                        </div>
                    </Link>
                    <Link
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                        class="hover:bg-slate-200 transition duration-150 ease-linear rounded-lg py-3 px-2 group"
                    >
                        <div
                            class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center"
                        >
                            <div>
                                <svg
                                    width="30"
                                    height="30"
                                    viewBox="0 0 1024 1024"
                                    class="icon"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="#000000"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M548.1 455.7h-72l-36 39.8 36 39.9h72l36-39.9z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M551.7 543.4h-79.1l-43.2-47.9 43.2-47.9h79.1l43.2 47.9-43.2 47.9z m-72-16h64.9l28.8-31.9-28.8-31.9h-64.9l-28.8 31.9 28.8 31.9z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M512.1 899.4l102.5-110.5-64.4-253.6h-76.1l-64.5 253.6z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M512.1 911.2l-111.3-120 67.1-263.8h88.5l67.1 263.8-111.4 120z m-93.7-124.6l93.7 101 93.7-101-61.9-243.4h-63.6l-61.9 243.4z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M512.1 843.5l72.4-78L539 586.6h-53.7l-45.5 178.9z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M512.1 240.3m-167.3 0a167.3 167.3 0 1 0 334.6 0 167.3 167.3 0 1 0-334.6 0Z"
                                            fill="#EBB866"
                                        ></path>
                                        <path
                                            d="M512.1 415.5c-96.6 0-175.3-78.6-175.3-175.3S415.5 65 512.1 65c96.6 0 175.3 78.6 175.3 175.3s-78.6 175.2-175.3 175.2z m0-334.5c-87.8 0-159.3 71.4-159.3 159.3s71.4 159.3 159.3 159.3c87.8 0 159.3-71.4 159.3-159.3S599.9 81 512.1 81z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M880.3 950H143.9V645.6c0-61.2 116.2-144.2 177.4-144.2L512 774.7l190.7-273.3c61.2 0 177.4 82.9 177.4 144.2V950z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M888.3 958H135.9V645.6c0-43.4 48.2-85.4 68.9-101.4 39.9-30.9 85.7-50.8 116.6-50.8h4.2l186.6 267.3 186.6-267.3h4.2c30.9 0 76.7 19.9 116.6 50.8 20.7 16 68.9 57.9 68.9 101.4V958z m-736.4-16h720.4V645.6c0-25.2-23.4-58.4-62.6-88.7-35.5-27.4-75.2-45.6-102.7-47.3L512.1 788.8 317.3 509.6c-27.5 1.7-67.2 19.9-102.7 47.3-39.2 30.3-62.6 63.5-62.6 88.7V942z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M441.2 896.3H209.6V704.8c0-38.5 31.2-90.7 69.8-90.7h45.3l116.6 172v110.2zM574.6 896.3h231.7V704.8c0-38.5-31.2-90.7-69.8-90.7h-45.3L574.6 786v110.3z"
                                            fill="#55B7A8"
                                        ></path>
                                        <path
                                            d="M520.1 930.4h-16v-15.2h16v15.2z m0-31.2h-16v-16h16v16z m0-32h-16v-16h16v16z m0-32h-16v-16h16v16z m0-32h-16v-16h16v16z m0-32h-16v-16h16v16z"
                                            fill="#0A0408"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-700 leading-4 group-hover:text-indigo-400"
                                >
                                    Administrador
                                </p>
                                <p
                                    class="text-slate-500 text-sm hidden md:block"
                                >
                                    Panel de admin
                                </p>
                            </div>
                        </div>
                    </Link>
                    <button
                        @click="descargarManual"
                        download
                        class="hover:bg-slate-200 transition duration-150 ease-linear rounded-lg py-3 px-2 group"
                    >
                        <div
                            class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center"
                        >
                            <div>
                                <svg
                                    width="30"
                                    height="30"
                                    viewBox="0 0 1024 1024"
                                    class="icon"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="#000000"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M548.1 455.7h-72l-36 39.8 36 39.9h72l36-39.9z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M551.7 543.4h-79.1l-43.2-47.9 43.2-47.9h79.1l43.2 47.9-43.2 47.9z m-72-16h64.9l28.8-31.9-28.8-31.9h-64.9l-28.8 31.9 28.8 31.9z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M512.1 899.4l102.5-110.5-64.4-253.6h-76.1l-64.5 253.6z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M512.1 911.2l-111.3-120 67.1-263.8h88.5l67.1 263.8-111.4 120z m-93.7-124.6l93.7 101 93.7-101-61.9-243.4h-63.6l-61.9 243.4z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M512.1 843.5l72.4-78L539 586.6h-53.7l-45.5 178.9z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M512.1 240.3m-167.3 0a167.3 167.3 0 1 0 334.6 0 167.3 167.3 0 1 0-334.6 0Z"
                                            fill="#EBB866"
                                        ></path>
                                        <path
                                            d="M512.1 415.5c-96.6 0-175.3-78.6-175.3-175.3S415.5 65 512.1 65c96.6 0 175.3 78.6 175.3 175.3s-78.6 175.2-175.3 175.2z m0-334.5c-87.8 0-159.3 71.4-159.3 159.3s71.4 159.3 159.3 159.3c87.8 0 159.3-71.4 159.3-159.3S599.9 81 512.1 81z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M880.3 950H143.9V645.6c0-61.2 116.2-144.2 177.4-144.2L512 774.7l190.7-273.3c61.2 0 177.4 82.9 177.4 144.2V950z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M888.3 958H135.9V645.6c0-43.4 48.2-85.4 68.9-101.4 39.9-30.9 85.7-50.8 116.6-50.8h4.2l186.6 267.3 186.6-267.3h4.2c30.9 0 76.7 19.9 116.6 50.8 20.7 16 68.9 57.9 68.9 101.4V958z m-736.4-16h720.4V645.6c0-25.2-23.4-58.4-62.6-88.7-35.5-27.4-75.2-45.6-102.7-47.3L512.1 788.8 317.3 509.6c-27.5 1.7-67.2 19.9-102.7 47.3-39.2 30.3-62.6 63.5-62.6 88.7V942z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M441.2 896.3H209.6V704.8c0-38.5 31.2-90.7 69.8-90.7h45.3l116.6 172v110.2zM574.6 896.3h231.7V704.8c0-38.5-31.2-90.7-69.8-90.7h-45.3L574.6 786v110.3z"
                                            fill="#55B7A8"
                                        ></path>
                                        <path
                                            d="M520.1 930.4h-16v-15.2h16v15.2z m0-31.2h-16v-16h16v16z m0-32h-16v-16h16v16z m0-32h-16v-16h16v16z m0-32h-16v-16h16v16z m0-32h-16v-16h16v16z"
                                            fill="#0A0408"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-700 leading-4 group-hover:text-indigo-400"
                                >
                                    Manual de Uso
                                </p>
                                <p
                                    class="text-slate-500 text-sm hidden md:block"
                                >
                                    Descargar manual
                                </p>
                            </div>
                        </div>
                    </button>
                    <Link
                        :href="route('logout')"
                        method="post"
                        as="button"
                        class="hover:bg-slate-200 transition duration-150 ease-linear rounded-lg py-3 px-2 group"
                    >
                        <div
                            class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center"
                        >
                            <div>
                                <svg
                                    width="30"
                                    height="30"
                                    viewBox="0 0 1024 1024"
                                    class="icon"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="#000000"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M693.5 252.2c0 99.7-180.5 221.5-180.5 221.5S332.5 351.9 332.5 252.2 413.3 71.7 513 71.7s180.5 80.8 180.5 180.5z"
                                            fill="#55B7A8"
                                        ></path>
                                        <path
                                            d="M513 483.4l-4.5-3c-0.5-0.3-46.2-31.3-91.3-74.2-61.5-58.5-92.7-110.3-92.7-153.9 0-103.9 84.6-188.5 188.5-188.5s188.5 84.6 188.5 188.5c0 43.6-31.2 95.4-92.7 153.9-45.1 42.9-90.8 73.9-91.3 74.2l-4.5 3z m0-403.7c-95.1 0-172.5 77.4-172.5 172.5 0 48.7 47.7 104.3 87.8 142.3 36 34.2 72.3 60.7 84.7 69.4 12.4-8.8 48.9-35.3 84.9-69.6 40-38 87.6-93.6 87.6-142.2 0-95-77.4-172.4-172.5-172.4z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M693.5 770.9c0-99.7-180.5-221.5-180.5-221.5S332.5 671.2 332.5 770.9 413.3 951.4 513 951.4s180.5-80.8 180.5-180.5z"
                                            fill="#EBB866"
                                        ></path>
                                        <path
                                            d="M513 959.4c-103.9 0-188.5-84.6-188.5-188.5 0-43.6 31.2-95.4 92.7-153.9 45.1-42.9 90.8-73.9 91.3-74.2l4.5-3 4.5 3c0.5 0.3 46.2 31.3 91.3 74.2 61.5 58.5 92.7 110.3 92.7 153.9 0 103.9-84.6 188.5-188.5 188.5z m0-400.3c-12.4 8.8-48.9 35.3-84.9 69.6-40 38-87.6 93.6-87.6 142.2 0 95.1 77.4 172.5 172.5 172.5S685.5 866 685.5 770.9c0-48.6-47.6-104.2-87.6-142.2-36-34.3-72.5-60.8-84.9-69.6z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M575.5 901.7c6.3-2.9 12.5-6.2 18.3-9.9"
                                            fill="#E7B43B"
                                        ></path>
                                        <path
                                            d="M578.8 909l-6.6-14.6c6-2.7 11.8-5.9 17.3-9.4l8.6 13.5c-6.2 3.9-12.7 7.5-19.3 10.5z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M454.3 903.4c18 7.6 37.9 11.9 58.7 11.9 11.1 0 22-1.2 32.5-3.5"
                                            fill="#E7B43B"
                                        ></path>
                                        <path
                                            d="M513 923.2c-21.4 0-42.2-4.2-61.8-12.5l6.2-14.7c17.6 7.4 36.3 11.2 55.6 11.2 10.4 0 20.7-1.1 30.8-3.3l3.4 15.6c-11.2 2.5-22.7 3.7-34.2 3.7z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M548.9 522.7c-3-4.2-4.6-6.6-4.7-6.7l-3-4.5 3-4.5c0.1-0.1 1.7-2.5 4.7-6.7l13 9.3c-0.5 0.7-0.9 1.3-1.4 1.9 0.4 0.6 0.9 1.2 1.4 1.9l-13 9.3zM772.5 700h-0.2c-4.7 0-9.5-0.4-14.4-1.1l2.4-15.8c4.1 0.6 8.1 0.9 12 0.9h2.6l0.2 16h-2.6z m19.4-1l-1.6-15.9c5.1-0.5 10.2-1.3 15.2-2.2l3.1 15.7c-5.5 1-11.1 1.9-16.7 2.4z m-50.7-3.9c-5.2-1.6-10.5-3.5-15.9-5.8l6.3-14.7c4.8 2.1 9.6 3.8 14.2 5.2l-4.6 15.3z m83.6-2.5l-4.4-15.4c4.9-1.4 9.8-3.1 14.5-4.9l5.8 14.9c-5.2 2.1-10.6 3.9-15.9 5.4zM710.2 682c-4.7-2.5-9.5-5.4-14.3-8.4l8.6-13.5c4.5 2.9 9 5.5 13.3 7.9l-7.6 14z m145.8-1.5l-7.1-14.3c4.6-2.3 9.1-4.8 13.4-7.4l8.4 13.6c-4.8 2.9-9.7 5.6-14.7 8.1z m-173.7-16.2c-4.3-3.1-8.7-6.4-13.1-9.9l10-12.5c4.2 3.3 8.4 6.5 12.5 9.5l-9.4 12.9z m202.2-1.3l-9.5-12.9c4.1-3 8.1-6.3 11.9-9.7l10.6 12c-4.1 3.8-8.5 7.3-13 10.6z m-228-19.1c-4-3.5-8.1-7.1-12.2-10.9l10.9-11.7c3.9 3.6 7.9 7.2 11.8 10.5l-10.5 12.1z m253-3.1l-11.6-11c3.5-3.7 6.9-7.6 10-11.6l12.6 9.9c-3.5 4.4-7.2 8.7-11 12.7z m-276.9-19.1c-3.8-3.7-7.6-7.6-11.4-11.6l11.5-11.1c3.7 3.9 7.5 7.7 11.1 11.3l-11.2 11.4z m297.6-7.2l-13.4-8.8c2.8-4.3 5.4-8.7 7.8-13.2l14.1 7.5c-2.5 5-5.4 9.9-8.5 14.5zM610 598.3c-3.6-3.9-7.2-8-10.8-12.1l12-10.5c3.5 4 7.1 8 10.6 11.8L610 598.3zM946 585l-14.7-6.2c2-4.7 3.8-9.5 5.3-14.4l15.2 4.9c-1.7 5.3-3.6 10.6-5.8 15.7z m-357.4-11.2c-3.5-4.1-6.9-8.3-10.3-12.5l12.4-10.1c3.3 4.1 6.7 8.3 10.1 12.3l-12.2 10.3z m367.6-20.7l-15.6-3.5c1.1-5 2-10 2.7-15.1l15.9 2.1c-0.7 5.6-1.7 11.1-3 16.5z m-388-4.5c-3.3-4.3-6.6-8.6-9.8-12.9l12.8-9.6c3.1 4.2 6.4 8.5 9.6 12.7l-12.6 9.8zM960.7 520l-16-0.7c0.1-2.6 0.2-5.2 0.2-7.7s-0.1-5.1-0.2-7.6l16-0.7c0.1 2.7 0.2 5.5 0.2 8.3 0 2.8-0.1 5.6-0.2 8.4z m-389.4-23.2l-12.8-9.6c3.2-4.3 6.5-8.6 9.8-12.9l12.6 9.8c-3.3 4.3-6.5 8.5-9.6 12.7z m372.1-8.1c-0.7-5-1.6-10.1-2.7-15.1l15.6-3.5c1.2 5.4 2.2 11 2.9 16.5l-15.8 2.1z m-352.6-17l-12.4-10.1c3.4-4.2 6.9-8.4 10.3-12.5l12.2 10.3c-3.4 4-6.8 8.1-10.1 12.3z m345.8-12.9c-1.6-4.8-3.3-9.7-5.3-14.4l14.7-6.2c2.2 5.1 4.1 10.4 5.8 15.7l-15.2 4.9z m-325.3-11.5l-12-10.6c3.6-4.1 7.3-8.2 10.8-12.1l11.8 10.8c-3.5 3.9-7.1 7.9-10.6 11.9z m313.4-16.7c-2.4-4.5-5-8.9-7.8-13.2l13.4-8.7c3 4.7 5.9 9.5 8.5 14.4l-14.1 7.5z m-291.9-6.7l-11.5-11.1c3.8-4 7.7-7.9 11.4-11.6l11.2 11.4c-3.7 3.7-7.4 7.5-11.1 11.3zM908 405c-3.1-4-6.5-7.9-10-11.6l11.7-11c3.8 4.1 7.5 8.3 10.9 12.7L908 405z m-252.7-3.3L644.5 390c4.1-3.8 8.2-7.4 12.2-10.9l10.5 12.1c-4 3.4-7.9 6.9-11.9 10.5z m231.7-19c-3.8-3.4-7.8-6.6-11.9-9.7l9.5-12.8c4.5 3.3 8.8 6.9 13 10.6L887 382.7z m-207.8-1.5l-10-12.5c4.4-3.5 8.8-6.8 13.1-9.9l9.3 13c-4 2.9-8.2 6-12.4 9.4z m183.2-16.8c-4.3-2.7-8.8-5.2-13.4-7.4l7.1-14.3c5 2.5 9.9 5.2 14.7 8.1l-8.4 13.6zM704.6 363l-8.6-13.5c4.8-3.1 9.6-5.9 14.3-8.4l7.6 14.1c-4.3 2.3-8.8 4.9-13.3 7.8zM835 350.8c-4.7-1.8-9.6-3.5-14.5-4.9l4.5-15.4c5.3 1.6 10.7 3.4 15.9 5.4l-5.9 14.9z m-103.2-2.4l-6.3-14.7c5.4-2.3 10.7-4.3 15.9-5.8l4.6 15.3c-4.6 1.4-9.4 3.2-14.2 5.2z m73.8-6.2c-5-1-10.1-1.7-15.2-2.3l1.7-15.9c5.5 0.6 11.1 1.4 16.6 2.5l-3.1 15.7z m-45.1-2.3l-2.3-15.8c4.8-0.7 9.6-1.1 14.2-1.1h3l-0.3 16h-2.8c-3.8 0-7.8 0.3-11.8 0.9z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M253.6 692c99.7 0 221.5-180.5 221.5-180.5S353.3 331 253.6 331 73.1 411.9 73.1 511.5 154 692 253.6 692z"
                                            fill="#FFFFFF"
                                        ></path>
                                        <path
                                            d="M253.6 700c-103.9 0-188.5-84.6-188.5-188.5S149.7 323 253.6 323c43.6 0 95.4 31.2 153.9 92.7 42.9 45.1 73.9 90.8 74.2 91.3l3 4.5-3 4.5c-0.3 0.5-31.3 46.2-74.2 91.3-58.4 61.5-110.2 92.7-153.9 92.7z m0-361c-95.1 0-172.5 77.4-172.5 172.5S158.5 684 253.6 684c48.7 0 104.3-47.7 142.3-87.8 34.2-36 60.7-72.3 69.4-84.7-8.8-12.4-35.3-48.9-69.6-84.9-37.9-39.9-93.4-87.6-142.1-87.6z"
                                            fill="#0A0408"
                                        ></path>
                                        <path
                                            d="M551.3 534.6h-1c-12.5 0-22.6-10.1-22.6-22.6v-1c0-12.5 10.1-22.6 22.6-22.6h1c12.5 0 22.6 10.1 22.6 22.6v1c0 12.5-10.1 22.6-22.6 22.6z"
                                            fill="#DC444A"
                                        ></path>
                                        <path
                                            d="M551.3 542.6h-1c-16.8 0-30.6-13.7-30.6-30.6v-1c0-16.8 13.7-30.6 30.6-30.6h1c16.8 0 30.6 13.7 30.6 30.6v1c0 16.9-13.7 30.6-30.6 30.6z m-0.9-46.1c-8 0-14.6 6.5-14.6 14.6v1c0 8 6.5 14.6 14.6 14.6h1c8 0 14.6-6.5 14.6-14.6v-1c0-8-6.5-14.6-14.6-14.6h-1z"
                                            fill="#0A0408"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-700 leading-4 group-hover:text-indigo-400"
                                >
                                    Cerrar Sesion
                                </p>
                                <p
                                    class="text-slate-500 text-sm hidden md:block"
                                >
                                    Salir del sistema
                                </p>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>
            <div
                id="content"
                class="bg-white col-span-12 md:col-span-9 rounded-lg p-6"
            >
                <div id="24h">
                    <h1 class="font-bold py-4 uppercase text-black">
                        Estadísticas generales
                    </h1>
                    <div
                        id="stats"
                        class="grid gird-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
                    >
                        <div
                            class="bg-slate-100 to-white/5 p-6 rounded-lg shadow-xl"
                        >
                            <div class="flex flex-row space-x-4 items-center">
                                <div id="stats-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-10 h-10 text-black"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                                        />
                                    </svg>
                                </div>
                                <div>
                                    <p
                                        class="text-indigo-700 text-sm font-bold uppercase leading-4"
                                    >
                                        Mis compras totales
                                    </p>
                                    <p
                                        class="text-black font-bold text-2xl inline-flex items-center space-x-2"
                                    >
                                        <span
                                            ><slot name="visitasTotales"></slot
                                            >0</span
                                        >
                                        <span>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                class="w-6 h-6"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"
                                                />
                                            </svg>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-100 p-6 rounded-lg shadow-xl">
                            <div class="flex flex-row space-x-4 items-center">
                                <div id="stats-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-10 w-10 mr-2"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div>
                                    <p
                                        class="text-teal-600 text-sm font-bold uppercase leading-4"
                                    >
                                        Mis compras hoy
                                    </p>
                                    <p
                                        class="text-black font-bold text-2xl inline-flex items-center space-x-2"
                                    >
                                        <span
                                            ><slot name="visitasHoy"></slot
                                            >0</span
                                        >
                                        <span>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                class="w-6 h-6"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"
                                                />
                                            </svg>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-100 p-6 rounded-lg shadow-xl">
                            <div class="flex flex-row space-x-4 items-center">
                                <div id="stats-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-10 h-10 text-black"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"
                                        />
                                    </svg>
                                </div>
                                <div>
                                    <p
                                        class="text-blue-600 text-sm font-bold uppercase leading-4"
                                    >
                                        Registro de compras
                                    </p>
                                    <p
                                        class="text-black font-bold text-2xl inline-flex items-center space-x-2"
                                    >
                                        <span
                                            >0<slot
                                                name="visitasActuales"
                                            ></slot
                                        ></span>
                                        <span>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                class="w-6 h-6"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"
                                                />
                                            </svg>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="last-incomes">
                    <h1 class="font-bold mt-6 mb-6 uppercase text-black">
                        CELULARES Y LAPTOPS
                    </h1>
                    <div
                        id="stats"
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4"
                    >
                        <div
                            class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl"
                        >
                            <img
                                class="w-full"
                                src="https://d598hd2wips7r.cloudfront.net/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/6/K/6K2C8LA-1_T1679070379.png"
                                alt="Property Image"
                            />
                            <div class="px-6 py-4">
                                <div class="mb-2">
                                    <h2 class="text-xl font-bold text-gray-900">
                                        Laptop HP 15-dy5000la
                                    </h2>
                                    <div class="flex items-center">
                                        <div
                                            class="mr-2 rounded-full bg-blue-600 py-1 px-2 text-xs font-medium text-white"
                                        >
                                            En stock
                                        </div>
                                        <div
                                            class="rounded-full bg-yellow-500 py-1 px-2 text-xs font-medium text-white"
                                        >
                                            5 disponibles
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p
                                        class="text-3xl font-extrabold text-blue-800"
                                    >
                                        $1,999.00
                                    </p>
                                    <p class="text-justify">
                                        Procesador Intel® Core™ i5 de 12.ª
                                        generaciónWindows 11 Home Single
                                        Language15.6" diagonal, FHD (1920 x
                                        1080), micro-edge, anti-glare, 250 nits,
                                        45% NTSCGráficos Intel® Iris® Xᵉ8 GB
                                        de RAM DDR4-3200 MHz (2 x 4 GB)1,69 kg
                                    </p>
                                </div>
                            </div>
                            <div
                                class="px-6 py-4 flex justify-between items-center"
                            >
                                <div class="flex items-center">
                                    <img
                                        src="https://via.placeholder.com/50"
                                        alt="Agent Image"
                                        class="mr-2 rounded-full object-cover"
                                    />
                                    <div>
                                        <p
                                            class="text-sm font-medium text-gray-800"
                                        >
                                            CompuStore
                                        </p>
                                        <p class="text-xs text-gray-600">
                                            store@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <a
                                        href="#"
                                        class="mr-2 rounded-full bg-gray-300 p-1 text-gray-700 hover:text-gray-800"
                                    >
                                        <img
                                            src="https://img.icons8.com/color/24/null/ringer-volume.png"
                                        />
                                    </a>
                                    <a
                                        href="#"
                                        class="rounded-full bg-green-500 p-1 text-white hover:bg-green-600"
                                    >
                                        <img
                                            src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/null/external-WhatsApp-social-media-those-icons-lineal-color-those-icons.png"
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl"
                        >
                            <img
                                class="w-full"
                                src="https://www.lenovo.com/medias/lenovo-laptops-thinkbook-plus-17-gen-3-series.png?context=bWFzdGVyfHJvb3R8NDY0MzY0fGltYWdlL3BuZ3xoYjAvaGYwLzEzMTc3NTI1MTQxNTM0LnBuZ3wzYmU0OGMyYTI5MDUwYWQ1MTQ2ZWViNDNjNTVkY2EwZjVjNWZmNGRiNDk2NzI5NzM1YzA2NTE3NjljMTI4NGZi"
                                alt="Property Image"
                            />
                            <div class="px-6 py-4">
                                <div class="mb-2">
                                    <h2 class="text-xl font-bold text-gray-900">
                                        ThinkBook Plus 3ra Gen (17", Intel)
                                    </h2>
                                    <div class="flex items-center">
                                        <div
                                            class="mr-2 rounded-full bg-blue-600 py-1 px-2 text-xs font-medium text-white"
                                        >
                                            En stock
                                        </div>
                                        <div
                                            class="rounded-full bg-yellow-500 py-1 px-2 text-xs font-medium text-white"
                                        >
                                            10 disponibles
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p
                                        class="text-3xl font-extrabold text-blue-800"
                                    >
                                        $6,999.00
                                    </p>
                                    <p class="text-justify">
                                        Lenovo empresarial de doble pantalla
                                    </p>
                                </div>
                            </div>
                            <div
                                class="px-6 py-4 flex justify-between items-center"
                            >
                                <div class="flex items-center">
                                    <img
                                        src="https://via.placeholder.com/50"
                                        alt="Agent Image"
                                        class="mr-2 rounded-full object-cover"
                                    />
                                    <div>
                                        <p
                                            class="text-sm font-medium text-gray-800"
                                        >
                                            CompuStore
                                        </p>
                                        <p class="text-xs text-gray-600">
                                            store@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <a
                                        href="#"
                                        class="mr-2 rounded-full bg-gray-300 p-1 text-gray-700 hover:text-gray-800"
                                    >
                                        <img
                                            src="https://img.icons8.com/color/24/null/ringer-volume.png"
                                        />
                                    </a>
                                    <a
                                        href="#"
                                        class="rounded-full bg-green-500 p-1 text-white hover:bg-green-600"
                                    >
                                        <img
                                            src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/null/external-WhatsApp-social-media-those-icons-lineal-color-those-icons.png"
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl"
                        >
                            <img
                                class="w-full"
                                src="https://s7d2.scene7.com/is/image/TottusPE/43087006_1?wid=800&hei=800&qlt=70"
                                alt="Property Image"
                            />
                            <div class="px-6 py-4">
                                <div class="mb-2">
                                    <h2 class="text-xl font-bold text-gray-900">
                                        Laptop ASUS Vivobook Go 15 AMD Ryzen 5
                                    </h2>
                                    <div class="flex items-center">
                                        <div
                                            class="mr-2 rounded-full bg-blue-600 py-1 px-2 text-xs font-medium text-white"
                                        >
                                            En stock
                                        </div>
                                        <div
                                            class="rounded-full bg-yellow-500 py-1 px-2 text-xs font-medium text-white"
                                        >
                                            3 disponibles
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p
                                        class="text-3xl font-extrabold text-blue-800"
                                    >
                                        $1,749.00
                                    </p>
                                    <p class="text-justify">
                                        Es liviana, es compacta, es la ASUS
                                        Vivobook Go 15 y está diseñada para que
                                        seas productivo y te mantengas
                                        entretenido dondequiera que vayas.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="px-6 py-4 flex justify-between items-center"
                            >
                                <div class="flex items-center">
                                    <img
                                        src="https://via.placeholder.com/50"
                                        alt="Agent Image"
                                        class="mr-2 rounded-full object-cover"
                                    />
                                    <div>
                                        <p
                                            class="text-sm font-medium text-gray-800"
                                        >
                                            CompuStore
                                        </p>
                                        <p class="text-xs text-gray-600">
                                            store@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <a
                                        href="#"
                                        class="mr-2 rounded-full bg-gray-300 p-1 text-gray-700 hover:text-gray-800"
                                    >
                                        <img
                                            src="https://img.icons8.com/color/24/null/ringer-volume.png"
                                        />
                                    </a>
                                    <a
                                        href="#"
                                        class="rounded-full bg-green-500 p-1 text-white hover:bg-green-600"
                                    >
                                        <img
                                            src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/null/external-WhatsApp-social-media-those-icons-lineal-color-those-icons.png"
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl"
                        >
                            <img
                                class="w-full"
                                src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/c/n/cn0100121gn2-xiaomi-redmi-12c-3gb-64gb-verde-menta_1.png"
                                alt="Property Image"
                            />
                            <div class="px-6 py-4">
                                <div class="mb-2">
                                    <h2 class="text-xl font-bold text-gray-900">
                                        Redmi 12C Mint Green 4GB RAM 128GB ROM
                                    </h2>
                                    <div class="flex items-center">
                                        <div
                                            class="mr-2 rounded-full bg-blue-600 py-1 px-2 text-xs font-medium text-white"
                                        >
                                            En stock
                                        </div>
                                        <div
                                            class="rounded-full bg-yellow-500 py-1 px-2 text-xs font-medium text-white"
                                        >
                                            10 disponibles
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p
                                        class="text-3xl font-extrabold text-blue-800"
                                    >
                                        $499.00
                                    </p>
                                    <p class="text-justify">
                                        Más Información Marca XIAOMI Batería
                                        5000 mAh (typ) Cámara 50 MP Cámara
                                        Delantera 5 MP Conectividad Bluetooth
                                        5.1
                                    </p>
                                </div>
                            </div>
                            <div
                                class="px-6 py-4 flex justify-between items-center"
                            >
                                <div class="flex items-center">
                                    <img
                                        src="https://via.placeholder.com/50"
                                        alt="Agent Image"
                                        class="mr-2 rounded-full object-cover"
                                    />
                                    <div>
                                        <p
                                            class="text-sm font-medium text-gray-800"
                                        >
                                            CompuStore
                                        </p>
                                        <p class="text-xs text-gray-600">
                                            store@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <a
                                        href="#"
                                        class="mr-2 rounded-full bg-gray-300 p-1 text-gray-700 hover:text-gray-800"
                                    >
                                        <img
                                            src="https://img.icons8.com/color/24/null/ringer-volume.png"
                                        />
                                    </a>
                                    <a
                                        href="#"
                                        class="rounded-full bg-green-500 p-1 text-white hover:bg-green-600"
                                    >
                                        <img
                                            src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/null/external-WhatsApp-social-media-those-icons-lineal-color-those-icons.png"
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl"
                        >
                            <img
                                class="w-full"
                                src="https://images.samsung.com/is/image/samsung/p6pim/pe/2302/gallery/pe-galaxy-s23-s918-sm-s918bzgvltp-thumb-534855308?imwidth=480"
                                alt="Property Image"
                            />
                            <div class="px-6 py-4">
                                <div class="mb-2">
                                    <h2 class="text-xl font-bold text-gray-900">
                                        Galaxy S23 Ultra
                                    </h2>
                                    <div class="flex items-center">
                                        <div
                                            class="mr-2 rounded-full bg-blue-600 py-1 px-2 text-xs font-medium text-white"
                                        >
                                            En stock
                                        </div>
                                        <div
                                            class="rounded-full bg-yellow-500 py-1 px-2 text-xs font-medium text-white"
                                        >
                                            20 disponibles
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p
                                        class="text-3xl font-extrabold text-blue-800"
                                    >
                                        $5,599.00
                                    </p>
                                    <p class="text-justify">
                                        El sistema operativo ocupa parte la
                                        capacidad de la memoria total ofrecida.
                                        La memoria vigente del usuario variará
                                        según el operador y puede cambiar tras
                                        la actualización del software.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="px-6 py-4 flex justify-between items-center"
                            >
                                <div class="flex items-center">
                                    <img
                                        src="https://via.placeholder.com/50"
                                        alt="Agent Image"
                                        class="mr-2 rounded-full object-cover"
                                    />
                                    <div>
                                        <p
                                            class="text-sm font-medium text-gray-800"
                                        >
                                            CompuStore
                                        </p>
                                        <p class="text-xs text-gray-600">
                                            store@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <a
                                        href="#"
                                        class="mr-2 rounded-full bg-gray-300 p-1 text-gray-700 hover:text-gray-800"
                                    >
                                        <img
                                            src="https://img.icons8.com/color/24/null/ringer-volume.png"
                                        />
                                    </a>
                                    <a
                                        href="#"
                                        class="rounded-full bg-green-500 p-1 text-white hover:bg-green-600"
                                    >
                                        <img
                                            src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/null/external-WhatsApp-social-media-those-icons-lineal-color-those-icons.png"
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        descargarManual() {
            const url = "/descargar-manual";
            window.open(url, "_blank");
        },
    },
};
</script>
