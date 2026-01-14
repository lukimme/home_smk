@extends('Layout.layout2')
@section('title', 'Formulir Pendaftaran SMK BUDI MULIA PAKISAJI')

@section('content')



<section class="p-6 bg-gray-100">
    <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded" style="margin-top: 100px;">

        <!-- Header -->
        <div class="text-center">
            <img src="img/kop.png" alt="Logo Sekolah" class="mx-auto mb-1">
        </div>

        <!-- Nomor Pendaftaran dengan Kotak-kotak -->
        <div class="text-end mb-4">
            <div class="flex justify-end items-center space-x-1">
                {{-- <span class="text-sm font-semibold mr-2">No. Pendaftaran:</span> --}}
                <div class="flex italic ">
                    <div class="kotak-nomor">O</div>
                    <div class="kotak-nomor">L</div>
                    <div class="kotak-nomor">2</div>
                    <div class="kotak-nomor">6</div>
                    <div class="kotak-nomor">2</div>
                    <div class="kotak-nomor">7</div>
                    <div class="kotak-nomor" id="noUrut1">0</div>
                    <div class="kotak-nomor" id="noUrut2">0</div>
                    <div class="kotak-nomor" id="noUrut3">1</div>
                </div>
            </div>
            <div class="text-xs text-gray-500 mt-1 italic" id="noPendaftaranFull">OL2627001</div>
        </div>

        <!-- CSS Inline untuk kotak -->
        <style>
        .kotak-nomor {
            width: 22px;
            height: 28px;
            border: 1px solid #6b7280;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: monospace;
            font-size: 13px;
            background: white;
            font-weight: normal;
        }
        </style>

        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold">FORMULIR PENERIMAAN MURID BARU</h1>
            <h2 class="text-2xl font-bold">SMK BUDI MULIA PAKISAJI</h2>
            <h2 class="text-lg font-semibold">Tahun Pelajaran 2026–2027</h2>
        </div>

       <form id="pendaftaranForm">
    @csrf

            <!-- A. REGISTRASI MURID -->
            <h3 class="text-sm font-bold italic mb-2">REGISTRASI MURID</h3>

            <!-- Jenis Pendaftaran -->
            <div class="flex items-center text-sm mb-2 ">
                <div class="w-[30%]">Jenis Pendaftaran</div>
                <div class="text-center w-[5%]">:</div>
                <div class="text-sm w-[65%]">
                    <label><input type="radio" name="jenis_pendaftaran" value="baru"> Baru</label>
                    <label class="ml-4"><input type="radio" name="jenis_pendaftaran" value="pindahan"> Pindahan</label>
                </div>
            </div>

            <!-- Jurusan 1 -->
            <div class="flex items-center text-sm mb-2">
                <div class="pl-5 w-[30%]">Pilihan Jurusan 1</div>
                <div class="text-center w-[5%]">:</div>
                <div class="text-sm w-[65%]">
                    <label><input type="radio" name="jurusan1" value="TKJ"> TKJ</label>
                    <label class="ml-4"><input type="radio" name="jurusan1" value="DKV"> DKV</label>
                    <label class="ml-4"><input type="radio" name="jurusan1" value="BD"> BD</label>
                    <label class="ml-4"><input type="radio" name="jurusan1" value="TBKR"> TBKR</label>
                </div>
            </div>

            <!-- Jurusan 2 -->
            <div class="flex items-center text-sm mb-2">
                <div class="pl-5 w-[30%]">Pilihan Jurusan 2</div>
                <div class="text-center w-[5%]">:</div>
                <div class="text-sm w-[65%]">
                    <label><input type="radio" name="jurusan2" value="TKJ"> TKJ</label>
                    <label class="ml-4"><input type="radio" name="jurusan2" value="DKV"> DKV</label>
                    <label class="ml-4"><input type="radio" name="jurusan2" value="BD"> BD</label>
                    <label class="ml-4"><input type="radio" name="jurusan2" value="TBKR"> TBKR</label>
                </div>
            </div>

           <!-- Sekolah asal -->
            <div class="flex items-center text-sm mb-2">
                <div class=" w-[30%]">Nama Sekolah Asal</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <input type="text" name="nama_sekolah_asal" class="w-full border p-2 rounded"> <!-- UBAH name -->
                </div>
            </div>

            <!-- Alamat sekolah -->
            <div class="flex items-center text-sm mb-2">
                <div class=" w-[30%]">Alamat Sekolah Asal</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <input type="text" name="alamat_sekolah" class="w-full border p-2 rounded"> <!-- TETAP -->
                </div>
            </div>

            <!-- B. BIODATA -->
            <h3 class="text-sm font-bold italic mb-2 mt-6">BIODATA PESERTA DIDIK</h3>

            <!-- Nama lengkap -->
            <div class="flex items-center mb-2 text-sm">
                <div class="w-[30%]">Nama Lengkap</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <input type="text" name="nama_lengkap" class="w-full border p-2 rounded">
                </div>
            </div>

            <!-- Jenis kelamin -->
            <div class="flex items-center mb-2 text-sm">
                <div class="w-[30%]">Jenis Kelamin</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <select name="jenis_kelamin" class="w-full border p-2 rounded">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>

            <!-- Status -->
            <div class="flex items-center mb-2 text-sm">
                <div class="w-[30%]">Status</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <select name="status" class="w-full border p-2 rounded">
                        <option value="lengkap">Lengkap</option>
                        <option value="yatim">Yatim</option>
                        <option value="piatu">Piatu</option>
                        <option value="yatim piatu">Yatim Piatu</option>
                    </select>
                </div>
            </div>

            <!-- NISN -->
            <div class="flex items-center mb-2 text-sm">
                <div class=" w-[30%]">NISN</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                     <input type="number" name="nisn" class="w-full border p-2 rounded" 
               pattern="[0-9]*" 
               oninput="this.value = this.value.replace(/[^0-9]/g, '')"
               title="Hanya angka yang diperbolehkan">
                </div>
            </div>

            <!-- NIK -->
            <div class="flex items-center mb-2 text-sm">
                <div class=" w-[30%]">NIK</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <input type="number" name="nik" class="w-full border p-2 rounded" pattern="[0-9]*" 
               oninput="this.value = this.value.replace(/[^0-9]/g, '')"
               title="Hanya angka yang diperbolehkan">
                </div>
            </div>

            <!-- Tempat lahir -->
            <div class="flex items-center mb-2 text-sm">
                <div class=" w-[30%]">Tempat Lahir</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <input type="text" name="tempat_lahir" class="w-full border p-2 rounded">
                </div>
            </div>

            <!-- Tanggal lahir -->
            <div class="flex items-center mb-2 text-sm">
                <div class=" w-[30%]">Tanggal Lahir</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <input type="date" name="tanggal_lahir" class="w-full border p-2 rounded">
                </div>
            </div>

            <!-- Agama -->
            <div class="flex items-center mb-2 text-sm">
                <div class=" w-[30%]">Agama</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <select name="agama" class="w-full border p-2 rounded">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <!-- Alamat lengkap (semua diratakan sekarang) -->

           @php
            $alamat = [
                'Alamat Jalan' => 'alamat_jalan',  // UBAH dari 'alamat' jadi 'alamat_jalan'
                'RT' => 'rt',
                'RW' => 'rw', 
                'Dusun' => 'dusun',
                'Kelurahan / Desa' => 'desa',
                'Kecamatan' => 'kecamatan',
                'Kota / Kabupaten' => 'kota',
                'Kode Pos' => 'kode_pos',
                'No HP Aktif' => 'no_hp',
                'Email' => 'email'
            ];
            @endphp

            @foreach($alamat as $label => $name)
            <div class="flex items-center mb-2 text-sm ">
                <div class="pl-5 w-[30%]">{{ $label }}</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <input
            type="{{ in_array($name, ['rt', 'rw','kode_pos','no_hp']) ? 'number' : 'text' }}"
            name="{{ $name }}"
            class="w-full border p-2 rounded"
        >
                </div>
            </div>
            @endforeach

            <!-- C. Biodata Orang tua -->
            <h3 class="text-sm font-bold italic mb-2 mt-6">BIODATA ORANG TUA / WALI</h3>

            @php
            $ortu = [
            'Nama Ayah' => 'nama_ayah',
            'Nama Ibu' => 'nama_ibu',
            'Nama Wali' => 'nama_wali',
            'Alamat Orang Tua / Wali' => 'alamat_ortu',
            'No HP Orang Tua / Wali' => 'no_hp_ortu'
            ];
            @endphp

            @foreach($ortu as $label => $name)
            <div class="flex items-center mb-2 text-sm">
                <div class=" w-[30%]">{{ $label }}</div>
                <div class="text-center w-[5%]">:</div>
                <div class="w-[65%]">
                    <input
            type="{{ in_array($name, ['no_hp_ortu']) ? 'number' : 'text' }}"
            name="{{ $name }}"
            class="w-full border p-2 rounded"
        >
                </div>
            </div>
            @endforeach

            <!-- D. Pernyataan -->
            <!-- D. Pernyataan -->
