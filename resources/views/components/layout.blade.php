<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="IPSR Security - ระบบรักษาความปลอดภัยและเฝ้าระวังอาคารอัจฉริยะแบบครบวงจร ด้วยเทคโนโลยี AI CCTV และ Smart Access Control">
    <title>{{ $title ?? 'IPSR Security - ระบบรักษาความปลอดภัยอาคารอัจฉริยะ' }}</title>

    <!-- Google Fonts: Prompt (Thai & Latin) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-blue-600 selection:text-white min-h-screen flex flex-col justify-between overflow-x-hidden">

    <!-- Sticky Navigation Bar -->
    <x-navbar />

    <!-- Main Content Slot -->
    <main class="grow pt-20">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- Contact & Consultation Modal -->
    <x-modal-contact />

</body>

</html>
