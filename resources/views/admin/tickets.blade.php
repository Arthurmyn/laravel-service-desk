<x-app-layout>
    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-xl font-bold mb-4">Все заявки</h1>

        @forelse ($tickets as $ticket)
            <div class="p-4 mb-4 bg-white shadow rounded">
                <h2 class="font-bold"> <strong>{{ $ticket->title }}</strong></h2>
                <p>Категория: <strong>{{ $ticket->category }}</strong></p>
                <p>Приоритет: <strong> {{ $ticket->priority }} </strong></p>
                <p class="text-gray-700">Описание: <strong>{{ $ticket->description }}</strong></p>
                <form method="POST" action="/admin/tickets/{{ $ticket->id }}" class="mt-3">
                    @csrf
                    @method('PATCH')

                    <select name="status" class="border rounded px-10 py-1">
                        <option value="new">new</option>
                        <option value="in_progress">В прогрессе</option>
                        <option value="done">Выполнено</option>
                        <option value="rejected">Отклонено</option>
                    </select>

                    <button class="ml-2 bg-blue-500 text-white px-3 py-1 rounded">Сохранить</button>
                </form>
            </div>
        @empty
            <p>Заявок нет</p>
        @endforelse
    </div>
</x-app-layout>
