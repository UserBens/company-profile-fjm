<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Dashboard — PT. Fokus Jasa Mitra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Bebas+Neue&display=swap"
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
            --amber: #D97706;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #F0F2FA;
            color: #1A1D2E;
            overflow: hidden;
        }

        .font-display {
            font-family: 'Bebas Neue', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(45, 75, 158, 0.25);
            border-radius: 4px;
        }

        /* SIDEBAR */
        #sidebar {
            width: 220px;
            min-width: 220px;
            background: #fff;
            border-right: 1px solid rgba(0, 0, 0, 0.07);
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow-y: auto;
        }

        .sb-logo {
            padding: 18px 16px 14px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .sb-logo-row {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sb-logo-box {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: #1A1D2E;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .sb-brand-main {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 15px;
            color: #1A1D2E;
            letter-spacing: 0.05em;
            line-height: 1.1;
        }

        .sb-brand-sub {
            font-size: 9px;
            font-weight: 700;
            color: #1A7A3C;
            letter-spacing: 0.07em;
            text-transform: uppercase;
        }

        .sb-user {
            margin: 12px 12px 0;
            background: #F5F7FF;
            border-radius: 10px;
            padding: 10px 12px;
            border: 1px solid rgba(45, 75, 158, 0.08);
        }

        .sb-user-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #2D4B9E;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 800;
            color: #fff;
            flex-shrink: 0;
        }

        .sb-user-name {
            font-size: 12px;
            font-weight: 700;
            color: #1A1D2E;
            line-height: 1.2;
        }

        .sb-user-role {
            font-size: 9.5px;
            color: #9CA3AF;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.07em;
        }

        .sb-section {
            padding: 14px 12px 4px;
        }

        .sb-section-label {
            font-size: 9px;
            font-weight: 800;
            color: #CBD5E1;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 0 6px;
            margin-bottom: 4px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 8px 10px;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.15s;
            margin-bottom: 1px;
        }

        .nav-link:hover {
            background: #F0F2FA;
        }

        .nav-link.active {
            background: #2D4B9E;
        }

        .nav-link.active .nav-icon {
            color: #fff;
        }

        .nav-link.active .nav-label {
            color: #fff;
            font-weight: 700;
        }

        .nav-icon {
            font-size: 16px;
            color: #94A3B8;
            width: 18px;
            text-align: center;
            flex-shrink: 0;
        }

        .nav-label {
            font-size: 12px;
            font-weight: 600;
            color: #64748B;
        }

        .nav-link.danger:hover {
            background: #FEF2F2;
        }

        .nav-link.danger .nav-icon,
        .nav-link.danger .nav-label {
            color: #D0021B;
        }

        .sb-bottom {
            padding: 10px 12px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            margin-top: auto;
        }

        /* TOPBAR */
        #topbar {
            height: 52px;
            background: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 20px;
            flex-shrink: 0;
        }

        .search-box {
            flex: 1;
            max-width: 320px;
            position: relative;
        }

        .search-box input {
            width: 100%;
            height: 32px;
            padding: 0 32px 0 30px;
            border: 1px solid rgba(0, 0, 0, 0.09);
            border-radius: 8px;
            background: #F8F9FF;
            font-size: 12px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1A1D2E;
            outline: none;
            transition: border 0.2s;
        }

        .search-box input::placeholder {
            color: #94A3B8;
        }

        .search-box input:focus {
            border-color: #2D4B9E;
            background: #fff;
        }

        .search-icon {
            position: absolute;
            left: 9px;
            top: 50%;
            transform: translateY(-50%);
            color: #94A3B8;
            font-size: 14px;
        }

        .search-kbd {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 9px;
            font-weight: 700;
            color: #94A3B8;
            background: #F0F2FA;
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 4px;
            padding: 1px 5px;
        }

        .tb-badge {
            width: 28px;
            height: 28px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, 0.08);
            background: #F8F9FF;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
            color: #64748B;
            font-size: 15px;
        }

        .notif-dot {
            position: absolute;
            top: 5px;
            right: 6px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #D0021B;
            border: 1.5px solid #fff;
        }

        .tb-user {
            display: flex;
            align-items: center;
            gap: 7px;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, 0.08);
            background: #F8F9FF;
        }

        .tb-avatar {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #2D4B9E;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 9px;
            font-weight: 800;
            color: #fff;
        }

        .tb-name {
            font-size: 12px;
            font-weight: 700;
            color: #1A1D2E;
        }

        .tb-caret {
            font-size: 11px;
            color: #94A3B8;
        }

        .tb-divider {
            width: 1px;
            height: 20px;
            background: rgba(0, 0, 0, 0.07);
        }

        /* CONTENT */
        #main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        #page-content {
            flex: 1;
            overflow-y: auto;
            padding: 20px 20px 28px;
        }

        /* STAT CARDS */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin-bottom: 14px;
        }

        .stat-card {
            background: #fff;
            border-radius: 12px;
            border: 1px solid rgba(0, 0, 0, 0.06);
            padding: 14px 16px 10px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: box-shadow 0.2s, transform 0.2s;
        }

        .stat-card:hover {
            box-shadow: 0 6px 24px rgba(45, 75, 158, 0.1);
            transform: translateY(-2px);
        }

        .stat-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 10.5px;
            font-weight: 700;
            color: #94A3B8;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .stat-icon-box {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }

        .stat-val {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 30px;
            color: #1A1D2E;
            line-height: 1;
            margin-bottom: 3px;
        }

        .stat-sub {
            font-size: 10px;
            color: #94A3B8;
            font-weight: 600;
        }

        .stat-trend {
            display: inline-flex;
            align-items: center;
            gap: 3px;
            font-size: 10px;
            font-weight: 700;
            margin-top: 4px;
            padding: 2px 6px;
            border-radius: 999px;
        }

        .trend-up {
            color: #1A7A3C;
            background: rgba(26, 122, 60, 0.08);
        }

        .trend-down {
            color: #D0021B;
            background: rgba(208, 2, 27, 0.07);
        }

        .sparkline-wrap {
            height: 36px;
            margin-top: 6px;
        }

        /* PAGE HEADER */
        .page-hdr {
            margin-bottom: 16px;
        }

        .page-hdr-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2px;
        }

        .pg-eyebrow {
            font-size: 10px;
            font-weight: 700;
            color: #94A3B8;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .pg-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 30px;
            color: #1A1D2E;
            letter-spacing: 0.02em;
            line-height: 1;
        }

        .pg-title span {
            color: #2D4B9E;
        }

        .pg-sub {
            font-size: 12px;
            color: #94A3B8;
            margin-top: 2px;
        }

        .pg-actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-outline {
            padding: 6px 14px;
            border-radius: 8px;
            border: 1px solid rgba(45, 75, 158, 0.25);
            font-size: 11.5px;
            font-weight: 700;
            color: #2D4B9E;
            background: #fff;
            cursor: pointer;
            transition: background 0.15s;
        }

        .btn-outline:hover {
            background: #F0F4FF;
        }

        .btn-primary {
            padding: 6px 14px;
            border-radius: 8px;
            border: none;
            font-size: 11.5px;
            font-weight: 700;
            color: #fff;
            background: #2D4B9E;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: background 0.15s;
        }

        .btn-primary:hover {
            background: #1A3C8A;
        }

        .pulse-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #D0021B;
            display: inline-block;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1
            }

            50% {
                opacity: 0.35
            }
        }

        /* BOTTOM ROW */
        .bottom-row {
            display: grid;
            grid-template-columns: 1fr 340px;
            gap: 12px;
        }

        .section-card {
            background: #fff;
            border-radius: 12px;
            border: 1px solid rgba(0, 0, 0, 0.06);
            padding: 16px;
        }

        .sc-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
        }

        .sc-title {
            font-size: 13px;
            font-weight: 700;
            color: #1A1D2E;
        }

        .sc-sub {
            font-size: 10.5px;
            color: #94A3B8;
            margin-top: 1px;
        }

        .view-all {
            font-size: 11px;
            font-weight: 700;
            color: #2D4B9E;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
        }

        .chart-tabs {
            display: flex;
            gap: 4px;
        }

        .chart-tab {
            padding: 4px 10px;
            border-radius: 6px;
            border: 1px solid rgba(0, 0, 0, 0.08);
            font-size: 10.5px;
            font-weight: 700;
            color: #94A3B8;
            cursor: pointer;
            background: #F8F9FF;
            transition: all 0.15s;
        }

        .chart-tab.active {
            background: #2D4B9E;
            color: #fff;
            border-color: #2D4B9E;
        }

        /* RIGHT PANEL */
        .right-panel {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        /* DONUT SECTION */
        .donut-wrap {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .donut-canvas-wrap {
            width: 90px;
            height: 90px;
            flex-shrink: 0;
            position: relative;
        }

        .donut-center {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .donut-center-val {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 20px;
            color: #1A1D2E;
            line-height: 1;
        }

        .donut-center-lbl {
            font-size: 9px;
            color: #94A3B8;
            font-weight: 600;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 6px;
        }

        .legend-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .legend-label {
            font-size: 11px;
            color: #64748B;
            font-weight: 500;
        }

        .legend-pct {
            margin-left: auto;
            font-size: 11px;
            font-weight: 700;
            color: #1A1D2E;
        }

        /* GOALS */
        .goal-item {
            margin-bottom: 12px;
        }

        .goal-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
        }

        .goal-name {
            font-size: 11.5px;
            font-weight: 600;
            color: #1A1D2E;
        }

        .goal-nums {
            font-size: 11px;
            color: #94A3B8;
        }

        .goal-bar-track {
            height: 5px;
            background: #F0F2FA;
            border-radius: 999px;
            overflow: hidden;
        }

        .goal-bar-fill {
            height: 100%;
            border-radius: 999px;
            transition: width 1s ease;
        }

        /* RECENT TABLE */
        .rtable {
            width: 100%;
            border-collapse: collapse;
        }

        .rtable th {
            font-size: 9.5px;
            font-weight: 800;
            color: #94A3B8;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 0 8px 8px;
            text-align: left;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .rtable td {
            font-size: 12px;
            color: #1A1D2E;
            padding: 9px 8px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.04);
            vertical-align: middle;
        }

        .rtable tr:last-child td {
            border-bottom: none;
        }

        .rtable tr:hover td {
            background: #F8F9FF;
        }

        .td-avatar {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #E0E7FF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 800;
            color: #2D4B9E;
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 2px 8px;
            border-radius: 999px;
            font-size: 10px;
            font-weight: 700;
        }

        .sp-green {
            background: rgba(26, 122, 60, 0.09);
            color: #1A7A3C;
        }

        .sp-amber {
            background: rgba(217, 119, 6, 0.09);
            color: #D97706;
        }

        .sp-red {
            background: rgba(208, 2, 27, 0.08);
            color: #D0021B;
        }

        .sp-blue {
            background: rgba(45, 75, 158, 0.09);
            color: #2D4B9E;
        }

        .amount-pos {
            color: #1A7A3C;
            font-weight: 700;
        }

        .amount-neg {
            color: #D0021B;
            font-weight: 700;
        }

        /* MIDDLE ROW */
        .middle-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 14px;
        }

        /* ACTIVITY FEED */
        .activity-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 8px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.04);
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .act-icon {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 14px;
        }

        .act-text {
            font-size: 11.5px;
            color: #1A1D2E;
            font-weight: 500;
            line-height: 1.4;
        }

        .act-time {
            font-size: 10px;
            color: #94A3B8;
            margin-top: 1px;
        }
    </style>
