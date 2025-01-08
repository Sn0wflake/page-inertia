<template>
    <AppLayout>
        <div>
            <!-- Hero Section -->
            <div class="relative h-screen">
                <div class="absolute inset-0">
                    <img
                        :src="getAssetUrl('images/hero-bg.jpg')"
                        class="w-full h-full object-cover"
                        alt="Professional woman working"
                    />
                </div>
                <div class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
                <div class="relative z-10 flex items-center justify-center h-full text-center">
                    <h1 class="text-white text-5xl font-bold max-w-4xl">{{ $t('messages.title') }}</h1>
                </div>
            </div>

            <!-- LTRK Section -->
            <div class="bg-white py-16">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="flex justify-between items-start">
                        <div class="max-w-2xl">
                            <p class="text-lg mb-4">
                                {{ $t('messages.member') }}
                            </p>
                            <p class="text-lg">
                                {{ $t('messages.membermeaning') }}
                            </p>
                        </div>
                        <div>
                            <img :src="getAssetUrl('images/konvirehitus-circle-logo.png')" alt="LTRK Logo" class="w-48" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div class="py-16">
                <h2 class="text-4xl font-bold text-center mb-12">{{ $t('messages.ourservices') }}</h2>
                <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="service in services" :key="service.title" class="bg-white rounded-lg p-6 shadow flex flex-col min-h-[250px]">
                        <div class="text-red-600 mb-4"></div>
                        <h3 class="text-xl font-bold mb-2">{{ $t(service.title) }}</h3>
                        <p class="text-gray-600 mb-4 flex-grow">{{ $t(service.description) }}</p>
                        <div>
                            <Link :href="routes.services" class="text-red-600">{{ $t('messages.read') }}</Link>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="bg-gray-900 text-white py-20 text-center">
                <h2 class="text-4xl font-bold mb-4">{{ $t('messages.ask') }}</h2>
                <p class="mb-8">{{ $t('messages.asktext') }}</p>
                <Link :href="routes.contact" class="bg-red-600 text-white px-8 py-3 rounded hover:bg-red-700 transition-colors">
                    {{ $t('messages.contacts2') }}
                </Link>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import AppLayout from "@/Pages/Public/AppLayout.vue";

const services = [
    {
        title: 'messages.recruiting',
        description: 'messages.recruitingservices'
    },
    {
        title: 'messages.leasing',
        description: 'messages.leasing_text'
    },
    {
        title: 'messages.advantages',
        description: 'messages.advatages_text'
    }
]

const routes = {
    services: route('services'),
    contact: route('contact')
}

const getAssetUrl = (path) => `${path}`
</script>
