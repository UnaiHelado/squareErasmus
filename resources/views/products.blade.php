


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
.prod-info-main {
    border: 1px solid #CEEFFF;
    margin-bottom: 30px;
    margin-top: 10px;
    background: #fff;
    padding: 6px;
    -webkit-box-shadow: 0 1px 4px 0 rgba(21,180,255,0.5);
    box-shadow: 0 1px 1px 0 rgba(21,180,255,0.5);
}

.prod-info-main .product-image {
    display: block;
    min-height: 238px;
    overflow: hidden;
    position: relative;
    
}

.rotprod{
    -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
    -o-transition-duration: 0.8s;
    transition-duration: 0.8s;
    }  
 


.prod-info-main .product-deatil {
    padding-bottom: 17px;
    padding-left: 16px;
    padding-top: 16px;
    position: relative;
}

.product-content .product-deatil h5 a {
    color: #2f383d;
    font-size: 15px;
    line-height: 19px;
    text-decoration: none;
    padding-left: 0;
    margin-left: 0
}

.prod-info-main .product-deatil h5 a span {
    color: #9aa7af;
    display: block;
    font-size: 13px
}

.prod-info-main .product-deatil span.tag1 {
    border-radius: 50%;
    color: #fff;
    font-size: 15px;
    height: 50px;
    padding: 13px 0;
    position: absolute;
    right: 10px;
    text-align: center;
    top: 10px;
    width: 50px
}




.prod-info-main .description {
    font-size: 12.5px;
    line-height: 20px;
    padding: 10px 14px 16px 19px;
    color: #9b9b9b;
}


.prod-info-main .product-info a.add-to-cart {
    color: #2f383d;
    font-size: 13px;
    padding-left: 16px
}

.prod-info-main name.a {
    padding: 5px 10px;
    margin-left: 16px
}

.product-info.smart-form .btn {
    padding: 6px 12px;
    margin-left: 12px;
    margin-top: -10px
}



.product-block .product-deatil p.price-container span,
.prod-info-main .product-deatil p.price-container span,
.shipping table tbody tr td p.price-container span,
.shopping-items table tbody tr td p.price-container span {
    color: #c10202;
    font-family: Lato, sans-serif;
    font-size: 24px;
    line-height: 20px
}

.product-info.smart-form .rating label {
    margin-top:15px;
    
}

.prod-wrap .product-image span.tag2 {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    padding: 10px 0;
    color: #fff;
    font-size: 11px;
    text-align: center
}

.prod-wrap .product-image span.tag3 {
    position: absolute;
    top: 10px;
    right: 20px;
    width: 60px;
    height: 36px;
    border-radius: 50%;
    padding: 10px 0;
    color: #fff;
    font-size: 11px;
    text-align: center
}

.shop-btn {
    position: relative
}

.shop-btn>span {
    background: #a90329;
    display: inline-block;
    font-size: 10px;
    box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);
    font-weight: 700;
    border-radius: 50%;
    padding: 2px 4px 3px!important;
    text-align: center;
    line-height: normal;
    width: 19px;
    top: -7px;
    left: -7px
}

.product-deatil hr {
    padding: 0 0 5px!important
}

.product-deatil .glyphicon {
    color: #3276b1
}

.product-deatil .product-image {
    border-right: 0px solid #fff !important
}

.product-deatil .name {
	font-weight: bold;
    margin-top: 0;
    margin-bottom: 0
}

.product-deatil .name small {
    display: block
}

.product-deatil .name a {
    margin-left: 0
}

.product-deatil .price-container {
    font-size: 24px;
    margin: 0;
    font-weight: 300;
    
}

.product-deatil .price-container small {
    font-size: 12px;
    
}

.product-deatil .fa-2x {
    font-size: 16px!important
}

.product-deatil .fa-2x>h5 {
    font-size: 12px;
    margin: 0
}

.product-deatil .fa-2x+a,
.product-deatil .fa-2x+a+a {
    font-size: 13px
}




.product-deatil .message-text {
    width: calc(100% - 70px)
}
/*--Button effect classes for add to cart*/ 
.btn-cart{
    border-radius: 0;
    position: relative;
    color: #fff;
    border:1px solid transparent;
    text-transform: uppercase;
    transition: all 0.40s ease 0s;
}
.btn-cart:after{
    content: "\f07a";
    font-family: fontawesome;
    position: absolute;
    right: 6px;
    top: -4px;
    opacity: 0;
    color: #fff;
    transition: all 0.40s ease 0s;
}
.btn-cart:hover:after{
    top:40%;
    opacity: 5;
}
.btn-cart span{
    display: block;
    transition: all 0.70s linear 0s;
}
.btn-cart:hover span{
    transform: translate(-9px);
}


