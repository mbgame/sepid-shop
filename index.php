<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!doctype html>
<html lang="fa-ir">
<head>
<meta charset='utf-8'>
<title>Sepid Shop</title>
<!--<link rel='icon' type='image/x-icon' href='https://www.sepidshop.com/favicon.ico'>-->
<link rel="alternate" href="https://www.sepidshop.com/index.php" hreflang="fa-ir" />
<link rel="alternate" href="https://www.sepidshop.com/en/index.php" hreflang="en-us" />
<link rel="amphtml" href="https://www.sepidshop.com/index-amp.php" />
<meta name='description' content='فروشگاه شیک پوش ارائه کننده انواع شال و روسری  و زیورآلات'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<meta name='keywords' content='شال و روسری , شال , روسری'>
<meta name='author' content='mohsen bashirzadeh'>
<meta name="wot-verification" content="">
<meta property="fb:app_id" content="" />
<meta property="fb:admins" content=""/>
<meta property="og:image" content="" />
<meta property="og:title" content="" />
<meta property="og:url" content="https://www.sepidshop.com" />
<meta property="og:description" content='' />
<meta property="og:type" content="website" />
<!-- for sepidshop -->
<link rel="stylesheet" type="text/css" href="css/sepidshop.css" />
<script type="text/javascript" src="js/sepidshop.js"></script>
</head>
<body>
<header class="header-sepid">
<div class="header-right">
<div class="search-bar" id="search-bar"><i id="show-search" onclick="callsearchbar(this.id);" class="fa fa-search" aria-hidden="true"></i>
<form action=""><input type="text"><input type="submit" value="جستجو"></form>
<form action="" id="minisearch-bar"><input type="text"><input type="submit" value="جستجو"></form>
</div>
</div>
<div class="header-center"><h1>Sepid Shop</h1></div>
<div class="header-left">
<div class="basket" id="basket"><a href="https://www.sepidshop.com" title="سبد خرید"><span>سبد خرید<br /></span><i class="fa fa-opencart" aria-hidden="true"></i></a>
<div class="basketview"><span class=" triangle basket-triangle"></span><small>سبد خرید خالی می باشد</small></div></div>
<div class="account" id="account"><a href="https://www.sepidshop.com/register/login.php" title="ورود"><span>ورود<br /></span><i class="fa fa-user" aria-hidden="true"></i></a>
<div class="accountview"><span class=" triangle account-triangle"></span>
<form action="/action_page.php">
<div class="login-fast-container">
<input type="text" placeholder="نام کاربری" name="uname" required>
<input type="password" placeholder="کلمه عبور" name="psw" required>
<button class="login-fast-btn" type="submit">Login</button>
</div>
</form></div></div>
<div class="lang"><a href="https://www.sepidshop.com" title="Persian"><span>Persian<br /></span><i class="fa fa-globe" aria-hidden="true"></i></a>
<div class="langview"><span class=" triangle lang-triangle"></span><a href="https://www.sepidshop.com/en/" title="English">English</a></div></div>
</div>
<nav class="header-nav" id="header-nav">
<a href="#" id="open" onclick="checknav(this.id)"><i class="fa fa-bars" aria-hidden="true"></i></a>
<ul itemscope itemtype="https://www.schema.org/SiteNavigationElement" id="mynav">
<div class="triangle" id="triangle"></div>
<li itemprop="Main Page"><a itemprop="https://www.sepidshop.com" href="https://www.sepidshop.com" title="صفحه اصلی">صفحه اصلی</a></li>
<li itemprop="Clothes nav"><a itemprop="url" id="showclothes" onclick="show('showclothes',this.id,'clothes','exitclothes',['scarves','jewels','accessories','support',<?php if (!isset($_SESSION['usernamelogin'])){ echo" 'register'"; }else{echo"'users' ";} ?>]);" title="پوشاک"  >پوشاک</a></li>
<ul class="main-sub" id="clothes"><a href="#" id="opennav" onclick="closesubnav('clothes')"><i class="fa fa-close" id="close-bar" aria-hidden="true"></i></a>
<ul class="rclothes">
<li itemprop="Women"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/" title="زنانه">زنانه</a></li>
<li itemprop="Women Dresses"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/dresses" title="لباس">لباس</a></li>
<li itemprop="Women Top and Shirts"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/activewear" title="لباس ورزشی">لباس ورزشی</a></li>
<li itemprop="Women Activewear"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/tops-shirts" title="پیراهن و تاپ">پیراهن و تاپ</a></li>
<li itemprop="Women Sweatshirts and T-shirts"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/sweatshirts-tshirts" title="سویی شرت و تی شرت">سویی شرت و تی شرت</a></li>
<li itemprop="Women Sweaters"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/sweaters" title="ژاکت">ژاکت</a></li>
<li itemprop="Women Skirts"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/skirts" title="دامن">دامن</a></li>
<li itemprop="Women Pants"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/pants" title="شلوار">شلوار</a></li>
<li itemprop="Women Manto"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/manto" title="مانتو">مانتو</a></li>
<li itemprop="Women Shoes"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/shoes" title="کفش">کفش</a></li>
<li itemprop="Women Bags"><a itemprop="url" href="https://www.sepidshop.com/women/clothes/bags" title="کیف">کیف</a></li>
</ul>
<ul class="mclothes">
<li itemprop="Men"><a itemprop="url" href="https://www.sepidshop.com/men/clothes/" title="مردانه">مردانه</a></li>
<li itemprop="Men Activewear"><a itemprop="url" href="https://www.sepidshop.com/men/clothes/activewear" title="لباس ورزشی">لباس ورزشی</a></li>
<li itemprop="Men Sweatshirts"><a itemprop="url" href="https://www.sepidshop.com/men/clothes/shirts" title="پیراهن">پیراهن</a></li>
<li itemprop="Men T-shirts"><a itemprop="url" href="https://www.sepidshop.com/men/clothes/tshirts" title="تی شرت">تی شرت</a></li>
<li itemprop="Men Sweaters"><a itemprop="url" href="https://www.sepidshop.com/men/clothes/sweaters" title="سویی شرت">سویی شرت</a></li>
<li itemprop="Men Pants"><a itemprop="url" href="https://www.sepidshop.com/men/clothes/pants" title="شلوار">شلوار</a></li>
<li itemprop="Men Shoes"><a itemprop="url" href="https://www.sepidshop.com/men/clothes/shoes" title="کفش">کفش</a></li>
</ul>
<ul class="lclothes">
<li itemprop="Children"><a itemprop="url" href="https://www.sepidshop.com/children/clothes/" title="بچه گانه">بچه گانه</a></li>
<li itemprop="New born"><a itemprop="url" href="https://www.sepidshop.com/children/clothes/newborn" title="نوزاد">نوزاد</a></li>
<li itemprop="Baby"><a itemprop="url" href="https://www.sepidshop.com/children/clothes/baby" title="کودک 1 تا 4 سال">کودک 1 تا 4 سال</a></li>
<li itemprop="Boys"><a itemprop="url" href="https://www.sepidshop.com/children/clothes/boys" title="پسر 4 تا 12 سال">پسر 4 تا 12 سال</a></li>
<li itemprop="Girls"><a itemprop="url" href="https://www.sepidshop.com/children/clothes/girls" title="دختر 4 تا 12 سال">دختر 4 تا 12 سال</a></li>
<li itemprop="Boys Shoes"><a itemprop="url" href="https://www.sepidshop.com/children/clothes/boys-shoes" title="کفش پسرانه">کفش پسرانه</a></li>
<li itemprop="Girls Shoes"><a itemprop="url" href="https://www.sepidshop.com/children/clothes/girls-shoes" title="کفش دخترانه">کفش دخترانه</a></li>
</ul>
</ul>
<li itemprop="Shawl and Scarf"><a itemprop="url" id="showscarves" onclick="show('showscarves',this.id,'scarves','exitscarves',['clothes','jewels','accessories','support',<?php if (!isset($_SESSION['usernamelogin'])){ echo" 'register'"; }else{echo"'users' ";} ?>])" title="شال و روسری"  >شال و روسری</a></li>
<ul class="main-sub" id="scarves"><a href="#" id="opennav" onclick="closesubnav('scarves')"><i class="fa fa-close" id="close-bar" aria-hidden="true"></i></a>
<ul class="right">
<li itemprop="Scarves"><a itemprop="url" href="https://www.sepidshop.com/women/scarves/" title="روسری">روسری</a></li>
<li itemprop="Cotton Scarves"><a itemprop="url" href="https://www.sepidshop.com/women/scarves/cotton" title="روسری نخی">روسری نخی</a></li>
<li itemprop="Silk Scarves"><a itemprop="url" href="https://www.sepidshop.com/women/scarves/silk" title="روسری ابریشم">روسری ابریشم</a></li>
<li itemprop="Linen Scarves"><a itemprop="url" href="https://www.sepidshop.com/women/scarves/linen" title="روسری لنین">روسری لنین</a></li>
<li itemprop="Gagard Scarves"><a itemprop="url" href="https://www.sepidshop.com/women/scarves/gagard" title="روسری ژاگارد">روسری ژاگارد</a></li>
</ul>
<ul class="left">
<li itemprop="Shawls"><a itemprop="url" href="https://www.sepidshop.com/women/shawls/" title="شال">شال</a></li>
<li itemprop="Cotton Shawls"><a itemprop="url" href="https://www.sepidshop.com/men/shawls/cotton" title="شال نخی">شال نخی</a></li>
<li itemprop="Silk Shawls"><a itemprop="url" href="https://www.sepidshop.com/men/shawls/silk" title="شال ابریشم">شال ابریشم</a></li>
<li itemprop="Linen Shawls"><a itemprop="url" href="https://www.sepidshop.com/men/shawls/linen" title="شال لنین">شال لنین</a></li>
<li itemprop="Woolen Shawls"><a itemprop="url" href="https://www.sepidshop.com/men/shawls/woolen" title="شال پشمی">شال پشمی</a></li>
<li itemprop="Viscose Shawls"><a itemprop="url" href="https://www.sepidshop.com/men/shawls/viscose" title="شال ویسکوز">شال ویسکوز</a></li>
<li itemprop="Sheer Shawls"><a itemprop="url" href="https://www.sepidshop.com/men/shawls/sheer" title="شال حریر">شال حریر</a></li>
</ul>
</ul>
<li itemprop="Jewelry nav"><a itemprop="url" id="showjewels" onclick="show('showjewels',this.id,'jewels','exitjewels',['clothes','scarves','accessories','support',<?php if (!isset($_SESSION['usernamelogin'])){ echo" 'register'"; }else{echo"'users' ";} ?>])" title="جواهرات">جواهرات</a></li>
<ul class="main-sub" id="jewels"><a href="#" id="opennav" onclick="closesubnav('jewels')"><i class="fa fa-close" id="close-bar" aria-hidden="true"></i></a>
<ul class="rclothes">
<li itemprop="Strass"><a itemprop="url" href="https://www.sepidshop.com/women/strass/" title="بدلیجات">بدلیجات</a></li>
<li itemprop="Strass Bracelets"><a itemprop="url" href="https://www.sepidshop.com/women/strass/bracelets" title="دستبند">دستبند</a></li>
<li itemprop="Strass Ankles"><a itemprop="url" href="https://www.sepidshop.com/women/strass/ankles" title="پابند">پابند</a></li>
<li itemprop="Strass Necklaces"><a itemprop="url" href="https://www.sepidshop.com/women/strass/necklaces" title="گردنبند">گردنبند</a></li>
<li itemprop="Strass Rings"><a itemprop="url" href="https://www.sepidshop.com/women/strass/rings" title="انگشتر">انگشتر</a></li>
<li itemprop="Strass Set"><a itemprop="url" href="https://www.sepidshop.com/women/strass/set" title="ست جواهرات">ست جواهرات</a></li>
</ul>
<ul class="mclothes">
<li itemprop="Handmade Jewelry"><a itemprop="url" href="https://www.sepidshop.com/women/handmade-jewelry/" title="دست ساز">دست ساز</a></li>
<li itemprop="Handmade-jewelry Bracelets"><a itemprop="url" href="https://www.sepidshop.com/women/handmade-jewelry/bracelets" title="دستبند">دستبند</a></li>
<li itemprop="Handmade-jewelry Ankles"><a itemprop="url" href="https://www.sepidshop.com/women/handmade-jewelry/ankles" title="پابند">پابند</a></li>
<li itemprop="Handmade-jewelry Necklaces"><a itemprop="url" href="https://www.sepidshop.com/women/handmade-jewelry/necklaces" title="گردنبند">گردنبند</a></li>
<li itemprop="Handmade-jewelry Rings"><a itemprop="url" href="https://www.sepidshop.com/women/handmade-jewelry/rings" title="انگشتر">انگشتر</a></li>
<li itemprop="Handmade-jewelry Set"><a itemprop="url" href="https://www.sepidshop.com/women/handmade-jewelry/set" title="ست جواهرات">ست جواهرات</a></li>
</ul>
<ul class="lclothes">
<li itemprop="Gems"><a itemprop="url" href="https://www.sepidshop.com/women/gems/" title="طلا و نقره">طلا و نقره</a></li>
<li itemprop="Gems Bracelets"><a itemprop="url" href="https://www.sepidshop.com/women/gems/bracelets" title="دستبند">دستبند</a></li>
<li itemprop="Gems Ankles"><a itemprop="url" href="https://www.sepidshop.com/women/gems/ankles" title="پابند">پابند</a></li>
<li itemprop="Gems Necklaces"><a itemprop="url" href="https://www.sepidshop.com/women/gems/necklaces" title="گردنبند">گردنبند</a></li>
<li itemprop="Gems Rings"><a itemprop="url" href="https://www.sepidshop.com/women/gems/rings" title="انگشتر">انگشتر</a></li>
<li itemprop="Gems Set"><a itemprop="url" href="https://www.sepidshop.com/women/gems/set" title="ست جواهرات">ست جواهرات</a></li>
</ul>
</ul>
<li itemprop="Accessories nav"><a itemprop="url" id="showaccessories" onclick="show('showaccessories',this.id,'accessories','exitaccessories',['clothes','scarves','jewels','support',<?php if (!isset($_SESSION['usernamelogin'])){ echo" 'register'"; }else{echo"'users' ";} ?>])" title="لوازم جانبی">لوازم جانبی</a></li>
<ul class="main-sub" id="accessories"><a href="#" id="opennav" onclick="closesubnav('accessories')"><i class="fa fa-close" id="close-bar" aria-hidden="true"></i></a>
<ul class="right">
<li itemprop="Women Accessories"><a itemprop="url" href="https://www.sepidshop.com/women/accessories/" title="زنانه">زنانه</a></li>
<li itemprop="Head dress"><a itemprop="url" href="https://www.sepidshop.com/women/accessories/headdress" title="تل">تل</a></li>
<li itemprop="Hair slide"><a itemprop="url" href="https://www.sepidshop.com/women/accessories/hairslide" title="گل سر">گل سر</a></li>
<li itemprop="Felt"><a itemprop="url" href="https://www.sepidshop.com/women/accessories/felt" title="نمدی">نمدی</a></li>
</ul>
<ul class="left">
<li itemprop="Men Accessories"><a itemprop="url" href="https://www.sepidshop.com/men/accessories/" title="مردانه">مردانه</a></li>
<li itemprop="Cotton Shawls"><a itemprop="url" href="https://www.sepidshop.com/men/shawls/cotton" title="شال نخی">شال نخی</a></li>
</ul>
</ul>
<?php if (!isset($_SESSION['usernamelogin'])) { ?>
<li itemprop="Main Register"><a itemprop="url" id="showregister" onclick="show('showregister',this.id,'register','exitregister',['clothes','scarves','jewels','accessories','support'])" title="ثبت نام">ثبت نام<br /></a></li>
<ul class="main-sub" id="register"><a href="#" id="opennav" onclick="closesubnav('register')"><i class="fa fa-close" id="close-bar" aria-hidden="true"></i></a>
<ul class="center">
<li itemprop="Login"><a itemprop="url" href="https://www.sepidshop.com/users/login" title="ورود">ورود</a></li>
<li itemprop="Register"><a itemprop="url" href="https://www.sepidshop.com/users/register" title="ثبت نام">ثبت نام</a></li>
<li itemprop="Forget Pass"><a itemprop="url" href="https://www.sepidshop.com/users/forget-pass" title="فراموشی رمز عبور">فراموشی رمز عبور</a></li>
<li itemprop="Confirm Code"><a itemprop="url" href="https://www.sepidshop.com/users/confirm-code" title="کد تایید">کد تایید</a></li>
</ul></ul>
<?php } else { 	?>
<li itemprop="Users"><a itemprop="url" id="showusers" onclick="show('showusers',this.id,'users','exitusers',['clothes','scarves','jewels','accessories','support'])" title="کاربر"><?php echo $_SESSION['usernamelogin']; ?></a></li>
<ul class="main-sub" id="users"><a href="#" id="opennav" onclick="closesubnav('users')"><i class="fa fa-close" id="close-bar" aria-hidden="true"></i></a>
<ul class="center">
<li itemprop="Account"><a itemprop="url" href="https://www.sepidshop.com/users/account" title="حساب کاربری">حساب کاربری</a></li>
<li itemprop="Logout"><a itemprop="url" href="https://www.sepidshop.com/users/logout" title="خروج">خروج</a></li>
</ul></ul>
<?php } ?>
<li itemprop="Support"><a itemprop="url" id="showsupport" onclick="show('showsupport',this.id,'support','exitsupport',['clothes','scarves','jewels','accessories',<?php if (!isset($_SESSION['usernamelogin'])){ echo " 'register'"; }else{echo "'users' ";} ?> ])" title="پشتیبانی">پشتیبانی</a></li>
<ul class="main-sub" id="support"><a href="#" id="opennav" onclick="closesubnav('support')"><i class="fa fa-close" id="close-bar" aria-hidden="true"></i></a>
<ul class="center">
<li itemprop="Contact"><a itemprop="url" href="https://www.sepidshop.com/support/contact" title="تماس با ما">تماس با ما</a></li>
<li itemprop="About"><a itemprop="url" href="https://www.sepidshop.com/support/about" title="درباره ما">درباره ما</a></li>
</ul></ul>
<li itemprop="Archive"><a itemprop="url" href="https://www.sepidshop.com/video/" title="آرشیو ویدئو">آرشیو ویدئو</a></li>

