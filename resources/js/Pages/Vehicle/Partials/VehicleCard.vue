<script setup>
const props = defineProps({
    vehicle: Object
});
</script>

<template>
    <div class="w-full border-2 border-grey-500">
        <header class="space-x-8 m-2">
            <h2 class="font-bold text-gray-900 font-mono">
                {{ vehicle.year }} {{ vehicle.make }} {{  vehicle.model }} {{  vehicle.trim }}
            </h2>
            <ul class="inline-flex items-center">
                <li class="m-0 p-0">Color: {{  vehicle.color }}</li>
                <li>Engine: {{  vehicle.engine }}</li>
                <li>Horsepower: {{  vehicle.horsepower }}</li>
                <li>Torque: {{  vehicle.torque }}</li>
                <li>Transmission: {{  vehicle.transmission }}</li>
                <li>Speeds: {{  vehicle.speeds }}</li>
                <li>Transmission Type: {{  vehicle.is_manual? 'Manual':'Automatic' }}</li>
                <li>Rear End: {{  vehicle.rear_end }}</li>
                <li>Brake System: {{  vehicle.breaks }}</li>
                <li>Front Suspension: {{  vehicle.front_suspension }}</li>
                <li>Rear Suspension: {{  vehicle.rear_suspension }}</li>
            </ul>
        </header>
        <article class="">
            <section class="m-2">
                <p>{{  vehicle.description }}</p>
            </section>
            <section class="m-2">
                <p>{{  vehicle.project_expectations }}</p>
            </section>
            <section class="m-2">
                <p>{{  vehicle.details }}</p>
            </section>
        </article>
    </div>
</template>
