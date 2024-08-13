<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { FwbModal, FwbButton } from 'flowbite-vue';
import { ref } from 'vue';

const taskForm = useForm({
    title: '',
    status: '',
    priority: '',
    due_date: '',
})

const popNewTask = () => {
    showModal()
}

const submit = () => {
    taskForm.post(route('tasks.store'), {
        onFinish: () => {
            taskForm.reset('title', 'status', 'priority', 'due_date')
        },
        onError: (a, b) => {
            console.log(a, b)
            console.log(taskForm.errors)
        }
    })
}

const isShowModal = ref(false)

function closeModal() {
    isShowModal.value = false
}
function showModal() {
    isShowModal.value = true
}

</script>

<template>

    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="bg-white shadow">
            <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8">
                <button @click="popNewTask" class="inline-block bg-green-500 text-white px-4 py-2">新增任務</button>
            </div>
        </div>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="w-full bg-gray-100 border-b">
                    <th class="py-2 px-4 border-r">任務標題</th>
                    <th class="py-2 px-4 border-r">狀態</th>
                    <th class="py-2 px-4 border-r">優先級</th>
                    <th class="py-2 px-4 border-r">截止日期</th>
                    <th class="py-2 px-4">操作</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="task in $page.props.tasks" :key="task.id" class="border-b">
                    <td class="py-2 px-4 border-r">{{ task.title }}</td>
                    <td class="py-2 px-4 border-r">{{ task.status }}</td>
                    <td class="py-2 px-4 border-r">{{ task.priority }}</td>
                    <td class="py-2 px-4 border-r">{{ task.due_date }}</td>
                    <td class="py-2 px-4">
                        <button class="bg-blue-500 text-white px-3 py-1 mr-2">編輯</button>
                        <button class="bg-red-500 text-white px-3 py-1">刪除</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </AuthenticatedLayout>
    <fwb-modal position="top-start" v-if="isShowModal" @close="closeModal">
        <template #header>
            <h2 class="text-lg font-semibold">新增任務</h2>
        </template>
        <template #body>
            <div class="space-y-4">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">任務標題</label>
                    <input v-model="taskForm.title" type="text" id="title" name="title"
                        class="mt-1 block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    <div v-if="taskForm.errors.title" class="text-red-500 text-sm mt-1">{{ taskForm.errors.title }}</div>
                </div>
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">狀態</label>
                    <input v-model="taskForm.status" type="text" id="status" name="status"
                        class="mt-1 block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    <div v-if="taskForm.errors.status" class="text-red-500 text-sm mt-1">{{ taskForm.errors.status }}</div>
                </div>
                <div>
                    <label for="priority" class="block text-sm font-medium text-gray-700">優先級</label>
                    <input v-model="taskForm.priority" type="text" id="priority" name="priority"
                        class="mt-1 block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    <div v-if="taskForm.errors.priority" class="text-red-500 text-sm mt-1">{{ taskForm.errors.priority }}</div>
                </div>
                <div>
                    <label for="due_date" class="block text-sm font-medium text-gray-700">截止日期</label>
                    <input v-model="taskForm.due_date" type="date" id="due_date" name="due_date"
                        class="mt-1 block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    <div v-if="taskForm.errors.due_date" class="text-red-500 text-sm mt-1">{{ taskForm.errors.due_date }}</div>
                </div>
            </div>
        </template>
        <template #footer>
            <div class="flex justify-between">
                <fwb-button @click="closeModal" color="alternative">
                    取消
                </fwb-button>
                <fwb-button @click="submit" color="green">
                    新增
                </fwb-button>
            </div>
        </template>
    </fwb-modal>
</template>
