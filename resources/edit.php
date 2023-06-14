<x-app-layout>

<x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

    <div class="py-12">
        <div class="">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    
                <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <form action="{{route('store')}}" method='post'>
                @csrf
  <div class="mb-3">
    <label for="posisi" class="form-label">Posisi Yang Dilamar</label>
    <input type="text" name="posisi" class="form-control" id="posisi" value={{ Session::get('posisi') }}>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="name" name="nama" value={{ Session::get('nama') }}>
  </div>
  <div class="mb-3">
    <label for="noktp" class="form-label">No KTP</label>
    <input type="string" name="noktp" class="form-control" id="noktp" value={{ Session::get('noktp') }}>
  </div>
  <div class="mb-3">
    <label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
    <input type="text" class="form-control" id="ttl" name="ttl" value={{ Session::get('ttl') }}>
  </div>
  <div class="mb-3">
    <label for="jk" class="form-label">Jenis Kelamin</label>
    <input type="text" name="jk" class="form-control" id="jk" value={{ Session::get('jk') }}>
    <div id="" class="form-text">isikan Laki-Laki/Perempuan</div>
  </div>
  <div class="mb-3">
    <label for="agama" class="form-label">Agama</label>
    <input type="text" class="form-control" id="agama" name="agama" value={{ Session::get('agama') }}>
  </div>
  <div class="mb-3">
    <label for="goldar" class="form-label">Golongan Darah</label>
    <input type="text" name="goldar" class="form-control" id="goldar" value={{ Session::get('goldar') }}>
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <input type="text" class="form-control" id="status" name="status" value={{ Session::get('status') }}>
  </div>
  <div class="mb-3">
    <label for="alamat1" class="form-label">Alamat KTP</label>
    <input type="text" name="alamat1" class="form-control" id="alamat1" value={{ Session::get('alamat1') }}>
  </div>
  <div class="mb-3">
    <label for="alamat2" class="form-label">Alamat Tinggal</label>
    <input type="text" class="form-control" id="alamat2" name="alamat2" value={{ Session::get('alamat2') }}>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" value={{ Session::get('email') }}>
  </div>
  <div class="mb-3">
    <label for="notlp" class="form-label">No telp</label>
    <input type="string" class="form-control" id="notlp" name="notlp" value={{ Session::get('notlp') }}>
  </div>
  <div class="mb-3">
    <label for="orgdekat" class="form-label">Orang Terdekat Yang dapat Dihubungi</label>
    <input type="text" name="orgdekat" class="form-control" id="orgdekat" value={{ Session::get('orgdekat') }}>
    <div id="" class="form-text">isikan nama(notlp)</div>
  </div>
  <div class="mb-3">
    <label for="skill" class="form-label">Skill</label>
    <input type="text" class="form-control" id="skill" name="skill" value={{ Session::get('skill') }}>
  </div>
  <div class="mb-3">
    <label for="bersedia" class="form-label">Bersedia Ditempatkan Diseluruh Kantor Perusahaan</label>
    <input type="text" class="form-control" id="bersedia" name="bersedia" value={{ Session::get('bersedia') }}>
    <div id="" class="form-text">isikan Ya/Tidak</div>
  </div>
  <div class="mb-3">
    <label for="gaji" class="form-label">Penghasilan yang Diharapkan</label>
    <input type="text" class="form-control" id="gaji" name="gaji" value={{ Session::get('gaji') }}>
  </div>

  <!-- pendidikan akhir -->
  <div class="mb-3">
    <label for="penakhir" class="form-label">Jenjang Pendidikan Terakhir</label>
    <input type="text" class="form-control" id="penakhir" name="penakhir" value={{ Session::get('penakhir') }}>
  </div>
  <div class="mb-3">
    <label for="institusi" class="form-label">Nama Intitusi Akademik</label>
    <input type="text" class="form-control" id="institusi" name="institusi" value={{ Session::get('institusi') }}>
  </div>
  <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" value={{ Session::get('jurusan') }}>
  </div>
  <div class="mb-3">
    <label for="tahlulus" class="form-label">Tahun Lulus</label>
    <input type="text" class="form-control" id="tahlulus" name="tahlulus" value={{ Session::get('tahlulus') }}>
  </div>
  <div class="mb-3">
    <label for="ipk" class="form-label">IPK</label>
    <input type="text" class="form-control" id="ipk" name="ipk" value={{ Session::get('ipk') }}>
  </div>

  
  <!-- riwayat pelatiahn -->
  <div class="mb-3">
      <label for="kursus" class="form-label">Nama Kursus/Seminar</label>
      <input type="text" class="form-control" id="kursus" name="kursus" value={{ Session::get('kursus') }}>
    </div>
    <div class="mb-3">
        <label for="sertifikat" class="form-label">Sertifikat(ada/Tidak)</label>
        <input type="text" class="form-control" id="sertifikat" name="sertifikat" value={{ Session::get('sertifikat') }}>
    </div>
    <div class="mb-3">
        <label for="tahun" class="form-label">Tahun</label>
        <input type="text" class="form-control" id="tahun" name="tahun" value={{ Session::get('tahun') }}>
    </div>
    
    <!-- riwayat pekerjaan -->
    <div class="mb-3">
        <label for="perushaaan" class="form-label">Nama Perusahaan</label>
        <input type="text" class="form-control" id="perushaaan" name="perushaaan" value={{ Session::get('perushaaan') }}>
      </div>
      <div class="mb-3">
        <label for="posakhir" class="form-label">Posisi Akhir</label>
        <input type="text" class="form-control" id="posakhir" name="posakhir" value={{ Session::get('posakhir') }}>
      </div>
      <div class="mb-3">
        <label for="gajiakhir" class="form-label">Pendapatan Terakhir</label>
        <input type="text" class="form-control" id="gajiakhir" name="gajiakhir" value={{ Session::get('gajiakhir') }}>
      </div>
      <div class="mb-3">
        <label for="tahun" class="form-label">Tahun</label>
        <input type="text" class="form-control" id="tahun" name="tahun" value={{ Session::get('tahun') }}>
      </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form><!-- End General Form Elements -->


            </div>
          </div>

        </div>
      </div>

                
    @endif
@endif
</x-app-layout>