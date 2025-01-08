<template>
    <AppLayout>
        <div>
            <!-- Hero Section -->
            <div class="relative h-54 bg-orange-900">
                <div class="absolute inset-0 bg-gradient-to-r from-orange-900 to-orange-800"></div>
                <div class="relative z-10 max-w-7xl mx-auto px-4 py-16">
                    <h1 class="text-5xl font-bold text-white">{{ $t('messages.about_us') }}</h1>
                </div>
            </div>

            <!-- Main Content -->
            <div class="max-w-7xl mx-auto px-4 py-16">
                <!-- Mission Section -->
                <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
                    <div>
                        <h2 class="text-3xl font-bold mb-4">{{ $t('messages.at') }}</h2>
                        <div class="w-16 h-1 bg-orange-900 mb-6"></div>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            {{ $t('messages.at_text') }}
                        </p>
                    </div>
                    <div>
                        <img
                            src="/images/team-meeting.jpg"
                            alt="Team Meeting"
                            class="rounded-lg shadow-lg w-full h-[400px] object-cover"
                        >
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="bg-gradient-to-br from-gray-900 to-orange-900 text-white py-20">
                <div class="max-w-7xl mx-auto px-4 text-center">
                    <h2 class="text-4xl font-bold mb-4">{{ $t('messages.ask') }}</h2>
                    <p class="mb-8">{{ $t('messages.asktext') }}</p>
                    <Link
                        :href="route('contact')"
                        class="inline-block bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-lg transition duration-300"
                    >
                        CONTACTS
                    </Link>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import AppLayout from "@/Pages/Public/AppLayout.vue";
</script>
