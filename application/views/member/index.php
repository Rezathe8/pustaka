<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 justify-content-x">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="<?= base_url('assets/img/profile/') . $image; ?>" alt="..." class="card-img">
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"> <?= $user; ?></h5>
                <p class="card-text"> <?= $email; ?></p>
                <p class="card-text"><small class="text-muted">Jadi Member Sejak: <br><b><?= date('d F Y', $tanggal_input); ?></b></small></p>
            </div>

            <div class="btn btn-info ml-3 my-3">
                <a href="<?= base_url('member/ubahprofil'); ?>" class="text text-white">
                    <i class="fas fa-user-edit">
                        Ubah Profil
                    </i>
                </a>
            </div>
        </div>
    </div>
</div>

</div>