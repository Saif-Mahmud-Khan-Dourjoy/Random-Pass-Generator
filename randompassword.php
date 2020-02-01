



<?php

if(isset($_POST['btn'])){
       
    function passwordgen($data){
     
        $givenlength= $data['given_length'];

        $mylist=array('a','A','B','b','#','$',2, '*');
        $pass='';
        for($i=1;$i<=$givenlength;$i++) {
        $x=rand(0,7);

        $pass.=$mylist[$x];
          }

        return $pass;
    
        



    }

  $result= passwordgen($_POST);

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Random Password Generator</title>
    <style>
  
  .custom{
        position:absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        
    }
    
    </style>
    
</head>
<body>

<div class="container ">
    <div class="row ">
        <div class="col-lg-6 col-sm-8 custom bg-secondary">
        <form action="#" method='post' >
        <div class="form-group">
        <label for="given_length" class='text-light text-uppercase font-weight-bold'>Length Of Password:</label> <br>
        <input type="number" name='given_length' class='form-control' >
        </div>

        <div class="form-group">
        <label for="result" class='text-light text-uppercase font-weight-bold'>Your Password:</label> <br>
        <input type="text" name='result' class='form-control' value='<?php if(isset($result)){ echo $result;}   ?>' >
        </div>

        <div>
        
        <input type="submit" name='btn' value='Click For Pass' class='btn btn-info' >
       
        </div>
         
        </form>
        </div>
    </div>
</div>


    
</body>
</html>