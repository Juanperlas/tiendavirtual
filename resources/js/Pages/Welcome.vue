<script setup>
import Stadistics from "@/Components/Stadistics.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Welcome" />

    <div>
        <div class="grid grid-rows-2 bg-blue-300">
            <div class="flex row-span-1 justify-around items-center">
                <div class="">
                    <img
                        src="https://freepngimg.com/thumb/race/80831-emoticon-computer-personal-smiley-pc-race-master.png"
                        width="160"
                    />
                </div>
                <div class="flex text-center font-bold text-2xl">
                    <h1>Venta de Componentes y Equipos de Informática</h1>
                </div>
                <!-- Botones "Login" y "Register" al máximo de la derecha -->
                <div class="flex items-center space-x-4 mt-0">
                    <Link
                        v-if="$page.props.auth.user && canLogin"
                        :href="route('dashboard')"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        >Dashboard</Link
                    >

                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="font-semibold bg-white p-3 rounded-xl text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            >Iniciar Sesión</Link
                        >

                        <Link
                            v-if="canRegister"
                            :href="route('register')"
                            class="font-semibold bg-black 0 p-3 rounded-xl text-white hover:text-gray-200 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            >Registrarse</Link
                        >
                    </template>
                </div>
            </div>
            <div class="flex items-center justify-around">
                <!-- Botones en el centro -->
                <button class="bg-white text-black px-12 py-2 rounded-full">
                    Inicio
                </button>
                <button class="bg-white text-black px-12 py-2 rounded-full">
                    Equipos y componentes
                </button>
                <button class="bg-white text-black px-12 py-2 rounded-full">
                    Ver carrito de compras
                </button>
                <button class="bg-white text-black px-12 py-2 rounded-full">
                    Soporte
                </button>
            </div>
        </div>
        <Stadistics> </Stadistics>
    </div>
</template>
