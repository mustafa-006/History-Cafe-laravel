<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جائزة الشهر</title>
    <style>
        
        footer {
            background-color: #b48225;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            top: 0;

        }
        header{
            font-size: 24px;
        }
        .gallery {
  --s: 150px; 
  
  display: grid;
  transform-style: preserve-3d;
  animation: r 15s linear infinite;
  position: relative;
}
@keyframes r {
  0% {transform: perspective(450px) rotateX(-100deg) rotate(0deg)}
  to {transform: perspective(450px) rotateX(-100deg) rotate(-360deg)}
}
.gallery > img {
  grid-area: 1/1;
  width: var(--s);
  aspect-ratio: 1;
  object-fit: cover;
  border-radius: 10px 10px 0 0;
  transform: rotate(var(--_a)) translateY(120%) rotateX(90deg);
}
.gallery > img:nth-child(1) {--_a: 0deg}
.gallery > img:nth-child(2) {--_a: 60deg}
.gallery > img:nth-child(3) {--_a: 120deg}
.gallery > img:nth-child(4) {--_a: 180deg}
.gallery > img:nth-child(5) {--_a: 240deg}
.gallery > img:nth-child(6) {--_a: 300deg}

.gallery::before {
  content: "";
  position: absolute;
  inset: -100%;
  clip-path: polygon(50% 0,calc(50% + .866*50%) 25%,calc(50% + .866*50%) 75%,50% 100%,calc(50% - .866*50%) 75%,calc(50% - .866*50%) 25%);
  background: #99B2B7;
  transform: translateZ(calc(var(--s)/2)) rotate(90deg);
}



body {
  margin: 0;
  min-height: 100vh;
  display: grid;
  place-content: center;
  background-image: url("fireworks-gif-4.gif");
  overflow: hidden;
}
.blurry-paragraph {
            background-image: url('your-background-image.jpg'); 
            background-size: cover;
            color: #fff; 
            padding: 20px;
            margin: 0;
            position: relative;
            backdrop-filter: blur(8px);
           bottom: 50px;
           position: absolute;
            bottom: 0;
            background-color: #333;
            color: #fff;
            padding: 20px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <footer>
        <header>جائزة الشهر هي رحلة لقاهرة المعز</header>
        <p>  مبروك للحاصلين على المراكز الخمسة الأولى , موقع مقهى التاريخ سوف يوفر لكم رحلة لقاهرة المعز حيث المعالم التاريخية </p>
    </footer>
    <div class="gallery">
        <img src="48795_IMG-20210607-WA0330.jpg" alt="cairo">
        <img src="20230815161445401.jpg" alt="fostat">
        <img src="FB_IMG_1686993153999.webp" alt="moez">
        <img src="19_2018-636664774435151524-515.jpg" alt="">
        <img src="1200px-Al-Hakim_Mosque-1024x685.jpg" alt="">
        <img src="images (1).jpeg" alt="">
      </div>
      <p class="blurry-paragraph">
        سوف نبدا بزيارة
        جامع الحاكم بأمر الله
يعد جامع الحاكم بأمر الله أحد أبرز المعالم بشارع المعز، إذ تجد بئراً للوضوء يتوسط صحن المسجد.
باب زويلة
استخدم باب زويلة قديماً في تعليق الرؤوس التي نفذت فيها أحكاماً حتى تكون رادعاً لغيرهم.

واستخدم باب زويلة في تعليق رؤوس رسل المغول إلى سيف الدين قطز، بعدما عاثوا في بلاد المسلمين.

باب الفتوح
بني باب الفتوح عام 1087، ليكون سداً منيعاً في وجه أي معتدي على القاهرة، ويتميز ببنائه الضخم وأسواره العالية.

مسجد سليمان آغا السلحدار
يعتبر أحد المساجد التي أنشئت في عصر محمد علي في مصر، يقع عند بدايه حارة برجوان بشارع أمير الجيوش

قبة الصالح نجم الدين أيوب
تسمى بقبة الصالح نجم الدين أيوب أو المدرسة الصالحية.

وأنشئت هذه المدرسة لتدريس المذاهب الفقهية الأربعة بدلًا من المذهب الشيعي الذي كان يدرسه الفاطميون من قبل.

سبيل عبد الرحمن كتخدا
كان أحد قادة الجيش في العصر العثماني بمصر، وكان مهتمًا بتشييد العمائر المتنوعة بمدينة القاهرة.

بيت السحيمي
بيت السحيمي هو من أبرز المعالم السياحية في شارع المعز أيضاً، ويقع في حارة الدرب الأصفر في منطقة الجمالية.

وعرف هذا البيت بالسحيمي نسبة إلى آخر من سكنه وهو الشيخ السحيمي وهو من كبار علماء الأزهر وشيخ رواق الأتراك في العصر العثماني.
وفي النهاية
جامع الأقمر
جامع الأقمر من المعالم الرئيسية بشارع المعز، وأنشأه الخليفه الفاطمي الآمر بأحكام الله وذلك عام 1125.


         </p>
</body>
</html>