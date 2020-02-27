<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $judul ?></title>
    <meta property="og:image" content="<?= base_url(); ?>assets/img/logogbikk.png">
    <meta name="description" content="Website sebagai informasi mengenai gereja GBI Kasih Karunia">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/png" sizes="70x50" href="<?= base_url(); ?>assets/img/logogbikk.png">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Diagonal-div-section.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Image-slider-carousel-With-arrow-buttons-1.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Image-slider-carousel-With-arrow-buttons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/untitled.css">
</head>

<body id="page-top"><a class="menu-toggle rounded"><i style ="color:white;"class="fa fa-bars"></i></a>
  
    <header class="d-flex masthead" style="background-image: url(&quot;assets/img/DSC_0435.JPG&quot;);background-color: rgba(0,0,0,0.29);background-blend-mode: darken;/*background: rgba(0,0,0,0.29);*/">
        <div class="container my-auto text-center">
        <h2 style="color: rgb(255,255,255);font-family: Poppins, sans-serif;text-shadow: 1px 1px rgb(0,0,0);">Gereja Bethel Indonesia</h2>
            <h1 class="mb-1" style="color: rgb(255,255,255);font-family: 'Source Sans Pro', sans-serif;text-shadow: 1px 1px rgb(0,0,0);">Kasih Karunia</h1>
            <h3 class="mb-5"><em style="color: rgb(255,255,255);">				<div class="caption v-middle text-center">
					<h1 class="cd-headline clip">
			            
                    <span class="cd-words-wrapper">
			              <b class="is-visible">
                            Serupa
                            </b>
			              <b>Segambar</b>
                            <b>Sempurna</b>
			              <b>Seperti Kristus</b>
			            </span>
                      </h1>
                 
                      </div></h3>
                      <?php foreach($warta as $wrt): ?>   
                      <a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="<?= base_url(); ?>uploads/<?php echo $wrt['nama_file'];?>" target="_blank">Unduh Warta Jemaat</a>
                      <?php endforeach;?>
            <div class="overlay"></div>
        </div>
    </header>
    <section id="greeting" class="content-section bg-light d-flex justify-content-center align-items-center align-items-sm-center" style="background-color: rgb(255,255,255);height:850px;">
        <div class="container text-center">
            <div class="row">
            <div class="col-12 col-md-5 col-lg-5 col-xl-auto offset-0 offset-sm-0 offset-md-3 offset-lg-0 offset-xl-0 d-flex justify-content-center align-items-center align-items-sm-center" style="margin-bottom: 30px;"><img class="rounded-circle d-flex" width="300px" src="assets/img/Foto%20Pagem%20dan%20Ko%20Sammy.png"></div>
            <div class="col-lg-7 col-xl-8 d-xl-flex align-items-xl-center">
                    <blockquote class="blockquote">
                        <p style="color:black;" class="text-center mb-0">Selamat Datang Diwebsite Kasih Karunia Family Center. Kiranya Damai Sejahtera menyertai saudara sekalian semua. Kami memiliki Fokus Tahun 2019 adalah&nbsp;<strong><em>&nbsp; "Penginjilan dan Pemuridan Untuk Mendewasakan Jemaat Menjadi Sempurna Seperti Kristus"</em></strong></p>
                        <footer
                            class="blockquote-footer text-center">&nbsp;Sammy Christian lumband radja s.psi &amp; Pdt Sahala Nainggolan m.Th</footer>
                    </blockquote>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col offset-lg-4 offset-xl-4"><a class="btn btn-dark btn-xl js-scroll-trigger" role="button" href="#services">Kegiatan Bulan ini</a></div>
            </div>
        </div> -->
    </section>
    <!-- <section id="services" class="content-section bg-primary text-white text-center">
        <div class="container" style="width: auto;height: auto;">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5 d-sm-flex d-md-flex justify-content-sm-center justify-content-md-center" style="height: 300px;">
                    <div>
                        <div id="divgambar" class="containerSlider"><img id="slideimg0" class="slide showMe" src="assets/img/youthaltarcall.jpg" style="max-width: 400px;max-height: 266.656px;"><img id="slideimg1" class="slide" src="assets/img/youthallstar.jpg"><img id="slideimg2" class="slide" src="assets/img/JUNIOR(1).JPG"
                                style="max-width: 400px;max-height: 266.656px;"></div>
                        <div class="containerSlider"><img src="assets/img/LeftArrow.png" class="arrowLeft" onclick="prevImage()"><img src="assets/img/RightArrow.png" class="arrowRight" onclick="nextImage()"></div>
                    </div>
                </div>
                <div class="col">
                    <h1 class="border-bottom solid">Upcoming Events &nbsp;&nbsp;</h1>


                    <?php foreach($event as $evt): ?>   
                     
                    <div class="row" id="calender-event" style="padding-top: 20px;">

                        <div class="col-lg-3 d-xl-flex justify-content-xl-center align-items-xl-center">
                       
                            <div class="row">
                                <div class="col d-xl-flex justify-content-xl-center align-items-xl-center">
                                    <h1 class="border rounded" style="padding: 10px;font-size: 31px;font-weight: bold;font-style: normal;background-color: #ffffff;color: rgb(29,128,159);"><?php
                                    
                                    $tanggal = explode('-',$evt['tanggal']);
                                    $waktu = $tanggal[1];
                                    
                                    if ($waktu == '01'){
                                        $bulan = 'Jan';
                                    } elseif ($waktu == '02') {
                                        $bulan = 'Feb';
                                    }
                                    elseif ($waktu == '03') {
                                        $bulan = 'Mar';
                                    }
                                    elseif ($waktu == '04') {
                                        $bulan = 'Apr';
                                    }
                                    elseif ($waktu == '05') {
                                        $bulan = 'Mei';
                                    }
                                    elseif ($waktu == '06') {
                                        $bulan = 'Jun';
                                    }
                                    elseif ($waktu == '07') {
                                        $bulan = 'Jul';
                                    }
                                    elseif ($waktu == '08') {
                                        $bulan = 'Ags';
                                    }elseif ($waktu == '09') {
                                        $bulan = 'Sep';
                                    }
                                    elseif ($waktu == '10') {
                                        $bulan = 'Okt';
                                    }
                                    elseif ($waktu == '11') {
                                        $bulan = 'Nov';
                                    }
                                    elseif ($waktu == '12') {
                                        $bulan = 'Des';
                                    }
                                      
                                        
                                    
                                    echo  $tanggal[2],' ',$bulan;?></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h1 style="font-size: 33px;"><?php echo $evt['judul'];?></h1>
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: 16px;">
                                    <?= $evt['deskripsi'];?>
                                    <br><br></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
