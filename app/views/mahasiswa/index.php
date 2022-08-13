<style>
    #text {
        text-decoration: none;
    }
    #text:Hover {
        color:#696969;
    }

    #hapus:Hover {
        color:maroon;
    }

    #ubah:hover {

        color:#006400;
    }
    
    #tambah {

        background-color:grey;    
        color:white;
    }
    #tambah:hover {

        background-color:black;

    }


 
</style>

<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <button id="tambah" type="button" class="btn tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                 Tambah Data Peserta
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa" id="keyword" name="keyword" autocomplete="off">
                    <button class="btn btn-outline-secondary" type="submit" id="buttonCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">

            
            <h3>Daftar Mahasiswa</h3>
            <?php foreach ( $data['mhs'] as $mhs) : ?>
                <ul class="list-group">
                    <li  class="list-group-item"><?= $mhs['nama'] ?>
                    <a id="hapus" onclick="return confirm('Yakin?');" style="text-decoration:none;" class="badge bg-danger float-end ms-1"  href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs ['id']; ?>">Hapus</a>

                    <a data-bs-toggle="modal" data-bs-target="#formModal" id="ubah" style="text-decoration:none;" href="<?= BASEURL ?>/mahasiswa/ubah/<?= $mhs ['id']; ?>"class="badge bg-success float-end me-1 tampilModalUbah" data-id="<?= $mhs['id'];?>">Ubah</a>

                    <a style="background-color:black;" id="text" href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs ['id']; ?>"class="badge float-end me-1">Detail</a>

                    </li>
                </ul>
                <?php endforeach; ?>
        </div>
    </div>
</div>



<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
             <label for="nama" class="form-label">Nama</label>
            <input required name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
             <label for="nrp" class="form-label">NRP</label>
            <input name="nrp" type="number" class="form-control" id="nrp" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
             <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select required id="jurusan" name="jurusan" class="form-select" aria-label="Default select example">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Pangan">Teknik Pangan</option>
                <option value="Teknik Planologi">Teknik Planologi</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>