<li id="hidden-menu" itemprop="Change Lang"><a itemprop="url" id="showlanguage" onclick="show('showlanguage',this.id,'language','exitlanguage',['clothes','scarves','jewels','accessories','support',<?php if (!isset($_SESSION['usernamelogin'])){ echo " 'register'"; }else{echo "'users' ";} ?> ])" title="تغییر زبان">تغییر زبان</a></li>
<ul class="main-sub" id="language"><a href="#" id="opennav" onclick="closesubnav('language')"><i class="fa fa-close" id="close-bar" aria-hidden="true"></i></a>
<ul class="center">
<li itemprop="Persian"><a itemprop="url" href="https://www.sepidshop.com" title="Persian">Persian</a></li>
<li itemprop="English"><a itemprop="url" href="https://www.sepidshop.com/en/" title="English">English</a></li>
</ul></ul>
<li id="hidden-menu" itemprop="Basket"><a itemprop="url" href="https://www.sepidshop.com/basket" title="سبد خرید">سبد خرید</a></li>

</ul>
</nav>
</header>
<div class="slideshow" id="slideshow"><ul>
<li><img src="images/slide/1.jpg"/><span><h4>قیمت پایین و کیفیت بالا</h4></span></li>
<li><img src="images/slide/2.jpg"/></li>
<li><img src="images/slide/3.jpg"/></li>
</ul></div>
<div class="main-content">
<div id="div1" class="div1">
<a href="#div1"><h2>لباس زنانه</h2><img src="images/women/clothes/women-clothes.jpg"/><div class="hover"></div></a>
</div>
<div id="div2" class="div2">
<a href="#div2"><h2>لباس مردانه</h2><img src="images/men/clothes/men-clothes.jpg"/><div class="hover"></div></a>
</div>
<div id="div3" class="div3">
<a href="#div3"><h2>کفش بچه گانه</h2><img src="images/kids/shoes/kids-shoes.jpg"/><div class="hover"></div></a>
</div>
<div id="div4" class="div4">
<a href="#div4"><h2>لباس بچه گانه</h2><img src="images/kids/clothes/kids-clothes.jpg"/><div class="hover"></div></a>
</div>
<div id="div5" class="div5">
<a href="#div5"><h2>شال و روسری</h2><img src="images/women/scarves/women-scarves.jpg"/><div class="hover"></div></a>
</div>
<div id="div6" class="div6">
<a href="#div6"><h2>طلا و نقره</h2><img src="images/women/jewel/women-gems.jpg"/><div class="hover"></div></a>
</div>
<div id="div7" class="div7">
<a href="#div7"><h2>زیورآلات</h2><img src="images/women/jewel/women-jewel.jpg"/><div class="hover"></div></a>
</div>
<div id="div8" class="div8">
<a href="#div8"><h2>کفش مردانه</h2><img src="images/men/shoes/men-shoes.jpg"/><div class="hover"></div></a>
</div>
<div id="div9" class="div9">
<a href="#div9"><h2>کفش زنانه</h2><img src="images/women/shoes/women-shoes.jpg"/><div class="hover"></div></a>
</div>
<div id="div10" class="div10">
<a href="#div10"><h2>کیف زنانه</h2><img src="images/women/purse/women-purse.jpg"/><div class="hover"></div></a>
</div>
<div id="div11" class="div11">
<a href="#div11"><h2>کیف مردانه</h2><img src="images/men/bags/men-bags.jpg"/><div class="hover"></div></a>
</div>
</div>
<h2 class="best-sellers">پرفروشترین های فروشگاه سپید</h2>
<div id="jssor_1" class="slider">
<div data-u="slides" class="slides">
<div>
<img data-u="image" src="img/scarf-cotton-11-200.jpg" />
</div>
<div>
<img data-u="image" src="img/scarf-cotton-12-200.jpg" />
</div>
<div>
<img data-u="image" src="img/scarf-cotton-13-200.jpg" />
</div>
<div>
<img data-u="image" src="img/scarf-cotton-14-200.jpg" />
</div>
<div>
<img data-u="image" src="img/scarf-cotton-15-200.jpg" />
</div>
<div>
<img data-u="image" src="img/scarf-cotton-16-200.jpg" />
</div>
<div>
<img data-u="image" src="img/scarf-cotton-17-200.jpg" />
</div>
<div>
<img data-u="image" src="img/scarf-cotton-18-200.jpg" />
</div>
<div>
<img data-u="image" src="img/scarf-cotton-19-200.jpg" />
</div>
<div>
<img data-u="image" src="img/scarf-cotton-20-200.jpg" />
</div>
</div>
<span data-u="arrowleft" class="jssora03l larrow"  data-autocenter="2"></span>
<span data-u="arrowright" class="jssora03r rarrow" data-autocenter="2"></span>
</div>
<script>
jssor_1_slider_init();
</script>
<h2 class="rules">پیشنهاد ما به شما برای<strong> خرید شال و روسری</strong></h2>
<h3 class="content">شال یا روسری که قصد خریدش را دارید می بایست دارای کیفیت خوبی بوده تا ظاهر شمارا آراسته کند. جنس پارچه انتخاب شده باید بگونه ای باشد که مدت زمان معقولی عمر کند پس حتما قبل از خرید به بافت و جنس آن توجه کنید. شیک پوش با توجه به تجربه ای درخشان و موفق در زمینه طراحی و تولید شال و روسری همواره سعی کرده است که تمامی محصولات خود را با بالاترین کیفیت مطلوب ,در اختیار شما مشتریان محترم قرار دهد از نشانه های شال یا روسری خوب می توان گفت که بهتر است جنس آن از هردوطرف کیفیت مطلوبی داشته باشد، هرچه بافت آن نرم و در عین حال مقاوم تر باشد ارزش آن بالاتر است. کسانی در انتخاب شال و روسری موفق ترند که هنگام خرید از شکل، فرم و رنگ پوست خود آگاهی داشته باشند و بدانند بر چه اساسی می بایست شال و روسری خود را انتخاب کنند. و این امر را شیک پوش برای شما فراهم کرده است ,اگر قدی بلند و اندامی درشت دارید از روسری های تک رنگ و زیبای شیک پوش (ترجیحا تیره) استفاده کنید تا شمارا لاغرتر نشان دهد. اگر کوتاه قد هستید و اندامی لاغر دارید بهتر است محور انتخاب روسری یا شال خود را برمبنای یک رنگ روشن و با ترکیبی از چند رنگ شاد که با رنگ اصلی  هارمونی داشته باشد, انتخاب بفرمائید.		</h3>

