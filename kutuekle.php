<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "turkishsnack");  
 if(isset($_POST["add_to_kutu"]))  
 {  
      if(isset($_SESSION["kutu_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["kutu_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["kutu_cart"]);  
                $item_array = array(  
                    'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_adi"],  
                     'item_price'          =>     $_POST["hidden_fiyati"],  
                     'item_quantity'          =>   1
									 
			                );  
                $_SESSION["kutu_cart"][$count] = $item_array;  
           }  
           else  
           {  
               //echo 'ÜRÜN YOK';  
               // echo '<script>window.location="market.php"</script>';  
				
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_adi"],  
                'item_price'          =>     $_POST["hidden_fiyati"],  
                'item_quantity'          =>    1
				
				
           );  
           $_SESSION["kutu_cart"][0] = $item_array;  
      }  
 }  
  if(isset($_GET["action"]))
 {
      if($_GET["action"] == "sil")
      {
           foreach($_SESSION["kutu_cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                     unset($_SESSION["kutu_cart"][$keys]);
                    // echo '<script>alert("Ürün Çıkarıldı")</script>';
                  
                }
           }
      }
	  
 }
 
 
 
 ?>  