<x-app-layout>
    <div class="max-w-xl mx-auto p-6 bg-white shadow rounded">
        <form method="POST" action="/tickets">
            @csrf

            <input name="title" placeholder="Название" class="w-full mb-3" required>
            <input name="category" placeholder="Категория" class="w-full mb-3" required>
            <input name="priority" placeholder="Приоритет" class="w-full mb-3" required>

            <textarea name="description" placeholder="Описание" class="w-full mb-3" required></textarea>

            <input type="date" name="due_date" class="w-full mb-3">

            <button class="bg-green-500 text-black px-4 py-2 rounded">
                Создать
            </button>
        </form>
    </div>
</x-app-layout>
