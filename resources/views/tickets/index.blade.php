<x-app-layout>
    <div class="max-w-5xl mx-auto px-6 pt-16 pb-12" style="margin-top: 20px; margin-bottom: 40px;">
        <div class="flex items-center justify-between mb-10">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Мои заявки</h1>
                <p class="text-sm text-gray-500 mt-1" style="margin-bottom: 10px;" >Все ваши обращения в ServiceDesk</p>
            </div>

            <a href="/tickets/create" class="text-black px-5 py-2 rounded-lg shadow" style="bg-color:white">+ Создать заявку</a>
        </div>

        <div class="space-y-5">
            @forelse($tickets as $ticket)
                <div class="bg-white rounded-xl shadow border p-6 hover:shadow-md transition">

                    <div class="flex items-start justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">{{ $ticket->title }}</h3>

                            <p class="text-sm text-gray-500 mt-1">Категория: <span class="text-gray-700">{{ $ticket->category }}</span>· Приоритет: <span class="text-gray-700">{{ $ticket->priority }}</span></p>
                        </div>

                        <span class="text-sm px-3 py-1 rounded-full font-medium
                            @if($ticket->status === 'new')
                                bg-blue-100 text-blue-700
                            @elseif($ticket->status === 'done')
                                bg-green-100 text-green-700
                            @elseif($ticket->status === 'in_progress')
                                bg-yellow-100 text-yellow-700
                            @else
                                bg-gray-100 text-gray-700
                            @endif">
                            {{ $ticket->status }}
                        </span>
                    </div>

                </div>
            @empty
                <div class="bg-white rounded-xl shadow border p-10 text-center">
                    <p class="text-gray-500">У вас пока нет заявок</p>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>