@media only screen and (min-width:1024px) {
    .prod-info-main div[class*=col-md-4] {
        padding-right: 0
    }
    .prod-info-main div[class*=col-md-8] {
        padding: 0 13px 0 0
    }
    .prod-wrap div[class*=col-md-5] {
        padding-right: 0
    }
    .prod-wrap div[class*=col-md-7] {
        padding: 0 13px 0 0
    }
    .prod-info-main .product-image {
        border-right: 1px solid #dfe5e9
    }
    .prod-info-main .product-info {
        position: relative
    }
}
</style>

</head>

<body>
	<div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="cart">Shoping Cart</a></li>
                            <li><a href="cart"><img src="https://thepartyparlour.com.au/wp-content/themes/custom-theme/images/basket-icon-gray.png" class="img-responsive rotprod"></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>


<div class="container">

	<!-- 1º Product-->
<div class="col-xs-12 col-md-6">
	<!-- Product Start-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9jb250ZW50XFxcL2JyYW5kc1xcXC9pbWFnZXNcXFwvMWM4YjRmOTkzYWMzOTcxZDI3MTc0NzEyNDVjNDJiNzltb250cGVsbGllcjY3NDVlMzYyMmUwN2NjNDBjNjA5ZGE2NDkxMTVjMWVmLmpwZ1wiLFwid2lkdGhcIjoxMDAsXCJoZWlnaHRcIjpcIlwiLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC9zMy1ldS13ZXN0LTEuYW1hem9uYXdzLmNvbVxcXC9zdG9yYWdlLmJ1eWFuZHNlbGwuaWVcXFwvYXBwbGlhbmNlcy1kZWxpdmVyZWQtbm9pbWFnZS5wbmdcIn0iLCJoYXNoIjoiODAyN2U1MWQwYWEzN2Y2NDdjYzQ5ZWY4MjU3MmM5N2I2M2MwMDUxNiJ9/1c8b4f993ac3971d2717471245c42b79montpellier6745e3622e07cc40c609da649115c1ef.jpg" class="img-responsive rotprod"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC91cGxvYWRzXFxcLzE0MDVcXFwvNTk4MmY5ZDhlM2YwZi02OTg1NzZhMzBjYTkyZWU1MjlhYjhjZGM2NDEyYjNiM1wiLFwid2lkdGhcIjoyNTAsXCJoZWlnaHRcIjpcIlwiLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC9zMy1ldS13ZXN0LTEuYW1hem9uYXdzLmNvbVxcXC9zdG9yYWdlLmJ1eWFuZHNlbGwuaWVcXFwvYXBwbGlhbmNlcy1kZWxpdmVyZWQtbm9pbWFnZS5wbmdcIn0iLCJoYXNoIjoiZWRmOTkzMWRiNzI2NWIyY2NhNTY2ODBmOTczMzc3NGZiYjc1MGQ5YSJ9/montpellier-5kg-1000rpm-white-freestanding-washing-machine-mw5100p" class="img-responsive rotprod"/> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
					
						<h5 class="name">
							<a href="#">
								Montpellier 5kg 1000rpm White Freestanding Washing Machine MW5100P 
							</a>                        

						</h5>
						<p class="price-container">
							<span>€179.95</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<ul>
					  <li>Quick Wash: Yes</li>
					  <li>Energy Rating: A+</li>
					  <li>Wash Load Capacity: 5kg</li>
					  <li>Spin Speed: 1000rpm</li>
					</ul>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="cart/addItem;" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
	<!-- 2º Product-->
