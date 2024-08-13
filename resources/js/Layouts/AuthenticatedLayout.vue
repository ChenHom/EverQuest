<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100 font-sans">
            <div class="navbar flex justify-between bg-blue-500 text-white p-4">
                <span>Logo</span>
                <div>
                    <a href="#" class="px-4">任務管理</a>
                    <a href="#" class="px-4">設定</a>
                </div>
            </div>

            <div class="px-6 py-3">
                <!-- 主內容區域 -->
                <main>
                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>