<div class="grid grid-cols-2 mt-6 text-center">
    <div>
        <p>Mengetahui,<br>Orang Tua / Wali</p>
        <div class="mt-20 mb-2" style="height: 40px;">
            <div id="namaOrangTuaContainer" class="font-bold text-base pt-1 min-h-[24px]">
                (.......................)
            </div>
        </div>
        
    </div>

    <div>
        <p>Pakisaji, {{ date('d F Y') }}<br>Yang Bersangkutan</p>
        <div class="mt-20 mb-2" style="height: 40px;">
            <div id="namaSiswaContainer" class="font-bold text-base pt-1 min-h-[24px]">
                (.......................)
            </div>
        </div>
       
    </div>
</div>
            

            <!-- E. Persyaratan -->
            <h3 class="text-sm font-bold italic mb-2 mt-6">PERSYARATAN ADMINISTRASI</h3>
            <ul class="text-sm list-disc ml-6">
                <li>Fotocopy Ijazah SD 2 lembar</li>
                {{-- <li>Fotocopy Ijazah SMP 2 lembar</li> --}}
                <li>Kartu Keluarga terbaru 2 lembar</li>
                <li>Akta Kelahiran 2 lembar</li>
            </ul>

            <div class="text-center mt-8">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Kirim Formulir</button>
                <p class="text-sm italic text-muted mt-2">Konfirmasi pendaftaran bisa melalui no resmi atau langsung ke Front Office SMK BM </p>
            </div>

        </form>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('pendaftaranForm');
    
    // Fungsi untuk update tampilan kotak nomor
    function updateNomorDisplay(nomorUrut) {
        const digits = nomorUrut.split('');
        document.getElementById('noUrut1').textContent = digits[0] || '0';
        document.getElementById('noUrut2').textContent = digits[1] || '0';
        document.getElementById('noUrut3').textContent = digits[2] || '1';
        document.getElementById('noPendaftaranFull').textContent = 'OL2627' + nomorUrut;
    }

    // Fungsi untuk ambil nomor urut terakhir dari database
    async function getLastNomorUrut() {
        try {
            const apiBaseUrl = '{{ config("api.base_url", "http://localhost:3005") }}';
            const endpoint = `${apiBaseUrl}/formulir`;
            
            const response = await fetch(endpoint);
            const result = await response.json();
            
            if (result.success && result.data.length > 0) {
                // Ambil data terbaru (pertama dalam array karena sudah diorder desc)
                const latestData = result.data[0];
                const lastNoPendaftaran = latestData.no_pendaftaran;
                
                if (lastNoPendaftaran && lastNoPendaftaran.startsWith('OL2627')) {
                    // Ambil 3 digit terakhir
                    const lastUrut = lastNoPendaftaran.slice(-3);
                    const nextUrut = String(parseInt(lastUrut) + 1).padStart(3, '0');
                    return nextUrut;
                }
            }
        } catch (error) {
            console.error('Gagal ambil data terakhir:', error);
        }
        
        // Default ke 001 jika gagal
        return '001';
    }

    // Load nomor urut saat halaman dibuka
    async function loadInitialNomor() {
        const nextUrut = await getLastNomorUrut();
        updateNomorDisplay(nextUrut);
    }

    // Panggil fungsi load initial
    loadInitialNomor();

 // Fungsi untuk update nama otomatis di dalam kurung