<div class="col-xs-12 col-md-6">
	<!-- Product Start-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9jb250ZW50XFxcL2JyYW5kc1xcXC9pbWFnZXNcXFwvNzQ3NmQxMTY3ZjQ3NDE1NTQzZDI5MzM0ZTg5MTNhZmVpbmRlc2l0NTNkZDk1Yjc5ODRlZjNmODE1NzkyY2VhM2QwMmUyMTAuanBnXCIsXCJ3aWR0aFwiOjEwMCxcImhlaWdodFwiOlwiXCIsXCJkZWZhdWx0XCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9hcHBsaWFuY2VzLWRlbGl2ZXJlZC1ub2ltYWdlLnBuZ1wifSIsImhhc2giOiI1MTlkMDU5OTM2MzY3ZGI5MWY4OThmNGIwNDNhOGNjMDEwYjYzZjEwIn0=/7476d1167f47415543d29334e8913afeindesit53dd95b7984ef3f815792cea3d02e210.jpg"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC91cGxvYWRzXFxcLzE0MDNcXFwvYzdkM2I1YmVkMWU1Y2EyMzdjNmQwYzkzMDMyNDE5NWZcIixcIndpZHRoXCI6MjUwLFwiaGVpZ2h0XCI6XCJcIixcImRlZmF1bHRcIjpcImh0dHBzOlxcXC9cXFwvczMtZXUtd2VzdC0xLmFtYXpvbmF3cy5jb21cXFwvc3RvcmFnZS5idXlhbmRzZWxsLmllXFxcL2FwcGxpYW5jZXMtZGVsaXZlcmVkLW5vaW1hZ2UucG5nXCJ9IiwiaGFzaCI6Ijk1OTlhYWZmM2ZmMzlkMGE1OGJhYmE0ZjdhZWFlZTk4ZmE2MzU2MGUifQ==/indesit-7kg-white-freestanding-vented-tumble-dryer-idv75" class="img-responsive rotprod"/> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Indesit 7kg White Freestanding Vented Tumble Dryer IDV75
							</a>                        
						</h5>
						<p class="price-container">
							<span>€197.95</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<ul>
					  <li>Dry Load Capacity: 7kg</li>
					  <li>Energy Rating: B</li>
					  <li>Warranty: 1 Year</li>
					  <li>Type: Vented</li>
					</ul>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="cart/addItem;" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
	<!-- 3º First Product-->
<div class="col-xs-12 col-md-6">
	<!-- Product Start-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<div class="product-image"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9jb250ZW50XFxcL2JyYW5kc1xcXC9pbWFnZXNcXFwvNDQ4ODU5YTE1ZjZmMmM3MGNmMTc4MTg0ZGRmMjNiYWJhbWljYTkxODU0N2FkNDMyMTY5OTQ4MGIwZDc1ZmJmYzk0NzQzLnBuZ1wiLFwid2lkdGhcIjoxMDAsXCJoZWlnaHRcIjpcIlwiLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC9zMy1ldS13ZXN0LTEuYW1hem9uYXdzLmNvbVxcXC9zdG9yYWdlLmJ1eWFuZHNlbGwuaWVcXFwvYXBwbGlhbmNlcy1kZWxpdmVyZWQtbm9pbWFnZS5wbmdcIn0iLCJoYXNoIjoiMDZkYWM0OTM3MDVmODA1ZWVkYzcwNzM2NmZhZTlkZTg0Y2YxYzRlNCJ9/448859a15f6f2c70cf178184ddf23babamica918547ad4321699480b0d75fbfc94743.png"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC91cGxvYWRzXFxcLzUzMjJcXFwvY2M4ZDg2NzJkNTk0ZjYwOGQyOGM5MjUxNmQzMTkxOTBcIixcIndpZHRoXCI6MjUwLFwiaGVpZ2h0XCI6XCJcIixcImRlZmF1bHRcIjpcImh0dHBzOlxcXC9cXFwvczMtZXUtd2VzdC0xLmFtYXpvbmF3cy5jb21cXFwvc3RvcmFnZS5idXlhbmRzZWxsLmllXFxcL2FwcGxpYW5jZXMtZGVsaXZlcmVkLW5vaW1hZ2UucG5nXCJ9IiwiaGFzaCI6ImVlOWU0ZTk5ODcwYzQzMDMyZjIyY2JjMmVjNGVmZWJmNTc3OTM1MDgifQ==/amica-7kg-white-freestanding-vented-tumble-dryer-adv7clcw" class="img-responsive rotprod"/> 
					</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Amica 7kg White Freestanding Vented Tumble Dryer ADV7CLCW
							</a>                        

						</h5>
						<p class="price-container">
							<span>€199.95</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<ul>
					  <li>Type: Vented</li>
					  <li>Dry Load Capacity: 7kg</li>
					  <li>Fit Type: Freestanding</li>
					  <li>Width: 595mm</li>
					</ul>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="cart/addItem;" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
	<!-- 4º First Product-->
