<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto px-4">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg p-6">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>