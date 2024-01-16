<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency converter</title>
    <style>
        form{
            display:flex;
            flex-direction:column;
            /* background-color: bisque; */
            width:400px;
            background-color: #4834d4;
/* background-image: linear-gradient(315deg, #4834d4 0%, #0c0c0c 74%); */
/* background-color: #310e68;
background-image: linear-gradient(316deg, #310e68 0%, #5f0f40 74%);
background-color: #e4b5cb;
background-image: linear-gradient(315deg, #e4b5cb 0%, #722ae6 74%); */
height:300px;
border-radius:20px;
justify-content:center;
align-items:center;

background-color:rgba(255, 255, 255, 0.3);

}
.container{
    text-align:center;
    color:white;
}
input{
    height: 43px;
outline: none;
border: none;
/* background-color: #f9fcff;
background-image: linear-gradient(147deg, #f9fcff 0%,#4e2fdf 74%); */
border-radius: 20px;
padding: 10px;
width: 162px;
margin: 20px;
background-color: #d4c6e18a;
}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #4062bb;
    background: linear-gradient(316deg, #4062bb 0%, #5200ae 74%);
    background-color: #50d8d7;
background-image: linear-gradient(316deg, #50d8d7 0%, #923993 74%);
background-color: #663dff;
background-image: linear-gradient(319deg, #663dff 0%, #aa00ff 37%, #cc4499 100%);

background-color: #e4b5cb;
background-image: linear-gradient(315deg, #e4b5cb 0%, #722ae6 74%);


    
}
select{
    height:50px;
    width:130px;
}
button{
    width:250px;
    border-radius:200px;
    height:50px;
    margin-top: 32px;
}
.display{
    height: 50px;
width: 182px;
background: black;
margin-bottom: 10px;
margin-left: 44px;
position: relative;
left: -21px;
border-radius:40px;
display:flex;
justify-content:center;

align-items:center;
/* font-size:20px; */
}
#flat{
    display:flex;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
        
        <h1 class="convert">Currency converter</h1>
        
        </div>
        <div class="form">
            <form action="" method="post">
<div>
            <select name="from" id="from">
                    <option value="usd">US Dollars</option>
                    <option value="euro">Euro</option>
                    <option value="pound">British Pound</option>
                    <option value="yen">Japanese Yen</option>
                    <option value="rupee">Indian Rupee</option>
                </select>
                <input type="number" name="amount1" id="amount">
</div>
<div id = "flat">
                <select name="to" id="to">
                    <option value="usd">US Dollars</option>
                    <option value="euro">Euro</option>
                    <option value="pound">British Pound</option>
                    <option value="yen">Japanese Yen</option>
                    <option value="rupee">Indian Rupee</option>
                </select>
                
                <div class="display">
                    <?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $currency1 = $_POST['from'];
    $currency2 = $_POST['to'];

   // amount 
    
   $amount =  $_POST['amount1'];
   
    // usd to euro
   if ($currency1 == 'usd' && $currency2 == 'euro'){    

    // 1 USD = 0.92 EUR
    echo "€" . $amount * 0.92;
   }

   // usd to pounds
   if ($currency1 == 'usd' && $currency2 == 'pound'){    

    // 1 USD = 0.80 pounds
    echo "£" . $amount * 0.80;
   }

   // usd to yen
   if ($currency1 == 'usd' && $currency2 == 'yen'){    

    // 1 USD = 149.58 yen
    echo "¥" . $amount * 149.58;
   }

    // usd to rupee
    if ($currency1 == 'usd' && $currency2 == 'rupee'){    

        // 1 USD = 83.37 rupee
        echo "₹" . $amount * 83.37;
       }


       // ---------------------------------------------- euro

    // euro to dollar
    if ($currency1 == 'euro' && $currency2 == 'usd'){    

        // 1 euro = 1.09 usd
        echo "$" . $amount * 1.09;
       }
    
       // euro to pound
       if ($currency1 == 'euro' && $currency2 == 'pound'){    
    
        // 1 euro is 0.87 pound
        echo "£" . $amount * 0.87;
       }
    
       // usd to yen
       if ($currency1 == 'euro' && $currency2 == 'yen'){    
    
        // 1 USD = 149.58 yen
        echo "¥" . $amount * 163.16;
       }
    
        // usd to rupee
        if ($currency1 == 'euro' && $currency2 == 'rupee'){    
    
            // 1 USD = 83.37 rupee
            echo "₹" . $amount * 90.94;
           }

 // ---------------------------------------------- pound

    // euro to dollar
    if ($currency1 == 'pound' && $currency2 == 'usd'){    

        // 1 euro = 1.09 usd
        echo "$" . $amount * 1.26;
       }
    
       // euro to pound
       if ($currency1 == 'pound' && $currency2 == 'euro'){    
    
        // 1 euro is 0.87 pound
        echo "€" . $amount * 1.15;
       }
    
       // usd to yen
       if ($currency1 == 'pound' && $currency2 == 'yen'){    
    
        // 1 USD = 149.58 yen
        echo "¥" . $amount * 187.89;
       }
    
        // usd to rupee
        if ($currency1 == 'pound' && $currency2 == 'rupee'){    
    
            // 1 USD = 83.37 rupee
            echo "₹" . $amount * 104.73;
           }

           // ---------------------------------------------- Yen

    // euro to dollar
    if ($currency1 == 'yen' && $currency2 == 'usd'){    

        // 1 euro = 1.09 usd
        echo "$" . $amount * 0.0067;
       }
    
       // euro to pound
       if ($currency1 == 'yen' && $currency2 == 'euro'){    
    
        // 1 euro is 0.87 pound
        echo "€" . $amount * 0.0061;
       }
    
       // usd to yen
       if ($currency1 == 'yen' && $currency2 == 'pound'){    
    
        // 1 USD = 149.58 yen
        echo "£" . $amount * 0.0053;
       }
    
        // usd to rupee
        if ($currency1 == 'yen' && $currency2 == 'rupee'){    
    
            // 1 USD = 83.37 rupee
            echo "₹" . $amount * 0.56;
           }

                  // ---------------------------------------------- rupee

    // euro to dollar
    if ($currency1 == 'rupee' && $currency2 == 'usd'){    

        // 1 euro = 1.09 usd
        echo "$" . $amount * 0.012;
       }
    
       // euro to pound
       if ($currency1 == 'rupee' && $currency2 == 'euro'){    
    
        // 1 euro is 0.87 pound
        echo "€" . $amount * 0.011;
       }
    
       // usd to yen
       if ($currency1 == 'rupee' && $currency2 == 'pound'){    
    
        // 1 USD = 149.58 yen
        echo "£" . $amount * 0.0095;
       }
    
        // usd to rupee
        if ($currency1 == 'rupee' && $currency2 == 'yen'){    
    
            // 1 USD = 83.37 rupee
            echo "¥" . $amount * 1.79;
           }

}
?>

<script type="text/javascript">
  document.getElementById('from').value = "<?php echo $_POST['from'];?>";
  document.getElementById('to').value = "<?php echo $_POST['to'];?>";
</script>

</div>
                </div>
             
                <button>convert</button>
            </form>
        </div>
    </div>
</body>
</html>