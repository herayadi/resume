<x-mail::message>
    {{-- # Introduction --}}
    # New Message from Portfolio Website

    Name: {{ $data['name'] }}
    Email: {{ $data['email'] }}
    Subject: {{ $data['subject'] }}

    **Message:**
    {{ $data['message'] }}

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
