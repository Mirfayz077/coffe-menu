<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Chilling Cafe by Tooplate</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" />
    <link href="{{asset('admin/assets/fontawesome/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/css/tooplate-chilling-cafe.css')}}" rel="stylesheet" />
<!--
Tooplate 2118 Chilling Cafe
https://www.tooplate.com/view/2118-chilling-cafe
-->
  </head>
  <body>
    <div class="tm-container">
      <div class="tm-text-white tm-page-header-container">
        <i class="fas fa-mug-hot fa-2x tm-page-icon"></i>
        <h1 class="tm-page-header">Chilling Cafe</h1>
      </div>
      <div class="tm-main-content">
        <div id="tm-intro-img"></div>
        <!-- Coffee Menu -->
        <section class="tm-section">
          <h2 class="tm-section-header">Coffee Menu</h2>
          <div class="tm-responsive-table">
            <table>
              <tr class="tm-tr-header">
                <th>&nbsp;</th>
                <th>Hot</th>
                <th>Iced</th>
                <th>Blended</th>
              </tr>
              <tr>
                <td class="tm-text-left">Americano</td>
                <td>$10</td>
                <td>$15</td>
                <td>-</td>
              </tr>
              <tr>
                <td class="tm-text-left">Cuppucino</td>
                <td>$15</td>
                <td>$18</td>
                <td>$20</td>
              </tr>
              <tr>
                <td class="tm-text-left">Fresh Latte</td>
                <td>$10</td>
                <td>$18</td>
                <td>$20</td>
              </tr>
              <tr>
                <td class="tm-text-left">Mocha</td>
                <td>$15</td>
                <td>$18</td>
                <td>$20</td>
              </tr>
              <tr>
                <td class="tm-text-left">Espresso</td>
                <td>$10</td>
                <td>$15</td>
                <td>-</td>
              </tr>
              <tr>
                <td class="tm-text-left">Black Coffee</td>
                <td>$15</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td class="tm-text-left">Double Shot Expresso</td>
                <td>$20</td>
                <td>$20</td>
                <td>-</td>
              </tr>
            </table>
          </div>
        </section>

        <!-- Tea Menu -->
        <section class="tm-section">
          <h2 class="tm-section-header">Чайное меню</h2>
          <div class="tm-responsive-table">
            <table>
              <tr class="tm-tr-header">
                <th>&nbsp;</th>
                <th>Hot</th>
                <th>Iced</th>
                <th>Addon</th>
              </tr>
              <tr>
                <td class="tm-text-left">Pure White Milk</td>
                <td>$5</td>
                <td>$10</td>
                <td>-</td>
              </tr>
              <tr>
                <td class="tm-text-left">Hong Kong Tea</td>
                <td>$8</td>
                <td>$12</td>
                <td>$4</td>
              </tr>
              <tr>
                <td class="tm-text-left">Taiwan Tea</td>
                <td>$4</td>
                <td>$10</td>
                <td>$4</td>
              </tr>
              <tr>
                <td class="tm-text-left">Bubble Tea</td>
                <td>$8</td>
                <td>$12</td>
                <td>-</td>
              </tr>
              <tr>
                <td class="tm-text-left">Mixed Fruit Tea</td>
                <td>$10</td>
                <td>$10</td>
                <td>$8</td>
              </tr>
              <tr>
                <td class="tm-text-left">Original Tea</td>
                <td>$12</td>
                <td>$12</td>
                <td>-</td>
              </tr>
            </table>
          </div>
        </section>

        <!-- Special Items -->
        <section class="tm-section">
          <h2 class="tm-section-header">Специальные предметы</h2>
          <div class="tm-special-items">
            <figure class="tm-special-item">
              <img src="{{asset('admin/assets/img/chilling-cafe-11.jpg')}}" alt="Image" class="tm-special-item-img" />
              <figcaption>
                <span class="tm-item-name">Soft Deli Cup</span>
                <span class="tm-item-price">$25</span>
              </figcaption>
            </figure>
            <figure class="tm-special-item">
              <img src="{{asset('admin/assets/img/chilling-cafe-12.jpg')}}" alt="Image" class="tm-special-item-img" />
              <figcaption>
                <span class="tm-item-name">Coffee Art</span>
                <span class="tm-item-price">$30</span>
              </figcaption>
            </figure>
            <figure class="tm-special-item">
              <img src="{{asset('admin/assets/img/chilling-cafe-13.jpg')}}" alt="Image" class="tm-special-item-img" />
              <figcaption>
                <span class="tm-item-name">Speciality Tea</span>
                <span class="tm-item-price">$35</span>
              </figcaption>
            </figure>
          </div>
        </section>
        <hr />
        <!-- About our cafe -->
        <section class="tm-section tm-section-small">
          <h2 class="tm-section-header">О нашем кафе</h2>
          <p>
          одумайте о кофе как о музыкальном диске. Можно слушать его в специальной комнате
           для прослушивания, которую вы обустроили специально для этой цели в подвале дома, 
           где нет отвлекающих звуков, где можно надеть наушники и услышать партию струнных или
            гобоев, или попытаться расслышать каждый маленький щелчок или скрип ногтя Эрика 
            Клэптона об гитару. Другое дело - вставить его в проигрыватель в машине, открыть все 
          окна и начать орать во всю глотку. Музыка та же, а подход другой.
          </p>
          <p class="tm-mb-0">
          Миллионы женщин любят осень
          Листопад и звон дождливых струй
          Тщательно отмеренные дозы —
                й Кофе... Шоколад... И поцелуй...
          </p>
        </section>
        <hr />
        <!-- Talk to us -->
        <section class="tm-section tm-section-small">
          <h2 class="tm-section-header">связаться с нами</h2>
          <p class="tm-mb-0">
            Reach us via
            <a href="mailto:info@example.com" class="tm-contact-link">Электронная почта</a>
            Свяжитесь с нами по электронной почте или подпишитесь на нас в социальных сетях ниже. Спасибо.
          </p>
          <div class="tm-social-icons">
            <div class="tm-social-link-container">
              <a href="https://fb.com/tooplate" class="tm-social-link">
                <i class="fab fa-facebook"></i>
              </a>
            </div>
            <div class="tm-social-link-container">
              <a href="https://twitter.com" class="tm-social-link">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
            <div class="tm-social-link-container">
              <a href="https://instagram.com" class="tm-social-link">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
            <div class="tm-social-link-container">
              <a href="https://pinterest.com" class="tm-social-link">
                <i class="fab fa-pinterest"></i>
              </a>
            </div>
          </div>
        </section>
      </div>
      <footer>
        <p class="tm-text-white tm-footer-text">
          Copyright &copy; 2020 Company Name 
          . Design:
          <a href="https://www.tooplate.com" class="tm-footer-link">Tooplate</a>
        </p>
      </footer>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
      $(function() {
        // Adjust intro image height based on width.
        $(window).resize(function() {
          var img = $("#tm-intro-img");
          var imgWidth = img.width();

          // 640x425 ratio
          var imgHeight = (imgWidth * 425) / 640;

          if (imgHeight < 300) {
            imgHeight = 300;
          }

          img.css("min-height", imgHeight + "px");
        });
      });
    </script>
  </body>
</html>