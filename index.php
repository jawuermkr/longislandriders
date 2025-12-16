<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Long Island Riders</title>
  <link href="style/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
  <header class="p-2">
    <img src="img/LOGO-BLANCO.png" alt="logo" width="210px">
  </header>

  <div class="section-bg">
    <div class="form-container">
      <form>
        <h2>Contáctanos</h2>
        <input type="text" placeholder="Nombre" required>
        <input type="email" placeholder="Correo" required>
        <textarea rows="4" placeholder="Mensaje"></textarea>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>





  <div class="jc-carousel">
    <div class="jc-carousel-track">

      <div class="jc-slide">
        <img src="https://picsum.photos/id/1015/1200/600" alt="Imagen 1">
        <div class="jc-caption">Paisaje de montaña al amanecer</div>
      </div>

      <div class="jc-slide">
        <img src="https://picsum.photos/id/1016/1200/600" alt="Imagen 2">
        <div class="jc-caption">Bosque con luz natural</div>
      </div>

      <div class="jc-slide">
        <img src="https://picsum.photos/id/1018/1200/600" alt="Imagen 3">
        <div class="jc-caption">Lago tranquilo al atardecer</div>
      </div>

      <!-- Agrega o elimina slides aquí -->

    </div>

    <!-- Botones -->
    <button class="jc-nav jc-prev" aria-label="Anterior">&lt;</button>
    <button class="jc-nav jc-next" aria-label="Siguiente">&gt;</button>
  </div>










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



</body>

</html>