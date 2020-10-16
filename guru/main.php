<?php
require('../koneksi.php');
require('fungsi.php');
$result_guru = mysqli_query($db, "SELECT * FROM guru INNER JOIN user ON guru.id_user = user.id_user INNER JOIN level ON user.id_level = level.id_level WHERE level.level = 1");
$result_murid = mysqli_query($db, "SELECT * FROM murid INNER JOIN kelas ON murid.id_kelas = kelas.id_kelas INNER JOIN user ON murid.id_user = user.id_user INNER JOIN level ON user.id_level = level.id_level WHERE level.id_level = 2");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VSGA 2020 - Guru - Kalkulator</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../resources/assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../resources/assets/img/profile.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#guru">Guru</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#murid">Murid</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container">
            <!-- Guru-->
            <section class="resume-section" id="guru">
                <div class="resume-section-content">
                    <h2 class="mb-3">Data Guru</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <a href="#tambah_guru" class="btn btn-info" data-toggle="modal"><i class="far fa-plus-square"></i> Tambah</a>
                            <br><br>
                            <table class="table table-hover table-striped">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Aksi</th>
                                  <th>Nama Guru</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  $no = 1;
                                  foreach($result_guru as $data){
                                    echo "<tr>
                                      <td>".$no++."</td>
                                      <td><a href='#update_guru' class='btn btn-warning' data-toggle='modal' onclick='guru_detail(".$data["id_guru"].")'><i class='fas fa-edit'></i></a> | 
                                      <a href='' class='btn btn-danger' onclick='return confirm(\"Yakin mau dihapus?\")'><i class='fas fa-trash-alt'></i></a></td>
                                      <td>".$data['nama_guru']."</td>
                                      <td>".$data['username']."</td>
                                    </tr>";
                                  }
                                ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Data Murid-->
            <section class="resume-section" id="murid">
                <div class="resume-section-content">
                    <h2 class="mb-3">Data Murid</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <a href="#tambah_murid" class="btn btn-info" data-toggle="modal"><i class="far fa-plus-square"></i> Tambah</a>
                            <br><br>
                            <table class="table table-hover table-striped">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Aksi</th>
                                  <th>Nama Murid</th>
                                  <th>Kelas</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  $no = 1;
                                  foreach($result_murid as $data){
                                    echo "<tr>
                                      <td>".$no++."</td>
                                      <td><a href='#update_murid' class='btn btn-warning' data-toggle='modal' onclick='murid_detail(".$data["id_murid"].")'><i class='fas fa-edit'></i></a> | 
                                      <a href='' class='btn btn-danger' onclick='return confirm(\"Yakin mau dihapus?\")'><i class='fas fa-trash-alt'></i></a></td>
                                      <td>".$data['nama_murid']."</td>
                                      <td>".$data['kelas']."</td>
                                      <td>".$data['username']."</td>
                                    </tr>";
                                  }
                                ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                        <li class="list-inline-item"><i class="fab fa-react"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                        <li class="list-inline-item"><i class="fab fa-less"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                        <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile-First, Responsive Design
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Clarence
                        <span class="text-primary">Taylor</span>
                    </h1>
                    <div class="subheading mb-5">
                        3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
                        <a href="mailto:name@email.com">name@email.com</a>
                    </div>
                    <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>

            <div class="modal fade" id="tambah_guru">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Guru</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                      <label for="tnama_guru">Nama Guru</label><br>
                      <input class="form-control" type="text" name="nama_guru" id="tnama_guru" required><br>
                      <label for="tusername">Username</label><br>
                      <input class="form-control" type="text" name="username" id="tusername" required><br>
                      <label for="tpassword">Password</label><br>
                      <input class="form-control" type="password" name="password" id="tpassword" required><br>
                      <button type="submit" name="simpan" class="btn btn-success"><i class="far fa-save"></i></button> 
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="tambah_murid">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Murid</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                      <label for="tnama_murid">Nama Murid</label><br>
                      <input class="form-control" type="text" name="nama_murid" id="tnama_murid" required><br>
                      <label for="tusername">Username</label><br>
                      <input class="form-control" type="text" name="username" id="tusername" required><br>
                      <label for="tpassword">Password</label><br>
                      <input class="form-control" type="password" name="password" id="tpassword" required><br>
                      <button type="submit" name="simpan" class="btn btn-success"><i class="far fa-save"></i></button> 
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="update_guru">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Update Data Guru</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                      <input type="hidden" name="id_guru" id="nama_guru">
                      <label for="nama_guru">Nama Guru</label><br>
                      <input class="form-control" type="text" name="nama_guru" id="nama_guru" required><br>
                      <label for="username">Username</label><br>
                      <input class="form-control" type="text" name="username" id="username" required><br>
                      <label for="password">Password</label><br>
                      <input class="form-control" type="password" name="password" id="password" required><br>
                      <button type="submit" name="simpan" class="btn btn-success"><i class="far fa-save"></i></button> 
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="update_murid">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Update Data Murid</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                      <input type="hidden" name="id_murid" id="nama_murid">
                      <label for="nama_murid">Nama Murid</label><br>
                      <input class="form-control" type="text" name="nama_murid" id="nama_murid" required><br>
                      <label for="username">Username</label><br>
                      <input class="form-control" type="text" name="username" id="username" required><br>
                      <label for="password">Password</label><br>
                      <input class="form-control" type="password" name="password" id="password" required><br>
                      <button type="submit" name="simpan" class="btn btn-success"><i class="far fa-save"></i></button> 
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="../resources/assets/js/scripts.js"></script>
    </body>
</html>
