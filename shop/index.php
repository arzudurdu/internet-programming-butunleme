<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ToyzzShop</title>
<!--stylesheet-------->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<!--light-slider-css-->
<link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
<!--jQuery------>
<script src="js/JQuery.js"></script>
<!--light-slider-js---->
<script src="js/lightslider.js"></script>


<!--fav-icon-->
<link rel="shortcut icon" href="images/arzu.png" />
<!--using-FontAwesome-For-Icons----->
<script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
</head>
<body>
    <!--navigatio------->
    <nav>
        <!--social-link-ve-telefon-numarası------>
        <div class="social-call">
            <!--social-links---->
            <div class="sosyal">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <!--telefon-numarası---->
            <div class="telefon">
                <span>Müşteri Hizmetleri 0216 499 19 99</span>
            </div>
        </div>
        <!--menu-bar----------------------------------------->
     <div class="navigation">
        <!--logo------------>
        <a href="#" class="logo">
            <img src="images/arzu.png">
        </a>
        <!--menu-icon------>
        <div class="toggle"></div>
        <!--menu-------------------->
        <ul class="menu">
            <li><a href="#">Anasayfa</a></li>
            <li><a href="#">Oyuncak</a>
            <!--sale-lable------->
            <span class="sale-lable">SALE</span>
            </li>
            <li><a href="#">Araçlar</a></li>
            <li><a href="#">Anne & Bebek</a></li>
            <li><a href="#">Karakterler</a></li>
        </ul>
        <!--right-menu----------->
        <div class="right-menu">
            <!--search-->
            <a href="javascript:void(0);" class="search">
                <i class="fas fa-search"></i>
            </a>
            <!--user-->
            <a href="login/kayit.php" class="user" >
                <i class="fas fa-user"></i>
            </a>
            <!--cart-icon-->
            <a href="#">
                <i class="fas fa-shopping-cart">
                <!--number-of-product-in-cart-->
                <span class="num-cart-product">0</span>
            </i>
            </a>
        </div>
     </div>   
    </nav>
    <!--search-bar----------------------------------->
    <div class="search-bar">
         <!--search-input------->
         <div class="search-input">
            <!--input---->
            <input type="text"
            placeholder="ÜRÜN ARA"/>
            <!--cancel-btn--->
            <a href="javascript:void(0);" class="search-cancel">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>



    <!-----------full-slider----------------------------->

    <ul id="adaptive" class="cs-hidden">
        <!--box-1--------->
        <li class="item-a">
            <!--box----------->
            <div class="full-slider-box f-slide-1">
                <!--slider-text-container------>
                <div class="slider-text-container">

                    <div class="f-slider-text">
                        <span>Sınırlı Sayıda</span>
                        <strong>Promosyon Koduyla<br/><font>%30 İndirim</font></strong>
                        <a href="#" class="f-slider-btn">Şimdi Satın Al</a>
                    </div>
                </div>
            </div>
        </li>

            <!--box-2--------->
            <li class="item-b">
                <!--box----------->
                <div class="full-slider-box f-slide-2">
                    <!--slider-text-container------>
                    <div class="slider-text-container">
    
                        <div class="f-slider-text">
                            <span>Sınırlı Sayıda</span>
                            <strong>Promosyon Koduyla<br/><font>%30 İndirim</font></strong>
                            <a href="#" class="f-slider-btn">Şimdi Satın Al</a>
                        </div>
                    </div>
                </div>
            </li>

            <!--box-3--------->
            <li class="item-c">
                <!--box----------->
                <div class="full-slider-box f-slide-3">
                    <!--slider-text-container------>
                    <div class="slider-text-container">

                        <div class="f-slider-text">
                            <span>Sınırlı Sayıda</span>
                            <strong>Promosyon Koduyla<br/><font>%30 İndirim</font></strong>
                            <a href="#" class="f-slider-btn">Şimdi Satın Al</a>
                        </div>
                    </div>
                </div>
            </li>

        
      </ul>


      <!--Featured-Categories-------------->
      <div class="feature-heading">
        <h2>Öne Çıkan Kategoriler</h2>
      </div>

      <ul id="autoWidth" class="cs-hidden">
        <!--1------------------------->
        <li class="item">
              <!--feature-box----->
      <div class="feature-box">
        <a href="#">
            <img src="images/myb.jpg"/>
        </a>
    </div>
        <!--text------>
            <span>Barbie Mutlu Yıllar</span>
        </li>

        <!--2------------------------>
        <li class="item">
            <!--feature-box----->
            <div class="feature-box">
              <a href="#">
                  <img src="images/sw1.jpg"/>
              </a>
          </div>
              <!--text------>
            <span>Star Wars</span>
        </li>

            <!--3------------------------->
                <li class="item">
                    <!--feature-box----->
            <div class="feature-box">
              <a href="#">
                  <img src="images/spid.jpg"/>
              </a>
          </div>
              <!--text------>
                  <span>Spiderman</span>
              </li>

            <!--4------------------------->
        <li class="item">
            <!--feature-box----->
    <div class="feature-box">
      <a href="#">
          <img src="images/brb3.jpg"/>
      </a>
  </div>
      <!--text------>
          <span>Barbie ve Köpeği</span>
      </li>

        <!--5------------------------->
               <li class="item">
                <!--feature-box----->
        <div class="feature-box">
          <a href="#">
              <img src="images/puzzl.jpg"/>
          </a>
      </div>
          <!--text------>
              <span>Disney Prensesler</span>
          </li>

        <!--6------------------------->
        <li class="item">
            <!--feature-box----->
    <div class="feature-box">
      <a href="#">
          <img src="images/sw2.jpg"/>
      </a>
  </div>
      <!--text------>
          <span>Star Wars ferrix Pususu</span>
      </li>

      </ul>


      <!--NEW ARRIVAL-------------------------------->
      <section class="new-arrival">
            
        <!--heading-------->
        <div class="arrival-heading">
            <strong>Yeni Gelen</strong>
            <p>Size Favori Kategorilerden Yeni Gelenleri Sunuyoruz</p>
        </div>
        <!--product-container -->
        <div class="product-container">
            <!--product-box-1---------->
            <div class="product-box">
                <!--img------------>
                <div class="product-img">
                <!--add-cart---->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                  </a>

                <img src="images/barbiev.jpg" />  
            </div>
            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Barbie Rüya Evi</a>
                <span class="p-price">799.90TL</span>
            </div>
            </div>
            <!--product-box-2---------->
                <div class="product-box">
                    <!--img------------>
                    <div class="product-img">
                    <!--add-cart---->
                        <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                            </a>
                              
                        <img src="images/fpe.jpg" />  
                        </div>
                        <!--details-->
                        <div class="product-details">
                            <a href="#" class="p-name">Fisher Price Eğitici Köpekcik</a>
                            <span class="p-price">99.90TL</span>
                        </div>
                        </div>
            <!--product-box-3---------->
            <div class="product-box">
                <!--img------------>
                <div class="product-img">
                <!--add-cart---->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                  
                <img src="images/dprenses.jpg" />  
            </div>
            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Disney Prenses Rapunzel</a>
                <span class="p-price">179.90TL</span>
            </div>
            </div>
            <!--product-box-4---------->
            <div class="product-box">
                <!--img------------>
                     <div class="product-img">
                        <!--add-cart---->
                        <a href="#" class="add-cart">
                             <i class="fas fa-shopping-cart"></i>
                              </a>
                              
                            <img src="images/pp2.jpg" />  
                        </div>
                        <!--details-->
                        <div class="product-details">
                            <a href="#" class="p-name">Polly Pocket Dondurma Arabası</a>
                            <span class="p-price">499.90TL</span>
                        </div>
                        </div>
            <!--product-box-5---------->
            <div class="product-box">
                <!--img------------>
                <div class="product-img">
                <!--add-cart---->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                  
                <img src="images/acc24_-.jpg" />  
            </div>
            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Star Wars Bebek Grogu</a>
                <span class="p-price">1.500,90TL</span>
            </div>
            </div>
            <!--product-box-6---------->
            <div class="product-box">
                <!--img------------>
                <div class="product-img">
                    <!--add-cart---->
                    <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                        </a>
                              
                        <img src="images/tavsan.jpg" />  
                        </div>
                        <!--details-->
                        <div class="product-details">
                            <a href="#" class="p-name">Sylvanian Families İkiz Tavşan</a>
                            <span class="p-price">299.90TL</span>
                        </div>
                        </div>
            <!--product-box-7---------->
            <div class="product-box">
                <!--img------------>
                <div class="product-img">
                <!--add-cart---->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                  
                <img src="images/2dd7b_-.jpg" />  
            </div>
            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">LEGO Optimus Prime</a>
                <span class="p-price">3.549,90TL</span>
            </div>
            </div>
            <!--product-box-8---------->
                <div class="product-box">
                    <!--img------------>
                <div class="product-img">
                    <!--add-cart---->
                    <a href="#" class="add-cart">
                         <i class="fas fa-shopping-cart"></i>
                        </a>
                              
                        <img src="images/e6953_Fisher_Price_Thomas_ve_Arkadaslari_2_si_1_Arada_Do.jpg" />  
                        </div>
                        <!--details-->
                        <div class="product-details">
                            <a href="#" class="p-name">Thomas ve Arkadaşları</a>
                            <span class="p-price">399.90TL</span>
                        </div>
                        </div>
       
       
                    </div>
      
                </section>

    <!---sale------------------------------------>
          <section class="sale">
            <!--sale-box-1-------------------->
            <div class="sale-box">
                <!--img------>
                <img src="images/eda82_Harry_Potter_ve_Ginny_Weasley_Magical_Minis_Patron.jpg"/>
                <!--text----->
                <a href="#"> 
                <div class="sale-text">
                    <strong>Harry Potter ve Ginny Weasley</strong>
                    <span>%50 İndirim</span>
                </div>
            </a>
            </div>

            <!--sale-box-2-------------------->
                 <div class="sale-box">
                    <!--img------>
                    <img src="images/Evcil_Hayvanlar.jpg"/>
                    <!--text----->
                    <a href="#"> 
                    <div class="sale-text">
                        <strong>Harry Potter ve Ginny Weasley</strong>
                        <span>%50 İndirim</span>
                    </div>
                </a>
                </div>

            <!--sale-box-3-------------------->
            <div class="sale-box">
                <!--img------>
                <img src="images/pp3.jpg"/>
                <!--text----->
                <a href="#"> 
                <div class="sale-text">
                    <strong>Harry Potter ve Ginny Weasley</strong>
                    <span>%50 İndirim</span>
                </div>
            </a>
            </div>

        </section>


         <!--NEW ARRIVAL-------------------------------->
      <section class="new-arrival">
            
        <!--heading-------->
        <div class="arrival-heading">
            <strong>Özellik Ögeleri</strong>
            <p>Size Favori Kategorilerden Yeni Gelenleri Sunuyoruz</p>
        </div>
        <!--product-container -->
        <div class="product-container">
            <!--product-box-1---------->
            <div class="product-box">
                <!--img------------>
                <div class="product-img">
                <!--add-cart---->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                  </a>

                <img src="images/barbiev.jpg" />  
            </div>
            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Barbie Rüya Evi</a>
                <span class="p-price">799.90TL</span>
            </div>
            </div>
            <!--product-box-2---------->
                <div class="product-box">
                    <!--img------------>
                    <div class="product-img">
                    <!--add-cart---->
                        <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                            </a>
                              
                        <img src="images/fpe.jpg" />  
                        </div>
                        <!--details-->
                        <div class="product-details">
                            <a href="#" class="p-name">Fisher Price Eğitici Köpekxik</a>
                            <span class="p-price">99.90TL</span>
                        </div>
                        </div>
            <!--product-box-3---------->
            <div class="product-box">
                <!--img------------>
                <div class="product-img">
                <!--add-cart---->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                  
                <img src="images/dprenses.jpg" />  
            </div>
            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Disney Prenses Rapunzel</a>
                <span class="p-price">179.90TL</span>
            </div>
            </div>
            <!--product-box-4---------->
            <div class="product-box">
                <!--img------------>
                     <div class="product-img">
                        <!--add-cart---->
                        <a href="#" class="add-cart">
                             <i class="fas fa-shopping-cart"></i>
                              </a>
                              
                            <img src="images/pp2.jpg" />  
                        </div>
                        <!--details-->
                        <div class="product-details">
                            <a href="#" class="p-name">Polly Pocket Dondurma Arabası</a>
                            <span class="p-price">499.90TL</span>
                        </div>
                        </div>
        </div>
      </section>


       <!--banner----------------------->
        <!--box----------->
        <div class="banner-box f-slide-3">
            <!--slider-text-container------>
                <div class="banner-text-container">
    
                <div class="banner-text">
                    <span>Sınırlı Sayıda</span>
                        <strong>Promosyon Koduyla<br/><font>%30 İndirim</font></strong>
                        <a href="#" class="banner-btn">Şimdi Satın Al</a>
                    </div>
                </div>
        </div>


