<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Long Island Riders</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <link href="style/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>

<p id="jc-floating-quote-btn" aria-label="Get a quote">
  GET A QUOTE NOW
</p>



  <header class="p-2">
    <img src="img/LOGO-BLANCO.png" alt="logo" width="210px">
  </header>

  
  <div class="section-bg">
    <div class="form-container">
      <form class="form" action="mail.php" method="post">
        <h2>GET A QUOTE - INSTANT BOOKING</h2>
        <p>Fast - Secure - Luxury Transportation</p>
        
        <div class="row">
      <div class="col-md-12">
        <label for="service">Service</label>
        <select class="form-control" id="service" name="service" required="">
          <option value="">Select Service</option>
          <option value="airport">Airport</option>
          <option value="point_to_point">Point to Point</option>
          <option value="hourly">Hourly</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="pickup">Pickup Location</label>
        <input class="form-control" type="text" id="pickup" name="pickup" required="">
      </div>
      <div class="col-md-6">
        <label for="dropoff">Drop-off Location</label>
        <input class="form-control" type="text" id="dropoff" name="dropoff" required="">
</div>
      <div class="col-md-6">
        <label for="datetime">Date</label>
        <input class="form-control" type="date" name="date" required="">
</div>
<div class="col-md-6">
        <label for="datetime">Time</label>
        <input class="form-control" type="time" name="time" required="">
</div>
      <div class="col-md-12">
        <label for="name">Passenger Name</label>
        <input class="form-control" type="text"name="name" required="">
</div>
      <div class="col-md-6">
        <label for="contact">Phone number</label>
        <input class="form-control" type="text" id="contact" name="phone" required="">
</div>
<div class="col-md-6">
        <label for="contact">Email addres</label>
        <input class="form-control" type="text" id="contact" name="mail" required="">
</div>

      <div class="col-md-6">
        <label for="vehicle">Number of passegers</label>
        <select class="form-control" id="vehicle" name="pasagers" required="">
            <option value="">Select Vehicle</option>
            <option value="sedan">1</option>
            <option value="suv">2</option>
            <option value="van">3</option>
            <option value="l-suv">4</option>
            <option value="l-suv">+5</option>
        </select>
</div>
      <div class="col-md-6">
        <label for="vehicle">Number of bags</label>
        <select class="form-control" id="vehicle" name="bags" required="">
            <option value="">Select Vehicle</option>
            <option value="sedan">0</option>
            <option value="sedan">1</option>
            <option value="suv">2</option>
            <option value="van">3</option>
            <option value="l-suv">+4</option>
        </select>
</div>

      <div class="col-md-6">
        <label for="vehicle">Vehicle Type</label>
        <select class="form-control" id="vehicle" name="vehicle" required="">
            <option value="">Select Vehicle</option>
            <option value="sedan">Sedan</option>
            <option value="suv">SUV</option>
            <option value="van">Van</option>
            <option value="l-suv">L-SUV</option>
        </select>
</div>
      <div class="col-md-6">
        <label for="roundtrip">Round Trip</label>
        <select class="form-control" id="roundtrip" name="roundtrip" required="">
            <option value="">Select Option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
</div>
        <input class="btn btnSubmit form-control mt-3" type="submit" name="btnSubmit" value="GET A QUOTE NOW">
        
      </div>
</form>
    </div>
  </div>
  
  <div class="mx-5">

  <div class="text-center">
    
  <div class="jc-carousel my-5">
    <h2>Service provided to:</h2>
    <div class="jc-carousel-track">

      <div class="jc-slide">
        <img src="img/ISP.jpg" alt="isp_airport">
        <div class="jc-caption">MacArthur de Long Island (ISP)</div>
      </div>

      <div class="jc-slide">
        <img src="img/JFK.jpg" alt="jfk_airport">
        <div class="jc-caption">John F. Kennedy (JFK)</div>
      </div>

      <div class="jc-slide">
        <img src="img/LGA.jpg" alt="lga_airport">
        <div class="jc-caption">La Guardia (LGA)</div>
      </div>

      <div class="jc-slide">
        <img src="img/NEWARK.jpeg" alt="newark_airport">
        <div class="jc-caption">Newark Liberty International Airport (EWR)</div>
      </div>

      <!-- Agrega o elimina slides aquí -->

    </div>

    <!-- Botones -->
    <button class="jc-nav jc-prev" aria-label="Anterior">&lt;</button>
    <button class="jc-nav jc-next" aria-label="Siguiente">&gt;</button>
  </div>
  </div>

<div class="pictures my-5">
  <div class="row">
    <div class="col-md-6">
      <img src="img/CARROS.png" alt="carros" width="90%">
    </div>
    <div class="col-md-6">
      <img src="img/CRUCERO.png" alt="crucero" width="90%">
    </div>
  </div>
</div>

<div class="textos my-5">
  <h2>Welcome to the Long Island Riders Family</h2>
  <p>Thank you for visiting our website. At Long Island Riders, we are dedicated to delivering professional, reliable, and comfortable transportation services throughout Long Island and all New York areas. Our focus is on safety, punctuality, and exceptional customer care. We appreciate your trust and look forward to serving you with the highest level of professionalism.</p>
</div>



</div>


<footer class="footer p-5 text-center">
  <div class="row">
    <div class="col-md-6 mt-5">
      <img src="img/LOGO-BLANCO.png" alt="logo" width="300px">
      <p> <!--?php echo "&copy; " . date(" Y ") ?--> Long Island Riders</p>
    </div>
    <div class="col-md-6">
      <img src="img/paymeth.png" alt="logo" width="450px">
      <h2>Contact Us</h2>
      <p>631-710-8692 <br>
contact@longislandriders.com<br>
longislandriders.com</p>
    </div>
  </div>
</footer>



  <script>
    /* ===== JAVASCRIPT AISLADO ===== */
    (function() {
      const carousel = document.querySelector('.jc-carousel');
      if (!carousel) return;

      const track = carousel.querySelector('.jc-carousel-track');
      const slides = carousel.querySelectorAll('.jc-slide');
      const prevBtn = carousel.querySelector('.jc-prev');
      const nextBtn = carousel.querySelector('.jc-next');

      let index = 0;
      let interval;

      function showSlide(i) {
        index = (i + slides.length) % slides.length;
        track.style.transform = `translateX(-${index * 100}%)`;
      }

      function startAutoPlay() {
        interval = setInterval(() => {
          showSlide(index + 1);
        }, 3000);
      }

      function resetAutoPlay() {
        clearInterval(interval);
        startAutoPlay();
      }

      prevBtn.addEventListener('click', () => {
        showSlide(index - 1);
        resetAutoPlay();
      });

      nextBtn.addEventListener('click', () => {
        showSlide(index + 1);
        resetAutoPlay();
      });

      startAutoPlay();
    })();
  </script>
  
  <script>
  (function () {
    const btn = document.getElementById('jc-floating-quote-btn');
    if (!btn) return;

    btn.addEventListener('click', function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  })();
</script>






</body>

</html>