<h2 class="rules">سیاست شرکت<strong> شیک پوش</strong></h2>
<h3 class="content">بطور کلی در حال حاضر اولویت اول مردم در جوامع پیشرفته , بهداشت و سلامتی جسم و روان می باشد و هرچه تولید بیشتر شود و کمیت افزایش یابد, کیفیت ازبین خواهد رفت, در همین راستا شرکت شیک پوش رویه ای کاملا مستقل و متفاوت در تولیدات خود پیش گرفته و همواره بر این امر معتقد بوده  وهست که کیفیت بالای محصولات خود را فدای کمیت نکند.خاص بودن و بی همتا بودن محصولات شیک پوش به دلیل کیفیت بالا و تکنولوژی مورد استفاده در تولید و نوع خدمت رسانی آن که بصورت اختصاصی و انحصاری در اختیار شرکت می باشد در کنار عدم قابلیت کپی برداری از محصولات شیک پوش که تحت حمایت قوانین حق ثبت طرح صنعتی وزارت صنایع قرار دارد و تمهیدات دیگری که در همین زمینه بکار رفته, محصولات این شرکت را به کالایی فوق العاده و بی نظیر نه تنها در کشور بلکه در سطح منطقه تبدیل کرده است. گروه صنعتی شیک پوش افتخار دارد که همواره بالاترین کیفیت محصولات را با تنوعی چشمگیر در سلایق خاص شما بانوان محترم ارائه دهد.</h3>

