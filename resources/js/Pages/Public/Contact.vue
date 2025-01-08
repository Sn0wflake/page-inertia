<template>
    <AppLayout>
        <div>
            <!-- Header with background -->
            <div class="relative bg-orange-900">
                <div class="absolute inset-0 bg-gradient-to-r from-orange-900 to-orange-800"></div>
                <div class="relative z-10 max-w-7xl mx-auto px-4 py-16">
                    <h1 class="text-5xl font-bold text-white">{{ $t('messages.contact_us') }}</h1>
                </div>
            </div>

            <div class="container mx-auto px-4 py-16">
                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Contact Information -->
                    <div>
                        <h2 class="text-2xl font-bold mb-8">{{ $t('messages.contact_us') }}</h2>

                        <!-- Phone Numbers -->
                        <div class="flex items-center space-x-2 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <p>(+371) 297 745 71</p>
                                <p>(+49) 1512 0273 586</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center space-x-2 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <p>info@personallosungen.eu</p>
                        </div>

                        <!-- Address -->
                        <div class="flex items-center space-x-2 mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p>Riga, E.Birznieka Upīša 20A, LV-1050</p>
                        </div>

                        <!-- Social Media -->
                        <div class="flex space-x-4 mb-8">
                            <a href="https://t.me/personallosungen" target="_blank" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto my-auto" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.3l15.97-6.16c.73-.33 1.43.18 1.15 1.3l-2.72 12.81c-.19.91-.74 1.13-1.5.71L12.6 16.3l-1.99 1.93c-.23.23-.42.42-.83.42z"/>
                                </svg>
                            </a>

                            <a href="https://www.facebook.com/groups/1129586042147626" target="_blank" class="bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto my-auto" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                </svg>
                            </a>
                        </div>

                        <!-- Working Hours -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold mb-4">{{ $t('messages.working_hours2') }}</h3>
                            <div class="flex items-center space-x-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p>{{ $t('messages.working_time') }}</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p>{{ $t('messages.weekend_working_time') }}</p>
                            </div>
                        </div>

                        <!-- Requisites -->
                        <div>
                            <h3 class="text-xl font-bold mb-4">{{ $t('messages.requisites') }}</h3>
                            <div class="space-y-2">
                                <p>SIA "Konvir Ehitus"</p>
                                <p>Reg.nr.: 42103111904</p>
                                <p>PVN Reg.Nr.LV42103111904</p>
                                <p>Citadele bank</p>
                                <p>LV96ZZZ42103111904</p>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-2xl font-bold mb-4">Location</h2>
                        <div class="w-full h-96 rounded-lg overflow-hidden">
                            <iframe
                                class="w-full h-full border-0"
                                frameborder="0"
                                scrolling="no"
                                marginheight="0"
                                marginwidth="0"
                                src="https://www.openstreetmap.org/export/embed.html?bbox=24.1095%2C56.9292%2C24.1495%2C56.9692&amp;layer=mapnik&amp;marker=56.949215859%2C24.129550139"
                                style="border: 1px solid #ddd;">
                            </iframe>
                            <div class="mt-2 text-sm text-gray-600">
                                <a
                                    href="https://www.openstreetmap.org/?mlat=56.949215859&amp;mlon=24.129550139#map=15/56.949215859/24.129550139"
                                    target="_blank"
                                    class="text-blue-600 hover:text-blue-800"
                                >
                                    View Larger Map
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="container mx-auto px-4 py-8">
                        <div class="mb-7">
                            <h1 class="text-2xl font-bold mb-4">{{ $t('messages.licence') }}</h1>
                            <p class="text-xl mb-2">No {{ licenseInfo.number }}</p>
                            <p class="text-xl mb-6">Issued {{ licenseInfo.issueDate }}</p>

                            <Link
                                :href="route('license.pdf', { id: 1 })"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700 transition-colors"
                            >
                                <span>{{ $t('messages.licence_pdf') }}</span>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import AppLayout from "@/Pages/Public/AppLayout.vue";

defineProps({
    licenseInfo: {
        type: Object,
        default: () => ({
            number: '',
            issueDate: ''
        })
    }
})
</script>
