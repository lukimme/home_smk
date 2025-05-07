@extends('Layout.layout2')
@section('title', 'Formulir Pendaftaran SMK BUDI MULIA PAKISAJI Tahun Ajaran 2025/2026')
@section('content')
<section>
    <div class="container pt-5">
        <div class="card mt-5">

            <div class="card-header bg-warning text-center mb-3">
                <h5><b>Formulir Pendaftaran Online Siswa Baru</b><br>
                    SMK BUDI MULIA PAKISAJI<br></h5>
                <h6>Tahun Ajaran 2025/2026</h6>
            </div>
            <div class="card-body">
                <form class="row g-3 was-validated" action="/simpan" method="POST">

                    <div class="container">

                        <div
                            class="row bg-success text-white border border-3 border-success opacity-100 rounded align-items-center">
                            <h5 class="text-center mt-1">Keterangan Calon Siswa</h5>
                        </div>


                        <!--<hr class="border border-3 border-success opacity-100">-->

                        <div class="row mt-3">

                            @csrf
                            <div class="row justify-content-between d-flex">
                                <div class="col-12 col-md-5 order-md-1 order-2">
                                    <!--<div class="d-flex justify-content-start">-->
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">Referal</span>
                                        <input type="text" class="form-control rounded-end" name="referal"
                                            placeholder="Nama" aria-label="nama" aria-describedby="basic-addon1">
                                        <div class="valid-feedback fst-italic">Isi dari mana mendapatkan info PPDB</div>
                                    </div>
                                    <!--</div>-->
                                </div>

                                <div class="col-12 col-md-3 order-md-2 order-1">
                                    <!--<div class="d-flex justify-content-end">-->
                                    <p class="fw-bold text-end mb-0" style="font-size: 16px;">Gelombang 1</p>
                                    <p class="fst-italic text-end mt-0" style="font-size: 10px;">Februari - April 2025
                                    </p>
                                    <!--</div>-->
                                </div>
                            </div>


                            <div class="my-3 col-md-4 col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Example@example.com" name="email"
                                    id="email" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="my-3 col-md-4 col-12">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                            <div class="my-3 col-md-4 col-12">
                                <label for="jk" class="form-label">Jenis Kelamin</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="L" value="L" required>
                                    <label class="form-check-label" for="L">Laki - Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="P" value="P" required>
                                    <label class="form-check-label" for="P">Perempuan</label>
                                </div>
                            </div>

                            <div class="mb-3 col-md-3 col-12">
                                <label for="Jurusan" class="form-label">Plihan Program keahlian</label>
                                <select class="form-select" name="Jurusan" aria-label="Default select example"
                                    id="Jurusan" required>
                                    <option value="">-- Pilih Salah Satu --</option>
                                    <option value="TKJ (Teknik Komputer & Jaringan)">TKJ (Teknik Komputer & Jaringan)
                                    </option>
                                    <option value="DKV (Desain Komunikasi Visual)">DKV (Desain Komunikasi Visual)
                                    </option>
                                    <option value="BD (Bisnis Digital)">BD (Bisnis Digital)</option>
                                    <option value="SIJA (Sistem Informasi Jaringan Aplikasi)">SIJA (Sistem Informasi
                                        Jaringan Aplikasi)</option>
                                    <option value="TBSM (Teknik Bisnis Sepedah Motor)">Otomotif</option>
                                </select>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-3 col-12">
                                <label for="TL" class="form-label">Tempat Lahir</label>
                                <input type="text" placeholder="sesuai kartu keluarga" class="form-control" name="tl"
                                    id="TL" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <label for="tanggal" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgll" id="tanggal" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <label for="agama" class="form-label">Agama & Kepercayaan</label>
                                <select class="form-select" required aria-label="select example" name="Agama"
                                    id="agama">
                                    <option value="">-- Pilih Salah Satu --</option>
                                    <option value="islam">Islam</option>
                                    <option value="Kristen/ Protestan">Kristen/ Protestan</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat"
                                    placeholder="contoh : Jl. Kemanggisan, Komp. Griya Adam, No. 4-C"
                                    aria-label="With textarea" required></textarea>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-2 col-12">
                                <label for="rt" class="form-label">RT</label>
                                <input type="number" class="form-control" name="rt" id="rt" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                            <div class="mb-3 col-md-2 col-12">
                                <label for="rw" class="form-label">RW</label>
                                <input type="number" class="form-control" name="rw" id="rw" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                            <div class="mb-3 col-md-4 col-12">
                                <label for="kec" class="form-label">Kota / kabupaten</label>
                                <input type="text" class="form-control" name="kab" id="kec" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                            <div class="mb-3 col-md-4 col-12">
                                <label for="pos" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" name="kodepos" id="pos" required>
                                <div class="invalid-feedback fst-italic">Isi "0" jika tidak ada</div>
                            </div>

                            <div class="mb-3 col-md-3 col-12">
                                <label for="notelp" class="form-label">Nomor WhatsApp</label>
                                <input type="number" placeholder="08123456789" class="form-control" name="notelp"
                                    id="notelp" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <label for="anakke" class="form-label">Anak Ke</label>
                                <input type="number" class="form-control" name="anakke" id="anakke" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <label for="sdrkandung" class="form-label">Jumlah Saudara Kandung</label>
                                <input type="number" class="form-control" name="sdrkandung" id="sdrkandung" required>
                                <div class="invalid-feedback fst-italic">Isi "0" jika tidak ada</div>
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <label for="sdrtiri" class="form-label">Jumlah saudara Tiri</label>
                                <input type="number" class="form-control" name="sdrtiri" id="sdrtiri" required>
                                <div class="invalid-feedback fst-italic">Isi "0" jika tidak ada</div>
                            </div>

                            <div class="mb-3 col-md-6 col-12">
                                <label for="bhs" class="form-label">Bahasa Sehari - hari</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="indo" name="bhs[]"
                                        value="Indonesia">
                                    <label class="form-check-label" for="indo">Indonesia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="jawa" name="bhs[]" value="Jawa">
                                    <label class="form-check-label" for="jawa">Jawa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="madura" name="bhs[]"
                                        value="Madura">
                                    <label class="form-check-label" for="madura">Madura</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="bhslain" name="bhs[]"
                                        value="Bahasa Lainnya">
                                    <label class="form-check-label" for="bhslain">Bahasa Lainnya</label>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-12">
                                <label for="asalsek" class="form-label">Asal Sekolah</label>
                                <input type="text" class="form-control" name="asalsek" id="asalsek" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="tglsttb" class="form-label">Tanggal STTB</label>
                                <input type="text" class="form-control" name="tglsttb"
                                    placeholder="Gunakan Format 31/12/2023" id="tglsttb">
                                <!--<div class="invalid-feedback">Isi Dendata dengannar</div>-->
                            </div>
                            <div class="mb-3 col-md-8 col-12">
                                <label for="nosttb" class="form-label">Nomor Surat Tanda Tamat Belajar</label>
                                <input type="text" class="form-control" name="nosttb" id="nosttb">
                                <!--<div class="invalid-feedback">Isi Dendata dengannar</div>-->
                            </div>



                            <div class="mb-3 col-md-6 col-12">
                                <label for="lamabelajar" class="form-label">Lama Belajar</label>
                                <div class="input-group mb-3">

                                    <input type="number" name="lamabelajar" id="lamabelajar"
                                        class="form-control rounded-start" placeholder="lama belajar" required>
                                    <span class="input-group-text rounded-end" id="basic-addon2">Tahun</span>
                                    <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                                </div>
                            </div>

                            <div class="mb-3 col-md-6 col-12">
                                <label for="nisn" class="form-label">NISN</label>
                                <input type="number" class="form-control" name="nisn" id="nisn" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                        </div>
                        <!--<hr class="mb-3 border border-3 border-success opacity-100">-->
                        {{-- //data Ayah   --}}
                        <div
                            class="row bg-success text-white border border-3 border-success opacity-100 rounded align-items-center my-4">
                            <h5 class="text-center mt-1">Keterangan Ayah</h5>
                        </div>
                        <!--data bapak-->
                        <!--<hr class="border border-3 border-success opacity-100">-->
                        <div class="row">
                            <div class="mb-3 col-md-4 col-12">
                                <label for="ayah" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="ayah" name="namaayah" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="tempatayah" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempatayah" name="tempatayah">
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="tglayah" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tglayah" name="tglayah">
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="keadaanayah" class="form-label">Keadaan</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="keadaanayah" id="ayahhidup"
                                        value="hidup" required>
                                    <label class="form-check-label" for="ayahhidup">Hidup</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="keadaanayah" id="ayahmati"
                                        value="Meninggal" required>
                                    <label class="form-check-label" for="ayahmati">Meninggal</label>
                                </div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="negaraayah" class="form-label">Kewarganegaraan</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="negaraayah" id="ayahwni"
                                        value="WNI" required>
                                    <label class="form-check-label" for="ayahwni">WNI</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="negaraayah" id="ayahwna"
                                        value="WNA" required>
                                    <label class="form-check-label" for="ayahwna">WNA</label>
                                </div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="agamaayah" class="form-label">Agama</label>
                                <select class="form-select" id="agamaayah" name="agamaayah"
                                    aria-label="Default select example" required>
                                    <option value=""> -- Pilih Salah Satu --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen/protestan">Kristen / Protestan</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3">
                                <label for="alamatayah" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamatayah"
                                    placeholder="contoh : Jl. Kemanggisan, Komp. Griya Adam, No. 4-C" name="alamatayah"
                                    rows="3" required></textarea>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-2 col-12">
                                <label for="rtayah" class="form-label">RT</label>
                                <input type="number" class="form-control" id="rtayah" name="rtayah">
                                <!--<div class="invalid-feedback">Isi Dendata dengannar</div>-->
                            </div>

                            <div class="mb-3 col-md-2 col-12">
                                <label for="rwayah" class="form-label">RW</label>
                                <input type="number" class="form-control" id="rwayah" name="rwayah">
                                <!--<div class="invalid-feedback">Isi Dendata dengannar</div>-->
                            </div>

                            <div class="mb-3 col-md-3 col-12">
                                <label for="kotaayah" class="form-label">Kota / kabupaten</label>
                                <input type="text" class="form-control" id="kotaayah" name="kotaayah">
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-2 col-12">
                                <label for="kodeposayah" class="form-label">Kodepos</label>
                                <input type="number" class="form-control" id="kodeposayah" name="kodeposayah">
                                <div class="valid-feedback fst-italic">Isi "0" jika tidak ada</div>
                            </div>

                            <div class="mb-3 col-md-3 col-12">
                                <label for="telpayah" class="form-label">Nomor WhatsApp</label>
                                <input type="number" class="form-control" id="telpayah" name="telpayah"
                                    placeholder="08123456789">
                                <div class="valid-feedback fst-italic">Isi "0" jika tidak ada</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="pendidikanayah" class="form-label">Pendidikan Tertinggi</label>
                                <select class="form-select" id="pendidikanayah" name="pendidikanayah"
                                    aria-label="Default select example">
                                    <option value=""> -- Pilih Salah Satu --</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTA">SLTA</option>
                                    <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                                </select>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="pekerjaanayah" class="form-label">Pekerjaan</label>
                                <select class="form-select" id="pekerjaanayah" name="pekerjaanayah"
                                    aria-label="Default select example">
                                    <option value=""> -- Pilih Salah Satu --</option>
                                    <option value="PNS">PNS</option>
                                    <option value="TNI / POLRI">TNI / POLRI</option>
                                    <option value="Tani">Tani</option>
                                    <option value="Swasta">Swasta</option>
                                    <option value="Pensiunan PNS / TNI / POLRI">Pensiunan PNS / TNI / POLRI</option>
                                </select>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="penghasilanayah" class="form-label">Penghasilan Tiap Bulan</label>
                                <select class="form-select" id="penghasilanayah" name="penghasilanayah"
                                    aria-label="Default select example">
                                    <option value=""> -- Pilih Salah Satu --</option>
                                    <option value=" - Rp.1.000.000"> - Rp.1.000.000</option>
                                    <option value="Rp.1.000.000 - Rp.2.500.000">Rp.1.000.000 - Rp.2.500.000</option>
                                    <option value=" ++ Rp.2.500.000"> ++ Rp.2.500.000</option>
                                </select>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                        </div>


                        <!--<hr class="mb-3 border border-3 border-success opacity-100">-->

                        <div
                            class="row bg-success text-white border border-3 border-success opacity-100 rounded align-items-center my-4">
                            <h5 class="text-center mt-1">Keterangan Ibu</h5>
                        </div>
                        <!-- data mamak-->
                        <!--<hr class="border border-3 border-success opacity-100">-->
                        <div class="row">
                            <div class="mb-3 col-md-4 col-12">
                                <label for="ibu" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="ibu" name="namaibu" required>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="tempatibu" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempatibu" name="tempatibu">
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="tglibu" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tglibu" name="tglibu">
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="keadaanibu" class="form-label">Keadaan</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="keadaanibu" id="ibuhidup"
                                        value="hidup" required>
                                    <label class="form-check-label" for="ibuhidup">Hidup</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="keadaanibu" id="ibumati"
                                        value="Meninggal" required>
                                    <label class="form-check-label" for="ibumati">Meninggal</label>
                                </div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="negaraibu" class="form-label">Kewarganegaraan</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="negaraibu" id="ibuwni"
                                        value="WNI" required>
                                    <label class="form-check-label" for="ibuwni">WNI</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="negaraibu" id="ibuwna"
                                        value="WNA" required>
                                    <label class="form-check-label" for="ibuwna">WNA</label>
                                </div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="agamaibu" class="form-label">Agama</label>
                                <select class="form-select" id="agamaibu" name="agamaibu"
                                    aria-label="Default select example" required>
                                    <option value=""> -- Pilih Salah Satu --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen/protestan">Kristen / Protestan</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3">
                                <label for="alamatibu" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamatibu" name="alamatibu" rows="3"
                                    placeholder="contoh : Jl. Kemanggisan, Komp. Griya Adam, No. 4-C"
                                    required></textarea>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-2 col-12">
                                <label for="rtibu" class="form-label">RT</label>
                                <input type="number" class="form-control" id="rtibu" name="rtibu">
                                <!--<div class="invalid-feedback">Isi Dendata dengannar</div>-->
                            </div>

                            <div class="mb-3 col-md-2 col-12">
                                <label for="rwibu" class="form-label">RW</label>
                                <input type="number" class="form-control" id="rwibu" name="rwibu">
                                <!--<div class="invalid-feedback">Isi Dendata dengannar</div>-->
                            </div>

                            <div class="mb-3 col-md-3 col-12">
                                <label for="kotaibu" class="form-label">Kota / kabupaten</label>
                                <input type="text" class="form-control" id="kotaibu" name="kotaibu">
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-2 col-12">
                                <label for="kodeposibu" class="form-label">Kodepos</label>
                                <input type="number" class="form-control" id="kodeposibu" name="kodeposibu">
                                <div class="valid-feedback fst-italic">Isi "0" jika tidak ada</div>
                            </div>

                            <div class="mb-3 col-md-3 col-12">
                                <label for="telpibu" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="telpibu" name="telpibu"
                                    placeholder="085123456789">
                                <div class="valid-feedback fst-italic">Isi "0" jika tidak ada</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="pendidikanibu" class="form-label">Pendidikan Tertinggi</label>
                                <select class="form-select" id="pendidikanibu" name="pendidikanibu"
                                    aria-label="Default select example">
                                    <option value=""> -- Pilih Salah Satu --</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTA">SLTA</option>
                                    <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                                </select>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="pekerjaanibu" class="form-label">Pekerjaan</label>
                                <select class="form-select" id="pekerjaanibu" name="pekerjaanibu"
                                    aria-label="Default select example">
                                    <option value=""> -- Pilih Salah Satu --</option>
                                    <option value="PNS">PNS</option>
                                    <option value="TNI / POLRI">TNI / POLRI</option>
                                    <option value="Tani">Tani</option>
                                    <option value="Swasta">Swasta</option>
                                    <option value="Pensiunan PNS / TNI / POLRI">Pensiunan PNS / TNI / POLRI</option>
                                </select>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>

                            <div class="mb-3 col-md-4 col-12">
                                <label for="penghasilanibu" class="form-label">Penghasilan Tiap Bulan</label>
                                <select class="form-select" id="penghasilanibu" name="penghasilanibu"
                                    aria-label="Default select example">
                                    <option value=""> -- Pilih Salah Satu --</option>
                                    <option value=" - Rp.1.000.000"> - Rp.1.000.000</option>
                                    <option value="Rp.1.000.000 - Rp.2.500.000">Rp.1.000.000 - Rp.2.500.000</option>
                                    <option value=" ++ Rp.2.500.000"> ++ Rp.2.500.000</option>
                                </select>
                                <div class="invalid-feedback fst-italic">Isi data dengan Benar</div>
                            </div>
                        </div>

                        <div
                            class="row bg-success text-white border border-3 border-success opacity-100 rounded align-items-center my-4">
                            {{-- <h5 class="text-center mt-1">Keterangan Wali</h5> --}}
                            <button class="btn btn-transparent" type="button" data-bs-toggle="collapse"
                                data-bs-target="#walicollapse" aria-expanded="false" aria-controls="collapseExample">
                                <h5 class="text-center mt-1 text-white">Keterangan Wali <i class="bi bi-plus"></i></h5>
                            </button>

                        </div>
                        <div class="row collapse" id="walicollapse">
                            <div class="mb-3 col-12 col-md-6">
                                <label for="wali" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="wali" name="namawali">
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="tempatwali" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempatwali" name="tempatwali">
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="tglwali" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tglwali" name="tglwali">
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="agamawali" class="form-label">Agama</label>
                                <select class="form-select" id="agamawali" name="agamawali"
                                    aria-label="Default select example">
                                    <option value="">-- Pilih Salah Satu --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="protestan">protestan</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="hubunganwali" class="form-label">Hubungan Kekerabatan</label>
                                <input type="text" class="form-control" id="hubunganwali" name="hubunganwali">
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="pendidikanwali" class="form-label">Pendidikan Tertinggi</label>
                                <select class="form-select" id="pendidikanwali" name="pendidikanwali"
                                    aria-label="Default select example">
                                    <option value="">-- Pilih Salah Satu --</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTA">SLTA</option>
                                    <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                                </select>
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="pekerjaanwali" class="form-label">Pekerjaan</label>
                                <select class="form-select" id="pekerjaanwali" name="pekerjaanwali"
                                    aria-label="Default select example">
                                    <option value="">-- Pilih Salah Satu --</option>
                                    <option value="PNS">PNS</option>
                                    <option value="TNI / POLRI">TNI / POLRI</option>
                                    <option value="Tani">Tani</option>
                                    <option value="Swasta">Swasta</option>
                                    <option value="Pensiunan PNS / TNI / POLRI">Pensiunan PNS / TNI / POLRI</option>
                                </select>
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="penghasilanwali" class="form-label">Penghasilan Tiap Bulan</label>
                                <select class="form-select" id="penghasilanwali" name="penghasilanwali"
                                    aria-label="Default select example">
                                    <option value="">-- Pilih Salah Satu --</option>
                                    <option value=" - Rp.600.000"> - Rp.600.000</option>
                                    <option value="Rp.600.000 s/d 1.000.000">Rp.600.000 s/d 1.000.000</option>
                                    <option value=" ++ Rp.1.000.000"> ++ Rp.1.000.000</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="alamatwali" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamatwali" name="alamatwali" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <button class="btn btn-primary" type="submit">Kirim Formulir</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection