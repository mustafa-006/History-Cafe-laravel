<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ركن الفن</title>
    <style>
        body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #4a0a57a1;
}

.art-cards {
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

.card {
  width: 25%;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  background-color: #ffffff;
}

.card img {
  width: 60%;
  height: auto;
}

.card p {
  padding: 10px;
  text-align: center;
}

.art-image {
  margin-top: 20px;
}

.art-image img {
  width: 100%;
  height: auto;
  border: 1px solid #ddd;
  border-radius: 8px;
}
img{
    font-size: 50px;
}
.pra{
    text-align: center;
    background-color: rgba(255, 255, 255, 0.5); 
  padding: 20px;
  border-radius: 8px;
  width: 60%;
  margin: 50px auto;
}
.pra p {
  margin: 0;
}
.card {
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px;
      display: inline-block;
    }

   
    .btn {
      cursor: pointer;
      padding: 5px 10px;
      margin: 5px;
      text-align: center;
    }
    </style>
</head>
<body>
    <div class="art-cards">
        <div class="card">
          <img src="اريد_رسمة_باقلام_رصاص_للاهرامات (1).png" >
          <header style="text-align: center;">اسم الراسم</header>
          <p>وصف للعمل الفني 1</p>
        </div>
        <div class="card">
          <img src="download (1).jpeg" >
          <header style="text-align: center;">اسم الراسم</header>
          <p>وصف للعمل الفني 2</p>
        </div>
        <div class="card">
          <img src="862-2.jpg" alt="فن 3">
          <header style="text-align: center;">اسم الراسم</header>
          <p>وصف للعمل الفني 3</p>
        </div>
      </div>
    <div class="pra">
     <p><h1>ركن الفن</h1>
        هو ركن مخصص لعرض اللوحات , كل طالب مشترك يرسم لوحة لأي معلم تاريخي من معالم مصر<br> والرسمة صاحبة أعلى تقييم من قبل زائرين الموقع سوف تفوز بلقب افضل رسمة لهذا الشهر وسيتم منح صاحبها شهادة تقدير ومشاركة
    </p>
</div>
<div id="cardContainer"></div>
<button class="btn" onclick="addCard()">إضافة رسمة</button>
<button class="btn" onclick="deleteCard()">حذف الرسمة</button>
<script>

    function addCard() {
     
      var card = document.createElement("div");
      card.className = "card";
      card.innerHTML = "  تم رفع رسمتك بنجاح";
  
   
      document.getElementById("cardContainer").appendChild(card);
    }
  
   
    function deleteCard() {
    
      var cards = document.getElementsByClassName("card");
  
     
      if (cards.length > 0) {
       
        var lastCard = cards[cards.length - 1];
        lastCard.parentNode.removeChild(lastCard);
      } else {
        alert("لا توجد رسمة لحذفها");
      }
    }
  </script>
</body>
</html>