<div class="col-xs-12 col-md-6">
	<!-- Product Start-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<div class="product-image"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9jb250ZW50XFxcL2JyYW5kc1xcXC9pbWFnZXNcXFwvNDQ4ODU5YTE1ZjZmMmM3MGNmMTc4MTg0ZGRmMjNiYWJhbWljYTkxODU0N2FkNDMyMTY5OTQ4MGIwZDc1ZmJmYzk0NzQzLnBuZ1wiLFwid2lkdGhcIjoxMDAsXCJoZWlnaHRcIjpcIlwiLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC9zMy1ldS13ZXN0LTEuYW1hem9uYXdzLmNvbVxcXC9zdG9yYWdlLmJ1eWFuZHNlbGwuaWVcXFwvYXBwbGlhbmNlcy1kZWxpdmVyZWQtbm9pbWFnZS5wbmdcIn0iLCJoYXNoIjoiMDZkYWM0OTM3MDVmODA1ZWVkYzcwNzM2NmZhZTlkZTg0Y2YxYzRlNCJ9/448859a15f6f2c70cf178184ddf23babamica918547ad4321699480b0d75fbfc94743.png"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC91cGxvYWRzXFxcLzI4OTJcXFwvNTk2Nzc4NGZiMDdlNy02YjIxMzQzYzA2ZjUxODEwNDgwYTczMzhiOTRiODI4M1wiLFwid2lkdGhcIjoyNTAsXCJoZWlnaHRcIjpcIlwiLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC9zMy1ldS13ZXN0LTEuYW1hem9uYXdzLmNvbVxcXC9zdG9yYWdlLmJ1eWFuZHNlbGwuaWVcXFwvYXBwbGlhbmNlcy1kZWxpdmVyZWQtbm9pbWFnZS5wbmdcIn0iLCJoYXNoIjoiN2Q1YWU1YTZiZjg3ZTdkYTE5YzdkY2UyODllMTZlZWRmYjc4OTNkMiJ9/amica-5kg-1000rpm-white-freestanding-washing-machine-awi510lp" class="img-responsive rotprod"/> 
					</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
					
						<h5 class="name">
							<a href="#">
								Amica 5kg 1000rpm White Freestanding Washing Machine AWI510LP
							</a>                        

						</h5>
						<p class="price-container">
							<span>€229.95</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<ul>
					  <li>Quick Wash: Yes</li>
					  <li>Energy Rating: A+</li>
					  <li>Wash Load Capacity: 5kg</li>
					  <li>Spin Speed: 1000rpm</li>
					</ul>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="cart/addItem;" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->        
</div>
	<!-- 5º First Product-->
<div class="col-xs-12 col-md-6">
	<!-- Product Start-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<div class="product-image"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9jb250ZW50XFxcL2JyYW5kc1xcXC9pbWFnZXNcXFwvNzQ3NmQxMTY3ZjQ3NDE1NTQzZDI5MzM0ZTg5MTNhZmVpbmRlc2l0NTNkZDk1Yjc5ODRlZjNmODE1NzkyY2VhM2QwMmUyMTAuanBnXCIsXCJ3aWR0aFwiOjEwMCxcImhlaWdodFwiOlwiXCIsXCJkZWZhdWx0XCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9hcHBsaWFuY2VzLWRlbGl2ZXJlZC1ub2ltYWdlLnBuZ1wifSIsImhhc2giOiI1MTlkMDU5OTM2MzY3ZGI5MWY4OThmNGIwNDNhOGNjMDEwYjYzZjEwIn0=/7476d1167f47415543d29334e8913afeindesit53dd95b7984ef3f815792cea3d02e210.jpg"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC91cGxvYWRzXFxcLzI5MTFcXFwvNTk5MmNiN2NjOGQ5Ni1kOWM3NjA1NWNkMWE5ODFkM2Q5YjM0OWU2OTgxNmMzYVwiLFwid2lkdGhcIjoyNTAsXCJoZWlnaHRcIjpcIlwiLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC9zMy1ldS13ZXN0LTEuYW1hem9uYXdzLmNvbVxcXC9zdG9yYWdlLmJ1eWFuZHNlbGwuaWVcXFwvYXBwbGlhbmNlcy1kZWxpdmVyZWQtbm9pbWFnZS5wbmdcIn0iLCJoYXNoIjoiNTkxMzQ3ZjI4NGRkZDk2MDY0OWM5MmIxNTQxOThlMjA0Y2E5NjQ3YiJ9/indesit-6kg-1200rpm-white-freestanding-washing-machine-bwsc61252w" class="img-responsive rotprod"/> 
					</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
					
						<h5 class="name">
							<a href="#">
								Indesit 6kg 1200rpm White Freestanding Washing Machine BWSC61252W  
							</a>                        

						</h5>
						<p class="price-container">
							<span>€229.95</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<ul>
					  <li>Brand: Indesit</li>
					  <li>Wash Load Capacity: 6Kg</li>
					  <li>Fit Type: Freestanding</li>
					  <li>Colour: White</li>
					</ul>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="cart/addItem;" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->        
