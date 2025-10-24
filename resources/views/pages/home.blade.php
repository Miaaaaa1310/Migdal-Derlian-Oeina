@extends('layouts.app')

@section('content')
    <!-- SIDEBAR KIRI -->
    <aside class="sidebar">
        <div class="profile-photo" title="Foto Profil Migdal">
            <img src="{{ asset('img/img_1.jpg') }}" alt="Foto Profil Migdal">
        </div>

        <div class="contact-title">Contact Me</div>
        <div class="divider"></div>

        <div class="contact-item">
            <div style="min-width:26px">📞</div>
            <div>
                <small>WhatsApp</small>
                <div>+62-813-8559-1524</div>
            </div>
        </div>

        <div class="contact-item">
            <div style="min-width:26px">📸</div>
            <div>
                <small>Instagram</small>
                <div>@miaaaaaa.31</div>
            </div>
        </div>

        <div class="contact-item">
            <div style="min-width:26px">💌</div>
            <div>
                <small>Email</small>
                <div>derlinoeina@gmail.com</div>
            </div>
        </div>

        <div class="expertise-title">Skills</div>
        <div class="divider"></div>

        <div class="skill-row">
            <div class="skill-name">HTML</div>
            <div class="skill-bar"><i style="width:90%"></i></div>
        </div>
        <div class="skill-row">
            <div class="skill-name">JavaScript</div>
            <div class="skill-bar"><i style="width:50%"></i></div>
        </div>        
        <div class="skill-row">
            <div class="skill-name">Desain UI/UX</div>
            <div class="skill-bar"><i style="width:85%"></i></div>
        </div>
        <div class="skill-row">
            <div class="skill-name">CSS</div>
            <div class="skill-bar"><i style="width:83%"></i></div>
        </div>
        <div class="skill-row">
            <div class="skill-name">Java</div>
            <div class="skill-bar"><i style="width:70%"></i></div>
        </div>
        <div class="skill-row">
            <div class="skill-name">PHP</div>
            <div class="skill-bar"><i style="width:78%"></i></div>
        </div>

        <div class="language-title">Bahasa</div>
        <div class="divider"></div>

        <div class="skill-row">
            <div class="skill-name">Indonesia</div>
            <div class="skill-bar"><i style="width:98%"></i></div>
        </div>
        <div class="skill-row">
            <div class="skill-name">Inggris</div>
            <div class="skill-bar"><i style="width:80%"></i></div>
        </div>
    </aside>

    <!-- MAIN KANAN -->
    <main class="main">
        <div class="header-right">
            <div>
                <h1 class="name">Migdal Derlian Oeina</h1>
                <div class="title">Mahasiswi Sistem Informasi</div>
            </div>
        </div>

        <div class="about">
            Saya adalah mahasiswi Sistem Informasi (S1) di Universitas Teknologi Yogyakarta. Aktif pada kegiatan perkuliahan di kampus, dengan fokus pada pengembangan web, desain antarmuka, dan analisis perancangan aplikasi. Menguasai HTML, CSS, Java, PHP serta perancangan UI/UX menggunakan tools-tools yang tersedia seperti wordpress dan Figma.
        </div>

        <section class="section">
            <h3>Pengalaman</h3>

            <div class="entry">
                <div class="time">2024</div>
                <div class="detail">
                    <h4>UKK - Unit Kerohanian Kristen (Natal 2024)</h4>
                    <p>Peran: Anggota panitia, Divisi Konsumsi. Bertanggung jawab pada perencanaan dan koordinasi kebutuhan konsumsi selama kegiatan Natal.</p>
                </div>
            </div>

            <div class="entry">
                <div class="time">2023</div>
                <div class="detail">
                    <h4>UKK - Unit Kerohanian Kristen (Paskah 2023)</h4>
                    <p>Peran: Anggota panitia, Divisi Usaha dan Dana. Terlibat dalam penggalangan dana dan pengorganisasian usaha untuk mendukung kegiatan Paskah.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <h3>Sertifikat</h3>

            <div class="entry">
                <div class="time">2024</div>
                <div class="detail">
                    <h4>Sertifikat CSS</h4>
                    <p>Pelatihan styling dan layout modern menggunakan CSS (flexbox, grid, responsive).</p>
                </div>
            </div>

            <div class="entry">
                <div class="time">2023</div>
                <div class="detail">
                    <h4>Sertifikat Java</h4>
                    <p>Dasar-dasar pemrograman Java dan penerapan logika serta struktur data sederhana.</p>
                </div>
            </div>

            <div class="entry">
                <div class="time">2023</div>
                <div class="detail">
                    <h4>Sertifikat HTML</h4>
                    <p>Penguasaan struktur dokumen HTML, semantic markup, dan praktik aksesibilitas dasar.</p>
                </div>
            </div>

            <div class="entry">
                <div class="time">2024</div>
                <div class="detail">
                    <h4>Sertifikat Desain UI</h4>
                    <p>Pelatihan desain antarmuka menggunakan Figma, prinsip tipografi, layout, dan prototyping.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <h3>Karya / Projek</h3>

            <div class="entry">
                <div class="time">2023</div>
                <div class="detail">
                    <h4>Royal Cosmetic (Website, WordPress)</h4>
                    <p>Peran: Pengembang tunggal — mengembangkan tampilan website menggunakan WordPress serta kustomisasi tema dan konten produk.</p>
                </div>
            </div>

            <div class="entry">
                <div class="time">2024</div>
                <div class="detail">
                    <h4>MyGym (Aplikasi Web - Prototipe)</h4>
                    <p>Peran: Analisis &amp; perancangan tampilan menggunakan Figma. Membuat wireframe dan desain antarmuka untuk aplikasi pelatihan gym.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <h3>Pendidikan</h3>

            <div class="entry">
                <div class="time">2023 - Sekarang</div>
                <div class="detail">
                    <h4>Universitas Teknologi Yogyakarta</h4>
                    <p>S1 Sistemm Informasi.</p>
                </div>
            </div>

            <div class="entry">
                <div class="time">2019 - 2022</div>
                <div class="detail">
                    <h4>SMAN 13 Kabupaten Maluku Barat Daya</h4>
                    <p>Program IPA.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <h3>Kemampuan</h3>

            <div class="skill-list">
                <div class="skill-item">
                    <div class="skill-label">Komunikasi</div>
                    <div class="skill-meter"><span style="width:80%"></span></div>
                </div>

                <div class="skill-item">
                    <div class="skill-label">Kerjasama</div>
                    <div class="skill-meter"><span style="width:90%"></span></div>
                </div>

                <div class="skill-item">
                    <div class="skill-label">Bertanggung Jawab</div>
                    <div class="skill-meter"><span style="width:95%"></span></div>
                </div>

                <div class="skill-item">
                    <div class="skill-label">Problem Solving</div>
                    <div class="skill-meter"><span style="width:88%"></span></div>
                </div>

                <div class="skill-item">
                    <div class="skill-label">Analisis</div>
                    <div class="skill-meter"><span style="width:85%"></span></div>
                </div>
            </div>
        </section>
    </main>
@endsection