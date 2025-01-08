<template>
    <AppLayout>
        <div>
            <!-- Hero Section -->
            <div class="relative bg-orange-900">
                <div class="absolute inset-0 bg-gradient-to-r from-orange-900 to-orange-800"></div>
                <div class="relative z-10 max-w-7xl mx-auto px-4 py-16">
                    <h1 class="text-5xl font-bold text-white">{{ $t('messages.servicestitle') }}</h1>
                </div>
            </div>

            <!-- Services Content -->
            <div class="max-w-7xl mx-auto px-4 py-16">
                <!-- Recruiting Section -->
                <div class="flex flex-col md:flex-row items-center gap-12 mb-24">
                    <div class="md:w-1/2">
                        <h2 class="text-3xl font-bold mb-4">{{ $t('messages.servicesrecruitment') }}</h2>
                        <div class="w-16 h-1 bg-orange-900 mb-6"></div>
                        <p class="text-gray-700 leading-relaxed">
                            {{ $t('messages.recruitingtext') }}
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img
                            src="/images/recruiting.jpg"
                            :alt="$t('messages.servicesrecruitment')"
                            class="rounded-lg shadow-lg w-full h-[400px] object-cover"
                        >
                    </div>
                </div>

                <!-- Employee Leasing Section -->
                <div class="flex flex-col-reverse md:flex-row items-center gap-12 mb-24">
                    <div class="md:w-1/2">
                        <img
                            src="/images/employee-leasing.jpg"
                            :alt="$t('messages.lisingtitle')"
                            class="rounded-lg shadow-lg w-full h-[400px] object-cover"
                        >
                    </div>
                    <div class="md:w-1/2">
                        <h2 class="text-3xl font-bold mb-4">{{ $t('messages.employee_leasing') }}</h2>
                        <div class="w-16 h-1 bg-orange-900 mb-6"></div>
                        <p class="text-gray-700 leading-relaxed">{{ $t('messages.employee_leasing_text') }}</p>
                    </div>
                </div>

                <!-- Staffing Section -->
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <h2 class="text-3xl font-bold mb-4">{{ $t('messages.staffing') }}</h2>
                        <div class="w-16 h-1 bg-orange-900 mb-6"></div>
                        <p class="text-gray-700 leading-relaxed">{{ $t('messages.staffing_text') }}</p>
                    </div>
                    <div class="md:w-1/2">
                        <img
                            src="/images/staffing.jpg"
                            :alt="$t('messages.staffing')"
                            class="rounded-lg shadow-lg w-full h-[400px] object-cover"
                        >
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="bg-gradient-to-br from-gray-900 to-orange-900 text-white py-20">
                <div class="max-w-7xl mx-auto px-4 text-center">
                    <h2 class="text-4xl font-bold mb-4">{{ $t('messages.ask') }}</h2>
                    <p class="mb-8 text-lg">{{ $t('messages.asktext') }}</p>
                    <Link
                        :href="route('contact')"
                        class="inline-block bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-lg transition duration-300"
                    >
                        {{ $t('messages.contacts2') }}
                    </Link>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import AppLayout from "@/Pages/Public/AppLayout.vue";

defineProps({
    servicestitle: String,
    servicesrecruitment: String,
    recruitingtext: String,
    lisingtitle: String,
    employee_leasing: String,
    employee_leasing_text: String,
    staffing: String,
    staffing_text: String,
    ask: String,
    asktext: String,
    contacts2: String
})
</script>
