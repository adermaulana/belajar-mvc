<div class="container mt-3">
    <h1 class="mb-4">Halaman Tentang Saya</h1>
    <img class="rounded-circle" width="200" height="200" src="<?= BASEURL; ?>/img/logo.png" alt="">
    <p class="mt-4">Halo, Nama Saya <?= $data [ 'nama']; ?>, Umur Saya <?= $data [ 'umur']; ?> tahun, Saya adalah seorang <?= $data ['pekerjaan']; ?> </p>
</div>

<section class="satu">
    <p style="color:salmon; text-align:center;">red</p>
</section>

<section class="dua">

</section>


<style>
    .satu {
        background-image: url("<?= BASEURL?>/img/santuy.jpg");
        background-size: 100% 100%;
        background-repeat:no-repeat;
        height:600px;

    }
    .dua {
        background-color:heavy-blue;
        height:300px;
    }
</style>
