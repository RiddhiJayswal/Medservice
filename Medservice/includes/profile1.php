<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Dashboard</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/line-icons.css">
     <!-- Google Font -->
     <link href=".https://fonts.googleapis.com/css?family=Anton|Cabin|Lato|Fjalla+One|Montserrat|Roboto&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Owl Crousel CSS -->
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<body>

    <!-- NAVIGATIONBAR HERE -->
    <?php include('nav.php');?>

    <section>
        <div class="container-td">
            <div class="row">
                <div class="td-content">
                    <a href="../index.php">Home</a><i class="fa fa-angle-double-right fa-small " aria-hidden="true"></i><span> Our Doctors</span>
                    <h1>Doctor Profile</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="container-dp">
  <div class="row">
    <div class="col-lg-5 col-md-12 col-12">
       <img class="image1" src="../images/profile1.jpeg">
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure aperiam velit debitis ipsam. Velit fugit ratione consequuntur suscipit magni aspernatur dignissimos quam, mollitia voluptatum, voluptates, expedita distinctio nisi sunt! Quasi!</p>
       <h4>123456789</h4>
       <h4>hello@yourdomain.com</h4>
       <li>
           <button class="btn-1"><a href="#">Book an Appointment</a></button>
        </li>
       
    </div>
     <div class="col-lg-6 col-md-12 col-12">
      <h1>Dr.Robert Peterson</h1>
      <h3>Neurologist/Cardiologist</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, mollitia consequuntur. Assumenda modi voluptatibus fugit. Impedit mollitia minus error consequatur! Eligendi explicabo cum quaerat? Natus unde maiores iusto sit vero. <br><br>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, iusto nemo magnam voluptate iure ducimus ab, illo cum tempore totam expedita quod repudiandae dolores vel nobis natus tempora quidem delectus.
      </p>
      <h4>Education+Trainings</h4><hr>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut impedit, ad cumque saepe id excepturi! Quas nulla obcaecati architecto animi atque et commodi nam est! Iusto soluta laudantium esse error!</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi cumque fugiat tempora quasi eos blanditiis at unde. Fuga, accusantium amet voluptatibus veritatis delectus odio quibusdam excepturi porro deserunt autem tempora.</p>
      
         
      
    </div>
</div>
</section>

    
    

    <!-- footer -->
    <?php include('footer.php');?>

<script src="../https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="../https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="../js/scroll.js"></script>
 <!-- Owl Crousel JS -->
 <script src="../https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            nav:true,
            dots:false,
            autoplay:true,
            autoplaySpeed:1000,
            smartSpeed:1500,
            autoplayHoverPause:true,
        });
    });
</script>
</body>
</html>



