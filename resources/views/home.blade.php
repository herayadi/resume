<x-layout :sosmeds="$sosmeds">
    <main class="main">
        <x-section.hero :user="$user" :sosmeds="$sosmeds" />

        <x-section.about :user="$user" :sosmeds="$sosmeds" />

        {{-- <x-section.stat /> --}}

        <x-section.resume :user="$user" :sosmeds="$sosmeds" />

        <x-section.skills />

        {{-- <x-section.portofolio /> --}}

        {{-- <x-section.services /> --}}

        <x-section.contact :user="$user" :sosmeds="$sosmeds" />
    </main>
</x-layout>
