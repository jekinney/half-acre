<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import VehicleCard from './Partials/VehicleCard.vue';
defineProps({ vehicles: Object });
</script>

<template>
    <AppLayout title="Vehicles">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Vehicles
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div v-for="vehicle in vehicles">
                        <VehicleCard :vehicle="vehicle" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