function updateNamaOtomatis() {
    const namaLengkap = document.querySelector('input[name="nama_lengkap"]').value;
    const namaAyah = document.querySelector('input[name="nama_ayah"]').value;
    const namaIbu = document.querySelector('input[name="nama_ibu"]').value;
    const namaWali = document.querySelector('input[name="nama_wali"]').value;
    
    // Logika prioritas: Ayah > Ibu > Wali
    let namaOrangTua = '';
    if (namaAyah && namaAyah.trim() !== '') {
        namaOrangTua = namaAyah;
    } else if (namaIbu && namaIbu.trim() !== '') {
        namaOrangTua = namaIbu;
    } else if (namaWali && namaWali.trim() !== '') {
        namaOrangTua = namaWali;
    }
    
    // Update tampilan dengan nama di dalam kurung
    if (namaOrangTua) {
        document.getElementById('namaOrangTuaContainer').innerHTML = 
            `<span class="text-black">(${namaOrangTua})</span>`;
    } else {
        document.getElementById('namaOrangTuaContainer').innerHTML = 
            '<span class="text-gray-500">(...............)</span>';
    }
    
    if (namaLengkap && namaLengkap.trim() !== '') {
        document.getElementById('namaSiswaContainer').innerHTML = 
            `<span class="text-black">(${namaLengkap})</span>`;
    } else {
        document.getElementById('namaSiswaContainer').innerHTML = 
            '<span class="text-gray-500">(...............)</span>';
    }
}

