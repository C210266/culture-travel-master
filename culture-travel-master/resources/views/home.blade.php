<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Culture Travel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f99152938e.js" crossorigin="anonymous"></script>
	<!-----fonts----->
	  <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
	
    <!-- change here -->
    <link href="/css/cover.css" rel="stylesheet">
    <link href="/css/pic.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/img/CultureTravel.png"/> 
    
    <link href="/css/loader.css" rel="stylesheet">
  </head>
<body>

  <style>
    .navbar-brand {
  transform: translateX(-50%);
  left: 50%;
  top: 0px;
  position: absolute;
}
.navbar-brand img {
        width: 85px;
    }
.navbar-toggle { z-index: 1; }
.navbar {
	
	background-color:#0F0F0F !important;
padding-top: 31px;
padding-bottom: 30px;
}
.nav-link {
	padding: 0;
}.dropdown-menu {
	width: 200px;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
	<div class="container-fluid">
		
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#"><img src="/img/CultureTravel.png"></a>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-left">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">T???ng quan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#news">Tin t???c</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('about') }}">V??? ch??ng t??i</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
      @if (Route::has('login'))
                          
                    @auth
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle user-profile" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          @if(Auth::user()->image)
                                        <img class="image rounded-circle" src="{{'/img/'.Auth::user()->image}}" alt="profile_image">
                                    @endif
                          {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">C??i d???t t??i kho???n</a></li>
                        <li><form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <a href="route('logout')"
                            onclick="event.preventDefault();
                                  this.closest('form').submit();">
                            {{ __('????ng xu???t') }}
                          </a>
                          </form></li>
                        </ul>
                          </li>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">????ng nh???p</a>
                    @endauth
                </div>
            @endif
		
		</ul>
	  </div>
	<div>
  
	</div>
	</div>
  </nav>
  <section id="videoCover">
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="/img/cultute1minute.mp4" type="video/mp4">
    </video>
  
    <!-- The header content -->
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3"><b>Culture Travel at Home</b></h1>
          <p id="slogan" class="lead mb-0">Du l???ch t???i nh??, kh??ng lo v??? gi??, ch??? s??? b???n m??.</p>
        </div>
      </div>
    </div>
  </section>

<!------ourMission-------->
  <section id="mission">
    <div class="container text-center">
      <h1 style="">B???ng vi???c thi???t k??? m???t Website v???i giao di???n hi???n ?????i, d??? d??ng s??? d???ng,</h1>
      <h1 style="">ch??ng t??i s??? mang ?????n ch?? b???n nh???ng ki???n th???c th?? v??? v???</h1>
      <h1 style="color:#FFCC00 ">k??? quan v??n ho?? c???a Th??? gi???i</h1>
    </div>
  </section>
<!--------content------>


<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
  <div class="col-lg-4">
      <nav  class="bd-placeholder-img rounded-circle" width="140" height="140"  role="img" aria-label="Placeholder: Japan" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Japan</title><img class="country"  width="auto" height="140" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/1280px-Flag_of_Japan.svg.png"></img></nav>

      <h2 class="fw-normal">Nh???t B???n</h2>
      
      <p><a class="btn btn-secondary" href="{{ route('nhatban.index') }}">Xem n???i dung &raquo;</a></p>
  </div><!-- /.col-lg-4 -->

  <div class="col-lg-4">
      <nav class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: VietNam" preserveAspectRatio="xMidYMid slice" focusable="false"><title>VietNam</title><img class="country" width="auto" height="140"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/188px-Flag_of_Vietnam.svg.png"></img></nav>

      <h2 class="fw-normal">Vi???t Nam</h2>
      
      <p><a class="btn btn-secondary" href="{{ route('vietnam.index') }}">Xem n???i dung &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  
  <div class="col-lg-4">
      <nav class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: Other Country" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Other Country</title><img class="country" width="auto" height="140"  src="https://i.pinimg.com/564x/ac/e8/17/ace817891a14afe65bbbb7105866e1f1.jpg"></img></nav>

      <h2 class="fw-normal">C??c n?????c kh??c</h2>
      
      <p><a class="btn btn-secondary" href="{{ route('other') }}">Xem n???i dung &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

<!--------Picture libary---------->
  <section class="full-bleed" id="picture">
  <div style=" width: 100%; height:auto; background-color: #FAEBD7 ;" class="layout text-center">
    <h1 class="piccap">C??ng vi??n V??n H??a Th??? Gi???i</i></h1>
      <div>
      <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/2-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample87"/>
            <figcaption>
              <h3>Hang ?????ng t??? nhi??n l???n nh???t th??? gi???i, ???????c kh??m ph?? v??o n??m 2009 v?? khai th??c du l???ch v??o 2013.</h3>
              <h5>HANG S??N ??O??NG</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584 hover"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/3-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample119"/>
            <figcaption>
              <h3>Qu???n th??? danh lam th???ng c???nh Vi???t Nam n???i ti???ng t???i Ninh B??nh. ????y l?? v??ng ?????t l?? t?????ng c???a c??c lo??i ?????ng, th???c v???t qu?? hi???m trong s??ch ????? Vi???t Nam b???i ??i???u ki???n t??? nhi??n v?? c??ng phong ph??, ??a d???ng.</h3>
              <h5> TAM C???C ??? B??I ????NH ??? TR??NG AN</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/6-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample120"/>
            <figcaption>
              <h3>N???m t???i ??i???m ?????u c???a b???n ????? danh lam th???ng c???nh Vi???t Nam, ???n s??u b??n trong l?? c??c gi?? tr??? v??n h??a truy???n th???ng l??u ?????i c???a c??c d??n t???c thi???u s???.</h3>
              <h5>CAO NGUY??N ???? ?????NG V??N</h5>
            </figcaption><a href="#"></a>       
      </figure>    
      </div>

      <div>
        <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/7-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample87"/>
            <figcaption>
              <h3>Mang ?????m v??? ?????p t??m linh, ???????c x??y d???ng ??? th???i vua L?? Nh??n T??ng ????? th??? Ph???t b?? Quan ??m, xung quanh ch??a l?? d??ng v??? y??n b??nh, xanh t????i c???a nh???ng t??n l?? xanh khi???n n??i ????y c??ng tr??? th??nh ?????a ??i???m du l???ch l?? t?????ng, nh???t l?? ?????i v???i nh???ng t??n ????? Ph???t Gi??o.</h3>
              <h5>CH??A M???T C???T</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584 hover"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/8-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample119"/>
            <figcaption>
              <h3>C??? ???? Hu??? tr?????c ????y l?? nh???ng cung ??i???n v??ng son c???a tri???u ?????i nh?? Nguy???n, tri???u ?????i cu???i c??ng c???a Vi???t Nam. V??? ?????p uy nghi??m g???n li???n v???i v??n h??a l???ch s??? l??u ?????i l?? ni???m t??? h??o c???a c??? d??n t???c ta.</h3>
              <h5>C??? ???? HU???</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/9-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample120"/>
            <figcaption>
              <h3>N??i ????y c?? th??? xem l?? m???t danh lam th???ng c???nh ??? Vi???t Nam ?????m ch???t m???c m???c, g???n g??i. Tuy v???y, Ph??? c??? H???i An v???n r???t ???????c nhi???u ng?????i ??a th??ch, c?? l??? ?????n v???i H???i An, h??? mong mu???n t??m l???i c???m gi??c b??nh y??n gi??p th?? th??i trong t??m h???n.</h3>
              <h5>PH??? C??? H???I AN</h5>
            </figcaption><a href="#"></a>
      </div>
      <div>
        <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/11-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample87"/>
            <figcaption>
              <h3>L?? danh lam th???ng c???nh ?????p ??? Vi???t Nam t???a l???c t???i th??nh ph??? Cam Ranh, Kh??nh H??a. ?????o B??nh Ba hay c??n g???i l?? ?????o T??m H??m l?? m???t h??n ?????o nh???, bao quanh l?? n??i non h??ng v?? c??ng bi???n c??? m??nh m??ng v?? s??ng v??? d???t d??o. </h3>
              <h5>?????O B??NH BA</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584 hover"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/12-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample119"/>
            <figcaption>
              <h3>N??t ?????p c???a ?????o Ng???c ??? Ph?? Qu???c c?? th??? ???????c xem nh?? m???t ki???t t??c c???a thi??n nhi??n, khi???n ta ch??? c???n nh??n tho??ng qua ???? ph???i ???n t?????ng. Kh??ng nh???ng th???, ?????o Ng???c ??? Ph?? Qu???c c??n l?? h??n ?????o du l???ch l???n nh???t Vi???t Nam.</h3>
              <h5>?????O NG???C PH?? QU???C</h5>
            </figcaption><a href="#"></a>
          </figure>
          <figure class="snip1584"><img src="https://cdn3.dhht.vn/wp-content/uploads/2021/07/15-15-danh-lam-thang-canh-viet-nam-noi-tieng-nhat-tren-the-gioi.jpg" alt="sample120"/>
            <figcaption>
              <h3>L?? ?????a ??i???m du l???ch ???????c y??u th??ch c???a c??c du kh??ch, h??? s??? ???????c chi??m ng?????ng v???i v??n h??a mua b??n truy???n th???ng tr??n nh???ng chi???c ghe, thuy???n???</h3>
              <h5>CH??? N???I C??I B??</h5>
            </figcaption><a href="#"></a>
      </div>

  </div>
</section>


  <!-- START THE FEATURETTES -->
<section id="news" class="news">
  <hr class="featurette-divider">

     <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">JAPAN: <span class="text-muted"><a href="https://www3.nhk.or.jp/nhkworld/vi/news/20220916_14/">B??o l???n Nanmadol ti???n g???n t???i Okinawa, khu v???c Amami.</a></span></h2>
        <p class="lead">Theo c?? quan kh?? t?????ng Nh???t B???n, c??n b??o s??? 19 (Hagibis) ??ang ti???n g???n t???i Nh???t B???n v?? c?? kh??? n??ng s??? ????? b??? v??o khu v???c Tokai (c??c t???nh Shizuoka, Aichi, Gifu v?? Mie) ho???c Kanto (c??c t???nh Gunma, Tochigi, Ibaraki, Saitama, Tokyo, Chiba v?? Kanagawa) v??o th??? 7 (ng??y 12/10) v???i c?????ng ????? c???c m???nh, k??m theo gi?? gi???t, m??a l???c v?? s??ng l???n.</p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><a href="https://www3.nhk.or.jp/nhkworld/vi/news/20220916_14/"><img width="auto" height="300px" src="https://cdn.tuoitre.vn/2022/9/17/20220914351160404l-16634069089271923004804.png"></a></nav>

      </div>
    </div>


  <hr class="featurette-divider">

  <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">VIETNAM: <span class="text-muted"><a href="https://vietnamnet.vn/nghin-nguoi-du-le-hoi-o-chinh-dien-dat-vang-lon-nhat-thanh-hoa-2061105.html">Ngh??n ng?????i d??? l??? h???i t???i ch??nh ??i???n b???ng g??? d??t v??ng l???n nh???t Thanh Ho??.</a></span></h2>
        <p class="lead">S??ng ng??y 17/9/2022, t???i Khu di t??ch Qu???c gia ?????c bi???t Lam Kinh, huy???n Th??? Xu??n (Thanh H??a) ???? t??? ch???c L??? h???i Lam Kinh 2022, v?? k??? ni???m 10 n??m ???????c c??ng nh???n l?? di t??ch qu???c gia ?????c bi???t.
Theo Ban t??? ch???c, L??? h???i Lam Kinh 2022 nh???m k??? ni???m 604 n??m Kh???i ngh??a Lam S??n, 594 n??m Vua L?? ????ng quang, 589 n??m ng??y m???t c???a Anh h??ng d??n t???c L?? L???i v?? k??? ni???m 10 n??m ???????c c??ng nh???n l?? di t??ch qu???c gia ?????c bi???t (2012-2022).</p>
      </div>
      <div class="col-md-5">
        <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><a href="https://vietnamnet.vn/nghin-nguoi-du-le-hoi-o-chinh-dien-dat-vang-lon-nhat-thanh-hoa-2061105.html"><img width="auto" height="300px" src="https://static-images.vnncdn.net/files/publish/2022/9/17/9dang-chu-y-565.jpg"></a></nav>

      </div>
    </div>

  <hr class="featurette-divider">

  <div class="row featurette">
  <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">ENVIRONMENT: <span class="text-muted"><a href="https://vietnamnet.vn/5-000-con-ca-heo-chet-tai-bien-den-vi-cac-hoat-dong-quan-su-2052370.html">C?? heo thi???t m???ng v?? s??? v?? ho???t ?????ng qu??n s??? ??? Bi???n ??en.</a></span></h2>
      <p class="lead">C??c ho???t ?????ng qu??n s??? t???i Bi???n ??en c???a Nga v?? Ukraine ??ang g??y ???nh h?????ng l???n t???i c??c sinh v???t bi???n, khi ???? c?? 5.000 con c?? heo ch???t t???i khu v???c n??y.</p>
  </div>
  <div class="col-md-5">
  <nav class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><a href="https://vietnamnet.vn/5-000-con-ca-heo-chet-tai-bien-den-vi-cac-hoat-dong-quan-su-2052370.html"><img width="auto" height="300px" src="https://static-images.vnncdn.net/files/publish/2022/8/23/dolphin-251.jpg"></a></nav>

  </div>
  </div>

  <hr class="featurette-divider">
</section>

  <!-- /END THE FEATURETTES -->

</div>




<!-------fotter------->
<footer>
  <div id="footer">
    <div class="container">
      <div class="row">
       <div class="col-md-4">
            <h3 class="section-title">Gi???i thi???u</h3>
            <p>CultureTravel l?? m???t Website v??? th??ng tin v???n ho?? c???a nhi???u n?????c tr??n th??? gi???i ???????c v???n h??nh v?? ph??t tri???n t??? n??m 2022. C??c b??i vi???t ???????c t???ng h???p ??a ph???n t??? n???i dung tham kh???o tr??n Google.</p>

            <h3 class="section-title">C?? H???i h???p t??c v???i CultureTravel</h3>
            <p>C??ng v???i m???c ti??u ph??t tri???n c???a CultureTravel l?? mu???n ????a th??ng tin nhi???u h??n v??? v??n ho?? ?????n v???i ?????c gi???. Song song ???? l?? l?????ng n???i dung b??? ??ch v?? ch??nh x??c v??? v??n ho?? ph???i ???????c c???p nh???t th?????ng xuy??n.</p>

            <p>Hi???n t???i,CultureTravel mu???n h???p t??c v???i c??c b??n ph??t tri???n d???ch v??? du l???ch v?? c?? nh??n ??am m?? du l???ch.</p>
          </div>
      

        <div class="col-md-4">
          <h3 class="section-title">Li??n l???c</h3>
          <ul class="contact-info">
            <li><i class="fa-regular fa-map"></i>Chiyoda-ku, Tokyo, Japan</li>
            <li><i class="fa-solid fa-phone-flip"></i>+ 1235 2355 98</li>
            <li><i class="fa-regular fa-envelope"></i><a href="#">internship@nal.vn</a></li>
            <li><i class="fa-solid fa-globe"></i><a href="#">https://nal.co.jp/</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="section-title">Ph???n h???i</h3>
          <form class="contact-form">
            <div class="form-group">
              <label for="name" class="sr-only">H??? v?? T??n</label>
              <input type="name" class="form-control" id="name" placeholder="H??? v?? T??n">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="message" class="sr-only">N???i dung tin nh???n</label>
              <textarea class="form-control" id="message" rows="7" placeholder="N???i dung tin nh???n"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
            </div>
          </form>
        </div>
      </div>
      <div class="row copy-right justify-content-md-center">
        <div class="col-md-6 col-md-offset-3 text-center">
          <p>CONNECT WITH US</p>
          <p class="fh5co-social-icons">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-dribbble"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </p>
          <p>&copy; 2022 <a href="#">Culture Travel</a> at Home. All Rights Reserved. </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="/assets/dist/js/loader.js"></script>
  <script src="/assets/dist/js/cover.js" ></script>
  </body>
</html>
