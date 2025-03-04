<x-layout>
    <x-slot:heading>
        Job '{{ $job['title'] }}'
    </x-slot:heading>

    <h1>Pay of {{ $job['title'] }} is {{  $job['salary'] }}</h1>
</x-layout>