</head>

<body class="flex h-screen overflow-hidden">

    <!-- ══════ SIDEBAR ══════ -->
    <aside id="sidebar">
        <div class="sb-logo">
            <div class="sb-logo-row">
                <div class="sb-logo-box">
                    <img src="{{ asset('storage/logo-h.webp') }}" alt="FJM"
                        style="height:18px;object-fit:contain;filter:brightness(0) invert(1);" />
                </div>
                <div>
                    <div class="sb-brand-main">PT. FJM</div>
                    <div class="sb-brand-sub">Portal Pelamar</div>
                </div>
            </div>
        </div>

        <div class="sb-user" style="display:flex;align-items:center;gap:8px;">
            <div class="sb-user-avatar">MD</div>
            <div>
                <div class="sb-user-name">Mareta D.</div>
                <div class="sb-user-role">Kandidat</div>
            </div>
            <div style="margin-left:auto;width:7px;height:7px;border-radius:50%;background:#1A7A3C;flex-shrink:0;">
            </div>
        </div>

        <div class="sb-section">
            <div class="sb-section-label">Utama</div>
            <a class="nav-link active" href="#">
                <svg class="nav-icon" style="width:16px;height:16px;color:inherit" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="nav-label">Overview</span>
            </a>
            <a class="nav-link" href="#">
                <svg class="nav-icon" style="width:16px;height:16px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="nav-label">Lowongan</span>
            </a>
            <a class="nav-link" href="#">
                <svg class="nav-icon" style="width:16px;height:16px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="nav-label">Lamaran</span>
            </a>
            <a class="nav-link" href="#">
                <svg class="nav-icon" style="width:16px;height:16px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span class="nav-label">Profil</span>
            </a>
        </div>

        <div class="sb-section">
            <div class="sb-section-label">Akun</div>
            <a class="nav-link" href="#">
                <svg class="nav-icon" style="width:16px;height:16px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="nav-label">Profil</span>
            </a>
            <a class="nav-link" href="#">
                <svg class="nav-icon" style="width:16px;height:16px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="nav-label">Pengaturan</span>
            </a>
        </div>

        <div class="sb-bottom">
            <a class="nav-link danger" href="#">
                <svg class="nav-icon" style="width:16px;height:16px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="nav-label">Keluar</span>
            </a>
        </div>
    </aside>

    <!-- ══════ MAIN ══════ -->
    <div id="main-content">

        <!-- TOPBAR -->
        <div id="topbar">
            <div class="search-box">
                <svg class="search-icon" style="width:13px;height:13px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Cari lowongan, status lamaran..." />
                <span class="search-kbd">⌘K</span>
            </div>
            <div style="flex:1"></div>
            <div style="display:flex;align-items:center;gap:6px;">
                <div class="tb-badge" style="position:relative;">
                    <svg style="width:14px;height:14px" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="notif-dot"></span>
                </div>
                <div class="tb-divider"></div>
                <div class="tb-user">
                    <div class="tb-avatar">MD</div>
                    <span class="tb-name">Mareta D.</span>
                    <svg class="tb-caret" style="width:12px;height:12px" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- PAGE CONTENT -->
        <div id="page-content">

            <!-- PAGE HEADER -->
            <div class="page-hdr">
                <div class="page-hdr-top">
                    <div>
                        <div style="display:flex;align-items:center;gap:6px;margin-bottom:2px;">
                            <span class="pulse-dot"></span>
