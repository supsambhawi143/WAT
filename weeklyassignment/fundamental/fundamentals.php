<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Sambhawi Paudel and C7356790</h1> 
      </header>
      
      <section id="container">
         <h1>Fundamentals of PHP</h1>
         <?php
         $day = date('l'); //that is a lower case L
         echo 'It\'s '.$day."<br/>";

         $date = new DateTimeImmutable();

        // prints something like: Wednesday the 19th
        echo $date->format('l \t\h\e jS')."<br/>";
 

         $today = date('l');
        //  echo $today;
         //switch case
         switch($today){
             case'Wednesday':
                 {
                     echo"It's midweek"."<br/>";
                     break;
                 }
             default:{
                 echo"It's not midweek"."<br/>";
                 break;
             }
             }

             $hour = date('H');
             if ($hour < 12) {
                 echo 'Good Morning'."<br/>";
             } elseif ($hour > 12 && $hour < 18) {
                 echo 'Good Afternoon';
             } 
             else {
                 echo 'Good Night'."<br/>";
             }
            //  die;
             
             $password= "password";
            if(strLen($password)> 4 || strLen($password)< 10 ){
                echo "The password is valid"."<br/>";
            }
            else
            {
                echo "The password is invalid "."<br/>";
            }

            if ($password=="password" && $password="username"){
                echo "Password valid";
            }
            else{
                echo"Password invalid";
            }
            
		?>
      </section>
      
      <?php
    //Ticket company
      echo"<h3>Ticket company</h3>";
      $ini_ticketprice=25;
      $age=15;
      $member=True;
      if($age<12){
        $final_price=25-((50/100)*25);
      }
      elseif($age<18 || $age>12){
        $final_price=25-((25/100)*25);
      }
      elseif($age>60){
        $final_price=25-((25/100)*25);
      }
      else{
        $final_price=$ini_ticketprice;
      }

      if($member=True){
        $final_price=$final_price-((10/100)*25);
        $member="Yes";
      }
      else{
        $final_price=$final_price;
        $member="No";
      }
      echo "Initial Ticket Price: ".$ini_ticketprice."<br/>";
      echo "Age: ".$age."<br/>";
      echo "Member: ".$member."<br/>";
      echo "Final Ticket Price: ".$final_price."<br/>";

      //Array
      echo "<h1>Array</h1>";
      echo "<h2>Simple arrays</h2>";
      $products= array("t-shirts","cap","mug");
      print_r($products);
      echo "<br/>";
      $products[1]="shirt";
      print_r($products);
      echo "<br/>";
      $products[]="skirt";
      print_r($products);
      echo "<br/>";
      echo "The item at index[2] is: ".$products[2]."<br/>";
      echo "The item at index[3] is: ".$products[3]."<br/>";

      echo "<h2>Associative Arrays </h2>";
      $customer=array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
      print_r($customer);
      echo "<br/>";
      $customer["CustAge"]=32;
      print_r($customer);
      echo "<br/>";
      $customer["CustEmail"]='sarah@gamil.com';
      print_r($customer);
      echo "<br/>";
      echo "Items in my customer array"."<br/>";
      echo "The items at index [CustName] is:  ".$customer["CustName"]."<br/>";
      echo "The items at index [CustEmail] is:  ".$customer["CustEmail"]."<br/>";

      echo "<h2>Multi-Dimensional Arrays </h2>";
      $id1=array(
            array("description","t-shirt"),
            array("price",9.99),
            array("stock",100),
            array("colour","blue","green","red")
      );
      $id2=array(
        array("description","cap"),
        array("price",4.99),
        array("stock",50),
        array("colour","blue","black","grey")
      );
    $id3=array(
        array("description","mug"),
        array("price",6.99),
        array("stock",30),
        array("colour","yellow","green","pink")
    );
    echo "This is my order:"."<br/>";
    echo $id1[3][2]." ".$id1[0][1]."<br/>";
    echo "Price: &pound".$id1[1][1]."<br/>";
    echo $id2[3][3]." ".$id2[0][1]."<br/>";
    echo "Price: &pound".$id2[1][1];

    echo "<h1>Loop </h1>";
    echo "<h2>While loop </h2>";
    $counter=1;
    while($counter<6){
      echo 'Count: '.$counter.'<br />';
      $counter++; 
    }

    echo "<h4>T-shirt price </h4>";
    $shirtPrice=9.99;
    $counter1=1;

    echo "<table border=\"1px\">";
    echo "<tr><th>Quantity</th><th>Price</th></td>";
    while($counter1<=10){
      $total=$counter1*$shirtPrice;
      //echo "<th>".$counter1." - &pound".$total."</th>".'<br />';
      echo "<tr><td>".$counter1."</td>";
      echo "<td>"."&pound".number_format($total,2)."</td>";
      $counter1 ++;
    }
    echo "</table>";
    echo "<br/>";

    //For loop
    echo "<h2>For Loops</h2>";
    $names = array("Jiya","Sonika","Riya","Siya","Sirish");
    for($i=0;$i<5;$i++){
      echo $names[$i] .'<br />';
    }
    echo "<br/>";

    //For each 
    echo "<h2>For Loops</h2>";
    $new_names=array('Jiya'=>121, 'Sonika'=>122, 'Riya'=>123, 'Siya'=>124,'Sirish'=>125);
    foreach ($new_names as $key => $key_value) {
      echo "Name: "."$key"." ID: ".$key_value."<br/>";
    }
    echo "<br/>";

    $city=array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
    print_r($city);
    echo "<br/>";
    foreach ($city as $key => $key_value) {
      $city[$key]=ucfirst(strtolower($key_value));
      
    }
    print_r($city);
    
    ?>
   
   </body>
</html>