</div>
	<!-- 6º Product-->
<div class="col-xs-12 col-md-6">
	<!-- 8º Product Start-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<div class="product-image"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9jb250ZW50XFxcL2JyYW5kc1xcXC9pbWFnZXNcXFwvOGM3ZmY2MDVlMTJkN2Q5MzNlYTg0N2FhYmUyZmUxMDZiZWtvODUxNmY3OWE1YTFkOTgwNzhkNTk5YTRkYjZjZDU4YmYuanBnXCIsXCJ3aWR0aFwiOjEwMCxcImhlaWdodFwiOlwiXCIsXCJkZWZhdWx0XCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9hcHBsaWFuY2VzLWRlbGl2ZXJlZC1ub2ltYWdlLnBuZ1wifSIsImhhc2giOiJkNTE0Y2RhNWUwYzI4NmM5NmEyNDY4MWY3NzJlYjg0MzhiMWU5NzMxIn0=/8c7ff605e12d7d933ea847aabe2fe106beko8516f79a5a1d98078d599a4db6cd58bf.jpg"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC91cGxvYWRzXFxcLzExNzhcXFwvNTk3MjAyODY2YTZjZi0xYTMyNTY5NTIxOTI1YTVjNDg0NzczZDgxM2I2ZmZiNVwiLFwid2lkdGhcIjoyNTAsXCJoZWlnaHRcIjpcIlwiLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC9zMy1ldS13ZXN0LTEuYW1hem9uYXdzLmNvbVxcXC9zdG9yYWdlLmJ1eWFuZHNlbGwuaWVcXFwvYXBwbGlhbmNlcy1kZWxpdmVyZWQtbm9pbWFnZS5wbmdcIn0iLCJoYXNoIjoiNDAwZjZiNzQ2YjFiYTBkYTI1MTg1MzJkYjc0YWYwNTJmYzg5NzA1MSJ9/beko-7kg-white-freestanding-condenser-tumble-dryer-dc7112w" class="img-responsive rotprod"/> 
					</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
					
						<h5 class="name">
							<a href="#">
								Indesit 8kg White Freestanding Condenser Tumble Dryer IDC8T3B
							</a>                        

						</h5>
						<p class="price-container">
							<span>
								€249.95
							</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<ul>
					  <li>Type: Condenser</li>
					  <li>Dry Load Capacity: 7kg</li>
					  <li>Fit Type: Freestanding</li>
					  <li>Width: 600mm</li>
					</ul>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="cart/addItem;" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->        
</div>	
    
	<!-- 7º Product-->
