<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-900">Панель управления</h2>

            <a href="/tickets/create"
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">+ Создать заявку</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white shadow rounded-xl p-6">
                <h3 class="text-lg font-semibold text-gray-800">Добро пожаловать!</h3>
                <p class="text-gray-500 mt-1">Вы успешно вошли в систему. Здесь отображаются ваши заявки.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="bg-white shadow rounded-xl p-6">
                    <p class="text-sm text-gray-500">Всего заявок</p>
                    <p class="text-2xl font-bold text-gray-900">—</p>
                </div>

                <div class="bg-white shadow rounded-xl p-6">
                    <p class="text-sm text-gray-500">В обработке</p>
                    <p class="text-2xl font-bold text-yellow-500">—</p>
                </div>

                <div class="bg-white shadow rounded-xl p-6">
                    <p class="text-sm text-gray-500">Выполнено</p>
                    <p class="text-2xl font-bold text-green-600">—</p>
                </div>
            </div>
            <div class="bg-white shadow rounded-xl p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Последние заявки</h3>

                <p class="text-gray-500">У вас пока нет заявок. Создайте первую заявку, чтобы начать работу.</p>
            </div>
        </div>
    </div>
</x-app-layout>