<footer class="footer-sepid">

<div class="right">
<div class="logo">
<h2>Sepid <span>Shop</span></h2>
</div>
<div class="social">
<a href="https://www.facebook.com/" title="Facebook" id="facebook"><i class="fa fa-facebook"></i></a>
<a href="https://telegram.me/" title="Telegram" id="telegram"><i class="fa fa-paper-plane"></i></a>
<a href="https://www.instagram.com/" title="Instagram" id="instagram"><i class="fa fa-instagram"></i></a>
<a href="https://plus.google.com/" title="Google plus" id="google"><i class="fa fa-google"></i></a>
</div>
</div>
<div class="center">
<div class="news">
<h5>جهت دریافت خبر نامه ایمیل خود را وارد نمایید</h5>
<form action=""><input type="email" placeholder="E-Mail" ><input type="submit" value="دریافت"></form>
</div>
<div class="about">
<h5>قیمت قابل قبول اجناس با بالاترین کیفیت در فروشگاه سپید</h5>
</div>
</div>
<div class="left">
<div class="phone">
<a href="tel:+989195150294" rel="nofollow">تلفن : 09195150294</a>
</div>
<div class="address">
<h5>آدرس : سعادت اباد ,کاج شمالی, سرو پلاک 5</h5>
</div>
<div class="mail">
<h5>E-Mail: <a href="mailto:admin@leonardscarf.com.com">admin@sepidshop.com</a></h5>
</div>
</div>
<div class="links">
<li><a href="https://www.leonardscarf.com/honours" title="افتخارات">افتخارات</a></li>
<li><a href="https://www.leonardscarf.com/rules" title="قوانین و مقررات">قوانین و مقررات</a></li>
<li><a href="https://www.leonardscarf.com/complaints" title="شکایات">شکایات</a></li>
<li><a href="https://www.leonardscarf.com/sitemap.php" title="نقشه سایت">نقشه سایت</a></li>
</div>
<div class="copyright">
<h6>Copyright &copy; 2017 Sepidshop.com</h6>
</div>
</footer>
</body>
</html>