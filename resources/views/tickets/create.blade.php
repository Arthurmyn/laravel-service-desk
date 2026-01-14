<x-app-layout>
    <div class="max-w-xl mx-auto px-6" style="margin-top: 40px; margin-bottom: 40px;">

        <div class="mb-8">
            <a href="/dashboard" class="text-sm text-gray-500 hover:text-gray-700"> <- Назад</a>

            <h1 class="text-2xl font-bold text-gray-900 mt-3">Создание заявки</h1>
        </div>

        <form method="POST" action="/tickets" class="bg-white rounded-xl shadow border p-6 space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Тема *</label>
                <input name="title" value="{{ old('title') }}" class="w-full rounded-lg border-gray-300">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Категория *</label>
                <select name="category" class="w-full rounded-lg border-gray-300">
                    <option value="">Выбрать</option>
                    <option value="technical">Техническая</option>
                    <option value="account">Аккаунт</option>
                    <option value="billing">Оплата</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Приоритет *</label>
                <select name="priority" class="w-full rounded-lg border-gray-300">
                    <option value="">Выбрать</option>
                    <option value="low">Низкий</option>
                    <option value="medium">Средний</option>
                    <option value="high">Высокий</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Описание *</label>
                <textarea name="description" rows="4" class="w-full rounded-lg border-gray-300 resize-none"></textarea>
            </div>

            <div class="border-t pt-6">
                <div class="flex items-center justify-end gap-6">
                    <a href="/dashboard" сlass="text-gray-500 hover:underline leading-none">Отмена</a>

                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-black px-6 py-2 rounded-lg leading-none">Создать</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>