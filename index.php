<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>
        <?php 
    
        // $x = 0;
        // while ($x<100){
        //     echo "this is number :" . $x . "<br/>";
        //     ++$x  ;
        // }
    
        // for($x = 0;$x<100; ++$x) {
        //     echo "this is number :" . $x . "<br/>";
        // }
    
    
        // $myarry = array("name", "email", "passworld","age", "college");
        //     $x = 1;
        // foreach ($myarry as $name){
        //     echo $x .". " . $name ."<br/>";
        //     ++$x ;
        // }
        
        
        ?>
    
      
    </h1>

    <form action="form.php" method="POST">
      <input 
        type="text" 
        name="name" 
        value="damo" 
      />

      <input 
        type="email" 
        name="email" 
        value="damo@gmail.com" 
    />

      <input
        type="password"
        name="password"
        placeholder="1212121"
      />

      <input type="submit" value="submit form" />

      <br>

      <h2 style="color: red;">
    
    <?php
  
    if(isset($_REQUEST["pws_error"])){
        echo $_REQUEST["pws_error"];
    }


    if(isset($_REQUEST["all_done"])){
        echo $_REQUEST["all_done"];
    }
   
    
    ?>
    
    </h2>
    </form>
  </body>
</html>