<?php endforeach; ?>
                   
                    <div class="row d-flex d-lg-flex d-xl-flex justify-content-center justify-content-lg-end justify-content-xl-end align-items-xl-center" id="calender-event-button" style="padding-top: 20px;"><a class="btn btn-dark btn-xl js-scroll-trigger" role="button" href="#services">Lihat Semua Event</a></div> -->
                <!-- </div>
                
            </div>
        </div>
    </section> --> 
    <!-- <section id="persembahan" class="callout" style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.1) 100%), url(&quot;assets/img/bg-callout.jpg&quot;);background-repeat: no-repeat;background-size: cover;background-image: url(&quot;assets/img/berbagi%20kasih.JPG&quot;);background-attachment: fixed;background-blend-mode: darken;background-position: center center;background-color: #6c7bae;">
        <div class="container text-center">
            <h2 class="mx-auto mb-5"><span style="color: rgb(237,237,237);">Mari Berbagi&nbsp;</span><span></span></h2><a class="btn btn-primary btn-xl" role="button" href="<?= base_url();?>persembahan" target="_top">Persembahan Online</a></div>
    </section> -->
    <section id="news" class="content-section bg-primary text-white text-center">
        <div class="container">
            <div class="content-section-heading">
                <h2 class="mb-5">Berita Kasih Karunia</h2>
            </div>

            <?php foreach($video as $vid): ?>   
            <div class="row">
                <div class="col"><iframe allowfullscreen="" frameborder="0" 


                src="<?php echo $vid['detail_video']; ?>" 
            

                class="embed-responsive-item" width="100%" style="-webkit-box-shadow: 3px 10px 24px -4px rgba(0,0,0,0.75);-moz-box-shadow: 3px 10px 24px -4px rgba(0,0,0,0.75);box-shadow: 3px 10px 24px -4px rgba(0,0,0,0.75);"></iframe>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- <div class="d-flex d-lg-flex justify-content-center justify-content-lg-center" id="warta" style="margin-top: -34px;"><a class="btn btn-dark btn-xl js-scroll-trigger" role="button" href="#services" style="-webkit-box-shadow: 10px 24px 37px -18px rgba(0,0,0,0.75);-moz-box-shadow: 10px 24px 37px -18px rgba(0,0,0,0.75);box-shadow: 10px 24px 37px -18px rgba(0,0,0,0.75);">Download Warta&nbsp;</a></div> -->
    <!-- <section
        id="portfolio" class="content-section">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">KASIH KARUNIA</h3>
                <h2 class="mb-5">Family Church Center</h2>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <a class="stretched-link portfolio-item" href="" data-target="#mymodalkom" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h2>Komunitas</h2>
                                <p class="mb-0">Informasi mengenai komunitas yang ada di Kasih Karunia.</p>
                            </div>
                        </div><img class="img-fluid" src="assets/img/youthallstar.jpg"></a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#mymodaljadwal" data-target="#mymodaljadwal" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h2>Jadwal</h2>
                                <p class="mb-0">Infromasi mengenai jadwal ibadah dan jadwal ibadah dalam satu bulan terakhir.</p>
                            </div>
                        </div><img class="img-fluid" src="assets/img/portfolio-2.jpg"></a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#mymodalpel" data-target="#mymodalpel" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h2>Pelayanan</h2>
                                <p class="mb-0">Informasi mengenai Prosedur Pelayanan Doa .</p>
                            </div>
                        </div><img class="img-fluid" src="assets/img/gospel.jpg"></a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="http://localhost/CI_GBIKK/santapan_rohani" target="_top">
                        <div class="caption">
                            <div class="caption-content">
                                <h2>Santapan rohani</h2>
                                <p class="mb-0">Awali Hari Anda dengan Santapan Rohani</p>
                            </div>
                        </div><img class="img-fluid" src="assets/img/pray.jpg"></a>
                </div>
                <div class="col">
                    <div class="modal fade" role="dialog" tabindex="-1" id="mymodaljadwal" style="background-color: rgba(255,255,255,0);">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #ffffff;margin-right: -11PX;">
                                    <section class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center container"
                                        id="diagonal" style="max-width: 100%;height: 117px;background-color: rgb(47,156,203);color: #ffffff;padding-top: 0px;">
                                        <h1 class="text-center border white" style="padding: 5px;font-size: 32px;">Jadwal Kebaktian</h1>
                                        <div id="diagonal-text" style="padding-top: 18px;"></div>
                                    </section><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body" style="height: 657px;padding-bottom: 16px;-webkit-box-shadow: -2px 16px 45px -16px rgba(0,0,0,0.75);-moz-box-shadow: -2px 16px 45px -16px rgba(0,0,0,0.75);box-shadow: -2px 16px 45px -16px rgba(0,0,0,0.75);">
                                    <section id="diagonal" class="container" style="max-width: 100%;background-color: rgb(47,175,203);">
                                        <div id="diagonal-text">
                                            <div class="table-responsive table-borderless" style="color: rgb(255,255,255);">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr style="color: rgb(255,255,255);">
                                                            <th>Hari</th>
                                                            <th>Waktu</th>
                                                            <th>Kegiatan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="color: rgb(255,255,255);">
                                                        <tr>
                                                            <td>Minggu</td>
                                                            <td>06.30</td>
                                                            <td>Doa Syafaat 1</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>07.00</td>
                                                            <td>Ibada Raya 1 + kids</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10.00</td>
                                                            <td>Ibada Raya 2 + kids</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>11.00</td>
                                                            <td>Kids For Christ</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>16.30</td>
                                                            <td>Doa Syafaat 2</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>17.00</td>
                                                            <td>ibadah Raya 3 + Kids</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Selasa</td>
                                                            <td>19.30</td>
                                                            <td>Komsel Umum dan Komsel Youth</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rabu</td>
                                                            <td>16.00</td>
                                                            <td>Ibadah WBI</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kamis</td>
                                                            <td>19.00</td>
                                                            <td>Latihan Musik</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jumat</td>
                                                            <td>19.30</td>
                                                            <td>Doa Malem</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sabtu</td>
                                                            <td>19.00</td>
                                                            <td>Ibadah Youth</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Selasa-Sabtu</td>
                                                            <td>04.45</td>
                                                            <td>Doa Pagi</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Selasa-Sabtu</td>
                                                            <td>10.30</td>
                                                            <td>Doa Siang</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Selasa-Sabtu</td>
                                                            <td>16.30</td>
                                                            <td>Doa Sore</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="mymodalkom" style="background-color: rgba(255,255,255,0);">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #ffffff;margin-right: -11PX;">
                                    <section class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center container"
                                        id="diagonal" style="max-width: 100%;height: 117px;background-color: rgb(47,156,203);color: #ffffff;padding-top: 0px;">
                                        <h1 class="text-center border white" style="padding: 5px;font-size: 32px;">Komunitas Kasih Karunia</h1>
                                        <div id="diagonal-text" style="padding-top: 18px;"></div>
                                    </section><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body" style="height: 657px;padding-bottom: 16px;-webkit-box-shadow: -2px 16px 45px -16px rgba(0,0,0,0.75);-moz-box-shadow: -2px 16px 45px -16px rgba(0,0,0,0.75);box-shadow: -2px 16px 45px -16px rgba(0,0,0,0.75);">
                                    <section id="diagonal" class="container" style="max-width: 100%;background-color: rgb(47,175,203);">
                                        <div id="diagonal-text">
                                            <div style="padding-top: 20px;">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 25px;"><img src="assets/img/JUNIOR(1).JPG" style="width: 100%;"></div>
                                                    <div class="col">
                                                        <h3>Youth Kasih Karunia</h3>
                                                        <p class="text-justify">Komunitas anak muda yang memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan,mengembangkan, dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung
                                                            bersama kami.</p>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-clock-o" style="margin-right: 9px;"></i>Sabtu 19:00</h6>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-whatsapp" style="margin-right: 9px;"></i>Grace 087884421792</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding-top: 20px;">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 25px;"><img src="assets/img/PRIA(1).jpg" style="width: 100%;"></div>
                                                    <div class="col">
                                                        <h3>Pria Sejati</h3>
                                                        <p class="text-justify">Komunitas Pria Dewasa yang sudah berkeluarga memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan,mengembangkan, dan bertumbuh bersama-sama di dalam
                                                            Tuhan. Yuk bergabung bersama kami.</p>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-clock-o" style="margin-right: 9px;"></i>Sabtu 19:00</h6>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-whatsapp" style="margin-right: 9px;"></i>Rudi Yusniar 087884421792</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding-top: 20px;">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 25px;"><img src="assets/img/wbi.jpg" style="width: 100%;"></div>
                                                    <div class="col">
                                                        <h3>WBI&nbsp;</h3>
                                                        <p class="text-justify">Komunitas anak muda yang memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan,mengembangkan, dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung
                                                            bersama kami.</p>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-clock-o" style="margin-right: 9px;"></i>Sabtu 19:00</h6>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-whatsapp" style="margin-right: 9px;"></i>Grace 087884421792</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding-top: 20px;">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 25px;"><img src="assets/img/wbi.jpg" style="width: 100%;"></div>
                                                    <div class="col">
                                                        <h3>Junior&nbsp;</h3>
                                                        <p class="text-justify">Komunitas anak muda yang memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan,mengembangkan, dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung
                                                            bersama kami.</p>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-clock-o" style="margin-right: 9px;"></i>Sabtu 19:00</h6>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-whatsapp" style="margin-right: 9px;"></i>Grace 087884421792</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding-top: 20px;">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 25px;"><img src="assets/img/wbi.jpg" style="width: 100%;"></div>
                                                    <div class="col">
                                                        <h3>Kids &nbsp;</h3>
                                                        <p class="text-justify">Komunitas anak muda yang memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan,mengembangkan, dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung
                                                            bersama kami.</p>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-clock-o" style="margin-right: 9px;"></i>Sabtu 19:00</h6>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-whatsapp" style="margin-right: 9px;"></i>Grace 087884421792</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="mymodalpel" style="background-color: rgba(255,255,255,0);">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #ffffff;margin-right: -11PX;">
                                    <section class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center container"
                                        id="diagonal" style="max-width: 100%;height: 117px;background-color: rgb(47,156,203);color: #ffffff;padding-top: 0px;">
                                        <h1 class="text-center border white" style="padding: 5px;font-size: 32px;">Pelayanan Kasih Karunia</h1>
                                        <div id="diagonal-text" style="padding-top: 18px;"></div>
                                    </section><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body" style="height: 657px;padding-bottom: 16px;-webkit-box-shadow: -2px 16px 45px -16px rgba(0,0,0,0.75);-moz-box-shadow: -2px 16px 45px -16px rgba(0,0,0,0.75);box-shadow: -2px 16px 45px -16px rgba(0,0,0,0.75);">
                                    <section id="diagonal" class="container" style="max-width: 100%;background-color: rgb(47,175,203);">
                                        <div id="diagonal-text">
                                            <div style="padding-top: 20px;">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 25px;"><img src="assets/img/dukacita.jpg" style="width: 100%;"></div>
                                                    <div class="col">
                                                        <h3>Penyerahan Anak</h3>
                                                        <p class="text-justify">Komunitas anak muda yang memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan,mengembangkan, dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung
                                                            bersama kami.</p>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-clock-o" style="margin-right: 9px;"></i>Sabtu 19:00</h6>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-whatsapp" style="margin-right: 9px;"></i>Grace 087884421792</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding-top: 20px;">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 25px;"><img src="assets/img/baptis.jpg" style="width: 100%;"></div>
                                                    <div class="col">
                                                        <h3>Baptisan Air</h3>
                                                        <p class="text-justify">Komunitas anak muda yang memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan,mengembangkan, dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung
                                                            bersama kami.</p>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-clock-o" style="margin-right: 9px;"></i>Sabtu 19:00</h6>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-whatsapp" style="margin-right: 9px;"></i>Grace 087884421792</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding-top: 20px;">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 25px;"><img src="assets/img/dukacita.jpg" style="width: 100%;"></div>
                                                    <div class="col">
                                                        <h3>Pernikahan</h3>
                                                        <p class="text-justify">Komunitas Pria Dewasa yang sudah berkeluarga memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan,mengembangkan, dan bertumbuh bersama-sama di dalam
                                                            Tuhan. Yuk bergabung bersama kami.</p>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-clock-o" style="margin-right: 9px;"></i>Sabtu 19:00</h6>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-whatsapp" style="margin-right: 9px;"></i>Rudi Yusniar 087884421792</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding-top: 20px;">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 25px;"><img src="assets/img/JUNIOR(1).JPG" style="width: 100%;"></div>
                                                    <div class="col">
                                                        <h3>Ibadah Penghiburan</h3>
                                                        <p class="text-justify">Komunitas anak muda yang memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan,mengembangkan, dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung
                                                            bersama kami.</p>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-clock-o" style="margin-right: 9px;"></i>Sabtu 19:00</h6>
                                                        <h6 style="line-height: 9px;font-size: 15px;"><i class="fa fa-whatsapp" style="margin-right: 9px;"></i>Grace 087884421792</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section> -->

        <section id="ruanglingkup" class="content-section">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">GBI Kasih Karunia&nbsp;</h3>
                <h2 class="mb-5" style="font-size: 45px;color:black;">Ruang Lingkup</h2>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#modalYouth" data-toggle="modal" data-target="#modalYouth">
                        <div class="caption">
                            <div class="caption-content">
                                <h2>Komunitas</h2>
                                <p class="mb-0">Informasi mengenai komunitas GBI Kasih Karunia</p>
                            </div>
                        </div><img class="img-fluid" src="assets/img/YOUTH.JPG" loading="auto"></a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#modalJadwal" data-toggle="modal" data-target="#modalJadwal">
                        <div class="caption">
                            <div class="caption-content">
                                <h2>Jadwal ibadah</h2>
                                <p class="mb-0">Informasi mengenai Jadwal Ibadah</p>
                            </div>
                        </div><img class="img-fluid" src="assets/img/portfolio-2.jpg"></a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#modalPelayanan" data-toggle="modal" data-target="#modalPelayanan">
                        <div class="caption">
                            <div class="caption-content">
                                <h2>pelayanan</h2>
                                <p class="mb-0">Informasi mengenai pelayanan GBI Kasih Karunia</p>
                            </div>
                        </div><img class="img-fluid" src="assets/img/PENTAHBISAN%202.JPG"></a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#modalRekening" data-toggle="modal" data-target="#modalRekening">
                        <div class="caption">
                            <div class="caption-content">
                                <h2>persembahan</h2>
                                <p class="mb-0">Dukung kami dalam Finansial</p>
                            </div>
                        </div><img class="img-fluid" src="assets/img/cho-di-la-hanh-phuc-hon-nhan-ve.jpg"></a>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="modalJadwal">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header d-xl-flex" style="background-color: #1da1d2;">
                    <section class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center container">
                        <h4 class="modal-title d-xl-flex" style="color: rgb(255,255,255);">Jadwal Kasih Karunia</h4>
                    </section><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body" style="background-color: #1da1d2;">
                    <div style="padding: 40px;padding-right: 20px;padding-bottom: 20px;">
                        <div class="table-responsive table-borderless" style="color: rgb(249,249,249);">
                            <table class="table table-striped table-bordered table-sm">
                                <thead>
                                    <tr style="color: rgb(255,255,255);font-size: 20px;">
                                        <th>Hari</th>
                                        <th style="width: 114px;">Waktu</th>
                                        <th>Kegiatan</th>
                                    </tr>
                                </thead>
                                <tbody style="color: rgb(255,255,255);">
                                    <tr>
                                        <td>Minggu</td>
                                        <td style="width: 245px;">06:30</td>
                                        <td style="width: 245px;">Doa Syafaat</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>07:00</td>
                                        <td>Ibadah Raya 1 + Kids</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>10:00</td>
                                        <td>Ibadah Raya 2 + Kids</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>11:00</td>
                                        <td>Junior Of Light</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>17:00</td>
                                        <td>Ibadah Raya 3 + Kids</td>
                                    </tr>
                                    <tr>
                                        <td>Selasa</td>
                                        <td>19:30</td>
                                        <td>Komsel Umum</td>
                                    </tr>
                                    <tr>
                                        <td>Rabu</td>
                                        <td>16:00</td>
                                        <td>Ibadah WBI</td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td>Kamis</td>
                                        <td>19:00</td>
                                        <td>Latihan Musik</td>
                                    </tr>
                                    <tr>
                                        <td>Jumat</td>
                                        <td>19:30</td>
                                        <td>Doa Pengajaran&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Sabtu</td>
                                        <td>19:00</td>
                                        <td>Ibadah Youth</td>
                                    </tr>
                                    <tr>
                                        <td>Selasa - Sabtu</td>
                                        <td>04:45</td>
                                        <td>Doa Pagi</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>10:30</td>
                                        <td>Doa Siang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>16:30</td>
                                        <td>Doa Sore</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #1da1d2;"><button class="btn btn-light" type="button" data-dismiss="modal" style="background-color: rgb(32,152,211);color: rgb(255,255,255);">Tutup</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modalRekening">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header d-xl-flex" style="background-color: #1da1d2;">
                    <section class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center container">
                        <h4 class="modal-title d-xl-flex" style="color: rgb(255,255,255);">Jadwal Kasih Karunia</h4>
                    </section><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body" style="background-color: #1da1d2;">
                    <div style="padding: 40px;padding-right: 20px;padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-3" style="color: rgb(255,255,255);padding-bottom: 20px;">
                                <h1 style="font-size: 24px;">PI &amp; Misi</h1>
                                <p>Pelayanan PI dan Misi untuk melakukan misi ke gereja-gereja yang membutuhkan bantuan. Bantuan yang kami berikan bisa berupa dana maupun tenaga</p><span>BCA 161 350 3009</span></div>
                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3"
                                style="color: rgb(255,255,255);padding-bottom: 20px;">
                                <h1 style="font-size: 24px;">Berbagi Kasih</h1>
                                <p>Kegiatan berbagi kasih rutin diadakan sekali dalam sebulan. Dengan membantu orang-orang yang membutuhkan dalam bentuk sembako dan makanan.</p><span>BCA 161 350 3009</span></div>
                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3"
                                style="color: rgb(255,255,255);padding-bottom: 20px;">
                                <h1 style="font-size: 24px;"><strong>Perpuluhan</strong></h1>
                                <p>Bagi Saudara yang rindu ingin memberikan perpuluhan. Kami menyediakan pilihan melalui rekening Gereja kami.</p><span>BCA 161 350 3009</span></div>
                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3" style="color: rgb(255,255,255);">
                                <h1 style="font-size: 24px;">Diakonia</h1>
                                <p>Bagi saudara yang rindu untuk membantu pelayanan kami di bidang Diakonia dan dukacita. Untuk membantu jemaat dalam mengurus kematian saudara/orang terdekatnya.</p><span>BCA 161 350 3009</span></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #1da1d2;"><button class="btn btn-light" type="button" data-dismiss="modal" style="background-color: rgb(32,152,211);color: rgb(255,255,255);">Tutup</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modalPelayanan">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header d-xl-flex" style="background-color: #1da1d2;">
                    <section class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center container">
                        <h4 class="modal-title d-xl-flex" style="color: rgb(255,255,255);">Pelayanan Kasih Karunia</h4>
                    </section><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body" style="background-color: #1da1d2;">
                    <div style="padding: 40px;padding-right: 20px;padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center" style="padding-top: 11px;padding-bottom: 30px;"><img src="assets/img/PENYERAHAN%20ANAK%201.JPG" width="100%"></div>
                            <div class="col">
                                <h1>Penyerahan Anak</h1>
                                <p style="font-family: Poppins, sans-serif;">Kami Melayani penyerahan Anak yang baru lahir untuk didoakan oleh Bp Gembala Pdt Sahala Nainggolan m.Th</p>
                                <div><i class="fa fa-user" style="margin-right: 9px;"></i><span>Bp Andreas : 085880238222</span></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 40px;padding-right: 20px;padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 30px;"><img src="assets/img/BAPTISAN%202.JPG" width="100%"></div>
                            <div class="col" >
                                <h1>Baptisan Air</h1>
                                <p style="font-family: Poppins, sans-serif;">Baptisan air adalah salah satu sakramen yang dit.Baptisan air bukan sekadar suatu upacara peresmian untuk menjadi Kristen, tetapi baptisan air merupakan serangkaian langkah-langkah pertobatan dari dosa yang membawa kita
                                    kepada keselamatan (Markus 16:16).&nbsp;&nbsp;</p>
                                <div><i class="fa fa-user" style="margin-right: 9px;"></i><span>Pdm Dadang M : 081389258860</span></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 40px;padding-right: 20px;padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-bottom: 30px;"><img src="assets/img/PEMBERKATAN%203.JPG" width="100%"></div>
                            <div class="col">
                                <h1>&nbsp;Pernikahan</h1>
                                <p style="font-family: Poppins, sans-serif;">Pemberkatan nikah adalah suatu peristiwa sakral dan sangat penting yang dinanti-nantikan oleh pasangan calon mempelai sebagai momen persatuan menjadi suami istri di dalam Tuhan sekaligus sebagai langkah awal memasuki kehidupan
                                    keluarga yang baru</p>
                                <div><i class="fa fa-user" style="margin-right: 9px;"></i><span>Pdp Novri R: 08118123970</span></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 40px;padding-right: 20px;padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-top: 0PX;padding-bottom: 30PX;"><img src="assets/img/DIAKONIA%203.jpeg" width="100%"></div>
                            <div class="col">
                                <h1>Dukacita&nbsp;</h1>
                                <p style="font-family: Poppins, sans-serif;">Pelayanan yang ditujukkan kepada orang yang baru kehilangan kerabat terdekat atau anggota keluarga yang dikasihi.</p>
                                <div><i class="fa fa-user" style="margin-right: 9px;"></i><span>Bp Udikun&nbsp; : 081281616121</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #1da1d2;"><button class="btn btn-light" type="button" data-dismiss="modal" style="background-color: rgb(32,152,211);color: rgb(255,255,255);">Tutup</button></div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="modalYouth">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header d-xl-flex" style="background-color: #1da1d2;">
                    <section class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center container">
                        <h4 class="modal-title d-xl-flex" style="color: rgb(255,255,255);">Komunitas Kasih Karunia</h4>
                    </section><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body" style="background-color: #1da1d2;">
                    <div style="padding: 40px;padding-right: 20px;padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-top: 11px;padding-bottom: 30px;"><img src="assets/img/YOUTH.JPG" width="100%"></div>
                            <div class="col-sm-12 col-md-12 col-lg-6" style="">
                                <h1>Komunitas Youth</h1>
                                <p class="text-left" style="font-family: Poppins, sans-serif;">Komunitas anak muda yang memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa salingmenguatkan, dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung bersama kami</p>
                                <div><i class="fa fa-clock-o" style="margin-right: 9px;"></i><span>Sabtu 19:00</span></div>
                                <div><i class="fa fa-user" style="margin-right: 9px;"></i><span>Grace : 081319724304</span></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 40px;padding-right: 20px;padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-top: 0px;padding-bottom: 30px;"><img src="assets/img/WBI.JPG" width="100%"></div>
                            <div class="col" >
                                <h1>WBI</h1>
                                <p class="text-left" style="font-family: Poppins, sans-serif;">Komunitas Ibu Rumah Tangga yang memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling&nbsp; menguatkan,mengembangkan, dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung bersama
                                    kami</p>
                                <div><i class="fa fa-clock-o" style="margin-right: 9px;"></i><span>Rabu 16:00</span></div>
                                <div><i class="fa fa-user" style="margin-right: 9px;"></i><span>Ibu Vivin : 081381594555</span></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 40px;padding-right: 20px;padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-top: 0px;padding-bottom: 30px;"><img src="assets/img/KEBAKTIAN%20PRIA%202.jpeg" width="100%"></div>
                            <div class="col" style="width: 276px;">
                                <h1>Pria&nbsp;</h1>
                                <p style="font-family: Poppins, sans-serif;">Komunitas Lelaki dewasa yang sudah berkeluarga, memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung bersama kami</p>
                                <div><i class="fa fa-clock-o" style="margin-right: 9px;"></i><span>Sabtu 19:00</span></div>
                                <div><i class="fa fa-user" style="margin-right: 9px;"></i><span>Rudi Yusniar : 081381594555</span></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 40px;padding-right: 20px;padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="padding-top: 0px;padding-bottom: 30px;"><img src="assets/img/JUNIOR.JPG" width="100%"></div>
                            <div class="col" style="">
                                <h1>Junior&nbsp;</h1>
                                <p style="font-family: Poppins, sans-serif;">Komunitas anak remaja yang berumur 11-17 tahun, memiliki kerinduan untuk berkomunitas dan bersatu di dalam Tuhan. Tujuanya untuk bisa saling menguatkan dan bertumbuh bersama-sama di dalam Tuhan. Yuk bergabung bersama kami</p>
                                <div><i class="fa fa-clock-o" style="margin-right: 9px;"></i><span>Minggu 10:00</span></div>
                                <div><i class="fa fa-user" style="margin-right: 9px;"></i><span>Joe Marcel&nbsp; : 081363837379&nbsp;</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #1da1d2;"><button class="btn btn-light" type="button" data-dismiss="modal" style="background-color:white;color:black;">Tutup</button></div>
            </div>
        </div>
    </div>
    </section>


    <section id="formdoa" class="content-section bg-primary text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Ingin Di Doakan ?</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="<?= base_url()?>/Home/tambahdoa/" method="post">
                <div class="form-group"><label>Nama</label>
                    <div class="d-flex d-xl-flex justify-content-center justify-content-xl-center"><input class="form-control d-xl-flex justify-content-xl-center align-items-xl-center" type="text" name="nama" style="width: 50%;"></div>
                </div>
                <div class="form-group"><label>Email</label>
                    <div class="d-flex d-xl-flex justify-content-center justify-content-xl-center"><input class="form-control d-xl-flex justify-content-xl-center align-items-xl-center" type="text" name="email" style="width: 50%;"></div>
                </div>
                <div class="form-group"><label>No Whatsapp</label>
                    <div class="d-flex d-xl-flex justify-content-center justify-content-xl-center"><input class="form-control d-xl-flex justify-content-xl-center align-items-xl-center" type="text" name="no_wa" style="width: 50%;"></div>
                </div>
                <div class="form-group"><label>isi doa</label>
                    <div class="d-flex d-xl-flex justify-content-center justify-content-xl-center"><textarea class="form-control" name="isi_doa" style="width: 50%;height: 116px;"></textarea></div>
                </div>
                <div class="form-group">
                    <div class="d-xl-flex justify-content-xl-center"><button style="background-color:white;color:black;"class="btn btn-lg" type="submit" name="submit">Kirim</button></div>
                </div>
            </form>
        </div>
    </section>
        <section id="map" class="map"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=+AIzaSyBx7N6QyxXyQRZTQorY0qAXZpQe3irqIxw+&amp;q=gbi+kasih+karunia&amp;zoom=15" width="100%" height="400"></iframe></section>
      