<span class="pg-eyebrow">Portal Pelamar · PT. Fokus Jasa Mitra</span>
                    </div>
                    <div class="pg-title">DASHBOARD <span>PELAMAR</span></div>
                    <div class="pg-sub">Selamat datang, Mareta Dwiningrum — pantau status lamaran dan perkembangan posisi Anda.</div>
                </div>
                    <div class="pg-actions">
                        <button class="btn-outline">
                            <svg style="width:12px;height:12px;display:inline;margin-right:4px" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Unggah CV
                        </button>
                        <button class="btn-primary">
                            <svg style="width:12px;height:12px" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-3-3v6" />
                            </svg>
                            Cari Lowongan
                        </button>
                    </div>
                </div>
            </div>

            <!-- STAT CARDS ROW -->
            <div class="stat-grid">

                <!-- Total Lamaran -->
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-label">Total Lamaran</div>
                        <div class="stat-icon-box" style="background:rgba(45,75,158,0.09);">
                            <svg style="width:16px;height:16px;color:#2D4B9E" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="stat-val">12</div>
                    <div class="stat-sub">Lamaran dikirim</div>
                    <span class="stat-trend trend-up">↑ +2 bulan ini</span>
                    <div class="sparkline-wrap"><canvas id="spark1"></canvas></div>
                </div>

                <!-- Tahap Seleksi -->
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-label">Tahap Seleksi</div>
                        <div class="stat-icon-box" style="background:rgba(26,122,60,0.09);">
                            <svg style="width:16px;height:16px;color:#1A7A3C" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="stat-val">3</div>
                    <div class="stat-sub">Tahap aktif</div>
                    <span class="stat-trend trend-up">↑ Interview lanjutan</span>
                    <div class="sparkline-wrap"><canvas id="spark2"></canvas></div>
                </div>

                <!-- Tawaran -->
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-label">Tawaran</div>
                        <div class="stat-icon-box" style="background:rgba(217,119,6,0.09);">
                            <svg style="width:16px;height:16px;color:#D97706" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="stat-val">1</div>
                    <div class="stat-sub">Penawaran aktif</div>
                    <span class="stat-trend trend-up">↑ Mendapat tawaran</span>
                    <div class="sparkline-wrap"><canvas id="spark3"></canvas></div>
                </div>

                <!-- Ditolak -->
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-label">Ditolak</div>
                        <div class="stat-icon-box" style="background:rgba(208,2,27,0.08);">
                            <svg style="width:16px;height:16px;color:#D0021B" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 6L6 18M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                    <div class="stat-val">2</div>
                    <div class="stat-sub">Lamaran ditolak</div>
                    <span class="stat-trend trend-down">↓ Tetap semangat</span>
                    <div class="sparkline-wrap"><canvas id="spark4"></canvas></div>
                </div>
            </div>

            <!-- MIDDLE ROW: Chart + Right -->
            <div class="bottom-row">

                <!-- Area Chart: Riwayat Lamaran -->
                <div class="section-card">
                    <div class="sc-header">
                        <div>
                            <div class="sc-title">Riwayat Lamaran</div>
                            <div class="sc-sub">Jumlah lamaran dan interview per bulan</div>
                        </div>
                        <div style="display:flex;align-items:center;gap:8px;">
                            <div class="chart-tabs">
                                <button class="chart-tab active" onclick="setTab(this,'3b')">3B</button>
                                <button class="chart-tab" onclick="setTab(this,'6b')">6B</button>
                                <button class="chart-tab" onclick="setTab(this,'1t')">1T</button>
                            </div>
                        </div>
                    </div>
                    <div style="height:220px;position:relative;">
                        <canvas id="areaChart"></canvas>
                    </div>

                    <!-- Tabel Lamaran Terakhir -->
                    <div style="margin-top:18px;">
                        <div class="sc-header" style="margin-bottom:10px;">
                            <div>
                                <div class="sc-title">Lamaran Terbaru</div>
                                <div class="sc-sub">5 lamaran terbaru Anda</div>
                            </div>
                            <button class="view-all">Lihat Semua →</button>
                        </div>
                        <table class="rtable">
                            <thead>
                                <tr>
                                    <th>Posisi</th>
                                    <th>Perusahaan</th>
                                    <th>Tanggal</th>
                                    <th>Tahap</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-weight:600;color:#1A1D2E;">Staf Administrasi</td>
                                    <td style="color:#94A3B8;">PT. Fokus Jasa Mitra</td>
                                    <td style="color:#94A3B8;">24 Jun 2025</td>
                                    <td>Interview 2</td>
                                    <td><span class="status-pill sp-amber">Menunggu</span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight:600;color:#1A1D2E;">Teknisi Lapangan</td>
                                    <td style="color:#94A3B8;">PT. Fokus Jasa Mitra</td>
                                    <td style="color:#94A3B8;">20 Jun 2025</td>
                                    <td>Interview 1</td>
                                    <td><span class="status-pill sp-blue">Jadwal</span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight:600;color:#1A1D2E;">Quality Control</td>
                                    <td style="color:#94A3B8;">PT. Fokus Jasa Mitra</td>
                                    <td style="color:#94A3B8;">15 Jun 2025</td>
                                    <td>Penawaran</td>
                                    <td><span class="status-pill sp-green">Terima</span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight:600;color:#1A1D2E;">Operator Produksi</td>
                                    <td style="color:#94A3B8;">PT. Fokus Jasa Mitra</td>
                                    <td style="color:#94A3B8;">08 Jun 2025</td>
                                    <td>Screening</td>
                                    <td><span class="status-pill sp-blue">Diproses</span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight:600;color:#1A1D2E;">Staf Administrasi</td>
                                    <td style="color:#94A3B8;">PT. FJM</td>
                                    <td style="color:#94A3B8;">30 Mei 2025</td>
                                    <td>Rekrutmen</td>
                                    <td><span class="status-pill sp-red">Ditolak</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- RIGHT PANEL -->
                <div class="right-panel">

                    <!-- Donut: Status Lamaran -->
                    <div class="section-card">
                        <div class="sc-header" style="margin-bottom:12px;">
                            <div>
                                <div class="sc-title">Status Lamaran</div>
                                <div class="sc-sub">Distribusi status aplikasi Anda</div>
                            </div>
                        </div>
                        <div class="donut-wrap">
                            <div class="donut-canvas-wrap">
                                <canvas id="donutChart"></canvas>
                                <div class="donut-center">
                                    <div class="donut-center-val">12</div>
                                    <div class="donut-center-lbl">Total</div>
                                </div>
                            </div>
                            <div style="flex:1;">
                                <div class="legend-item">
                                    <span class="legend-dot" style="background:#2D4B9E;"></span>
                                    <span class="legend-label">Dilamar</span>
                                    <span class="legend-pct">50%</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-dot" style="background:#D97706;"></span>
                                    <span class="legend-label">Interview</span>
                                    <span class="legend-pct">25%</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-dot" style="background:#1A7A3C;"></span>
                                    <span class="legend-label">Offer</span>
                                    <span class="legend-pct">8%</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-dot" style="background:#E5E7EB;"></span>
                                    <span class="legend-label">Ditolak</span>
                                    <span class="legend-pct">17%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Goals: Target Lamaran -->
                    <div class="section-card">
                        <div class="sc-header" style="margin-bottom:14px;">
                            <div>
                                <div class="sc-title">Target Lamaran</div>
                                <div class="sc-sub">Progress pencapaian posisi</div>
                            </div>
                        </div>

                        <div class="goal-item">
                            <div class="goal-row">
                                <span class="goal-name">Lamaran Bulan Ini</span>
                                <span class="goal-nums">12 / 15</span>
                            </div>
                            <div class="goal-bar-track">
                                <div class="goal-bar-fill" style="width:80%;background:#2D4B9E;"></div>
                            </div>
                        </div>

                        <div class="goal-item">
                            <div class="goal-row">
                                <span class="goal-name">Interview Dijalani</span>
                                <span class="goal-nums">3 / 5</span>
                            </div>
                            <div class="goal-bar-track">
                                <div class="goal-bar-fill" style="width:60%;background:#D97706;"></div>
                            </div>
                        </div>

                        <div class="goal-item" style="margin-bottom:0;">
                            <div class="goal-row">
                                <span class="goal-name">Tawaran Diperoleh</span>
                                <span class="goal-nums">1 / 2</span>
                            </div>
                            <div class="goal-bar-track">
                                <div class="goal-bar-fill" style="width:50%;background:#1A7A3C;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="section-card" style="flex:1;">
                        <div class="sc-header" style="margin-bottom:8px;">
                            <div>
                                <div class="sc-title">Aktivitas Terkini</div>
                                <div class="sc-sub">24 jam terakhir</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="act-icon" style="background:rgba(26,122,60,0.09);">
                                <svg style="width:14px;height:14px;color:#1A7A3C" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="act-text">Interview kedua untuk posisi Staf Administrasi dijadwalkan.</div>
                                <div class="act-time">2 jam lalu</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="act-icon" style="background:rgba(45,75,158,0.09);">
                                <svg style="width:14px;height:14px;color:#2D4B9E" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="act-text">Lamaran Teknisi Lapangan diterima tahapan interview.</div>
                                <div class="act-time">5 jam lalu</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="act-icon" style="background:rgba(217,119,6,0.09);">
                                <svg style="width:14px;height:14px;color:#D97706" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="act-text">Penawaran kerja untuk posisi Quality Control tersedia.</div>
                                <div class="act-time">1 hari lalu</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script>
        const fjmBlue = '#2D4B9E',
            fjmRed = '#D0021B',
            fjmGreen = '#1A7A3C',
            fjmAmber = '#D97706';

        function mkSparkline(id, data, color) {
            const ctx = document.getElementById(id);
            if (!ctx) return;
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data.map((_, i) => i),
                    datasets: [{
                        data,
                        borderColor: color,
                        borderWidth: 1.5,
                        fill: true,
                        backgroundColor: color + '18',
                        pointRadius: 0,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            enabled: false
                        }
                    },
                    scales: {
                        x: {
                            display: false
                        },
                        y: {
                            display: false
                        }
                    }
                }
            });
        }
        mkSparkline('spark1', [80, 82, 80, 81, 83, 82, 84, 83, 85, 84, 85, 86, 85, 87, 86, 88, 87, 88, 87, 89], fjmBlue);
        mkSparkline('spark2', [2000, 2050, 2100, 2150, 2180, 2200, 2220, 2240, 2260, 2280, 2300, 2310, 2320, 2330, 2350,
            2360, 2370, 2380, 2390, 2400
        ], fjmGreen);
        mkSparkline('spark3', [200, 210, 215, 220, 230, 228, 235, 240, 245, 250, 255, 260, 265, 270, 275, 280, 285, 290,
            295, 301
        ], fjmAmber);
        mkSparkline('spark4', [9500, 9200, 9000, 8800, 8600, 8400, 8300, 8200, 8100, 8000, 7900, 7800, 7700, 7650, 7600],
            fjmRed);

        const areaCtx = document.getElementById('areaChart');
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        new Chart(areaCtx, {
            type: 'line',
            data: {
                labels: months,
                datasets: [{
                        label: 'Lamaran',
                        data: [2, 3, 1, 4, 3, 5, 4, 4, 5, 3, 2, null],
                        borderColor: fjmBlue,
                        backgroundColor: 'rgba(45,75,158,0.08)',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4,
                        pointRadius: 3,
                        pointBackgroundColor: fjmBlue
                    },
                    {
                        label: 'Interview',
                        data: [0, 1, 0, 1, 2, 1, 2, 2, 1, null, null, null],
                        borderColor: fjmAmber,
                        backgroundColor: 'rgba(217,119,6,0.06)',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4,
                        pointRadius: 3,
                        pointBackgroundColor: fjmAmber
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    mode: 'index',
                    intersect: false
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        align: 'end',
                        labels: {
                            boxWidth: 8,
                            boxHeight: 8,
                            usePointStyle: true,
                            pointStyle: 'circle',
                            font: {
                                size: 11,
                                family: 'Plus Jakarta Sans'
                            },
                            color: '#64748B'
                        }
                    },
                    tooltip: {
                        backgroundColor: '#1A1D2E',
                        titleColor: '#fff',
                        bodyColor: 'rgba(255,255,255,0.7)',
                        padding: 10,
                        cornerRadius: 8,
                        titleFont: {
                            size: 11,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 11
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                size: 11,
                                family: 'Plus Jakarta Sans'
                            },
                            color: '#94A3B8'
                        }
                    },
                    y: {
                        grid: {
                            color: 'rgba(0,0,0,0.04)'
                        },
                        ticks: {
                            font: {
                                size: 11,
                                family: 'Plus Jakarta Sans'
                            },
                            color: '#94A3B8',
                            callback: v => v + 'K'
                        }
                    }
                }
            }
        });

        const donutCtx = document.getElementById('donutChart');
        new Chart(donutCtx, {
            type: 'doughnut',
            data: {
                labels: ['Dilamar', 'Interview', 'Offer', 'Ditolak'],
                datasets: [{
                    data: [6, 3, 1, 2],
                    backgroundColor: [fjmBlue, fjmAmber, fjmGreen, '#E5E7EB'],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '68%',
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#1A1D2E',
                        titleColor: '#fff',
                        bodyColor: 'rgba(255,255,255,0.7)',
                        padding: 8,
                        cornerRadius: 8,
                        titleFont: {
                            size: 11,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 11
                        }
                    }
                }
            }
        });

        function setTab(el, val) {
            document.querySelectorAll('.chart-tab').forEach(t => t.classList.remove('active'));
            el.classList.add('active');
        }
    </script>
</body>

</html>
