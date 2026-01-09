<x-app-layout>
    <div class="max-w-4xl mx-auto p-6">
        <a href="/tickets/create" class="bg-blue-500 text-white px-4 py-2 rounded">
            Создать заявку
        </a>

        <div class="mt-6 space-y-4">
            @forelse ($tickets as $ticket)
                <div class="p-4 bg-white shadow rounded">
                    <h2 class="font-bold">{{ $ticket->title }}</h2>
                    <p>Статус: {{ $ticket->status }}</p>
                    <p>Категория: {{ $ticket->category }}</p>
                    <p>Приоритет: {{ $ticket->priority }}</p>
                </div>
            @empty
                <p>Заявок пока нет</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
