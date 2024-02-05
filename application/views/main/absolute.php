<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper2 {
      width: 100%;
      height: 100%;
    }

    .swiper-slide2 {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    @media (max-width: 760px) {
      .swiper-button-next2 {
        right: 20px;
        transform: rotate(90deg);
      }

      .swiper-button-prev2 {
        left: 20px;
        transform: rotate(90deg);
      }
    }
  </style>
</head><?
?>

<body>
  <!-- Swiper -->
  <div class="swiper2">
    <div class="swiper-wrapper2">
      <div class="swiper-slide2"></div>
      <div class="swiper-slide2">Resize me!</div>
      <div class="swiper-slide2">Resize me!</div>
      <div class="swiper-slide2">Resize me!</div>
      <div class="swiper-slide2">Resize me!</div>
      <div class="swiper-slide2">Resize me!</div>
      <div class="swiper-slide2">Resize me!</div>
      <div class="swiper-slide2">Resize me!</div>
      <div class="swiper-slide2">Resize me!</div>
      <div class="swiper-slide2">Resize me!</div>
    </div>
    <div class="swiper-button-next2"></div>
    <div class="swiper-button-prev2"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper2 = new Swiper2('.swiper2', {
      slidesPerView: 5,
      direction: getDirection(),
      navigation: {
        nextEl: '.swiper-button-next2',
        prevEl: '.swiper-button-prev2',
      },
      on: {
        resize: function () {
          swiper2.changeDirection(getDirection());
        },
      },
    });

    function getDirection() {
      var windowWidth = window.innerWidth;
      var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

      return direction;
    }
  </script><?
?>
</body>

</html>
