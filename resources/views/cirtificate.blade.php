<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شهادة تقدير </title>
<style>

#kjk{
  background-image  :    url("Picsart_23-12-29_11-37-47-757.jpg") ;
  text-align: center;
  background-position: center ;
  background-repeat: no-repeat;
  margin: 0;
  padding: 0;
  background-size: cover;
 background-position-x: center; 
}



  

    header {
      background-color: #3498db;
      padding: 20px;
      text-align: center;
      color: #fff;
    }

    h1 {
      margin: 0;
      font-size: 2em;
    }

   

   
  
    footer {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    #certificateName{
        font-size: 50px;
   
       transform: translate(0%, -40%);
    }
    #certificateDate{
font-size: 50px;
transform: translate(26%, 200%);

}

</style>
</head>
<body id="kjk">
    
   

    <header>
        <h1>ها هي الجائزة </h1>
      </header>
    

    <footer>
        شكرا لك على دخولك لموقعنا المميز , لا تنسى القرائة ف القرائة غذاء للعقل 
    
      </footer>
      
  
        <p id="certificateName"></p>
        <p id="certificateDate"></p>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            var name = localStorage.getItem("name");
            var date = localStorage.getItem("date");


            document.getElementById("certificateName").innerHTML =   name;
            document.getElementById("certificateDate").innerHTML =   date;
        });
    </script>
</body>
</html>
