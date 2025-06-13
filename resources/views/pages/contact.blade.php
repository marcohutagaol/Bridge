<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Topic Listing Contact Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>

<body class="topics-listing-page" id="top">

    <main>
        <x-navbar></x-navbar>

        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Homepage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Form</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">Contact Form</h2>
                    </div>
                </div>
            </div>
        </header>

        <section class="section-padding section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <h3 class="mb-4 pb-2">We'd love to hear from you</h3>
                    </div>

                    <!-- Display Success Message -->
                    @if(session('success'))
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    <!-- Display Error Message -->
                    @if(session('error'))
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    <div class="col-lg-6 col-12">
                        <form action="{{ route('contact.store') }}" method="POST" class="custom-form contact-form" role="form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" 
                                               placeholder="Name" value="{{ old('name', Auth::user()->name ?? '') }}" required>
                                        <label for="name">Name</label>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                               class="form-control @error('email') is-invalid @enderror" 
                                               placeholder="Email address" value="{{ old('email', Auth::user()->email ?? '') }}" required>
                                        <label for="email">Email address</label>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror"
                                               placeholder="Subject" value="{{ old('subject') }}" required>
                                        <label for="subject">Subject</label>
                                        @error('subject')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-floating">
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message"
                                                  style="height: 150px;" placeholder="Tell me about the project" required>{{ old('message') }}</textarea>
                                        <label for="message">Tell me about the project</label>
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select @error('template_type') is-invalid @enderror" 
                                                id="templateSelect" name="template_type" onchange="fillTemplate(this.value)">
                                            <option value="">Pilih template pertanyaan (opsional)</option>
                                            <option value="career-guidance" {{ old('template_type') == 'career-guidance' ? 'selected' : '' }}>
                                                Bimbingan Karir
                                            </option>
                                            <option value="academic-consultation" {{ old('template_type') == 'academic-consultation' ? 'selected' : '' }}>
                                                Konsultasi Akademik
                                            </option>
                                            <option value="scholarship-info" {{ old('template_type') == 'scholarship-info' ? 'selected' : '' }}>
                                                Informasi Beasiswa
                                            </option>
                                            <option value="skill-development" {{ old('template_type') == 'skill-development' ? 'selected' : '' }}>
                                                Pengembangan Keterampilan
                                            </option>
                                            <option value="internship-job" {{ old('template_type') == 'internship-job' ? 'selected' : '' }}>
                                                Magang & Lowongan Kerja
                                            </option>
                                            <option value="research-thesis" {{ old('template_type') == 'research-thesis' ? 'selected' : '' }}>
                                                Penelitian & Skripsi
                                            </option>
                                        </select>
                                        <label for="templateSelect">Template Pertanyaan</label>
                                        @error('template_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 ms-auto">
                                    <button type="submit" class="form-control btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto mt-5 mt-lg-0">
                        <iframe class="google-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0865570708543!2d98.65687467411208!3d3.558112251402746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e35d1e40bbd%3A0xf0b7804e1e07c706!2sUniversitas%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1717834900971!5m2!1sid!2sid"
                                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <h5 class="mt-4 mb-2">Universitas Sumatera Utara</h5>
                        <p>Jl. Dr. Mansur No.9, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20222, Indonesia</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <x-fotter></x-fotter>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        function fillTemplate(templateType) {
            if (!templateType) return;

            const subjectField = document.getElementById('subject');
            const messageField = document.getElementById('message');

            const templates = {
                'career-guidance': {
                    subject: 'Konsultasi Bimbingan Karir dan Perencanaan Masa Depan',
                    message: 'Halo,\n\nSaya tertarik untuk mendapatkan bimbingan karir. Saya ingin berkonsultasi mengenai:\n\n- Pemilihan jurusan yang tepat sesuai minat dan bakat saya\n- Peluang karir di bidang yang saya minati\n- Strategi mempersiapkan diri untuk dunia kerja\n- Perencanaan pendidikan lanjutan\n\nMohon informasi mengenai layanan konseling karir yang tersedia dan bagaimana cara mendaftar.\n\nTerima kasih atas perhatiannya.'
                },
                'academic-consultation': {
                    subject: 'Konsultasi Akademik dan Bantuan Belajar',
                    message: 'Selamat pagi/siang,\n\nSaya mengalami kesulitan dalam pembelajaran dan membutuhkan bantuan akademik:\n\n- Kesulitan memahami materi kuliah tertentu\n- Strategi belajar yang efektif\n- Manajemen waktu untuk tugas dan ujian\n- Cara meningkatkan prestasi akademik\n\nApakah ada program tutoring atau konseling akademik yang bisa saya ikuti? Mohon informasi lebih lanjut.\n\nTerima kasih.'
                },
                'scholarship-info': {
                    subject: 'Informasi Peluang Beasiswa dan Bantuan Pendidikan',
                    message: 'Kepada Tim Kemahasiswaan,\n\nSaya ingin menanyakan informasi mengenai peluang beasiswa yang tersedia:\n\n- Jenis-jenis beasiswa yang ditawarkan\n- Syarat dan kriteria penerima beasiswa\n- Proses pendaftaran dan timeline\n- Dokumen yang diperlukan\n- Beasiswa untuk mahasiswa berprestasi/kurang mampu\n\nBisakah saya mendapatkan informasi lengkap dan formulir pendaftaran?\n\nTerima kasih atas bantuannya.'
                },
                'skill-development': {
                    subject: 'Program Pengembangan Keterampilan dan Pelatihan',
                    message: 'Halo,\n\nSaya tertarik mengikuti program pengembangan keterampilan yang ditawarkan universitas:\n\n- Pelatihan soft skills (komunikasi, leadership, teamwork)\n- Kursus hard skills sesuai bidang studi\n- Program sertifikasi profesi\n- Workshop dan seminar pengembangan diri\n\nMohon informasi mengenai program yang sedang berjalan, jadwal, dan cara pendaftarannya.\n\nTerima kasih.'
                },
                'internship-job': {
                    subject: 'Informasi Magang dan Peluang Kerja',
                    message: 'Selamat pagi/siang,\n\nSaya ingin menanyakan informasi terkait:\n\n- Program magang/internship yang tersedia\n- Kerjasama universitas dengan industri\n- Job fair dan recruitment event\n- Layanan career center\n- Bantuan penyusunan CV dan persiapan interview\n\nApakah ada database perusahaan partner untuk magang dan lowongan kerja?\n\nMohon informasi lebih lanjut. Terima kasih.'
                },
                'research-thesis': {
                    subject: 'Bimbingan Penelitian dan Penulisan Karya Ilmiah',
                    message: 'Kepada Tim Akademik,\n\nSaya membutuhkan bantuan dalam penelitian dan penulisan karya ilmiah:\n\n- Pemilihan topik penelitian yang relevan\n- Metodologi penelitian yang tepat\n- Teknik pengumpulan dan analisis data\n- Penulisan proposal dan laporan penelitian\n- Publikasi karya ilmiah\n\nApakah tersedia layanan bimbingan penelitian atau workshop penulisan ilmiah?\n\nTerima kasih atas perhatiannya.'
                }
            };

            if (templates[templateType]) {
                subjectField.value = templates[templateType].subject;
                messageField.value = templates[templateType].message;
            }
        }
    </script>

</body>
</html>