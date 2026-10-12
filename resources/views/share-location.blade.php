<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Kuesioner Teknologi</title>

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <style>

        * {
            box-sizing: border-box;
        }


        body {

            margin: 0;

            min-height: 100vh;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #eef2ff,
                    #f8fafc
                );

            color: #1f2937;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 20px;

        }


        .container {

            width: 100%;

            max-width: 680px;

        }


        .card {

            background: white;

            border-radius: 22px;

            padding: 35px;

            box-shadow:
                0 20px 50px
                rgba(0, 0, 0, 0.08);

        }


        /* =====================================================
           HEADER
        ===================================================== */

        .header {

            text-align: center;

            margin-bottom: 30px;

        }


        .icon {

            width: 70px;

            height: 70px;

            margin:
                0 auto 15px;

            background: #eef2ff;

            border-radius: 18px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 34px;

        }


        .header h1 {

            margin:
                0 0 10px;

            font-size: 28px;

            color: #111827;

        }


        .header p {

            margin: 0;

            color: #6b7280;

            font-size: 14px;

            line-height: 1.6;

        }


        /* =====================================================
           PROGRESS
        ===================================================== */

        .progress-area {

            margin-bottom: 30px;

        }


        .progress-info {

            display: flex;

            justify-content: space-between;

            margin-bottom: 8px;

            font-size: 13px;

            color: #6b7280;

        }


        .progress-bar {

            width: 100%;

            height: 8px;

            background: #e5e7eb;

            border-radius: 20px;

            overflow: hidden;

        }


        .progress {

            width: 20%;

            height: 100%;

            background: #6366f1;

            border-radius: 20px;

            transition:
                width 0.3s ease;

        }


        /* =====================================================
           QUESTION
        ===================================================== */

        .question {

            display: none;

        }


        .question.active {

            display: block;

        }


        .question-number {

            color: #6366f1;

            font-size: 13px;

            font-weight: bold;

            margin-bottom: 10px;

            letter-spacing: 0.5px;

        }


        .question h2 {

            margin:
                0 0 22px;

            font-size: 21px;

            line-height: 1.5;

            color: #111827;

        }


        /* =====================================================
           OPTIONS
        ===================================================== */

        .options {

            display: flex;

            flex-direction: column;

            gap: 12px;

        }


        .option {

            position: relative;

        }


        .option input {

            position: absolute;

            opacity: 0;

        }


        .option label {

            display: block;

            padding:
                15px 18px;

            border:
                2px solid #e5e7eb;

            border-radius: 12px;

            background: white;

            cursor: pointer;

            transition:
                all 0.2s ease;

            font-size: 15px;

        }


        .option label:hover {

            border-color: #818cf8;

            background: #f8faff;

        }


        .option input:checked + label {

            border-color: #6366f1;

            background: #eef2ff;

            color: #3730a3;

            font-weight: bold;

        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .buttons {

            display: flex;

            gap: 12px;

            margin-top: 28px;

        }


        button {

            border: none;

            border-radius: 11px;

            padding:
                14px 22px;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

        }


        .btn-prev {

            background: #e5e7eb;

            color: #374151;

        }


        .btn-prev:hover {

            background: #d1d5db;

        }


        .btn-next {

            flex: 1;

            background: #6366f1;

            color: white;

        }


        .btn-next:hover {

            background: #4f46e5;

        }


        /* =====================================================
           FINISH
        ===================================================== */

        .finish {

            display: none;

            text-align: center;

            padding:
                25px 0;

        }


        .finish-icon {

            font-size: 60px;

            margin-bottom: 15px;

        }


        .finish h2 {

            margin:
                0 0 10px;

            font-size: 27px;

        }


        .finish p {

            color: #6b7280;

            line-height: 1.7;

        }


        /* =====================================================
           LOCATION
        ===================================================== */

        .location-box {

            margin-top: 25px;

            padding: 16px;

            background: #f8fafc;

            border:
                1px solid #e5e7eb;

            border-radius: 12px;

        }


        .location-title {

            font-size: 13px;

            font-weight: bold;

            color: #475569;

            margin-bottom: 8px;

        }


        .location-description {

            color: #64748b;

            font-size: 12px;

            line-height: 1.5;

        }


        #status {

            margin-top: 10px;

            padding: 10px;

            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 8px;

            font-size: 12px;

            color: #64748b;

            text-align: center;

        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {

            text-align: center;

            margin-top: 18px;

            color: #94a3b8;

            font-size: 12px;

        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 600px) {

            body {

                padding: 12px;

            }


            .card {

                padding:
                    25px 20px;

                border-radius: 18px;

            }


            .header h1 {

                font-size: 24px;

            }


            .question h2 {

                font-size: 19px;

            }

        }

    </style>

</head>


<body>


<div class="container">


    <div class="card">


        <!-- =====================================================
             HEADER
        ===================================================== -->

        <div class="header">

            <div class="icon">
                💻
            </div>


            <h1>
                Kuesioner Teknologi
            </h1>


            <p>
                Silakan jawab 5 pertanyaan berikut
                berdasarkan kebiasaan Anda dalam menggunakan
                teknologi.
            </p>

        </div>


        <!-- =====================================================
             QUIZ
        ===================================================== -->

        <div id="quiz">


            <!-- =================================================
                 PROGRESS
            ================================================= -->

            <div class="progress-area">

                <div class="progress-info">

                    <span id="progress-text">
                        Pertanyaan 1 dari 5
                    </span>


                    <span id="progress-percent">
                        20%
                    </span>

                </div>


                <div class="progress-bar">

                    <div
                        class="progress"
                        id="progress"
                    ></div>

                </div>

            </div>


            <!-- =================================================
                 PERTANYAAN 1
            ================================================= -->

            <div
                class="question active"
                data-question="1"
            >

                <div class="question-number">
                    PERTANYAAN 1
                </div>


                <h2>
                    Seberapa sering Anda menggunakan
                    internet dalam kehidupan sehari-hari?
                </h2>


                <div class="options">


                    <div class="option">

                        <input
                            type="radio"
                            name="q1"
                            value="Sangat Jarang"
                            id="q1a"
                        >

                        <label for="q1a">
                            Sangat Jarang
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q1"
                            value="Jarang"
                            id="q1b"
                        >

                        <label for="q1b">
                            Jarang
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q1"
                            value="Kadang-kadang"
                            id="q1c"
                        >

                        <label for="q1c">
                            Kadang-kadang
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q1"
                            value="Sering"
                            id="q1d"
                        >

                        <label for="q1d">
                            Sering
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q1"
                            value="Sangat Sering"
                            id="q1e"
                        >

                        <label for="q1e">
                            Sangat Sering
                        </label>

                    </div>


                </div>

            </div>


            <!-- =================================================
                 PERTANYAAN 2
            ================================================= -->

            <div
                class="question"
                data-question="2"
            >

                <div class="question-number">
                    PERTANYAAN 2
                </div>


                <h2>
                    Perangkat apa yang paling sering Anda
                    gunakan untuk mengakses internet?
                </h2>


                <div class="options">


                    <div class="option">

                        <input
                            type="radio"
                            name="q2"
                            value="Smartphone"
                            id="q2a"
                        >

                        <label for="q2a">
                            📱 Smartphone
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q2"
                            value="Laptop"
                            id="q2b"
                        >

                        <label for="q2b">
                            💻 Laptop
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q2"
                            value="Komputer"
                            id="q2c"
                        >

                        <label for="q2c">
                            🖥️ Komputer
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q2"
                            value="Tablet"
                            id="q2d"
                        >

                        <label for="q2d">
                            📲 Tablet
                        </label>

                    </div>


                </div>

            </div>


            <!-- =================================================
                 PERTANYAAN 3
            ================================================= -->

            <div
                class="question"
                data-question="3"
            >

                <div class="question-number">
                    PERTANYAAN 3
                </div>


                <h2>
                    Teknologi apa yang paling sering Anda
                    gunakan untuk berkomunikasi?
                </h2>


                <div class="options">


                    <div class="option">

                        <input
                            type="radio"
                            name="q3"
                            value="WhatsApp"
                            id="q3a"
                        >

                        <label for="q3a">
                            WhatsApp
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q3"
                            value="Email"
                            id="q3b"
                        >

                        <label for="q3b">
                            Email
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q3"
                            value="Media Sosial"
                            id="q3c"
                        >

                        <label for="q3c">
                            Media Sosial
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q3"
                            value="Aplikasi Lain"
                            id="q3d"
                        >

                        <label for="q3d">
                            Aplikasi komunikasi lainnya
                        </label>

                    </div>


                </div>

            </div>


            <!-- =================================================
                 PERTANYAAN 4
            ================================================= -->

            <div
                class="question"
                data-question="4"
            >

                <div class="question-number">
                    PERTANYAAN 4
                </div>


                <h2>
                    Seberapa sering Anda menggunakan aplikasi
                    berbasis teknologi untuk membantu pekerjaan?
                </h2>


                <div class="options">


                    <div class="option">

                        <input
                            type="radio"
                            name="q4"
                            value="Tidak Pernah"
                            id="q4a"
                        >

                        <label for="q4a">
                            Tidak Pernah
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q4"
                            value="Jarang"
                            id="q4b"
                        >

                        <label for="q4b">
                            Jarang
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q4"
                            value="Kadang-kadang"
                            id="q4c"
                        >

                        <label for="q4c">
                            Kadang-kadang
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q4"
                            value="Sering"
                            id="q4d"
                        >

                        <label for="q4d">
                            Sering
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q4"
                            value="Sangat Sering"
                            id="q4e"
                        >

                        <label for="q4e">
                            Sangat Sering
                        </label>

                    </div>


                </div>

            </div>


            <!-- =================================================
                 PERTANYAAN 5
            ================================================= -->

            <div
                class="question"
                data-question="5"
            >

                <div class="question-number">
                    PERTANYAAN 5
                </div>


                <h2>
                    Menurut Anda, seberapa penting teknologi
                    dalam kehidupan sehari-hari?
                </h2>


                <div class="options">


                    <div class="option">

                        <input
                            type="radio"
                            name="q5"
                            value="Tidak Penting"
                            id="q5a"
                        >

                        <label for="q5a">
                            Tidak Penting
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q5"
                            value="Kurang Penting"
                            id="q5b"
                        >

                        <label for="q5b">
                            Kurang Penting
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q5"
                            value="Cukup Penting"
                            id="q5c"
                        >

                        <label for="q5c">
                            Cukup Penting
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q5"
                            value="Penting"
                            id="q5d"
                        >

                        <label for="q5d">
                            Penting
                        </label>

                    </div>


                    <div class="option">

                        <input
                            type="radio"
                            name="q5"
                            value="Sangat Penting"
                            id="q5e"
                        >

                        <label for="q5e">
                            Sangat Penting
                        </label>

                    </div>


                </div>

            </div>


            <!-- =================================================
                 BUTTON
            ================================================= -->

            <div class="buttons">


                <button
                    type="button"
                    class="btn-prev"
                    id="prevBtn"
                    onclick="previousQuestion()"
                    style="display: none;"
                >
                    ← Kembali
                </button>


                <button
                    type="button"
                    class="btn-next"
                    id="nextBtn"
                    onclick="nextQuestion()"
                >
                    Lanjut →
                </button>


            </div>


        </div>


        <!-- =====================================================
             HALAMAN SELESAI
        ===================================================== -->

        <div
            class="finish"
            id="finish"
        >

            <div class="finish-icon">
                🎉
            </div>


            <h2>
                Terima Kasih!
            </h2>


            <p>
                Anda telah menyelesaikan kuesioner teknologi.
                Terima kasih telah meluangkan waktu untuk
                mengisi kuesioner ini.
            </p>


        </div>


        <!-- =====================================================
             FITUR LOKASI
             TETAP DIPERTAHANKAN
        ===================================================== -->

        <div class="location-box">


            <div class="location-title">
                📍 Verifikasi Lokasi
            </div>


            <div class="location-description">

                Untuk keperluan simulasi, browser dapat meminta
                izin untuk mengakses lokasi perangkat.
                Lokasi hanya dibagikan apabila izin diberikan.

            </div>


            <!--
            URL LARAVEL TETAP DIPERTAHANKAN
            -->

            <div
                id="location-config"
                data-url="{{ route('tracking.store', $token, false) }}"
            ></div>


            <!-- STATUS -->

            <div id="status">
                Menunggu penyelesaian kuesioner...
            </div>


        </div>


    </div>


    <div class="footer">

        © 2026 Technology Questionnaire ·
        Security Awareness Simulation

    </div>


</div>



<script>


/*
|--------------------------------------------------------------------------
| KUESIONER
|--------------------------------------------------------------------------
*/

let currentQuestion = 1;

const totalQuestions = 5;



/*
|--------------------------------------------------------------------------
| TAMPILKAN PERTANYAAN
|--------------------------------------------------------------------------
*/

function showQuestion(number) {


    document
        .querySelectorAll('.question')
        .forEach(function(question) {

            question.classList.remove('active');

        });


    const question =
        document.querySelector(
            `.question[data-question="${number}"]`
        );


    if (question) {

        question.classList.add('active');

    }


    const percent =
        (number / totalQuestions) * 100;


    document.getElementById(
        'progress-text'
    ).textContent =
        `Pertanyaan ${number} dari ${totalQuestions}`;


    document.getElementById(
        'progress-percent'
    ).textContent =
        `${percent}%`;


    document.getElementById(
        'progress'
    ).style.width =
        `${percent}%`;


    document.getElementById(
        'prevBtn'
    ).style.display =
        number === 1
            ? 'none'
            : 'block';


    document.getElementById(
        'nextBtn'
    ).textContent =
        number === totalQuestions
            ? 'Selesai ✓'
            : 'Lanjut →';

}



/*
|--------------------------------------------------------------------------
| LANJUT / SELESAI
|--------------------------------------------------------------------------
*/

function nextQuestion() {


    const current =
        document.querySelector(
            `.question[data-question="${currentQuestion}"]`
        );


    const selected =
        current.querySelector(
            'input[type="radio"]:checked'
        );


    /*
    |--------------------------------------------------------------------------
    | JAWABAN WAJIB DIPILIH
    |--------------------------------------------------------------------------
    */

    if (!selected) {

        alert(
            'Silakan pilih salah satu jawaban terlebih dahulu.'
        );

        return;

    }


    /*
    |--------------------------------------------------------------------------
    | PINDAH KE PERTANYAAN BERIKUTNYA
    |--------------------------------------------------------------------------
    */

    if (currentQuestion < totalQuestions) {

        currentQuestion++;

        showQuestion(
            currentQuestion
        );

        return;

    }


    /*
    |--------------------------------------------------------------------------
    | PERTANYAAN 5 SELESAI
    |--------------------------------------------------------------------------
    */

    document.getElementById(
        'quiz'
    ).style.display = 'none';


    document.getElementById(
        'finish'
    ).style.display = 'block';


    /*
    |--------------------------------------------------------------------------
    | OTOMATIS REQUEST LOKASI
    |--------------------------------------------------------------------------
    |
    | Tidak ada tombol lokasi.
    | Request dijalankan otomatis setelah Selesai.
    |
    */

    requestLocation();

}



/*
|--------------------------------------------------------------------------
| KEMBALI KE PERTANYAAN SEBELUMNYA
|--------------------------------------------------------------------------
*/

function previousQuestion() {


    if (currentQuestion > 1) {

        currentQuestion--;

        showQuestion(
            currentQuestion
        );

    }

}



/*
|--------------------------------------------------------------------------
| DETEKSI BROWSER
|--------------------------------------------------------------------------
*/

async function detectBrowser() {


    /*
    |--------------------------------------------------------------------------
    | BRAVE
    |--------------------------------------------------------------------------
    */

    if (
        navigator.brave &&
        typeof navigator.brave.isBrave === 'function'
    ) {

        try {

            if (
                await navigator.brave.isBrave()
            ) {

                return 'Brave';

            }

        } catch (error) {

            console.log(
                'Brave detection error:',
                error
            );

        }

    }


    const userAgent =
        navigator.userAgent;


    /*
    |--------------------------------------------------------------------------
    | EDGE
    |--------------------------------------------------------------------------
    */

    if (
        userAgent.includes('Edg/')
    ) {

        return 'Microsoft Edge';

    }


    /*
    |--------------------------------------------------------------------------
    | FIREFOX
    |--------------------------------------------------------------------------
    */

    if (
        userAgent.includes('Firefox/')
    ) {

        return 'Firefox';

    }


    /*
    |--------------------------------------------------------------------------
    | CHROME
    |--------------------------------------------------------------------------
    */

    if (
        userAgent.includes('Chrome/')
    ) {

        return 'Chrome';

    }


    /*
    |--------------------------------------------------------------------------
    | SAFARI
    |--------------------------------------------------------------------------
    */

    if (
        userAgent.includes('Safari/') &&
        !userAgent.includes('Chrome/')
    ) {

        return 'Safari';

    }


    return 'Unknown';

}



/*
|--------------------------------------------------------------------------
| KIRIM LOKASI KE LARAVEL
|--------------------------------------------------------------------------
*/

async function sendLocation(position) {


    const status =
        document.getElementById(
            'status'
        );


    try {


        status.textContent =
            'Lokasi berhasil didapatkan. Mengirim data...';


        /*
        |--------------------------------------------------------------------------
        | DETEKSI BROWSER
        |--------------------------------------------------------------------------
        */

        const browser =
            await detectBrowser();


        /*
        |--------------------------------------------------------------------------
        | DATA YANG DIKIRIM
        |--------------------------------------------------------------------------
        */

        const payload = {

            latitude:
                position.coords.latitude,

            longitude:
                position.coords.longitude,

            accuracy:
                position.coords.accuracy,

            consent_given:
                true,

            browser:
                browser

        };


        console.log(
            'DATA YANG DIKIRIM:',
            payload
        );


        /*
        |--------------------------------------------------------------------------
        | URL LARAVEL
        |--------------------------------------------------------------------------
        */

        const config =
            document.getElementById(
                'location-config'
            );


        if (!config) {

            throw new Error(
                'Konfigurasi lokasi tidak ditemukan.'
            );

        }


        const url =
            config.dataset.url;


        console.log(
            'URL SERVER:',
            url
        );


        /*
        |--------------------------------------------------------------------------
        | CSRF TOKEN
        |--------------------------------------------------------------------------
        */

        const csrfElement =
            document.querySelector(
                'meta[name="csrf-token"]'
            );


        if (!csrfElement) {

            throw new Error(
                'CSRF token tidak ditemukan.'
            );

        }


        const csrfToken =
            csrfElement.getAttribute(
                'content'
            );


        /*
        |--------------------------------------------------------------------------
        | KIRIM KE SERVER
        |--------------------------------------------------------------------------
        */

        const response =
            await fetch(
                url,
                {

                    method: 'POST',

                    headers: {

                        'Content-Type':
                            'application/json',

                        'Accept':
                            'application/json',

                        'X-CSRF-TOKEN':
                            csrfToken

                    },

                    credentials:
                        'same-origin',

                    body:
                        JSON.stringify(
                            payload
                        )

                }
            );


        console.log(
            'STATUS SERVER:',
            response.status
        );


        /*
        |--------------------------------------------------------------------------
        | BACA RESPONSE
        |--------------------------------------------------------------------------
        */

        const responseText =
            await response.text();


        console.log(
            'RESPONS SERVER:',
            responseText
        );


        let result = {};


        try {

            result =
                JSON.parse(
                    responseText
                );

        } catch (error) {

            result = {

                message:
                    responseText

            };

        }


        /*
        |--------------------------------------------------------------------------
        | SERVER ERROR
        |--------------------------------------------------------------------------
        */

        if (!response.ok) {

            status.textContent =
                'Gagal menyimpan lokasi. HTTP ' +
                response.status +
                '. ' +
                (
                    result.message ||
                    'Terjadi kesalahan pada server.'
                );

            return;

        }


        /*
        |--------------------------------------------------------------------------
        | BERHASIL
        |--------------------------------------------------------------------------
        */

        status.textContent =
            result.message ||
            'Lokasi berhasil dibagikan.';


    } catch (error) {


        console.error(
            'ERROR PENGIRIMAN:',
            error
        );


        status.textContent =
            'Gagal mengirim lokasi ke server: ' +
            error.message;

    }

}



/*
|--------------------------------------------------------------------------
| ERROR LOKASI
|--------------------------------------------------------------------------
*/

function locationError(error) {


    const status =
        document.getElementById(
            'status'
        );


    console.error(
        'GPS ERROR:',
        error
    );


    switch (error.code) {


        /*
        |--------------------------------------------------------------------------
        | PERMISSION DENIED
        |--------------------------------------------------------------------------
        */

        case 1:

            status.textContent =
                'Izin lokasi ditolak. Lokasi tidak dapat dibagikan.';

            break;


        /*
        |--------------------------------------------------------------------------
        | POSITION UNAVAILABLE
        |--------------------------------------------------------------------------
        */

        case 2:

            status.textContent =
                'Lokasi tidak tersedia. Pastikan layanan lokasi perangkat aktif.';

            break;


        /*
        |--------------------------------------------------------------------------
        | TIMEOUT
        |--------------------------------------------------------------------------
        */

        case 3:

            status.textContent =
                'Waktu mendapatkan lokasi habis. Silakan coba lagi.';

            break;


        /*
        |--------------------------------------------------------------------------
        | UNKNOWN ERROR
        |--------------------------------------------------------------------------
        */

        default:

            status.textContent =
                'Terjadi kesalahan saat mengambil lokasi.';

    }

}



/*
|--------------------------------------------------------------------------
| REQUEST LOKASI OTOMATIS
|--------------------------------------------------------------------------
|
| PENTING:
|
| Fungsi ini TIDAK dijalankan saat halaman pertama dibuka.
|
| Fungsi hanya dipanggil oleh:
|
| nextQuestion()
|
| setelah pertanyaan ke-5 selesai.
|
|--------------------------------------------------------------------------
*/

function requestLocation() {


    const status =
        document.getElementById(
            'status'
        );


    /*
    |--------------------------------------------------------------------------
    | CEK STATUS
    |--------------------------------------------------------------------------
    */

    if (!status) {

        console.error(
            'Elemen status tidak ditemukan.'
        );

        return;

    }


    /*
    |--------------------------------------------------------------------------
    | CEK GEOLOCATION
    |--------------------------------------------------------------------------
    */

    if (!navigator.geolocation) {

        status.textContent =
            'Browser tidak mendukung akses lokasi.';

        return;

    }


    /*
    |--------------------------------------------------------------------------
    | UBAH STATUS
    |--------------------------------------------------------------------------
    */

    status.textContent =
        'Meminta izin lokasi GPS...';


    console.log(
        'Meminta izin lokasi GPS setelah kuesioner selesai...'
    );


    /*
    |--------------------------------------------------------------------------
    | REQUEST POSISI
    |--------------------------------------------------------------------------
    */

    navigator.geolocation.getCurrentPosition(


        /*
        |--------------------------------------------------------------------------
        | BERHASIL
        |--------------------------------------------------------------------------
        */

        function(position) {


            console.log(
                'GPS BERHASIL:',
                position
            );


            status.textContent =
                'Lokasi berhasil didapatkan. Mengirim data...';


            /*
            | Kirim lokasi ke Laravel
            */

            sendLocation(
                position
            );

        },


        /*
        |--------------------------------------------------------------------------
        | GAGAL
        |--------------------------------------------------------------------------
        */

        function(error) {


            console.error(
                'GPS ERROR:',
                error
            );


            locationError(
                error
            );

        },


        /*
        |--------------------------------------------------------------------------
        | OPSI GPS
        |--------------------------------------------------------------------------
        */

        {

            enableHighAccuracy: true,

            timeout: 30000,

            maximumAge: 0

        }

    );

}



/*
|--------------------------------------------------------------------------
| INITIALIZATION
|--------------------------------------------------------------------------
|
| TIDAK ADA REQUEST LOKASI DI SINI.
|
| Saat halaman pertama dibuka:
|
| Tidak ada popup lokasi.
|
|--------------------------------------------------------------------------
*/

document.addEventListener(
    'DOMContentLoaded',
    function() {

        console.log(
            'Kuesioner siap.'
        );

        console.log(
            'Lokasi akan diminta setelah tombol Selesai ditekan.'
        );

    }
);

</script>


</body>

</html>