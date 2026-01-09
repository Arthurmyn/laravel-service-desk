<x-app-layout>
    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-xl font-bold mb-4">Все заявки</h1>

        @forelse ($tickets as $ticket)
            <div class="p-4 mb-4 bg-white shadow rounded">
                <h2 class="font-bold">{{ $ticket->title }}</h2>

                <p>Автор: {{ $ticket->user->name ?? '—' }}</p>
                <p>Категория: {{ $ticket->category }}</p>
                <p>Приоритет: {{ $ticket->priority }}</p>
                <p>Текущий статус: <strong>{{ $ticket->status }}</strong></p>

                <form method="POST" action="/admin/tickets/{{ $ticket->id }}" class="mt-3">
                    @csrf
                    @method('PATCH')

                    <select name="status" class="border rounded px-2 py-1">
                        <option value="new">new</option>
                        <option value="in_progress">in_progress</option>
                        <option value="done">done</option>
                        <option value="rejected">rejected</option>
                    </select>

                    <button class="ml-2 bg-blue-500 text-white px-3 py-1 rounded">
                        Сохранить
                    </button>
                </form>
            </div>
        @empty
            <p>Заявок нет</p>
        @endforelse
    </div>
</x-app-layout>
