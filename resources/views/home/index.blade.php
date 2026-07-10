<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT. Fokus Jasa Mitra — Accelerating Growth</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&family=Bebas+Neue&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --red: #D0021B;
            --red2: #E8192C;
            --green: #1A7A3C;
            --green2: #22A050;
            --blue: #2D4B9E;
            --blue2: #3A5FBF;
            --dark: #1A1D2E;
            --gray: #F5F6FA;
            --gray2: #EEF0F7;
            --text: #1A1D2E;
            --muted: #6B7280;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #fff;
            color: var(--text);
            overflow-x: hidden;
        }

        .font-display {
            font-family: 'Bebas Neue', sans-serif;
        }

        /* ── SCROLLBAR ── */
        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f0f0f0;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--red);
            border-radius: 3px;
        }

        /* ── NAVBAR ── */
        #navbar {
            transition: all 0.35s ease;
        }

        #navbar.scrolled {
            background: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(20px);
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.07);
        }

        /* ── HERO ── */
        .hero-section {
            background: linear-gradient(135deg, #F8F9FF 0%, #EEF2FF 50%, #F0FFF4 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -120px;
            right: -120px;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(45, 75, 158, 0.07) 0%, transparent 70%);
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(26, 122, 60, 0.06) 0%, transparent 70%);
        }

        /* ── HERO SHAPES ── */
        .shape-red {
            position: absolute;
            top: 0;
            right: 0;
            width: 380px;
            height: 380px;
            background: linear-gradient(135deg, rgba(208, 2, 27, 0.08) 0%, rgba(208, 2, 27, 0.02) 100%);
            clip-path: polygon(100% 0, 100% 100%, 0 0);
        }

        .shape-blue {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 240px;
            height: 240px;
            background: linear-gradient(135deg, rgba(45, 75, 158, 0.07) 0%, transparent 100%);
            clip-path: polygon(0 100%, 100% 100%, 0 0);
        }

        /* ── GRID PATTERN ── */
        .dot-pattern {
            background-image: radial-gradient(circle, rgba(45, 75, 158, 0.15) 1px, transparent 1px);
            background-size: 28px 28px;
        }

        /* ── STAT CARDS ── */
        .stat-card {
            border: 1px solid rgba(45, 75, 158, 0.1);
            background: #fff;
            box-shadow: 0 2px 20px rgba(45, 75, 158, 0.06);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(45, 75, 158, 0.12);
        }

        /* ── SECTION BADGE ── */
        .badge-red {
            background: rgba(208, 2, 27, 0.08);
            color: var(--red);
        }

        .badge-blue {
            background: rgba(45, 75, 158, 0.08);
            color: var(--blue);
        }

        .badge-green {
            background: rgba(26, 122, 60, 0.08);
            color: var(--green);
        }

        /* ── SERVICE CARDS ── */
        .service-card {
            background: #fff;
            border: 1.5px solid rgba(0, 0, 0, 0.06);
            transition: all 0.35s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--red), var(--blue));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .service-card:hover::after {
            transform: scaleX(1);
        }

        .service-card:hover {
            border-color: rgba(45, 75, 158, 0.2);
            box-shadow: 0 16px 50px rgba(45, 75, 158, 0.1);
            transform: translateY(-6px);
        }

        /* ── BISNIS CARD ── */
        .bisnis-card {
            background: #fff;
            border: 1.5px solid rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .bisnis-card:hover {
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        /* ── MARQUEE ── */
        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .marquee-inner {
            display: flex;
            width: max-content;
            animation: marquee 24s linear infinite;
        }

        /* ── REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(36px);
            transition: opacity 0.65s ease, transform 0.65s ease;
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-36px);
            transition: opacity 0.65s ease, transform 0.65s ease;
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(36px);
            transition: opacity 0.65s ease, transform 0.65s ease;
        }

        .reveal.visible,
        .reveal-left.visible,
        .reveal-right.visible {
            opacity: 1;
            transform: none;
        }

        .d1 {
            transition-delay: 0.1s;
        }

        .d2 {
            transition-delay: 0.2s;
        }

        .d3 {
            transition-delay: 0.3s;
        }

        .d4 {
            transition-delay: 0.4s;
        }

        /* ── HERO ANIM ── */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(28px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .a1 {
            animation: fadeUp 0.8s ease 0.1s both;
        }

        .a2 {
            animation: fadeUp 0.8s ease 0.25s both;
        }

        .a3 {
            animation: fadeUp 0.8s ease 0.4s both;
        }

        .a4 {
            animation: fadeUp 0.8s ease 0.55s both;
        }

        .a5 {
            animation: fadeUp 0.8s ease 0.7s both;
        }

        /* ── FLOAT ── */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(2deg);
            }

            50% {
                transform: translateY(-10px) rotate(2deg);
            }
        }

        .floating {
            animation: float 4s ease-in-out infinite;
        }

        /* ── FORM ── */
        .form-input {
            border: 1.5px solid rgba(0, 0, 0, 0.1);
            background: #F8F9FF;
            transition: all 0.3s;
            color: var(--dark);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--blue);
            background: #fff;
            box-shadow: 0 0 0 3px rgba(45, 75, 158, 0.1);
        }

        .form-input::placeholder {
            color: #aaa;
        }

        /* ── MODAL ── */
        .modal-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.65);
            z-index: 60;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .modal-card {
            width: min(100%, 520px);
            max-height: calc(100vh - 3rem);
            overflow-y: auto;
            background: #ffffff;
            border-radius: 1.75rem;
            box-shadow: 0 36px 90px rgba(15, 23, 42, 0.25);
            padding: 2rem;
            position: relative;
            border: 1px solid rgba(45, 75, 158, 0.08);
            opacity: 0;
            transform: translateY(24px) scale(0.97);
        }

        .modal-backdrop:not(.hidden) {
            animation: backdropFade 0.2s ease forwards;
        }

        .modal-backdrop:not(.hidden) .modal-card {
            animation: modalPop 0.28s ease-out forwards;
        }

        .modal-card::-webkit-scrollbar {
            width: 7px;
        }

        .modal-card::-webkit-scrollbar-thumb {
            background: rgba(45, 75, 158, 0.18);
            border-radius: 999px;
        }

        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 2.75rem;
            height: 2.75rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            background: rgba(255, 255, 255, 0.95);
            color: #1A1D2E;
            font-size: 1.05rem;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .modal-close:hover {
            background: #f8fafc;
            transform: scale(1.02);
        }

        .modal-header {
            display: grid;
            gap: 0.5rem;
            margin-bottom: 1.25rem;
        }

        .modal-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.55rem;
            padding: 0.5rem 0.8rem;
            border-radius: 999px;
            background: rgba(45, 75, 158, 0.08);
            color: #2D4B9E;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .modal-highlight {
            display: inline-block;
            padding: 0.75rem 1rem;
            border-radius: 1.25rem;
            border: 1px solid rgba(45, 75, 158, 0.08);
            background: rgba(45, 75, 158, 0.04);
            color: #1A1D2E;
            font-size: 0.88rem;
            line-height: 1.6;
        }

        .modal-description {
            color: #4B5563;
            font-size: 0.95rem;
            line-height: 1.75;
        }

        .input-group {
            position: relative;
        }

        .input-group .form-input {
            padding-right: 3.5rem;
        }

        .input-addon {
            position: absolute;
            right: 0.85rem;
            top: 50%;
            transform: translateY(-50%);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 999px;
            background: rgba(45, 75, 158, 0.07);
            color: #2D4B9E;
            border: 1px solid transparent;
            transition: background 0.2s ease;
            cursor: pointer;
        }

        .input-addon:hover {
            background: rgba(45, 75, 158, 0.12);
        }

        .input-help {
            margin-top: 0.35rem;
            font-size: 0.8rem;
            color: #6B7280;
            line-height: 1.6;
        }

        .modal-action {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            justify-content: center;
            width: 100%;
            border-radius: 1.25rem;
            padding: 1rem 1.15rem;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .modal-backdrop.hidden {
            display: none;
        }

        @keyframes backdropFade {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes modalPop {
            from {
                opacity: 0;
                transform: translateY(24px) scale(0.97);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* ── CTA SECTION ── */
        .cta-section {
            background: linear-gradient(135deg, var(--dark) 0%, #0D1526 100%);
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(208, 2, 27, 0.15) 0%, transparent 60%);
        }

        .cta-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: 5%;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(45, 75, 158, 0.2) 0%, transparent 60%);
        }

        /* ── ABOUT SECTION ── */
        .about-section {
            background: linear-gradient(180deg, #fff 0%, var(--gray) 100%);
        }

        /* ── MISI CARD ── */
        .misi-card {
            background: #fff;
            border: 1.5px solid rgba(0, 0, 0, 0.06);
            transition: all 0.3s;
        }

        .misi-card:hover {
            box-shadow: 0 8px 30px rgba(45, 75, 158, 0.08);
            transform: translateY(-3px);
        }

        /* Accent line */
        .line-red {
            width: 40px;
            height: 3px;
            background: var(--red);
            border-radius: 2px;
        }

        .line-blue {
            width: 40px;
            height: 3px;
            background: var(--blue);
            border-radius: 2px;
        }

        .line-green {
            width: 40px;
            height: 3px;
            background: var(--green);
            border-radius: 2px;
        }

        /* ── SECTION BG ALT ── */
        .bg-soft {
            background: var(--gray);
        }

        .bg-soft2 {
            background: var(--gray2);
        }

        /* ── LAYANAN ICON WRAPPERS ── */
        .icon-red {
            background: rgba(208, 2, 27, 0.08);
            color: var(--red);
        }

        .icon-blue {
            background: rgba(45, 75, 158, 0.1);
            color: var(--blue);
        }

        .icon-green {
            background: rgba(26, 122, 60, 0.08);
            color: var(--green);
        }

        /* ── HERO SLIDER ── */
        .hero-slider {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            background: var(--dark);
        }

        .hero-slide {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0;
            z-index: 0;
            transition: opacity 2.8s ease-in-out;
            animation: heroZoom 20s ease-in-out infinite alternate;
            will-change: opacity, transform;
        }

        .hero-slide.active {
            opacity: 1;
            z-index: 1;
        }

        @keyframes heroZoom {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.08);
            }
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(10, 12, 22, 0.55) 0%, rgba(10, 12, 22, 0.35) 40%, rgba(10, 12, 22, 0.75) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 8rem 1.5rem 6rem;
            max-width: 900px;
            margin: 0 auto;
        }

        .hero-progress {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            z-index: 3;
            background: rgba(255, 255, 255, 0.15);
        }

        .hero-progress-bar {
            height: 100%;
            width: 0%;
            background: var(--red);
        }

        .hero-progress-bar.animating {
            transition: width 7s linear;
            width: 100%;
        }

        .hero-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 3rem;
            height: 3rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 3;
            transition: background 0.25s ease, transform 0.25s ease;
        }

        .hero-arrow:hover {
            background: var(--red);
            border-color: var(--red);
            transform: translateY(-50%) scale(1.06);
        }

        .hero-arrow.prev {
            left: 1.5rem;
        }

        .hero-arrow.next {
            right: 1.5rem;
        }

        .hero-dots {
            position: absolute;
            z-index: 3;
            left: 50%;
            bottom: 2.25rem;
            transform: translateX(-50%);
            display: flex;
            gap: 0.55rem;
        }

        .hero-dots .carousel-dot {
            background: rgba(255, 255, 255, 0.4);
        }

        .hero-dots .carousel-dot.active {
            background: var(--red);
        }

        .carousel-dot {
            width: 0.55rem;
            height: 0.55rem;
            border-radius: 999px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-dot.active {
            width: 1.75rem;
        }

    </style>
</head>

<body>

    <!-- ══════════════════════════════════
     NAVBAR
══════════════════════════════════ -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 py-3 bg-white/80 backdrop-blur-md border-b border-black/5">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">

            <!-- Logo -->
            <a href="#">
                <img src="{{ asset('storage/logo-h.webp') }}" alt="PT. Fokus Jasa Mitra" class="h-10 object-contain">
            </a>

            <!-- Desktop Nav -->
            <ul class="hidden md:flex items-center gap-8">
                <li><a href="#tentang"
                        class="text-sm font-semibold text-gray-500 hover:text-[#2D4B9E] transition-colors">Tentang</a>
                </li>
                <li><a href="#layanan"
                        class="text-sm font-semibold text-gray-500 hover:text-[#2D4B9E] transition-colors">Layanan</a>
                </li>
                <li><a href="#bisnis"
                        class="text-sm font-semibold text-gray-500 hover:text-[#2D4B9E] transition-colors">Bisnis</a>
                </li>
                <li><a href="#kontak"
                        class="text-sm font-semibold text-gray-500 hover:text-[#2D4B9E] transition-colors">Layanan</a>
                </li>
            </ul>

            <!-- CTA Desktop -->
            <div class="hidden md:flex items-center gap-3">
                <button type="button" data-modal-target="modal-login"
                    class="text-sm font-bold px-5 py-2 rounded-lg border-2 border-[#2D4B9E] text-[#2D4B9E] hover:bg-[#2D4B9E] hover:text-white transition-all">Masuk</button>
                <button type="button" data-modal-target="modal-register"
                    class="text-sm font-bold px-5 py-2 rounded-lg bg-[#D0021B] text-white hover:bg-[#B00218] transition-all shadow-md shadow-red-200">Daftar</button>
            </div>

            <!-- Hamburger -->
            <button id="hamburger" class="md:hidden p-2 text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-black/5 px-6 py-4 bg-white">
            <ul class="flex flex-col gap-3">
                <li><a href="#tentang" class="block py-2 text-gray-600 hover:text-[#2D4B9E] font-semibold">Tentang
                        Kami</a></li>
                <li><a href="#layanan" class="block py-2 text-gray-600 hover:text-[#2D4B9E] font-semibold">Layanan</a>
                </li>
                <li><a href="#bisnis" class="block py-2 text-gray-600 hover:text-[#2D4B9E] font-semibold">Bisnis</a>
                </li>
                <li><a href="#kontak" class="block py-2 text-gray-600 hover:text-[#2D4B9E] font-semibold">Kontak</a>
                </li>
            </ul>
            <div class="mt-5 flex flex-col gap-3">
                <button type="button" data-modal-target="modal-login"
                    class="w-full text-left text-sm font-bold px-5 py-3 rounded-lg border-2 border-[#2D4B9E] text-[#2D4B9E] hover:bg-[#2D4B9E] hover:text-white transition-all">Masuk</button>
                <button type="button" data-modal-target="modal-register"
                    class="w-full text-left text-sm font-bold px-5 py-3 rounded-lg bg-[#D0021B] text-white hover:bg-[#B00218] transition-all shadow-md shadow-red-200">Daftar</button>
            </div>
        </div>
    </nav>


    <!-- ══════════════════════════════════
     HERO SLIDER
══════════════════════════════════ -->
    <section class="hero-slider" id="hero-slider">

        <div class="hero-slide active" style="background-image:url('https://images.unsplash.com/photo-1589939705384-5185137a7f0f?fm=jpg&amp;q=80&amp;w=1920&amp;auto=format&amp;fit=crop')"></div>
        <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1652303518379-c0ef1c9fb2b1?fm=jpg&amp;q=80&amp;w=1920&amp;auto=format&amp;fit=crop')"></div>
        <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1593313637552-29c2c0dacd35?fm=jpg&amp;q=80&amp;w=1920&amp;auto=format&amp;fit=crop')"></div>
        <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1530639834082-05bafb67fbbe?fm=jpg&amp;q=80&amp;w=1920&amp;auto=format&amp;fit=crop')"></div>

        <div class="hero-overlay"></div>

        <div class="hero-content">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-7 backdrop-blur-sm">
                <span class="w-2 h-2 rounded-full bg-[#D0021B] animate-pulse"></span>
                <span class="text-xs font-bold text-white/90 tracking-widest uppercase">12th Anniversary · 2014 – 2026</span>
            </div>

            <h1 class="font-display text-6xl md:text-8xl text-white leading-[1.02] mb-4 tracking-wide">
                PT. FOKUS JASA MITRA
            </h1>

            <p class="text-white text-2xl md:text-3xl font-semibold mb-5">Mitra Alih Daya Profesional</p>

            <p class="text-white/70 text-sm md:text-base max-w-2xl mx-auto leading-relaxed font-light mb-9">
                Man Power Supply, Tank &amp; Area Cleaning, Chemical for Oil &amp; Gas, Protective Coating Onshore &amp;
                Offshore, Supplier Pumps
            </p>

            <div class="flex flex-wrap justify-center gap-3">
                <a href="#tentang"
                    class="flex items-center gap-2 px-7 py-3.5 rounded-xl bg-[#D0021B] text-white font-bold text-sm shadow-lg shadow-red-900/30 hover:bg-[#B00218] transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0" />
                    </svg>
                    Tentang Kami
                </a>
                <a href="#layanan"
                    class="flex items-center gap-2 px-7 py-3.5 rounded-xl bg-[#2D4B9E] text-white font-bold text-sm shadow-lg shadow-blue-900/30 hover:bg-[#1A3C8A] transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    Layanan
                </a>
            </div>
        </div>

        <div class="hero-progress">
            <div class="hero-progress-bar" id="hero-progress-bar"></div>
        </div>

        <div class="hero-dots" id="hero-dots"></div>
    </section>


    <!-- ══════════════════════════════════
     MARQUEE STRIP
══════════════════════════════════ -->
    <div class="bg-[#1A1D2E] py-3.5 overflow-hidden">
        <div class="marquee-inner">
            <div class="flex items-center gap-10 px-5 whitespace-nowrap">
                <span class="font-display text-white text-xl tracking-widest">TENAGA KERJA PROFESIONAL</span>
                <span class="text-[#D0021B] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">OPERATOR ALAT BERAT</span>
                <span class="text-[#2D4B9E] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">PERAWATAN PABRIK</span>
                <span class="text-[#1A7A3C] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">ADMINISTRASI PERKANTORAN</span>
                <span class="text-[#D0021B] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">FJM CLEAN</span>
                <span class="text-[#2D4B9E] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">FJM TRAINING</span>
                <span class="text-[#1A7A3C] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">KOPERASI FJM</span>
                <span class="text-[#D0021B] text-xl">◆</span>
            </div>
            <div class="flex items-center gap-10 px-5 whitespace-nowrap" aria-hidden="true">
                <span class="font-display text-white text-xl tracking-widest">TENAGA KERJA PROFESIONAL</span>
                <span class="text-[#D0021B] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">OPERATOR ALAT BERAT</span>
                <span class="text-[#2D4B9E] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">PERAWATAN PABRIK</span>
                <span class="text-[#1A7A3C] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">ADMINISTRASI PERKANTORAN</span>
                <span class="text-[#D0021B] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">FJM CLEAN</span>
                <span class="text-[#2D4B9E] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">FJM TRAINING</span>
                <span class="text-[#1A7A3C] text-xl">◆</span>
                <span class="font-display text-white text-xl tracking-widest">KOPERASI FJM</span>
                <span class="text-[#D0021B] text-xl">◆</span>
            </div>
        </div>
    </div>


    <!-- ══════════════════════════════════
     TENTANG KAMI
══════════════════════════════════ -->
    <section id="tentang" class="about-section py-28">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20 items-center">

                <!-- LEFT -->
                <div class="reveal-left">
                    <div class="inline-flex items-center gap-2 badge-blue rounded-full px-4 py-1.5 mb-5">
                        <span class="text-xs font-bold tracking-widest uppercase">Tentang Kami</span>
                    </div>
                    <h2 class="font-display text-6xl md:text-7xl text-[#1A1D2E] leading-tight mb-3">
                        TENTANG<br /><span class="text-[#2D4B9E]">KAMI</span>
                    </h2>
                    <div class="line-red mb-7"></div>
                    <p class="text-gray-500 leading-relaxed mb-5 font-light text-lg">
                        <strong class="text-[#1A1D2E] font-semibold">PT. Fokus Jasa Mitra</strong> merupakan perusahaan
                        yang mengelola bidang usaha penyediaan jasa ketenagakerjaan profesional, didirikan oleh <strong
                            class="text-[#1A7A3C] font-semibold">Yayasan Petrokimia Gresik</strong> bersama PT. Aneka
                        Jasa Grhadika pada 5 Mei 2014.
                    </p>
                    <p class="text-gray-500 leading-relaxed mb-9 font-light">
                        Memiliki core bisnis mengelola tenaga kerja dan pemborongan pekerjaan di kawasan Jawa Timur dan
                        sekitarnya. Berkomitmen untuk terus meningkatkan dan mengembangkan pelayanan penyediaan dan
                        pemborongan pekerjaan yang handal dan profesional.
                    </p>
                    <a href="#"
                        class="group inline-flex items-center gap-2 text-[#D0021B] font-bold text-sm tracking-wide uppercase hover:gap-4 transition-all">
                        Baca Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- RIGHT — Visi Misi -->
                <div class="reveal-right space-y-4">
                    <!-- Visi card -->
                    <div
                        class="rounded-2xl p-7 border-2 border-[#2D4B9E]/20 bg-gradient-to-br from-blue-50 to-white relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-28 h-28 bg-[#2D4B9E]/5 rounded-bl-full"></div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-[#2D4B9E] flex items-center justify-center flex-shrink-0 shadow-md shadow-blue-200">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold text-[#2D4B9E] tracking-widest uppercase mb-1.5">Visi
                                </div>
                                <p class="text-[#1A1D2E] font-semibold text-lg leading-snug">
                                    Menjadi Perusahaan Penyedia Tenaga Kerja Alih Daya Profesional
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi grid -->
                    <div class="grid grid-cols-2 gap-3">
                        <div class="misi-card rounded-xl p-5">
                            <div class="w-8 h-8 rounded-lg icon-red flex items-center justify-center mb-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="text-gray-500 text-xs leading-relaxed">Mengelola pekerjaan sesuai
                                perundang-undangan, memberikan hak &amp; kewajiban</p>
                        </div>
                        <div class="misi-card rounded-xl p-5">
                            <div class="w-8 h-8 rounded-lg icon-blue flex items-center justify-center mb-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0" />
                                </svg>
                            </div>
                            <p class="text-gray-500 text-xs leading-relaxed">Mewujudkan SDM berkompeten, berintegritas,
                                dan loyal</p>
                        </div>
                        <div class="misi-card rounded-xl p-5">
                            <div class="w-8 h-8 rounded-lg icon-green flex items-center justify-center mb-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                </svg>
                            </div>
                            <p class="text-gray-500 text-xs leading-relaxed">Mewujudkan kepuasan pelanggan secara
                                optimal</p>
                        </div>
                        <div class="misi-card rounded-xl p-5">
                            <div class="w-8 h-8 rounded-lg icon-red flex items-center justify-center mb-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                            <p class="text-gray-500 text-xs leading-relaxed">Meningkatkan hasil usaha untuk
                                pengembangan &amp; kelangsungan usaha</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ══════════════════════════════════
     LAYANAN
══════════════════════════════════ -->
    <section id="layanan" class="py-28 bg-soft">
        <div class="max-w-7xl mx-auto px-6">
            <!-- header -->
            <div class="text-center mb-14 reveal">
                <div class="inline-flex items-center gap-2 badge-red rounded-full px-4 py-1.5 mb-4">
                    <span class="text-xs font-bold tracking-widest uppercase">Layanan Kami</span>
                </div>
                <h2 class="font-display text-6xl md:text-7xl text-[#1A1D2E] mb-4">LAYANAN <span
                        class="text-[#D0021B]">UNGGULAN</span></h2>
                <p class="text-gray-500 max-w-xl mx-auto font-light leading-relaxed">
                    Kami menyediakan layanan ketenagakerjaan terintegrasi untuk mendukung operasional bisnis Anda secara
                    efisien dan profesional.
                </p>
            </div>

            <!-- cards -->
            <div class="grid md:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div class="service-card rounded-2xl p-8 reveal d1">
                    <div class="w-14 h-14 rounded-xl icon-blue flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="font-display text-4xl text-gray-200 mb-2">01</div>
                    <h3 class="font-bold text-xl text-[#1A1D2E] mb-3">Operator Alat Berat</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-light mb-6">
                        Tenaga operator alat berat terlatih yang mampu memimpin proses produksi, pengelolaan stok bahan
                        baku dan bahan jadi di gudang dan lapangan.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-1.5 text-[#2D4B9E] text-xs font-bold tracking-wide uppercase hover:gap-3 transition-all">
                        Selengkapnya <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- Card 2 Featured -->
                <div class="service-card rounded-2xl p-8 reveal d2 relative bg-gradient-to-br from-[#1A1D2E] to-[#0D1526]"
                    style="border-color: transparent;">
                    <div class="absolute top-5 right-5">
                        <span class="text-xs font-bold bg-[#D0021B] text-white px-3 py-1 rounded-full">Unggulan</span>
                    </div>
                    <div
                        class="w-14 h-14 rounded-xl bg-[#D0021B] flex items-center justify-center mb-6 shadow-lg shadow-red-900/40">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <div class="font-display text-4xl text-white/10 mb-2">02</div>
                    <h3 class="font-bold text-xl text-white mb-3">Perawatan Peralatan Pabrik</h3>
                    <p class="text-gray-400 text-sm leading-relaxed font-light mb-6">
                        Perawatan peralatan pabrik untuk menjaga kelancaran produksi, kenyamanan pekerja, serta
                        perbaikan dan pembuatan perangkat baru.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-1.5 text-[#D0021B] text-xs font-bold tracking-wide uppercase hover:gap-3 transition-all">
                        Selengkapnya <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="service-card rounded-2xl p-8 reveal d3">
                    <div class="w-14 h-14 rounded-xl icon-green flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <div class="font-display text-4xl text-gray-200 mb-2">03</div>
                    <h3 class="font-bold text-xl text-[#1A1D2E] mb-3">Administrasi Perkantoran</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-light mb-6">
                        Jasa administrasi komputer perkantoran sebagai tenaga pendukung pengelolaan data, sekretariat,
                        dan pengarsipan dokumen perusahaan.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-1.5 text-[#1A7A3C] text-xs font-bold tracking-wide uppercase hover:gap-3 transition-all">
                        Selengkapnya <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- ══════════════════════════════════
     BISNIS
══════════════════════════════════ -->
    <section id="bisnis" class="py-28 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-14 reveal">
                <div class="inline-flex items-center gap-2 badge-green rounded-full px-4 py-1.5 mb-4">
                    <span class="text-xs font-bold tracking-widest uppercase text-[#1A7A3C]">Unit Bisnis</span>
                </div>
                <h2 class="font-display text-6xl md:text-7xl text-[#1A1D2E]">EKOSISTEM <span
                        class="text-[#1A7A3C]">BISNIS</span></h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6">

                <!-- FJM Clean -->
                <div class="bisnis-card rounded-2xl p-8 reveal d1 group border border-blue-50">
                    <div
                        class="w-16 h-16 rounded-2xl icon-blue flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-[#2D4B9E]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                    </div>
                    <div class="inline-block badge-blue rounded-full px-3 py-0.5 text-xs font-bold mb-3">Unit 01</div>
                    <h3 class="font-bold text-xl text-[#1A1D2E] mb-3">FJM Clean</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-light">
                        Menyediakan layanan jasa tenaga kebersihan panggilan yang praktis dan profesional untuk
                        kebutuhan industri dan perkantoran Anda.
                    </p>
                </div>

                <!-- FJM Training — featured -->
                <div
                    class="bisnis-card rounded-2xl p-8 reveal d2 group border-2 border-[#D0021B]/20 bg-gradient-to-b from-red-50/60 to-white">
                    <div
                        class="w-16 h-16 rounded-2xl bg-[#D0021B] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-md shadow-red-200">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div class="inline-block badge-red rounded-full px-3 py-0.5 text-xs font-bold mb-3">Unit 02</div>
                    <h3 class="font-bold text-xl text-[#1A1D2E] mb-3">FJM Training</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-light">
                        Layanan pelatihan berbasis kompetensi industri yang membantu SDM Anda menghadapi tantangan dan
                        perubahan di era baru.
                    </p>
                </div>

                <!-- Koperasi FJM -->
                <div class="bisnis-card rounded-2xl p-8 reveal d3 group border border-green-50">
                    <div
                        class="w-16 h-16 rounded-2xl icon-green flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-[#1A7A3C]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="inline-block badge-green rounded-full px-3 py-0.5 text-xs font-bold mb-3">Unit 03</div>
                    <h3 class="font-bold text-xl text-[#1A1D2E] mb-3">Koperasi FJM</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-light">
                        Memfasilitasi berbagai produk layanan simpan pinjam untuk mendukung kesejahteraan karyawan
                        secara menyeluruh.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- ══════════════════════════════════
     CTA BANNER
══════════════════════════════════ -->
    <section class="cta-section py-24 relative">
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10 reveal">
            <div class="inline-flex items-center gap-2 border border-white/10 rounded-full px-4 py-1.5 mb-6">
                <span class="text-xs font-bold text-white/60 tracking-widest uppercase">Bergabung Bersama Kami</span>
            </div>
            <h2 class="font-display text-5xl md:text-6xl text-white mb-6 leading-tight">
                SIAP BERKEMBANG<br />
                <span class="text-[#D0021B]">BERSAMA FJM?</span>
            </h2>
            <p class="text-white/50 mb-10 leading-relaxed font-light text-lg max-w-2xl mx-auto">
                Jadilah bagian dari ekosistem tenaga kerja profesional yang telah dipercaya lebih dari 50 klien di Jawa
                Timur selama 11 tahun penuh dedikasi.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#kontak"
                    class="px-8 py-4 rounded-xl bg-[#D0021B] text-white font-bold text-sm shadow-xl shadow-red-900/30 hover:bg-[#B00218] transition-all">
                    Mulai Sekarang →
                </a>
                <a href="tel:+62"
                    class="px-8 py-4 rounded-xl border-2 border-white/20 text-white font-bold text-sm hover:border-white/40 hover:bg-white/5 transition-all">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>


    <!-- ══════════════════════════════════
     GALERI
══════════════════════════════════ -->
    <section class="py-20 bg-soft">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-10 reveal">
                <div class="inline-flex items-center gap-2 badge-blue rounded-full px-4 py-1.5 mb-4">
                    <span class="text-xs font-bold text-[#2D4B9E] tracking-widest uppercase">Dokumentasi Kerja</span>
                </div>
                <h2 class="font-display text-5xl text-[#1A1D2E]">GALERI <span class="text-[#2D4B9E]">LAPANGAN</span>
                </h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 reveal">

                <div
                    class="md:col-span-2 md:row-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm h-72 flex items-center justify-center group hover:shadow-md transition-shadow overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1616401784845-180882ba9ba8?auto=format&fit=crop&w=800&q=80"
                        alt="Sistem Pipa Pabrik FJM"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 left-5 text-left">
                        <span class="font-display text-2xl font-bold text-white tracking-wide">PT FJM</span>
                        <p class="text-xs text-gray-200 mt-1">Dokumentasi Sistem Operasional Pabrik</p>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl border border-gray-100 shadow-sm h-36 flex items-center justify-center group hover:shadow-md transition-shadow overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1521898284481-a5ec348cb555?auto=format&fit=crop&w=500&q=80"
                        alt="Manpower Supply FJM"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-colors duration-300">
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl border border-gray-100 shadow-sm h-36 flex items-center justify-center group hover:shadow-md transition-shadow overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=500&q=80"
                        alt="Site Engineer FJM"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-colors duration-300">
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl border border-gray-100 shadow-sm h-36 flex items-center justify-center group hover:shadow-md transition-shadow overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?auto=format&fit=crop&w=500&q=80"
                        alt="Fasilitas Lapangan"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-colors duration-300">
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl border border-gray-100 shadow-sm h-36 flex items-center justify-center group hover:shadow-md transition-shadow overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=500&q=80"
                        alt="Teknisi Mesin FJM"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-colors duration-300">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ══════════════════════════════════
     KONTAK
══════════════════════════════════ -->
    <section id="kontak" class="py-28 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16">

                <!-- LEFT -->
                <div class="reveal-left">
                    <div class="inline-flex items-center gap-2 badge-red rounded-full px-4 py-1.5 mb-5">
                        <span class="text-xs font-bold text-[#D0021B] tracking-widest uppercase">Hubungi Kami</span>
                    </div>
                    <h2 class="font-display text-6xl text-[#1A1D2E] leading-tight mb-3">
                        LET'S<br /><span class="text-[#2D4B9E]">CONNECT.</span>
                    </h2>
                    <div class="line-red mb-8"></div>

                    <div class="space-y-4 mb-10">
                        <a href="#"
                            class="flex items-center gap-4 group p-4 rounded-xl hover:bg-gray-50 transition-colors -mx-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center flex-shrink-0 text-[#D0021B]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-400 font-semibold">YouTube</div>
                                <div
                                    class="text-sm font-semibold text-gray-700 group-hover:text-[#D0021B] transition-colors">
                                    Fokus Jasa Mitra</div>
                            </div>
                        </a>

                        <a href="#"
                            class="flex items-center gap-4 group p-4 rounded-xl hover:bg-gray-50 transition-colors -mx-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0 text-[#2D4B9E]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-400 font-semibold">Facebook</div>
                                <div
                                    class="text-sm font-semibold text-gray-700 group-hover:text-[#2D4B9E] transition-colors">
                                    Fokus Jasa Mitra</div>
                            </div>
                        </a>

                        <a href="https://www.instagram.com/fokusjasmitra"
                            class="flex items-center gap-4 group p-4 rounded-xl hover:bg-gray-50 transition-colors -mx-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-pink-100 flex items-center justify-center flex-shrink-0 text-pink-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-400 font-semibold">Instagram</div>
                                <div
                                    class="text-sm font-semibold text-gray-700 group-hover:text-pink-600 transition-colors">
                                    @fokusjasmitra</div>
                            </div>
                        </a>

                        <a href="mailto:halo@fokusjasamitra.com"
                            class="flex items-center gap-4 group p-4 rounded-xl hover:bg-gray-50 transition-colors -mx-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center flex-shrink-0 text-[#1A7A3C]">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-400 font-semibold">Email</div>
                                <div
                                    class="text-sm font-semibold text-gray-700 group-hover:text-[#1A7A3C] transition-colors">
                                    halo@fokusjasamitra.com</div>
                            </div>
                        </a>
                    </div>

                    <div class="p-5 rounded-xl bg-gray-50 border border-gray-100">
                        <div class="text-xs font-bold text-gray-400 tracking-widest uppercase mb-1.5">Kantor</div>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Jl. Prof. Dr. Mohamad Yamin, Kab. Gajah, Kec. Gresik, Kab. Gresik, Jawa Timur 61119
                        </p>
                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="reveal-right">
                    <div class="bg-[#F8F9FF] border border-blue-100/60 rounded-2xl p-8 shadow-sm">
                        <h3 class="font-bold text-2xl text-[#1A1D2E] mb-1">Kirim Pesan</h3>
                        <p class="text-gray-400 text-sm mb-7">Tim kami akan merespon dalam 24 jam kerja.</p>

                        <div class="space-y-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label
                                        class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5 block">Nama</label>
                                    <input type="text" placeholder="Nama lengkap"
                                        class="form-input w-full px-4 py-3 rounded-xl text-sm font-medium" />
                                </div>
                                <div>
                                    <label
                                        class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5 block">Email</label>
                                    <input type="email" placeholder="email@domain.com"
                                        class="form-input w-full px-4 py-3 rounded-xl text-sm font-medium" />
                                </div>
                            </div>
                            <div>
                                <label
                                    class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5 block">Perusahaan</label>
                                <input type="text" placeholder="Nama perusahaan Anda"
                                    class="form-input w-full px-4 py-3 rounded-xl text-sm font-medium" />
                            </div>
                            <div>
                                <label
                                    class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5 block">Pesan</label>
                                <textarea rows="5" placeholder="Tulis pesan Anda di sini..."
                                    class="form-input w-full px-4 py-3 rounded-xl text-sm font-medium resize-none"></textarea>
                            </div>
                            <button type="button"
                                class="w-full bg-[#D0021B] hover:bg-[#B00218] text-white font-bold py-4 rounded-xl text-sm tracking-wide transition-all shadow-lg shadow-red-200 mt-1">
                                Kirim Pesan →
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ══════════════════════════════════
     FOOTER
══════════════════════════════════ -->
    <footer class="bg-[#1A1D2E]">
        <div class="max-w-7xl mx-auto px-6 py-14">
            <div class="grid md:grid-cols-4 gap-10 mb-10">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <img src="{{ asset('storage/logo-h.webp') }}" alt="PT. Fokus Jasa Mitra"
                        class="h-9 object-contain mb-4 brightness-0 invert opacity-90" />
                    <p class="text-white/30 text-xs leading-relaxed mt-3">
                        Penyedia tenaga kerja alih daya profesional sejak 5 Mei 2014.
                    </p>
                    <p class="text-white/20 text-xs mt-2">Petrokimia Gresik Group</p>
                </div>

                <!-- Informasi -->
                <div>
                    <h4 class="text-xs font-bold text-white/40 tracking-widest uppercase mb-4">Informasi</h4>
                    <ul class="space-y-2.5">
                        <li><a href="#" class="text-white/40 text-sm hover:text-white transition-colors">FAQ</a>
                        </li>
                        <li><a href="#"
                                class="text-white/40 text-sm hover:text-white transition-colors">Kebijakan Pengguna</a>
                        </li>
                        <li><a href="#"
                                class="text-white/40 text-sm hover:text-white transition-colors">Kebijakan Privasi</a>
                        </li>
                        <li><a href="#" class="text-white/40 text-sm hover:text-white transition-colors">Tentang
                                Perusahaan</a></li>
                    </ul>
                </div>

                <!-- Layanan -->
                <div>
                    <h4 class="text-xs font-bold text-white/40 tracking-widest uppercase mb-4">Layanan</h4>
                    <ul class="space-y-2.5">
                        <li><a href="#"
                                class="text-white/40 text-sm hover:text-white transition-colors">Operator Alat
                                Berat</a></li>
                        <li><a href="#"
                                class="text-white/40 text-sm hover:text-white transition-colors">Perawatan Pabrik</a>
                        </li>
                        <li><a href="#"
                                class="text-white/40 text-sm hover:text-white transition-colors">Administrasi</a></li>
                        <li><a href="#" class="text-white/40 text-sm hover:text-white transition-colors">FJM
                                Training</a></li>
                    </ul>
                </div>

                <!-- Sosial Media -->
                <div>
                    <h4 class="text-xs font-bold text-white/40 tracking-widest uppercase mb-4">Sosial Media</h4>
                    <ul class="space-y-2.5">
                        <li><a href="#"
                                class="text-white/40 text-sm hover:text-[#D0021B] transition-colors">YouTube</a></li>
                        <li><a href="#"
                                class="text-white/40 text-sm hover:text-[#2D4B9E] transition-colors">Facebook</a></li>
                        <li><a href="#"
                                class="text-white/40 text-sm hover:text-pink-400 transition-colors">Instagram</a></li>
                        <li><a href="#"
                                class="text-white/40 text-sm hover:text-[#1A7A3C] transition-colors">WhatsApp</a></li>
                    </ul>
                </div>
            </div>

            <!-- bottom bar -->
            <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <span class="w-2 h-2 rounded-full bg-[#D0021B]"></span>
                    <span class="w-2 h-2 rounded-full bg-[#1A7A3C]"></span>
                    <span class="w-2 h-2 rounded-full bg-[#2D4B9E]"></span>
                    <p class="text-white/20 text-xs">© PT. Fokus Jasa Mitra. Hak Cipta Dilindungi.</p>
                </div>
                <p class="text-white/20 text-xs">5 Mei 2014 — Dengan bangga melayani Jawa Timur</p>
            </div>
        </div>
    </footer>

    <!-- ══ MODAL MASUK ══ -->
    <div id="modal-login" class="modal-backdrop hidden" aria-hidden="true">
        <div class="modal-card">
            <button type="button" class="modal-close" data-modal-close="modal-login"
                aria-label="Tutup modal">×</button>

            <!-- Logo Bar -->
            <!-- Logo Bar -->
            <div
                style="display:flex;align-items:center;justify-content:center;gap:12px;margin-bottom:1.25rem;padding-bottom:1.25rem;border-bottom:1px solid rgba(0,0,0,0.07)">
                <img src="{{ asset('storage/logo-h.webp') }}" alt="PT. Fokus Jasa Mitra"
                    style="height:36px;object-fit:contain;" />
                <div style="width:1px;height:32px;background:rgba(0,0,0,0.08)"></div>
                <div>
                    <div
                        style="font-size:9px;font-weight:700;color:#9CA3AF;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:3px">
                        Bagian dari</div>
                    <div style="font-size:11px;font-weight:700;color:#1A7A3C;">Petrokimia Gresik Group</div>
                </div>
            </div>

            <div class="modal-header">
                <span class="modal-badge">
                    <span
                        style="width:5px;height:5px;border-radius:50%;background:#2D4B9E;display:inline-block"></span>
                    Portal Kandidat FJM
                </span>
                {{-- <h3
                    style="font-family:'Bebas Neue',sans-serif;font-size:42px;color:#1A1D2E;line-height:0.95;margin-bottom:0.3rem">
                    MASUK KE <span style="color:#2D4B9E">AKUN</span>
                </h3> --}}
                <p class="modal-description">Gunakan email terdaftar untuk mengakses portal layanan profesional FJM.
                </p>
            </div>

            <form class="space-y-5">
                <div>
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2 block">Email</label>
                    <div class="modal-highlight">Gunakan email perusahaan atau akun terdaftar.</div>
                    <input type="email" placeholder="email@domain.com"
                        class="form-input w-full px-4 py-3 rounded-2xl text-sm font-medium mt-3" />
                </div>
                <div>
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2 block">Kata
                        Sandi</label>
                    <div class="input-group">
                        <input id="login-password" type="password" placeholder="Masukkan kata sandi"
                            class="form-input w-full px-4 py-3 rounded-2xl text-sm font-medium" />
                        <button type="button" class="input-addon" data-password-toggle="login-password">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                    <p class="input-help">Tidak akan dibagikan kepada pihak lain.</p>
                </div>
                <button type="button" onclick="window.location.href='{{ route('dashboard') }}'" class="modal-action bg-[#2D4B9E] hover:bg-[#1A3C8A] text-white">
                    Masuk
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </button>
                <p class="text-center text-sm text-gray-500">Belum punya akun?
                    <button type="button" data-modal-close="modal-login" data-modal-target="modal-register"
                        class="font-semibold text-[#D0021B] hover:text-[#B00218]">Daftar sekarang</button>
                </p>
            </form>
        </div>
    </div>


    <!-- ══ MODAL DAFTAR ══ -->
    <div id="modal-register" class="modal-backdrop hidden" aria-hidden="true">
        <div class="modal-card">
            <button type="button" class="modal-close" data-modal-close="modal-register"
                aria-label="Tutup modal">×</button>

            <!-- Logo Bar -->
            <!-- Logo Bar -->
            <div
                style="display:flex;align-items:center;justify-content:center;gap:12px;margin-bottom:1.25rem;padding-bottom:1.25rem;border-bottom:1px solid rgba(0,0,0,0.07)">
                <img src="{{ asset('storage/logo-h.webp') }}" alt="PT. Fokus Jasa Mitra"
                    style="height:36px;object-fit:contain;" />
                <div style="width:1px;height:32px;background:rgba(0,0,0,0.08)"></div>
                <div>
                    <div
                        style="font-size:9px;font-weight:700;color:#9CA3AF;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:3px">
                        Bagian dari</div>
                    <div style="font-size:11px;font-weight:700;color:#1A7A3C;">Petrokimia Gresik Group</div>
                </div>
            </div>

            <div class="modal-header">
                {{-- <span class="modal-badge" style="background:rgba(208,2,27,0.08);color:#D0021B">
                    <span
                        style="width:5px;height:5px;border-radius:50%;background:#D0021B;display:inline-block"></span>
                    Bergabung Bersama FJM
                </span> --}}
                <h3
                    style="font-family:'Bebas Neue',sans-serif;font-size:42px;color:#1A1D2E;line-height:0.95;margin-bottom:0.3rem">
                    DAFTAR <span style="color:#D0021B">AKUN</span>
                </h3>
                <p class="modal-description">Daftarkan akun Anda untuk mengakses seluruh layanan profesional dari FJM.
                </p>
            </div>

            <form class="space-y-5">
                <div>
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2 block">Nama</label>
                    <input type="text" placeholder="Nama lengkap"
                        class="form-input w-full px-4 py-3 rounded-2xl text-sm font-medium" />
                </div>
                <div>
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2 block">Email</label>
                    <input type="email" placeholder="email@domain.com"
                        class="form-input w-full px-4 py-3 rounded-2xl text-sm font-medium" />
                </div>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2 block">Kata
                            Sandi</label>
                        <div class="input-group">
                            <input id="register-password" type="password" placeholder="Minimal 8 karakter"
                                class="form-input w-full px-4 py-3 rounded-2xl text-sm font-medium" />
                            <button type="button" class="input-addon" data-password-toggle="register-password">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                        <p class="input-help">Kombinasi huruf dan angka.</p>
                    </div>
                    <div>
                        <label
                            class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2 block">Konfirmasi</label>
                        <div class="input-group">
                            <input id="register-password-confirm" type="password" placeholder="Ulangi kata sandi"
                                class="form-input w-full px-4 py-3 rounded-2xl text-sm font-medium" />
                            <button type="button" class="input-addon"
                                data-password-toggle="register-password-confirm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <button type="button" class="modal-action bg-[#D0021B] hover:bg-[#B00218] text-white">
                    Daftar Sekarang
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </button>
                <p class="text-center text-sm text-gray-500">Sudah punya akun?
                    <button type="button" data-modal-close="modal-register" data-modal-target="modal-login"
                        class="font-semibold text-[#2D4B9E] hover:text-[#1A3C8A]">Masuk</button>
                </p>
            </form>
        </div>
    </div>

    <!-- ══════════════════════════════════
     SCRIPTS
══════════════════════════════════ -->
    <script>
        // Navbar scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 60);
        });

        // Mobile hamburger
        document.getElementById('hamburger').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Scroll reveal
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, {
            threshold: 0.12
        });
        document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => observer.observe(el));

        // Smooth anchors
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', function(e) {
                const t = document.querySelector(this.getAttribute('href'));
                if (t) {
                    e.preventDefault();
                    t.scrollIntoView({
                        behavior: 'smooth'
                    });
                    document.getElementById('mobile-menu').classList.add('hidden');
                }
            });
        });

        // Modal open/close
        document.querySelectorAll('[data-modal-target]').forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.dataset.modalTarget;
                const modal = document.getElementById(targetId);
                if (modal) modal.classList.remove('hidden');
            });
        });

        document.querySelectorAll('[data-modal-close]').forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.dataset.modalClose;
                const modal = document.getElementById(targetId);
                if (modal) modal.classList.add('hidden');
            });
        });

        document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
            backdrop.addEventListener('click', (event) => {
                if (event.target === backdrop) {
                    backdrop.classList.add('hidden');
                }
            });
        });

        document.querySelectorAll('[data-password-toggle]').forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.dataset.passwordToggle;
                const input = document.getElementById(targetId);
                if (!input) return;
                const isPassword = input.type === 'password';
                input.type = isPassword ? 'text' : 'password';
                button.innerHTML = isPassword ?
                    '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.05 10.05 0 011.568-3.07M6.22 6.22A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.029 10.029 0 01-4.052 5.2M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18"/></svg>' :
                    '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>';
            });
        });

        // ══════════════════════════════════
        // HERO BACKGROUND SLIDER
        // ══════════════════════════════════
        (function() {
            const slidesWrap = document.getElementById('hero-slider');
            const slides = Array.from(slidesWrap.querySelectorAll('.hero-slide'));
            const dotsWrap = document.getElementById('hero-dots');
            const progressBar = document.getElementById('hero-progress-bar');
            const total = slides.length;
            let current = 0;
            let autoplayTimer = null;
            const AUTOPLAY_MS = 7000;

            slides.forEach((_, i) => {
                const dot = document.createElement('div');
                dot.className = 'carousel-dot' + (i === 0 ? ' active' : '');
                dot.addEventListener('click', () => goTo(i));
                dotsWrap.appendChild(dot);
            });
            const dots = Array.from(dotsWrap.children);

            function update() {
                slides.forEach((s, i) => s.classList.toggle('active', i === current));
                dots.forEach((d, i) => d.classList.toggle('active', i === current));
            }

            function goTo(index) {
                current = (index + total) % total;
                update();
                restartAutoplay();
            }

            function next() {
                goTo(current + 1);
            }

            function restartAutoplay() {
                clearInterval(autoplayTimer);
                progressBar.classList.remove('animating');
                void progressBar.offsetWidth;
                progressBar.classList.add('animating');
                autoplayTimer = setInterval(next, AUTOPLAY_MS);
            }

            update();
            restartAutoplay();
        })();
    </script>
</body>

</html>