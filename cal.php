<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <style>
    form{
    
    position:absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
    fieldset {
      width: fit-content;
      background-color: gray;
      padding: 5px 16px;
    }
    
    div {
      height: 20px;
      border: 1px solid lightslategray;
      background-color: lightgrey;
      margin-bottom: 10px;
      padding: 5px;
    }
   
    h5{
      padding-bottom: 0px;
    }
    input
    
    {
      width: 40px;
      height: 30px;
    }
  </style>
  <script>
    function cal(value) {
      var display = document.getElementById("display");
      if (value === '=') 
      {
        document.getElementById("expression").value = display.innerText;
        document.getElementById("calculatorForm").submit();
      } else if (value === 'C') {
        display.innerText = '';
      } 
      else
       {
        display.innerText += value;
      }
    }
  </script>
</head>
<body>

  <form id="calculatorForm" action="" method="post">
    <fieldset>
      <h5>CASIO</h5>
      <div id="display"></div>
      <input type="hidden" id="expression" name="expression">
      <input type="button" value="1" onclick="cal(value)">
      <input type="button" value="2" onclick="cal(value)">
      <input type="button" value="3" onclick="cal(value)">
      <input type="button" value="C" onclick="cal(value)">
      <br>
      <input type="button" value="4" onclick="cal(value)">
      <input type="button" value="5" onclick="cal(value)">
      <input type="button" value="6" onclick="cal(value)">
      <input type="button" value="+" onclick="cal(value)">
      <br>
      <input type="button" value="7" onclick="cal(value)">
      <input type="button" value="8" onclick="cal(value)">
      <input type="button" value="9" onclick="cal(value)">
      <input type="button" value="- " onclick="cal(value)">
      <br>
      <input type="button" value="0" onclick="cal(value)">
      <input type="button" value="/ " onclick="cal(value)">
      <input type="button" value="* " onclick="cal(value)">
      <input type="button" value="=" onclick="cal(value)">
    </fieldset>
  
  </form>
  </fieldset>
  

  <?php
 $expression = $_POST["expression"];
  
    $result= eval("return $expression;" );
    echo "<script>  document.getElementById('display').innerText = '$result';  </script>";
  
  
  ?>
</body>
</html>
