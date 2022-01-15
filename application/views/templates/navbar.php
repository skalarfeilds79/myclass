<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-lg">
    <div class="container">
        <a class="navbar-brand" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="#">
            <img src="<?=base_url('assets/image');?>/logo-class-fixed.png" alt="" class=" logo">
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">About Me</a></li>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pt-0" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item px-4 rounded">
                    <a class="nav-link" aria-current="page" href="<?=base_url('home');?>">Beranda</a>
                </li>
                <li class="nav-item px-4 rounded">
                    <a class="nav-link" href="<?=base_url('student_list');?>">Daftar Siswa</a>
                </li>
                <li class="nav-item px-4 rounded">
                    <a class="nav-link" href="<?=base_url('lesson_schedule');?>">Jadwal Pelajaran</a>
                </li>
                <li class="nav-item px-4 rounded">
                    <a class="nav-link" href="<?=base_url('picket_schedule');?>">Jadwal Piket</a>
                </li>
            </ul>
        </div>
    </div>
</nav>