// Event listener untuk input nama
document.querySelector('input[name="nama_lengkap"]').addEventListener('input', updateNamaOtomatis);
document.querySelector('input[name="nama_ayah"]').addEventListener('input', updateNamaOtomatis);
document.querySelector('input[name="nama_ibu"]').addEventListener('input', updateNamaOtomatis);
document.querySelector('input[name="nama_wali"]').addEventListener('input', updateNamaOtomatis);

// Panggil sekali saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    updateNamaOtomatis();
});
    form.addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Mengirim...';
    submitBtn.disabled = true;

    try {
        // === VALIDASI RADIO BUTTONS ===
        const jenisPendaftaran = document.querySelector('input[name="jenis_pendaftaran"]:checked')?.value;
        const jurusan1 = document.querySelector('input[name="jurusan1"]:checked')?.value;
        const jurusan2 = document.querySelector('input[name="jurusan2"]:checked')?.value;
        
        if (!jenisPendaftaran || !jurusan1 || !jurusan2) {
            alert('Harap lengkapi pilihan Jenis Pendaftaran dan Jurusan!');
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
            return;
        }

        // === AMBIL DATA REAL DARI FORM ===
        const jurusanGabungan = `${jurusan1}, ${jurusan2}`;

        const namaSekolahAsal = document.querySelector('input[name="nama_sekolah_asal"]')?.value || '';
        const alamatSekolah = document.querySelector('input[name="alamat_sekolah"]')?.value || '';
        const namaSekolahAlamatGabungan = `${namaSekolahAsal}, ${alamatSekolah}`;

        const alamatJalan = document.querySelector('input[name="alamat_jalan"]')?.value || '';
        const rt = document.querySelector('input[name="rt"]')?.value || '';
        const rw = document.querySelector('input[name="rw"]')?.value || '';
        const dusun = document.querySelector('input[name="dusun"]')?.value || '';
        const desa = document.querySelector('input[name="desa"]')?.value || '';
        const kecamatan = document.querySelector('input[name="kecamatan"]')?.value || '';
        const kota = document.querySelector('input[name="kota"]')?.value || '';
        const kodePos = document.querySelector('input[name="kode_pos"]')?.value || '';
        const alamatGabungan = `${alamatJalan}, RT ${rt}/RW ${rw}, Dusun ${dusun}, Desa ${desa}, Kec. ${kecamatan}, ${kota}, ${kodePos}`;

        // === COLLECT DATA (TANPA no_pendaftaran, karena digenerate BE) ===
        const formData = {
            jenis_pendaftaran: jenisPendaftaran,
            jurusan: jurusanGabungan,
            nama_sekolah_alamat: namaSekolahAlamatGabungan,
            nama_lengkap: document.querySelector('input[name="nama_lengkap"]')?.value || '',
            jenis_kelamin: document.querySelector('select[name="jenis_kelamin"]')?.value || '',
            status: document.querySelector('select[name="status"]')?.value || '',
            nisn: document.querySelector('input[name="nisn"]')?.value || '',
            nik: document.querySelector('input[name="nik"]')?.value || '',
            tempat_lahir: document.querySelector('input[name="tempat_lahir"]')?.value || '',
            tanggal_lahir: document.querySelector('input[name="tanggal_lahir"]')?.value || '',
            agama: document.querySelector('select[name="agama"]')?.value || '',
            alamat: alamatGabungan,
            no_hp: document.querySelector('input[name="no_hp"]')?.value || '',
            email: document.querySelector('input[name="email"]')?.value || '',
            nama_ayah: document.querySelector('input[name="nama_ayah"]')?.value || '',
            nama_ibu: document.querySelector('input[name="nama_ibu"]')?.value || '',
            nama_wali: document.querySelector('input[name="nama_wali"]')?.value || 'Tidak Ada',
            alamat_ortu: document.querySelector('input[name="alamat_ortu"]')?.value || '',
            no_hp_ortu: document.querySelector('input[name="no_hp_ortu"]')?.value || '',
        };

        console.log('📤 Data yang dikirim:', formData);

        // === VALIDASI DATA REQUIRED ===
        const requiredFields = [
            'nama_lengkap', 'nisn', 'nik', 'tempat_lahir', 
            'tanggal_lahir', 'no_hp', 'email', 'nama_ayah', 
            'nama_ibu', 'alamat_ortu', 'no_hp_ortu'
        ];
        
        let missingFields = [];
        for (const field of requiredFields) {
            if (!formData[field] || formData[field].trim() === '') {
                missingFields.push(field);
            }
        }

        if (missingFields.length > 0) {
            alert(`Field berikut harus diisi:\n${missingFields.join(', ')}`);
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
            return;
        }

        // === KIRIM KE BE ===
        const apiBaseUrl = '{{ config("api.base_url", "http://localhost:3005") }}';
        const endpoint = `${apiBaseUrl}/formulir`;

        let response;
        try {
            response = await fetch(endpoint, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(formData)
            });
            
            console.log('📨 Response Status:', response.status);

        } catch (fetchError) {
            throw new Error(`Gagal terhubung ke server: ${fetchError.message}`);
        }

        if (!response.ok) {
            let errorMessage = `HTTP Error! Status: ${response.status}`;
            try {
                const errorResult = await response.json();
                errorMessage = errorResult.message || errorMessage;
            } catch (parseError) {
                // Ignore parse error
            }
            throw new Error(errorMessage);
        }

        const result = await response.json();
        console.log('✅ Success Response:', result);

        if (result.success) {
    const noPendaftaran = result.no_pendaftaran || result.data?.no_pendaftaran;
    const nomorUrut = noPendaftaran ? noPendaftaran.slice(-3) : '001';
    
    updateNomorDisplay(nomorUrut);
    
    // ============ TAMPILKAN MODAL WHATSAPP ============
    showSuccessAlert(noPendaftaran);
    
    // JANGAN reset form di sini (sudah di modal)
    // Biarkan form tetap terisi sampai user pilih aksi
    
} else {
    alert('❌ Gagal: ' + (result.message || 'Unknown error'));
}

    } catch (error) {
        console.error('💥 Final Error:', error);
        alert('❌ Error: ' + error.message);
    } finally {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }
});

