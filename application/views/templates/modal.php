<!-- Modal add Data Student-->
<div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDataModalLabel">Tambah Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('student_list/addStudent');?>" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama...">
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukan NISN...">
                        <label for="nisn">NISN</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email...">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="hp" name="hp"
                            placeholder="Masukan no.telephone ...">
                        <label for="hp">Nomer hp</label>
                    </div>
                    <div class="form">
                        <select class="form-select" aria-label="Default select example" id="major" name="major">
                            <option value="Belum Pilih jurusan" selected>Pilih Jurusan</option>
                            <option value="Ilmu Pengetahuan Alam">IPA</option>
                            <option value="Ilmu Pengetahuan Sosial">IPS</option>
                            <option value="Bahasa">Bahasa</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Tambah Data">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete data modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda Yakin?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Tekan <span style="font-weight:bold ;">"Hapus"</span> Untuk menghapus Data Siswa.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a class="btn btn-danger" href="">Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- schedule edit modal -->
<div class="modal fade" id="editScheduleModal" tabindex="-1" aria-labelledby="editScheduleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editScheduleModalLabel">Edit Jadwal Pelajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('lesson_schedule/update');?>" method="post">
                    <div class="row">

                        <div class="col-3">
                            <input type="text" class="form-control mb-2" value="Jam" readonly>
                            <input type="text" class="form-control mb-2" value="Senin" readonly>
                            <input type="text" class="form-control mb-2" value="Selasa" readonly>
                            <input type="text" class="form-control mb-2" value="Rabu" readonly>
                            <input type="text" class="form-control mb-2" value="Kamis" readonly>
                            <input type="text" class="form-control mb-2" value="Jum'at" readonly>
                            <input type="text" class="form-control mb-2" value="Sabtu" readonly>
                        </div>
                        <div class="col">
                            <input type="hidden" name="id_schedule" id="id_schedule">
                            <input type="text" class="form-control mb-2" id="jam" name="jam" value="07.30 - 08.15">
                            <input type="text" class="form-control mb-2" id="senin" name="senin" value="Penjas Orkes">
                            <input type="text" class="form-control mb-2" id="selasa" name="selasa" value="Fisika">
                            <input type="text" class="form-control mb-2" id="rabu" name="rabu" value="Kimia">
                            <input type="text" class="form-control mb-2" id="kamis" name="kamis" value="Kewirausahaan">
                            <input type="text" class="form-control mb-2" id="jumat" name="jumat"
                                value="Matematika Peminatan">
                            <input type="text" class="form-control mb-2" id="sabtu" name="sabtu"
                                value="Bhs. Inggris Wajib">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" value="Edit Jadwal">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal picket -->
<div class="modal fade" id="editPicketModal" tabindex="-1" aria-labelledby="editPicketModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPicketModalLabel">Edit Jadwal Pelajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('picket_schedule/update');?>" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="hari" id="hari">
                            <input type="text" class="form-control mb-2" id="nama_1" name="nama_1">
                            <input type="text" class="form-control mb-2" id="nama_2" name="nama_2">
                            <input type="text" class="form-control mb-2" id="nama_3" name="nama_3">
                            <input type="text" class="form-control mb-2" id="nama_4" name="nama_4">
                            <input type="text" class="form-control mb-2" id="nama_5" name="nama_5">
                            <input type="text" class="form-control mb-2" id="nama_6" name="nama_6">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" value="Edit Jadwal">
                </form>
            </div>
        </div>
    </div>
</div>