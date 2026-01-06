@extends('Layout.layout2')
@section('title', 'SPMB SMK BM Pakisaji')
@section('content')

<section>
    <!-- ======= Hero Section ======= -->
    <section id="pdb" class="pdb">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-lg-start">
                    <h3 class="text-center text-lg-start fw-bold">SPMB SMK Budi Mulia Pakisaji 2026/2027</h3>
                    <p>Langkah Awal Menuju Sukses Karier Impianmu!</p>
                    <p> 
                        🔹 Ingin siap bekerja setelah lulus?<br>
                        🔹 Mau mengasah keterampilan di bidang favoritmu?
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/formulir" class="btn-get-started">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="img/g1.png" class="img-fluid animated mobile-margin" alt="SMK Budi Mulia Pakisaji">
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <hr style="width: 45%;">
    </div>

    <section id="about" class="about mt-0">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="pt-4 pt-lg-0 order-2 order-lg-2 content">
                    <h3 class="fw-bold">SMK Budi Mulia Pakisaji</h3>
                    <h3 class="fw-bold">adalah tempatnya!</h3>
                    <p>Dengan 4 jurusan unggulan yang dirancang untuk masa depan profesionalmu:</p>
                    
                    <div class="row">
                        @php
                            $jurusan = [
                                ['img' => '1.png', 'title' => 'TKJ', 'desc' => 'Teknik Komputer dan Jaringan – Ahli teknologi jaringan di era digital.'],
                                ['img' => '2.png', 'title' => 'DKV', 'desc' => 'Desain Komunikasi Visual – Kreativitas tanpa batas dalam desain.'],
                                ['img' => '3.png', 'title' => 'BDP', 'desc' => 'Bisnis Daring dan Pemasaran – Jago pemasaran online dan bisnis.'],
                                // ['img' => '4.png', 'title' => 'SIJA', 'desc' => 'Sistem Informatika, Jaringan, dan Aplikasi – Pionir di dunia IT dan aplikasi.'],
                                ['img' => '5.png', 'title' => 'TBKR', 'desc' => 'Teknik Bodi Kendaraan Ringan – Master di bidang otomotif.']
                            ];
                        @endphp
                        
                        @foreach($jurusan as $item)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="text-center pt-3">
                                    <img src="img/{{ $item['img'] }}" class="card-img-top" style="width: 100px;" alt="{{ $item['title'] }}">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $item['title'] }}</h5>
                                    <p class="card-text">{{ $item['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Konten tambahan -->
        <div class="container mt-5" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/img6.png" class="img-fluid" alt="Kelas Keterampilan SMK">
                </div>
                <div class="col-lg-7 pt-4 pt-lg-0 order-1 order-lg-1 content">
                    <h3>💡 Selain itu, beragam kelas keterampilan tambahan siap memperkaya dirimu</h3>
                    <p>Tunggu apa lagi? Kembangkan bakat dan minatmu dengan berbagai kelas keterampilan tambahan yang bisa kamu ikuti:</p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> Perhotelan</li>
                        <li><i class="bi bi-check2-circle"></i> Tata Boga</li>
                        <li><i class="bi bi-check2-circle"></i> Tata Rias/MUA</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Kenapa Pilih SMK -->
        <div class="container mt-5" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-5 pt-4 pt-lg-0 order-1 order-lg-2 content">
                    <h3>✨ Kenapa Pilih SMK Budi Mulia Pakisaji?</h3>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> Fasilitas lengkap & modern</li>
                        <li><i class="bi bi-check2-circle"></i> Pembelajaran berbasis praktik langsung</li>
                        <li><i class="bi bi-check2-circle"></i> Kemitraan dengan industri terkemuka</li>
                        <li><i class="bi bi-check2-circle"></i> Jalur cepat menuju dunia kerja atau kuliah</li>
                    </ul>
                </div>
                <div class="col-lg-7 pt-4 pt-lg-0 order-2 order-lg-1">
                    <img src="img/img7.png" class="img-fluid" alt="Fasilitas SMK">
                </div>
            </div>
        </div>

        <!-- Promo Spesial -->
        <div class="container mt-3" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-2 d-none d-lg-block">
                    <img src="img/img2222.png" class="img-fluid" alt="Promo SMK">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 order-1 order-lg-1 content">
                    <h3>🔥 Promo Spesial untuk Pendaftaran 2025/2026!</h3>
                    <p>Daftarkan dirimu sekarang dan dapatkan Cashback Uang Pendaftaran di setiap gelombang! 🤑</p>
                    <h4>🔔 Peluangmu ada di sini!</h4>
                    <p>
                        Jangan biarkan kesempatan emas ini terlewatkan. Daftarkan dirimu sekarang dan jadilah bagian dari generasi profesional yang siap menghadapi tantangan masa depan.
                        <br><b>👇 Klik tombol di bawah ini untuk mulai perjalanan karier suksesmu!</b>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container text-center my-4">
        <div class="row justify-content-around">
            <div class="col-md-4 mb-2">
                <a href="/formulir" class="btn-get-started text-white w-100">Daftar Sekarang</a>
            </div>
            <div class="col-md-6 mb-2">
                <a target="_blank" 
                   href="https://api.whatsapp.com/send?phone=6289513009008&text=Hai%20admin,%0Aboleh%20tanya%20tentang%20*SPMB%20SMK%20Budi%20Mulia%20Pakisaji*"
                   class="btn-get-started text-white w-100">
                    <i class="bi bi-whatsapp"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </section>
</section>

<style>
.fullscreen img {
    max-width: 100%;
    max-height: 100%;
    display: block;
    margin: auto;
}
/* Desktop besar */
@media (min-width: 1200px) {
    .container {
        padding-left: 80px;
        padding-right: 80px;
    }
}

/* Laptop/Desktop standar */
@media (min-width: 992px) and (max-width: 1199px) {
    .container {
        padding-left: 60px;
        padding-right: 60px;
    }
}

@media (max-width: 768px) {
    .mobile-margin {
        margin-top: -100px !important;
        margin-bottom: -20px !important;
    }
    
    
    .btn-get-started {
        font-size: 14px !important;
        padding: 10px 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('fullscreen')) {
            e.preventDefault();
            var imgSrc = e.target.tagName === 'IMG' ? e.target.src : e.target.href;
            var overlay = document.createElement('div');
            overlay.classList.add('fullscreen-overlay');
            overlay.style.cssText = 'position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.8);display:flex;align-items:center;justify-content:center;z-index:9999;';
            overlay.innerHTML = '<img src="' + imgSrc + '" style="max-width:90%;max-height:90%;">';
            document.body.appendChild(overlay);
            
            overlay.addEventListener('click', function() {
                overlay.parentNode.removeChild(overlay);
            });
        }
    });
});
</script>

@endsection