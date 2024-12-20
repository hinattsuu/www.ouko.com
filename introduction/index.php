<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>桜高バドミントンサークル｜メンバー紹介</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
  <link rel="stylesheet" href="../assets/css/recet.css">
  <link rel="stylesheet" href="../assets/css/common.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.7.11" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script src="../assets/js/members.js" defer></script>
  <script src="../assets/js/common.js" defer></script>
</head>

<body>
  <?php include("../assets/common/header.php"); ?>
  <main>
    <section id="mainvisual">
      <div class="content__inner">
        <div class="mainvisual__cnt">
          <h1 class="mainvisual__ttl__sub"><span>あああああああああああああああ</span></h1>
          <p class="mainvisual__ttl__main">あああああああ<br>ああああああああああ。</p>
          <p class="mainvisual__ttl__description">飛ぶ鳥を落とす勢いで活躍する先輩社員たちの、<br>実際の仕事の様子を生の声でお届けします。</p>
        </div>
      </div>
    </section>

    <section id="member">
      <div class="content__inner">
        <div class="splide" aria-label="サークル員">
          <div class="splide-wrapper">
            <div class="splide__track">
              <ul class="splide__list intro__menber__list">
                <li v-for="(member, index) in members" :key="index" class="splide__slide intro__member">
                  <a :href="member.url">
                    <figure class="intro__member__img">
                      <img :src="member.img" alt="Image of {{member.name}}">
                    </figure>
                    <figcaption class="intro__member__detail">
                      <h2 class="intro__member__name">{{member.name}}</h2>
                      <p>{{member.school}}</p>
                      <p>{{member.entranceYear}}</p>
                    </figcaption>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="intro">
      <div class="content__inner">
        <h1><img src="" alt=""></h1>
        <div class="intro__content">
          <h2></h2>
          <p></p>
          <p></p>
        </div>
      </div>
    </section>

    <section id="person">
      <div class="content__inner">
        <div class="person__cnt">
          <div class="person__header">
            <p></p>
            <p></p>
            <figure><img src="" alt=""></figure>
          </div>
          <div class="person__content">
            <div>
              <div>
                <h2></h2>
                <p></p>
              </div>
              <p><img src="" alt=""></p>
            </div>
            <div>
              <div>
                <h2></h2>
                <p></p>
              </div>
              <figure><img src="" alt=""></figure>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include("../assets/common/footer.php"); ?>
</body>

</html>