// ============ FUNGSI UNTUK ALERT SUKSES YANG LEBIH BAGUS ============

// ============ FUNGSI ALERT SUKSES DENGAN WHATSAPP ============
function showSuccessAlert(noPendaftaran) {
    // Ambil nama siswa
    const namaSiswa = document.querySelector('input[name="nama_lengkap"]')?.value || '';
    
    // NOMOR WHATSAPP SMK (GANTI INI DENGAN NOMOR SMK YANG BENAR)
    const nomorSMK = '6289513009008'; // Format: 62+kode negara+nomor
    
    // Buat modal
    const modalHTML = `
        <div id="successModal" style="
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.7); display: flex; justify-content: center;
            align-items: center; z-index: 1000; font-family: Arial, sans-serif;
        ">
            <div style="
                background: white; padding: 30px; border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.3); max-width: 500px;
                width: 90%; text-align: center;
            ">
                <div style="
                    background: linear-gradient(135deg, #25D366, #128C7E);
                    color: white; padding: 20px; border-radius: 10px;
                    margin-bottom: 20px;
                ">
                    <div style="font-size: 60px; margin-bottom: 10px;">✅</div>
                    <h2 style="margin: 0; font-size: 24px; font-weight: bold;">
                        PENDAFTARAN BERHASIL!
                    </h2>
                </div>
                
                <div style="margin: 20px 0;">
                    <p style="color: #666; margin-bottom: 15px;">
                        Data telah tersimpan di sistem.
                    </p>
                    
                    <div style="
                        background: #f0f8ff; border: 2px dashed #4CAF50;
                        border-radius: 8px; padding: 15px; margin: 20px 0;
                    ">
                        <p style="color: #333; font-weight: bold; margin-bottom: 5px;">
                            NOMOR PENDAFTARAN:
                        </p>
                        <div style="
                            font-size: 32px; font-weight: bold; color: #4CAF50;
                            background: white; padding: 10px; border-radius: 5px;
                            border: 2px solid #4CAF50; margin: 10px 0;
                        ">
                            ${noPendaftaran}
                        </div>
                        <p style="color: #ff9800; font-size: 14px; margin-top: 10px;">
                            ⚠️ Simpan nomor ini!
                        </p>
                    </div>
                    
                    <div style="margin-top: 25px;">
                        <button id="whatsappBtn" style="
                            background: linear-gradient(135deg, #25D366, #128C7E);
                            color: white; border: none; padding: 15px 30px;
                            font-size: 16px; border-radius: 50px; cursor: pointer;
                            font-weight: bold; width: 100%; margin-bottom: 10px;
                            transition: all 0.3s;
                        ">
                            📱 Konfirmasi ke WhatsApp SMK
                        </button>
                        
                        <button id="closeModalBtn" style="
                            background: #f5f5f5; color: #333; border: 1px solid #ddd;
                            padding: 12px 25px; font-size: 16px; border-radius: 25px;
                            cursor: pointer; font-weight: bold; width: 100%;
                            transition: all 0.3s;
                        ">
                            ✏️ Isi Formulir Baru
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <style>
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(-20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            #whatsappBtn:hover { transform: translateY(-2px); }
            #closeModalBtn:hover { background: #e0e0e0; }
        </style>
    `;
    
    // Tambahkan modal ke body
    const modalContainer = document.createElement('div');
    modalContainer.innerHTML = modalHTML;
    document.body.appendChild(modalContainer);
    
    // Event listener untuk tombol WhatsApp
    document.getElementById('whatsappBtn').addEventListener('click', function() {
        // Format pesan WhatsApp
        const message = `Halo Admin SMK Budi Mulia Pakisaji,

Saya ingin konfirmasi pendaftaran:

*Nomor Pendaftaran:* ${noPendaftaran}
*Nama Siswa:* ${namaSiswa}
*Asal Sekolah:* ${document.querySelector('input[name="nama_sekolah_asal"]')?.value || '-'}
*Alamat Rumah:* ${document.querySelector('input[name="alamat_jalan"]')?.value || '-'}
*No WhatsApp:* ${document.querySelector('input[name="no_hp"]')?.value || '-'}

Data lengkap ${namaSiswa} sudah tersimpan di sistem SPMB SMK Budi Mulia Pakisaji.

Terima kasih.`;
        
        // Encode message untuk URL
        const encodedMessage = encodeURIComponent(message);
        
        // Buka WhatsApp (GANTI nomorSMK dengan nomor yang benar)
        const whatsappURL = `https://wa.me/${nomorSMK}?text=${encodedMessage}`;
        window.open(whatsappURL, '_blank');
        
        // Tutup modal
        document.getElementById('successModal').remove();
        
        // Reset form setelah kirim WA
        setTimeout(() => {
            document.getElementById('pendaftaranForm').reset();
            updateNamaOtomatis();
        }, 300);
    });
    
    // Event listener untuk tombol Isi Baru
    document.getElementById('closeModalBtn').addEventListener('click', function() {
        document.getElementById('successModal').remove();
        document.getElementById('pendaftaranForm').reset();
        updateNamaOtomatis();
    });
    
    // Tutup modal saat klik di luar
    document.getElementById('successModal').addEventListener('click', function(e) {
        if (e.target.id === 'successModal') {
            this.remove();
            document.getElementById('pendaftaranForm').reset();
            updateNamaOtomatis();
        }
    });
}


});
</script>

@endsection