<!--services------------------------->
    <section class="services">
        <!--services-box-1--------->
        <div class="services-box">
            <i class="fas fa-shipping-fast"></i>
            <span>Ücretsiz Kargo</span>
            <p>Tüm Tr Siparişleri İçin Ücretsiz Gönderim</p>
        </div>

          <!--services-box-2--------->
          <div class="services-box">
            <i class="fas fa-headphones-alt"></i>
            <span>Destek Hattı 7/24</span>
            <p>Günün 24 saati destek veriyoruz</p>
        </div>

          <!--services-box-3--------->
          <div class="services-box">
            <i class="fas fa-sync"></i>
            <span>Para İadesi</span>
            <p>İade Süresi 30 Gün</p>
        </div>
    </section>

<!--footer---------------------------->
<footer>
        <!--copyright-------------->
    <span class="copyright">
        Copyright 2020 - InternetSayfasınaGit
    </span>
     <!--subcribe---------------->
     <div class="subscribe">
        <form>
        <input type="email" placeholder="ornek@gmail.com" required/>
        <input type="submit" value="Abone">
        </form>
    </div>
</footer>











   
    <!--script--------------->
    <script type="text/javascript">

        /*---FOR Search bar------*/
        $(document).on('click','.search',function(){
            $('.search-bar').addClass('search-bar-active')
        });
 
    $(document).on('click','.search-cancel',function(){
        $('.search-bar').removeClass('search-bar-active')
    });

    /*--login-sign-up-form-----*/
        $(document).on('click','.user,.already-account',function(){
            $('.form').addClass('login-active').removeClass('sign-up-active')
        });

        $(document).on('click','.sign-up-btn',function(){
            $('.form').addClass('sign-up-active').removeClass('login-active')
        });

        $(document).on('click','.form-cancel',function(){
            $('.form').removeClass('login-active').removeClass('sign-up-active')
        });



        /*----Full-Slider-Script--------------*/
        $(document).ready(function() {
        $('#adaptive').lightSlider({
            adaptiveHeight:true,
            auto:true,
            item:1,
            slideMargin:0,
            loop:true
            });
        });

        /*--Featured-SLider----------------*/
    $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });


/*--for-fix-menu-when-scroll------------*/
    $(window).scroll(function(){
        if($(document).scrollTop() > 50){
            $('.navigation').addClass('fix-nav');
        }
        else{
            $('.navigation').removeClass('fix-nav');
        }
	});
/*--For-responsive-menu-----------*/
  $(document).ready(function(){
		$('.toggle').click(function(){
			$('.toggle').toggleClass('active')
			$('.navigation').toggleClass('active')
		})
	});

    </script>

</body>
</html>

