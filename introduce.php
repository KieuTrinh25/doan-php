<html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Trade</title>
    
	<link rel="stylesheet" href="css/style1.css">
        
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Own Carousel -->
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/owl.theme.green.css">
     <!-- JQuery & Own Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./js/owl.carousel.js"></script>
    <script src="js/web.js"></script>
<body onload="autoloadimg ()">
<?php include_once './inc/header.php'?>
    <div class="content">
      <div class="container-fluid">
          <!--mơ phần giới thiệu-->
          <div class="container">
              <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4 text-center">
                  <h1><b>MONA MEDIA</b></h1>
                  </div>
                  <div class="col-md-4"></div>
              
              </div>
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6 text-center">
                      <h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p></h5>
                      <p>sed diam nonummy nibh.</p>
                  </div>
                  <div class="col-md-3"></div>
              </div>
          </div>
      </div>
       <!--đống phần giới thiệu-->
       <div class="container">
           <div class="row">
               <div class="col-md-4">
                   <div class="row ">
                       <div class="col-md-12 text-center " >
                       <img src="apple.svg" width="90px" height="90px">
                       <br>
                       <br>
                      <h5>New Features</h5>
                      <p>Lorem ipsum dolor sit amet,</p>
                      <p>consectetuer adipiscing elit, sed</p>
                      <p>diam nonummy nibh euismod</p>
                      <p>tincidunt</p>
                       </div> 
                   </div>
                   <div class="row ">
                       <div class="col-md-12 text-center " >
                       <img src="apple.svg" width="90px" height="90px">
                       <br>
                       <br>
                      <h5>Unlimited Options</h5>
                      <p>Lorem ipsum dolor sit amet,</p>
                      <p>consectetuer adipiscing elit, sed</p>
                      <p>diam nonummy nibh euismod</p>
                      <p>tincidunt</p>
                       </div> 
                   </div>
               </div>
               <div class="col-md-5">
                   <div class="row">
                       <div class="col-md-12">
                           <img src="img1.png" width="500px" height="500px">
                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="row ">
                       <div class="col-md-12 text-center " >
                       <img src="apple.svg" width="90px" height="90px">
                       <br>
                       <br>
                      <h5>Responsive</h5>
                      <p>Lorem ipsum dolor sit amet,</p>
                      <p>consectetuer adipiscing elit, sed</p>
                      <p>diam nonummy nibh euismod</p>
                      <p>tincidunt</p>
                       </div> 
                   </div>
                   <div class="row ">
                       <div class="col-md-12 text-center " >
                       <img src="apple.svg" width="90px" height="90px">
                       <br>
                       <br>
                      <h5>Customize Anything</h5>
                      <p>Lorem ipsum dolor sit amet,</p>
                      <p>consectetuer adipiscing elit, sed</p>
                      <p>diam nonummy nibh euismod</p>
                      <p>tincidunt</p>
                       </div> 
                   </div>
                </div>
                
           </div>      
        </div>   
    </div>
 <!--end content-->
 <?php include_once './inc/footer.php'?>
    <!--end footer-->
</body>
<script type="text/javascript">
    var vimg = document.getElementById("anhnen-a")
    var t ;
    var i = 1 ;
    function autoloadimg() {
        t = setInterval(function autoloadimg(){
            i++;
            if ( i > 3 ){
                i = 1;
            }
            vimg.src = "img/" + "banner" + i +".jpg" ;
        }, 2000 )
    }
    $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                // loop:true,
                margin:0,
                nav:true,
                // items: 2,
                mouseDrag: true,
                touchDrag: true,
                pullDrag: true,
                dots: false,
                responsive:{
                    0:{
                        items:1
                    },
                    400: {
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        });

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     -->
   
</html>