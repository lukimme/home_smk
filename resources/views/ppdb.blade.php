@extends('Layout.layout2')
@section('title', 'SPMB SMK BM Pakisaji')
@section('content')

<style>
    /* ===== CUSTOM STYLES ===== */
    .hero-img {
        max-height: 400px;
        object-fit: contain;
    }
    
    .jurusan-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 12px;
        overflow: hidden;
        height: 100%;
        min-height: 280px;
    }
    
    .jurusan-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .jurusan-img {
        height: 80px;
        object-fit: contain;
        margin: 1rem auto;
    }
    
    .feature-icon {
        color: #4CAF50;
        margin-right: 8px;
    }
    
    .btn-get-started {
        background: linear-gradient(135deg, #4CAF50, #2E7D32);
        color: white;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        border: none;
    }
    
    .btn-get-started:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(76, 175, 80, 0.3);
        color: white;
    }
    
    .btn-whatsapp {
        background: linear-gradient(135deg, #25D366, #128C7E);
        color: white;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        border: none;
    }
    
    .btn-whatsapp:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(37, 211, 102, 0.3);
        color: white;
    }
    
    .section-title {
        color: #2C3E50;
        font-weight: 700;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 10px;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(to right, #4CAF50, #2E7D32);
        border-radius: 3px;
    }
    
    .promo-badge {
        background: linear-gradient(135deg, #FF5722, #E64A19);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 1rem;
    }
    
    .content-img {
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        max-height: 350px;
        object-fit: cover;
        width: 100%;
    }
    
    /* ===== RESPONSIVE ADJUSTMENTS ===== */
    @media (max-width: 768px) {
        .hero-img {
            max-height: 300px;
            margin-top: -50px;
            margin-bottom: -30px;
        }
        
        .mobile-reverse {
            flex-direction: column-reverse !important;
        }
        
        .mobile-center {
            text-align: center;
        }
        
        .section-title::after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .btn-get-started, .btn-whatsapp {
            width: 100%;
            margin-bottom: 10px;
            padding: 14px 20px;
            font-size: 16px;
        }
        
        .jurusan-card {
            min-height: 250px;
        }
        
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }
    }
    
    @media (min-width: 769px) and (max-width: 1199px) {
        .jurusan-img {
            height: 70px;
        }
        
        .content-img {
            max-height: 300px;
        }
    }
    
    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }
    
    /* ===== UTILITY CLASSES ===== */
    .text-gradient {
        background: linear-gradient(135deg, #4CAF50, #2E7D32);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .shadow-soft {
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    
    .rounded-xl {
        border-radius: 12px;
    }
</style>

<section>
    <!-- ======= HERO SECTION ======= -->
    <section id="pdb" class="pdb py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9f5e9 100%);">
        <div class="container position-relative">
            <div class="row gy-5 align-items-center">
                <!-- Text Content -->
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <div class="mobile-center">
                        <span class="promo-badge">🎯 SPMB 2026/2027</span>
                        <h1 class="fw-bold mb-3 text-lg-start text-center">SPMB SMK Budi Mulia Pakisaji</h1>
                        <p class="lead mb-4">Langkah Awal Menuju Sukses Karier Impianmu!</p>
                        <div class="mb-4">
                            <p class="d-flex align-items-center mb-2">
                                <span class="feature-icon">🔹</span>
                                <span class="ms-2">Ingin siap bekerja setelah lulus?</span>
                            </p>
                            <p class="d-flex align-items-center mb-2">
                                <span class="feature-icon">🔹</span>
                                <span class="ms-2">Mau mengasah keterampilan di bidang favoritmu?</span>
                            </p>
                        </div>
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                            <a href="/formulir" class="btn-get-started text-center">
                                📝 Daftar Sekarang
                            </a>
                            <a target="_blank" 
                               href="https://api.whatsapp.com/send?phone=6289513009008&text=Hai%20admin,%0Aboleh%20tanya%20tentang%20*SPMB%20SMK%20Budi%20Mulia%20Pakisaji*"
                               class="btn-whatsapp text-center">
                                <i class="bi bi-whatsapp"></i> Konsultasi via WA
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Image -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="img/g1.png" class="img-fluid hero-img" alt="SMK Budi Mulia Pakisaji" data-aos="zoom-in">
                </div>
            </div>
        </div>
    </section>

    <!-- ======= DIVIDER ======= -->
    <div class="container my-5">
        <hr style="border-top: 3px solid #4CAF50; width: 80px; margin: 0 auto; opacity: 1;">
    </div>

    <!-- ======= JURUSAN SECTION ======= -->
    <section id="jurusan" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title d-inline-block">🎓 4 Jurusan Unggulan Kami</h2>
                    <p class="text-muted">Program studi yang dirancang untuk masa depan profesionalmu</p>
                </div>
            </div>
            
            <div class="row g-4">
                @php
                    $jurusan = [
                        ['img' => '1.png', 'title' => 'TKJ', 'desc' => 'Teknik Komputer dan Jaringan – Menjadi ahli teknologi jaringan di era digital.'],
                        ['img' => '2.png', 'title' => 'DKV', 'desc' => 'Desain Komunikasi Visual – Kembangkan kreativitas tanpa batas dalam dunia desain.'],
                        ['img' => '3.png', 'title' => 'BDP', 'desc' => 'Bisnis Daring dan Pemasaran – Kuasai pemasaran online dan strategi bisnis digital.'],
                        ['img' => '5.png', 'title' => 'TBKR', 'desc' => 'Teknik Bodi Kendaraan Ringan – Jadi master di bidang otomotif modern.']
                    ];
                @endphp
                
                @foreach($jurusan as $item)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card jurusan-card shadow-soft h-100">
                        <div class="card-body text-center p-4 d-flex flex-column">
                            <div class="mb-3">
                                <img src="img/{{ $item['img'] }}" class="jurusan-img" alt="{{ $item['title'] }}">
                            </div>
                            <h5 class="card-title fw-bold mb-3 text-gradient">{{ $item['title'] }}</h5>
                            <p class="card-text flex-grow-1">{{ $item['desc'] }}</p>
                            <div class="mt-3">
                                <span class="badge bg-light text-dark">✓ Tersedia</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ======= KELAS KETERAMPILAN ======= -->
    <section id="keterampilan" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- Image -->
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="img/img6.png" class="img-fluid content-img" alt="Kelas Keterampilan SMK">
                </div>
                
                <!-- Content -->
                <div class="col-lg-6" data-aos="fade-left">
                    <h3 class="section-title">💡 Kelas Keterampilan Tambahan</h3>
                    <p class="mb-4">Tingkatkan kompetensimu dengan berbagai kelas keterampilan pilihan:</p>
                    
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start p-3 bg-white rounded-xl shadow-soft">
                                <div class="feature-icon fs-4 me-3">🏨</div>
                                <div>
                                    <h6 class="fw-bold mb-1">Perhotelan</h6>
                                    <p class="small text-muted mb-0">Manajemen hotel & hospitality</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="d-flex align-items-start p-3 bg-white rounded-xl shadow-soft">
                                <div class="feature-icon fs-4 me-3">👨‍🍳</div>
                                <div>
                                    <h6 class="fw-bold mb-1">Tata Boga</h6>
                                    <p class="small text-muted mb-0">Kuliner & seni memasak</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="d-flex align-items-start p-3 bg-white rounded-xl shadow-soft">
                                <div class="feature-icon fs-4 me-3">💄</div>
                                <div>
                                    <h6 class="fw-bold mb-1">Tata Rias/MUA</h6>
                                    <p class="small text-muted mb-0">Seni makeup profesional</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="d-flex align-items-start p-3 bg-white rounded-xl shadow-soft">
                                <div class="feature-icon fs-4 me-3">📑</div>
                                <div>
                                    <h6 class="fw-bold mb-1">Bahasa Jepang</h6>
                                    <p class="small text-muted mb-0">Siapkan karir dengan menguasi bahasa</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex align-items-start p-3 bg-white rounded-xl shadow-soft">
                                <div class="feature-icon fs-4 me-3">➕</div>
                                <div>
                                    <h6 class="fw-bold mb-1">Dan Lainnya</h6>
                                    <p class="small text-muted mb-0">Masih banyak pilihan lain</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= KEUNGGULAN ======= -->
    <section id="keunggulan" class="py-5">
        <div class="container">
            <div class="row align-items-center gy-5 mobile-reverse">
                <!-- Content -->
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="section-title">✨ Keunggulan Kami</h3>
                    <p class="mb-4">Mengapa memilih SMK Budi Mulia Pakisaji?</p>
                    
                    <div class="d-flex align-items-start mb-3">
                        <div class="feature-icon fs-5">✅</div>
                        <div class="ms-3">
                            <h6 class="fw-bold">Fasilitas Lengkap & Modern</h6>
                            <p class="text-muted small">Lab praktik dengan peralatan terkini</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-3">
                        <div class="feature-icon fs-5">✅</div>
                        <div class="ms-3">
                            <h6 class="fw-bold">Pembelajaran Berbasis Praktik</h6>
                            <p class="text-muted small">70% praktik, 30% teori</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-3">
                        <div class="feature-icon fs-5">✅</div>
                        <div class="ms-3">
                            <h6 class="fw-bold">Kemitraan dengan Industri</h6>
                            <p class="text-muted small">Kerjasama dengan perusahaan terkemuka</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start">
                        <div class="feature-icon fs-5">✅</div>
                        <div class="ms-3">
                            <h6 class="fw-bold">Jalur Cepat ke Dunia Kerja</h6>
                            <p class="text-muted small">Siap kerja atau lanjut kuliah</p>
                        </div>
                    </div>
                </div>
                
                <!-- Image -->
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="img/img7.png" class="img-fluid content-img" alt="Fasilitas SMK">
                </div>
            </div>
        </div>
    </section>

    <!-- ======= PROMO SECTION ======= -->
    

    <!-- ======= CTA SECTION ======= -->
    <section id="cta" class="py-5" style="background: linear-gradient(135deg, #4CAF50, #2E7D32);">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h3 class="text-white mb-4">🚀 Siap Memulai Perjalanan Karirmu?</h3>
                    <p class="text-white mb-5">Bergabunglah dengan ratusan alumni sukses kami. Pilih cara terbaik untuk mulai:</p>
                    
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-5">
                            <a href="/formulir" class="btn btn-light btn-lg w-100 py-3 fw-bold d-flex align-items-center justify-content-center">
                                <span class="me-2">📝</span> Daftar Online Sekarang
                            </a>
                        </div>
                        
                        <div class="col-md-5">
                            <a target="_blank" 
                               href="https://api.whatsapp.com/send?phone=6289513009008&text=Hai%20admin,%0ABoleh%20tanya%20tentang%20*SPMB%20SMK%20Budi%20Mulia%20Pakisaji*"
                               class="btn btn-outline-light btn-lg w-100 py-3 fw-bold d-flex align-items-center justify-content-center">
                                <i class="bi bi-whatsapp me-2"></i> Konsultasi via WhatsApp
                            </a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if(targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Add animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.jurusan-card, .content-img, .section-title').forEach(el => {
        observer.observe(el);
    });
});
</script>

@endsection