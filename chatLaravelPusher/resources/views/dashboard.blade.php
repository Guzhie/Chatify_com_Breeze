<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <div>
            <a href="{{ url('chatify') }}" class="chatify-button" title="Abrir Chat">
                💬 Chat
            </a>
        </div>
        <style>
            .chatify-button {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background-color: #4e73df;
                color: white;
                padding: 12px 20px;
                border-radius: 50px;
                font-weight: bold;
                text-decoration: none;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                transition: background-color 0.3s ease;
                z-index: 9999;
            }

            .chatify-button:hover {
                background-color: #2e59d9;
            }
        </style>
    </div>
</x-app-layout>