<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card border-secondary mb-3">
                <div class="card-header bg-transparent border-secondary">
                    <h5>Detail Siswa</h5>
                </div>
                <div class="card-body ">
                    <h5 class="card-title"><?=$student['nama'];?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$student['email'];?></h6>
                    <p class="text-muted">
                        <?=$student['nisn'];?>
                    </p>
                    <p class="card-text">
                    <p class="font-monospace"><?=$student['hp'];?></p>
                    <p class="font-monospace"><?=$student['jurusan'];?></p>
                    </p>
                </div>
                <div class="card-footer bg-transparent border-secondary ">
                    <a href="<?=base_url('student_list');?>" class="btn btn-primary ms-3 float-end">Kembali</a>
                    <a href="" class="btn btn-success float-end updateData-button" data-bs-toggle="modal"
                        data-bs-target="#addDataModal" id="update" data-id="<?=$student['id'];?>">Ubah</a>
                </div>
            </div>
        </div>
    </div>
</div>