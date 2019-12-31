<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo config_item('web_title'); ?></title>

    <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(); ?>assets/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="brand navbar-brand" href="<?php echo site_url(); ?>"> 
                    <img alt="<?php echo config_item('web_title'); ?>" src="<?php echo config_item('img'); ?>logo-tunas-ilmu-putih2.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url();?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'Signup'; ?>">Registrasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'Secure'; ?>">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url().'assets/img/home.jpg'?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h2>Pendaftaran Santri Baru</h2>
                        <hr class="small">
                        <span class="subheading">Informasi mengenai pendaftaran santri baru Pondok Pesantren Tunas Ilmu</span>
                        <br>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">ALUR PENDAFTARAN</button>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 style="color: black" class="modal-title">Alur Pendaftaran</h4>
                                </div>
                                <div class="modal-body">
                                    <img style="max-width: 800px" src="<?php echo base_url() ?>assets/img/Alur Pendaftaran.png">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                 </div>
                            </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h2 class="section-heading">Prolog</h2>

                    <p>Anda ingin menjadi pewaris para nabi? Jadilah seorang ulama. Niscaya Anda akan menjadi pewaris mereka, yang mewarisi ilmu, akhlaq dan semangat dakwahnya.</p>

                    <p>Pondok Pesantren “Tunas Ilmu”, yang diselenggarakan oleh Yayasan Islam Tunas Ilmu Purbalingga dengan SK Menteri Hukum dan Hak Asasi Manusia RI No: AHU-3926.AH.01.04.Tahun 2010, melalui program pendidikan intensif selama 3 tahun dan praktek dakwah lapangan selama 1 tahun, berkomitmen tinggi mengantarkan Anda menuju gerbang impian indah tersebut.</p>

                    <h2 class="section-heading">Materi Pembelajaran</h2>

                    <p>Dengan mengikuti program intensif ini, Anda akan menguasai berbagai disiplin ilmu agama dan yang lainnya.</p>

                    <p>Antara Lain :
                    <ol>
                        <li>Akidah</li>
                        <li>Tafsir</li>
                        <li>Hadits</li>
                        <li>Fiqih</li>
                        <li>Siroh Nabawiyyah</li>
                        <li>Bahasa Arab</li>
                        <li>Metode Berdakwah</li>
                        <li>Wirausaha</li>
                        <li>Sinematografi, dll.</li>
                    </ol>
                    </p>

                    <h2 class="section-heading">Kompetensi Kelulusan</h2>

                    <p><em><i>InsyaAllah </i></em>lulusan program ini akan memiliki kompetensi berikut:</p>
                    <ol>
                        <li>Lancar berbahasa Arab, aktif dan pasif</li>
                        <li>Menguasai berbagai disiplin ilmu agama</li>
                        <li>Mahir berceramah dalam bahasa Arab dan Indonesia</li>
                        <li>Trampil menulis artikel ilmiah</li>
                        <li>Mampu mendakwahkan Islam dengan hikmah</li>
                        <li>Memiliki ketrampilan berwirausaha</li>
                    </ol>
                    
                    <h2 class="section-heading">Fasilitas Pendidikan</h2>
                    <ol>
                        <li>Masjid</li>
                        <li>Ruang belajar</li>
                        <li>Asrama</li>
                        <li>Perpustakaan dengan ribuan koleksi kitab Arab</li>
                        <li>Sarana olahraga (lapangan futsal dll)</li>
                        <li>Mini market</li>
                    </ol>

                    <h2 class="section-heading">Tenaga Pengajar :</h2>
                    <p>Pengajar<em><i>&nbsp;</i></em>terdiri dari para alumni S1 dan S2 Universitas Islam Madinah, Yaman, ‘Unaizah-Arab Saudi, LIPIA Jakarta dan lain-lain.</p>

                    <h2 class="section-heading">Informasi Pendaftaran :</h2>
                    <p><b>SYARAT-SYARAT:</b></p>
                    <ol>
                        <li>Pria</li>
                        <li>Foto copy ijazah SMU/sederajat dan NEM</li>
                        <li>Salinan akta kelahiran</li>
                        <li>Surat keterangan catatan kepolisian (SKCK) yang masih berlaku</li>
                        <li>Rekomendasi dari seorang ustadz/da’i/lembaga dakwah yang dikenal</li>
                        <li>Pas foto terbaru 2×3 dan 4×6 (@ dua lembar)</li>
                        <li>Surat keterangan sehat dari dokter</li>
                        <li>Foto copy KTP yang masih berlaku</li>
                        <li>Surat izin dari orang tua</li>
                        <li>Mengisi formulir pendaftaran (bisa didownload dari <a href="http://tunasilmu.com/"><strong><b>http://tunasilmu.com</b></strong></a>)</li>
                        <li>Bersedia mengikuti tata tertib pesantren.</li>
                    </ol>

                    <h2 class="section-heading">Kuota Pendaftaran Santri</h2>
                    <p>Karena pertimbangan efesiensi pembelajaran, total santri yang akan diterima adalah<strong><b>&nbsp;20 orang</b></strong>&nbsp;saja. Dan santri diberi keleluasaan untuk memilih berasrama atau tidak, terutama bagi yang telah berkeluarga.</p>

                    <h2 class="section-heading">Materi Ujian</h2>
                    <ul>
                        <li>Wawancara</li>
                        <li>Membaca al-Qur’an</li>
                        <li>Materi dasar agama</li>
                    </ul>

                    <h2 class="section-heading">Biaya Pendaftaran Studi dan Pendaftaran</h2>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan="2">Biaya Pendaftaran :</th>
                            </tr>
                            <tr>
                                <td>Pendaftaran</td>
                                <td>Rp. 20.000</td>
                            </tr>
                            <tr>
                                <td>Perlengkapan (sekali selama belajar, untuk santri berasrama)</td>
                                <td>Rp. 100.000</td>
                            </tr>
                            <tr>
                                <td>SPP / bulan</td>
                                <td>Rp. 50.000</td>
                            </tr>
                            <tr>
                                <td>Uang makan / bulan (khusus bagi santri berasrama)</td>
                                <td>Rp. 200.000</td>
                            </tr>
                            <tr>
                                <td>Uang gedung</td>
                                <td>Gratis</td>
                            </tr>
                            <tr>
                                <td><strong><b>Total (untuk santri berasrama)</b></strong></td>
                                <td><strong><b>Rp. 370.000</b></strong></td>
                            </tr>
                            <tr>
                                <td><strong><b>Total (untuk santri non asrama)</b></strong></td>
                                <td><strong><b>Rp. 70.000</b></strong></td>
                            </tr>
                            <tr>
                                <th colspan="2">Biaya Setiap Bulan :</th>
                            </tr>
                            <tr>
                                <td>Santri berasrama (SPP &amp; uang makan)</td>
                                <td><strong><b>Rp. 250.000</b></strong></td>
                            </tr>
                            <tr>
                                <td>Santri non asrama (SPP)</td>
                                <td><strong><b>Rp. 50.000</b></strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 class="section-heading">Informasi :</h2>
                    <p>Telp : (0281) 6597674<br>
                    Hp : 081319839320<br>
                    Website : <a href="http://tunasilmu.com/">http://tunasilmu.com<br>
                    </a>Email : pesantren.tunasilmu@gmail.com</p>
                    <p>Segera daftarkan diri Anda atau putra-putri Anda, sebelum terlambat!</p>
                    <p><strong><b>Beasiswa bagi Santri yang Kurang Mampu dan Berprestasi</b></strong></p>

                </div>
            </div>
        </div>
    </article>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website <?php echo date('Y');?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jqBootstrapValidation.js"></script>
    
    <!-- Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/clean-blog.min.js"></script>

</body>

</html>
