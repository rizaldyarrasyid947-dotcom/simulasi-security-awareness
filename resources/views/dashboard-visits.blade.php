<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Event Space - Dashboard</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 240px;
            height: 100vh;
            background: #ffffff;
            border-right: 1px solid #e5e7eb;
            padding: 28px 18px;
        }

        .logo {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 35px;
            padding-left: 12px;
        }

        .logo span {
            color: #6b7280;
            font-weight: 400;
        }

        .menu-title {
            font-size: 11px;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0 12px;
            margin-bottom: 10px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .menu a {
            text-decoration: none;
            color: #6b7280;
            padding: 12px;
            border-radius: 8px;
            font-size: 14px;
        }

        .menu a:hover,
        .menu a.active {
            background: #f1f5f9;
            color: #111827;
        }

        .main {
            margin-left: 240px;
            padding: 35px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .topbar h1 {
            margin: 0;
            font-size: 28px;
        }

        .topbar p {
            margin: 7px 0 0;
            color: #6b7280;
            font-size: 14px;
        }

        .event-badge {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 13px;
            color: #6b7280;
        }

        .overview {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 28px;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 22px;
        }

        .card-label {
            font-size: 13px;
            color: #6b7280;
            margin-bottom: 10px;
        }

        .card-value {
            font-size: 27px;
            font-weight: 700;
        }

        .section {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
        }

        .section-header {
            padding: 22px 24px;
            border-bottom: 1px solid #e5e7eb;
        }

        .section-header h2 {
            margin: 0;
            font-size: 18px;
        }

        .section-header p {
            margin: 6px 0 0;
            font-size: 13px;
            color: #6b7280;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 760px;
        }

        th {
            background: #f8fafc;
            color: #6b7280;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .4px;
            font-weight: 600;
            padding: 14px 18px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 16px 18px;
            border-bottom: 1px solid #f1f5f9;
            font-size: 14px;
            vertical-align: middle;
        }

        tbody tr:hover {
            background: #fafafa;
        }

        .token {
            font-weight: 600;
            color: #111827;
        }

        .device {
            color: #374151;
        }

        .browser {
            color: #6b7280;
        }

        .maps-btn {
            display: inline-block;
            text-decoration: none;
            background: #f3f4f6;
            color: #374151;
            padding: 8px 12px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: 600;
        }

        .maps-btn:hover {
            background: #e5e7eb;
        }

        .accuracy {
            font-weight: 600;
        }

        .time {
            color: #6b7280;
            white-space: nowrap;
        }

        .empty {
            text-align: center;
            padding: 45px 20px;
            color: #9ca3af;
        }

        .notice {
            margin-top: 20px;
            padding: 16px 18px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            color: #6b7280;
            font-size: 13px;
            line-height: 1.6;
        }

        @media (max-width: 900px) {

            .sidebar {
                position: static;
                width: 100%;
                height: auto;
                border-right: none;
                border-bottom: 1px solid #e5e7eb;
            }

            .menu {
                flex-direction: row;
                flex-wrap: wrap;
            }

            .main {
                margin-left: 0;
                padding: 22px;
            }

            .overview {
                grid-template-columns: 1fr;
            }

            .topbar {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            EVENT <span>SPACE</span>
        </div>

        <div class="menu-title">
            Menu
        </div>

        <nav class="menu">
            <a href="#" class="active">
                Overview
            </a>

            <a href="#peserta">
                Data Peserta
            </a>

            <a href="#lokasi">
                Location Check-in
            </a>

            <a href="#aktivitas">
                Aktivitas Terbaru
            </a>
        </nav>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="main">

        <!-- HEADER -->
        <div class="topbar">

            <div>
                <h1>Event Management Dashboard</h1>

                <p>
                    Monitoring peserta dan data check-in event
                </p>
            </div>

            <div class="event-badge">
                xxxxxxxxxxxxxxxxxxx
            </div>

        </div>


        <!-- OVERVIEW -->
        <section class="overview">

            <div class="card">

                <div class="card-label">
                    Total Peserta
                </div>

                <div class="card-value">
                    {{ $visits->count() }}
                </div>

            </div>


            <div class="card">

                <div class="card-label">
                    Location Check-in
                </div>

                <div class="card-value">
                    {{ $visits->whereNotNull('latitude')->count() }}
                </div>

            </div>


            <div class="card">

                <div class="card-label">
                    Aktivitas Terbaru
                </div>

                <div class="card-value">

                    @if($visits->count() > 0)
                        {{ optional($visits->first()->accessed_at)->format('d M Y') }}
                    @else
                        -
                    @endif

                </div>

            </div>

        </section>


        <!-- DATA PESERTA -->
        <section class="section" id="peserta">

            <div class="section-header">

                <h2>
                    Data Peserta
                </h2>

                <p>
                    Daftar peserta yang mengikuti simulasi.
                </p>

            </div>


            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>
                            <th>Peserta / Token</th>
                            <th>Device</th>
                            <th>Browser</th>
                            <th>Lokasi</th>
                            <th>Akurasi</th>
                            <th>Waktu</th>
                        </tr>

                    </thead>


                    <tbody>

                        @forelse($visits as $visit)

                            <tr>

                                <!-- TOKEN -->
                                <td>
                                    <div class="token">
                                        {{ $visit->token ?? '-' }}
                                    </div>
                                </td>


                                <!-- DEVICE -->
                                <td>
                                    <div class="device">
                                        {{ $visit->device ?? '-' }}

                                        @if(!empty($visit->platform))
                                            / {{ $visit->platform }}
                                        @endif
                                    </div>
                                </td>


                                <!-- BROWSER -->
                                <td>
                                    <div class="browser">
                                        {{ $visit->browser ?? '-' }}
                                    </div>
                                </td>


                                <!-- LOCATION -->
                                <td id="lokasi">

                                    @if($visit->latitude !== null && $visit->longitude !== null)

                                        <a
                                            class="maps-btn"
                                            href="https://www.google.com/maps?q={{ $visit->latitude }},{{ $visit->longitude }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                        >
                                            📍 Lihat Maps
                                        </a>

                                    @else

                                        <span>-</span>

                                    @endif

                                </td>


                                <!-- ACCURACY -->
                                <td>

                                    <span class="accuracy">

                                        {{ $visit->accuracy !== null
                                            ? number_format((float)$visit->accuracy, 0) . ' m'
                                            : '-'
                                        }}

                                    </span>

                                </td>


                                <!-- WAKTU -->
                                <td>

                                    <span class="time">

                                        @if($visit->accessed_at)
                                            {{ \Carbon\Carbon::parse($visit->accessed_at)->format('d M Y') }}
                                        @else
                                            -
                                        @endif

                                    </span>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6" class="empty">

                                    Belum ada data peserta.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </section>


        <!-- NOTICE -->
        <div class="notice" id="aktivitas">

            <strong>Informasi Event</strong><br>

            Data lokasi yang ditampilkan hanya berasal dari peserta
            yang memberikan izin lokasi melalui browser untuk keperluan
            simulasi security awareness.

        </div>

    </main>

</body>
</html>