<div class="col-xs-12 col-md-6">
	<!-- Product Start-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<div class="product-image"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9jb250ZW50XFxcL2JyYW5kc1xcXC9pbWFnZXNcXFwvNzQ3NmQxMTY3ZjQ3NDE1NTQzZDI5MzM0ZTg5MTNhZmVpbmRlc2l0NTNkZDk1Yjc5ODRlZjNmODE1NzkyY2VhM2QwMmUyMTAuanBnXCIsXCJ3aWR0aFwiOjEwMCxcImhlaWdodFwiOlwiXCIsXCJkZWZhdWx0XCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9hcHBsaWFuY2VzLWRlbGl2ZXJlZC1ub2ltYWdlLnBuZ1wifSIsImhhc2giOiI1MTlkMDU5OTM2MzY3ZGI5MWY4OThmNGIwNDNhOGNjMDEwYjYzZjEwIn0=/7476d1167f47415543d29334e8913afeindesit53dd95b7984ef3f815792cea3d02e210.jpg"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC91cGxvYWRzXFxcLzE1MjhcXFwvNTlkZGU4NWNhZjhlNi00NTM5OWEzNTQ5ZDMxYTNiZGI3NzI3NjU2ZDM1NTFkZFwiLFwid2lkdGhcIjoyNTAsXCJoZWlnaHRcIjpcIlwiLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC9zMy1ldS13ZXN0LTEuYW1hem9uYXdzLmNvbVxcXC9zdG9yYWdlLmJ1eWFuZHNlbGwuaWVcXFwvYXBwbGlhbmNlcy1kZWxpdmVyZWQtbm9pbWFnZS5wbmdcIn0iLCJoYXNoIjoiODM4ZjMwMDllMGViZDM0MWI3ZjFmZTA1MGFiNDU5OTk2ZjgwOWM1YSJ9/indesit-8kg-white-freestanding-condenser-tumble-dryer-idc8t3b" class="img-responsive rotprod"/> 
					</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
					
						<h5 class="name">
							<a href="#">
								Indesit 8kg White Freestanding Condenser Tumble Dryer IDC8T3B
							</a>                        

						</h5>
						<p class="price-container">
							<span>€239.95</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<ul>
					  <li>Type: Condenser</li>
					  <li>Dry Load Capacity: 8kg</li>
					  <li>Energy Rating: B</li>
					  <li>Brand: Indesit</li>
					</ul>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="cart/addItem;" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->        
</div>
	<!-- 7º Product-->
<div class="col-xs-12 col-md-6">
	<!-- Product Start-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<div class="product-image"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC9jb250ZW50XFxcL2JyYW5kc1xcXC9pbWFnZXNcXFwvMWM4YjRmOTkzYWMzOTcxZDI3MTc0NzEyNDVjNDJiNzltb250cGVsbGllcjY3NDVlMzYyMmUwN2NjNDBjNjA5ZGE2NDkxMTVjMWVmLmpwZ1wiLFwid2lkdGhcIjoxMDAsXCJoZWlnaHRcIjpcIlwiLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC9zMy1ldS13ZXN0LTEuYW1hem9uYXdzLmNvbVxcXC9zdG9yYWdlLmJ1eWFuZHNlbGwuaWVcXFwvYXBwbGlhbmNlcy1kZWxpdmVyZWQtbm9pbWFnZS5wbmdcIn0iLCJoYXNoIjoiODAyN2U1MWQwYWEzN2Y2NDdjYzQ5ZWY4MjU3MmM5N2I2M2MwMDUxNiJ9/1c8b4f993ac3971d2717471245c42b79montpellier6745e3622e07cc40c609da649115c1ef.jpg" class="img-responsive rotprod"> 
						<img src="https://img.resized.co/appliancesdelivered/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL3MzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tXFxcL3N0b3JhZ2UuYnV5YW5kc2VsbC5pZVxcXC91cGxvYWRzXFxcLzExMTFcXFwvNTk4MmZhODk4OTg3YS1lZGU2OTRkZWM4NTJhM2U3MDQ3YmRhNGZkNDM4OTcyM1wiLFwid2lkdGhcIjoyNTAsXCJoZWlnaHRcIjpcIlwiLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC9zMy1ldS13ZXN0LTEuYW1hem9uYXdzLmNvbVxcXC9zdG9yYWdlLmJ1eWFuZHNlbGwuaWVcXFwvYXBwbGlhbmNlcy1kZWxpdmVyZWQtbm9pbWFnZS5wbmdcIn0iLCJoYXNoIjoiYTdjMGRiZjY0YjA0MWY4MmZmYzBhMjUxY2VjZWRmM2I2NTE0ZGZjNCJ9/montpellier-6kg-1000rpm-white-freestanding-washing-machine-mw6100p" class="img-responsive rotprod"/> 
					</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
					
						<h5 class="name">
							<a href="#">
								Montpellier 6kg 1000rpm White Freestanding Washing Machine MW6100P
							</a>                        

						</h5>
						<p class="price-container">
							<span>€233.95</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<ul>
					  <li>Quick Wash: Yes</li>
					  <li>Energy Rating: A+</li>
					  <li>Wash Load Capacity: 6kg</li>
					  <li>Spin Speed: 1000rpm</li>
					</ul>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="cart/addItem;" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->        
</div>        
</div>

</body>
</html>
