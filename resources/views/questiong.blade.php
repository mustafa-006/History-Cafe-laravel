<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>السؤال السابع</title>
    <style>
body {
            font-family: 'Arial', sans-serif;
            background-color: #feffab;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #game-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
            text-align: center;
            justify-content: center;
        }

        h1 {
            color: #333;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            margin: 70px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #169fb1;
            border-radius: 10cm;
        }
        h1{
            text-align: center;
        }
        form {
            background-color: rgba(255, 255, 255, 0.7); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
            width: 300px;
            text-align: center;
        }

        p {
            color: black;
            background-color: rgb(243, 239, 217); 
            padding: 10px;
            border-radius: 5px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <div>
 <h1>سؤال:ما هي ثاني الخلافات الاسلامية ؟</h1>

    <div class="container">
<div class="row">
    <div class="column">
        <button id="ff">    الدولة الاموية</button>
        <button id="mybutton">    الدولة العثمانية </button>
    </div>
    <div class="column">
        <button id="fff">  الدولة الصفوية </button>
        <button id="f" >الدولة الفاطمية   </button>
    </div>
</div>
    </div>

</div>
<form>
    <h2>معلومة قد تفيدك</h2>
  <p>كانت ثاني الخلافات الاسلامية بعد الخلافة الراشدة وبعد مقتل الحسن بن علي بن ابي طالب , وأسسها معاوية بن ابي سفيان وتسمى الدولة الاموية نسبة الى  بني  امية و, وكانت من اقوى البلاد انذاك واكثرهم نفوذا وتوسعا</p>
</form>
  
<script>
document.getElementById("ff").addEventListener("click",function(){location.href="questionh.html"})
document.getElementById("mybutton").addEventListener("click",function(){alert("للأسف الشديد الاجابة خاطئة")})
document.getElementById("fff").addEventListener("click",function(){alert("للأسف الشديد الاجابة خاطئة")})
document.getElementById("f").addEventListener("click",function(){alert("للأسف الشديد الاجابة خاطئة")})

</script>
</body>
</html>