<template>
    <div class="bg-white">
        <nav class="bg-gray-900">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <img :src="'/images/konvirehitus-logo.png'" alt="Convir Ehitus Logo" class="h-12" />
                    </div>

                    <!-- Main Navigation -->
                    <div class="hidden md:flex space-x-8">
                        <a
                            v-for="item in navigation"
                            :key="item.route"
                            :href="item.route"
                            class="text-white hover:text-gray-200 px-3 py-2 text-lg font-medium"
                        >
                            {{ item.label }}
                        </a>
                    </div>

                    <!-- Language Switcher -->
                    <div class="flex items-center relative">
                        <div class="flex items-center">
                            <select
                                v-model="languageSwitch.language"
                                @change="submitForm"
                                class="bg-transparent text-white border border-white rounded px-2 py-1 text-sm focus:outline-none appearance-none pr-8 cursor-pointer"
                            >
                                <option value="en">EN</option>
                                <option value="ru">RU</option>
                                <option value="lv">LV</option>
                                <option value="de">DE</option>
                            </select>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button
                            class="mobile-menu-button p-2 rounded-md text-white hover:text-gray-200 focus:outline-none"
                            @click="toggleMobileMenu"
                        >
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="md:hidden" :class="{ hidden: !isMobileMenuOpen }">
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <a
                            v-for="item in navigation"
                            :key="item.route"
                            :href="item.route"
                            class="text-white hover:text-gray-200 block px-3 py-2 text-base font-medium"
                            @click="closeMobileMenu"
                        >
                            {{ item.label }}
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            <slot></slot>
        </main>

        <footer class="bg-gray-900 text-white py-8">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid md:grid-cols-4 gap-8">
                    <!-- Logo -->
                    <div>
                        <img :src="'/images/konvirehitus-circle-logo.png'" alt="Convir Ehitus Logo" class="h-24 mb-8" />
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h3 class="font-bold mb-4">Contacts</h3>
                        <p>(+371) 297 745 71</p>
                        <p>(+49) 1512 0273 586</p>
                        <p>info@personallosungen.eu</p>
                        <p>Rīga, E.Birznieka Upīša 20A, LV-1050</p>
                    </div>

                    <!-- Company Info -->
                    <div>
                        <h3 class="font-bold mb-4">SIA "Konvir Ehitus"</h3>
                        <p>Reģ.nr.: 42103111904</p>
                        <p>PVN Reģ.Nr:LV42103111904</p>
                        <p>Mārupes nov., Mārupe, Pētera iela 18, LV-2167</p>
                        <p>Citadele bank</p>
                        <p>LV96ZZZ42103111904</p>
                    </div>

                    <!-- Working Hours -->
                    <div>
                        <h3 class="font-bold mb-4">Working Hours</h3>
                        <p>Mon - Fri: 9:00 - 18:00</p>
                        <p>Sat - Sun: Closed</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import {useForm} from "@inertiajs/vue3";

export default {
    name: 'AppLayout',
    data() {
        return {
            isMobileMenuOpen: false,
            navigation: [
                { route: '/', label: 'Home' },
                { route: '/services', label: 'Services' },
                { route: '/about', label: 'About Us' },
                { route: '/contact', label: 'Contact' }
            ],
            languageSwitch: useForm({
                language: this.$page.props.locale
            })
        }
    },
    methods: {
        toggleMobileMenu() {
            this.isMobileMenuOpen = !this.isMobileMenuOpen
        },
        closeMobileMenu() {
            this.isMobileMenuOpen = false
        },
        submitForm() {
            this.$i18n.locale = this.languageSwitch.language; // Update the current locale
            localStorage.setItem('locale', this.languageSwitch.language);

            this.languageSwitch.post(route('language.switch'))
        }
    }
}
</script>
