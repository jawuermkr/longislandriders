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


<form action="mail.php" method="post">

  <div class="section-bg" id="hero">

    <!-- FORMULARIO IDA -->
    <div class="form-container">
      <form class="form" action="mail.php" method="post">
        <h2>GET A QUOTE - INSTANT BOOKING</h2>
        <p>Fast - Secure - Luxury Transportation</p>

        <div class="row" id="trip-one">
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

        </div>
      </form>
    </div>

    <!-- FORMULARIO REGRESO -->
    <div class="form-container return" id="return-container">
      <form>
        <!-- RETURN TRIP (OCULTO) -->
        <div class="row mt-4" id="trip-two">

          <div class="col-md-12">
            <h2>RETURN TRIP DETAILS</h2>
          </div>

          <div class="col-md-12">
            <label>Service</label>
            <select class="form-control" name="service_return">
              <option value="">Select Service</option>
              <option value="airport">Airport</option>
              <option value="point_to_point">Point to Point</option>
              <option value="hourly">Hourly</option>
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
              <option value="5+">5+</option>
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
              <option value="4+">4+</option>
            </select>
          </div>

          <div class="col-md-6">
            <label>Vehicle Type</label>
            <select class="form-control" name="vehicle_return">
              <option value="">Select Vehicle</option>
              <option value="sedan">Sedan</option>
              <option value="suv">SUV</option>
              <option value="van">Van</option>
              <option value="l-suv">L-SUV</option>
            </select>
          </div>

        </div>

      </form>
    </div>

    <!-- BOTÓN ÚNICO -->
    <input class="btn btnSubmit form-control mt-3" type="submit" value="GET A QUOTE NOW">
  </div>

  
</form>