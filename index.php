<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Long Island Riders</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <link href="style/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</head>

<body>

  <button id="jc-floating-quote-btn" data-toggle="modal" data-target="#exampleModal" aria-label="Get a quote">
    GET A QUOTE NOW
  </button>



  <header class="p-2">
    <img src="img/LOGO-BLANCO.png" alt="logo" width="210px">
  </header>

  <div class="banner">
    <img src="img/fondo2.png" alt="banner" width="100%">
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">



          <div class="form-container">
            <form class="form" action="mail.php" method="post">

              <div class="row" id="trip-one">
                <h2>GET A QUOTE - INSTANT BOOKING</h2>
                <p>Fast - Secure - Luxury Transportation</p>
                <div class="col-md-12">
                  <label for="service">Service</label>
                  <select class="form-control" id="service" name="service" required="">
                    <option value="">Select Service</option>
                    <option value="Airport">Airport</option>
                    <option value="Point to Point">Point to Point</option>
                    <option value="Hourly">Hourly</option>
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
                  <input class="form-control" type="text" name="name" required="">
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
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="+5">+5</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="vehicle">Number of bags</label>
                  <select class="form-control" id="vehicle" name="bags" required="">
                    <option value="">Select Vehicle</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="+4">+4</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="vehicle">Vehicle Type</label>
                  <select class="form-control" id="vehicle" name="vehicle" required="">
                    <option value="">Select Vehicle</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Suv">Suv</option>
                    <option value="Van">Van</option>
                    <option value="L-Suv">L-Suv</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="roundtrip">Round Trip</label>
                  <select class="form-control" id="roundtrip" name="roundTrip" required="">
                    <option value="">Select Option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>


              </div>
              <div class="row mt-4" id="trip-two" style="display:none;">
                <h2>RETURN TRIP DETAILS</h2>

                <div class="col-md-12">
                  <label>Service</label>
                  <select class="form-control" name="service_return">
                    <option value="">Select Service</option>
                    <option value="Airport">Airport</option>
                    <option value="Point to Point">Point to Point</option>
                    <option value="Hourly">Hourly</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label>Pickup Location</label>
                  <input class="form-control" type="text" name="pickup_return">
                </div>

                <div class="col-md-6">
                  <label>Drop-off Location</label>
                  <input class="form-control" type="text" name="dropoff_return">
                </div>

                <div class="col-md-6">
                  <label>Date</label>
                  <input class="form-control" type="date" name="date_return">
                </div>

                <div class="col-md-6">
                  <label>Time</label>
                  <input class="form-control" type="time" name="time_return">
                </div>

                <div class="col-md-12">
                  <label>Passenger Name</label>
                  <input class="form-control" type="text" name="name_return">
                </div>

                <div class="col-md-6">
                  <label>Phone Number</label>
                  <input class="form-control" type="text" name="phone_return">
                </div>

                <div class="col-md-6">
                  <label>Email Address</label>
                  <input class="form-control" type="email" name="mail_return">
                </div>

                <div class="col-md-6">
                  <label>Number of Passengers</label>
                  <select class="form-control" name="passengers_return">
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="+5">+5</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label>Number of Bags</label>
                  <select class="form-control" name="bags_return">
                    <option value="">Select</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="+4">+4</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label>Vehicle Type</label>
                  <select class="form-control" name="vehicle_return">
                    <option value="">Select Vehicle</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Suv">Suv</option>
                    <option value="Van">Van</option>
                    <option value="L-Suv">L-SUV</option>
                  </select>
                </div>


              </div>
              <input class="btn btnSubmit form-control" type="submit" name="btnSubmit" value="GET A QUOTE NOW">

              <div class="col-md-6 mt-3" id="switch-container" style="display:none;">
                <button type="button" id="switch-trip" class="btn btn-success white-text">
                  Switch Trip
                </button>
              </div>

            </form>
          </div>



        </div>
        <div class="modal-footer">
        </div>
      </div>
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
      <p>Thank you for visiting our website. At Long Island Riders, we are dedicated to delivering professional,
        reliable, and comfortable transportation services throughout Long Island and all New York areas. Our focus is on
        safety, punctuality, and exceptional customer care. We appreciate your trust and look forward to serving you
        with the highest level of professionalism.</p>
    </div>



  </div>


  <footer class="footer p-5">
    <div class="row">
      <div class="col-md-6 mt-5 text-center">
        <img src="img/LOGO-BLANCO.png" alt="logo" width="300px">
        <p> <!--?php echo "&copy; " . date(" Y ") ?--> Long Island Riders</p>
      </div>
      <div class="col-md-6">
        <img src="img/paymeth.png" alt="logo" width="450px">
        <h2>Contact Us</h2>
        <p>
          <img src="img/PHONE.png" alt="logo" width="20px"> 631-710-8692 <br>
          <img src="img/MAIL.png" alt="logo" width="20px"> contact@longislandriders.com<br>
          <img src="img/IG.png" alt="logo" width="20px"><a href="https://www.instagram.com/longisland.riders" target="_blank"> longisland.riders </a> </p>
      </div>
    </div>
  </footer>



  <script>
    /* ===== JAVASCRIPT AISLADO ===== */
    (function () {
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
    const roundTrip = document.getElementById('roundtrip');
    const tripOne = document.getElementById('trip-one');
    const tripTwo = document.getElementById('trip-two');
    const switchBtn = document.getElementById('switch-container');
    const switchTrip = document.getElementById('switch-trip');

    roundTrip.addEventListener('change', function () {
      if (this.value === 'Yes') {
        tripOne.style.display = 'none';
        tripTwo.style.display = 'flex';
        switchBtn.style.display = 'block';
      } else {
        tripOne.style.display = 'flex';
        tripTwo.style.display = 'none';
        switchBtn.style.display = 'none';
      }
    });

    switchTrip.addEventListener('click', function () {
      if (tripOne.style.display === 'none') {
        tripOne.style.display = 'flex';
        tripTwo.style.display = 'none';
      } else {
        tripOne.style.display = 'none';
        tripTwo.style.display = 'flex';
      }
    });
  </script>




</body>

</html>