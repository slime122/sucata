<!DOCTYPE html>
<html>
<head>
	<title>💻 Controle de Sucata 💻 - Nextec Informatica</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://nextec.info/img/favicon.ico" type="image/x-icon" />

	<script src="https://kit.fontawesome.com/f37f2e2ef7.js" crossorigin="anonymous"></script> 
  
  	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  	<style type="text/css">
  		.product-image5 .pic-1,.product-image5 .pic-2{backface-visibility:hidden;transition:all .5s ease 0s}
		.product-grid5{font-family:Poppins,sans-serif;position:relative}
		.product-grid5 .product-image5{overflow:hidden;position:relative}
		.product-grid5 .product-image5 a{display:block}
		.product-grid5 .product-image5 img{width:100%;height:auto}
		.product-image5 .pic-1{opacity:1}
		.product-grid5:hover .product-image5 .pic-1{opacity:0}
		.product-image5 .pic-2{width:100%;height:100%;opacity:0;position:absolute;top:0;left:0}
		.product-grid5:hover .product-image5 .pic-2{opacity:1}
		.product-grid5 .social{padding:0;margin:0;position:absolute;top:10px;right:10px}
		.product-grid5 .social li{display:block;margin:0 0 10px;transition:all .5s}
		.product-grid5 .social li:nth-child(2){opacity:0;transform:translateY(-50px)}
		.product-grid5:hover .social li:nth-child(2){opacity:1;transform:translateY(0)}
		.product-grid5 .social li:nth-child(3){opacity:0;transform:translateY(-50px)}
		.product-grid5:hover .social li:nth-child(3){opacity:1;transform:translateY(0);transition-delay:.2s}
		.product-grid5 .social li a{color:#888;background:#fff;font-size:14px;text-align:center;line-height:40px;height:40px;width:40px;border-radius:50%;display:block;transition:.5s ease 0s}
		.product-grid5 .social li a:hover{color:#fff;background:#1e3799}
		.product-grid5 .select-options{color:#777;background-color:#fff;font-size:13px;font-weight:400;text-align:center;text-transform:uppercase;padding:15px 5px;margin:0 auto;opacity:0;display:block;position:absolute;width:92%;left:0;bottom:-100px;right:0;transition:.5s ease 0s}
		.product-grid5 .select-options:hover{color:#fff;background-color:#1e3799;text-decoration:none}
		.product-grid5:hover .select-options{opacity:1;bottom:10px}
		.product-grid5 .product-content{padding:20px 10px}
		.product-grid5 .title{font-size:15px;font-weight:600;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
		.product-grid5 .title a{color:#222}
		.product-grid5 .title a:hover{color:#1e3799}
		.product-grid5 .price{color:#222;font-size:13px;font-weight:500;letter-spacing:1px}
		@media only screen and (max-width:990px){.product-grid5{margin-bottom:30px}
		}
		.dark-bg{
			background-color: #0d1117;
		}
		.mycard{
			border: 1px solid gray;
    		border-radius: 15px;
		}
  	</style>
</head>
<body class="dark-bg text-white">

	<main>
		<div class="container">
    <h3 class="h3 text-center"> Produtos </h3>
    <div class="row">

    	<?php 
       echo '<div class="col-md-3 col-sm-6 mycard">
            <div class="product-grid5">
                <div class="product-image5">
                    <a href="#">
                        <img class="pic-1" src="https://img.olx.com.br/images/57/579153607406353.jpg">
                        <img class="pic-2" src="https://img.olx.com.br/images/57/572179365227267.jpg">
                    </a>
                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Comprar</a>
                </div>
                <div class="product-content">
                    <h3 class="title">Carcaça do Asus x44c</h3>
					<h3 class="title">Carcaça do Asus x44c</h3>                    
                    <div class="price text-dark">R$40,00</div>
                </div>
            </div>
        </div>';

        ?>

    </div>
</div>
<hr>
	</main>

</body>
</html>