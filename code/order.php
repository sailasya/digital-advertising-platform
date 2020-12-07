<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Wing the Air</title>
<link rel="icon" href="img/logo.jpg">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->
<script type="text/javascript" src="js/Cartpage.js"></script>
<script type="text/javascript" src="js/cart1.js"></script>
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery.slide.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
<style type="text/css">
  .add{
    padding: 5px;
    margin-left: 40px;
    margin-top: 20px;
    border-radius: 25px;
    padding: 15px;
  }
</style>
</head>
<body>
<!-- Top -->
<!-- Main -->
<?php

$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db='wingman';
   $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$sql = "SELECT * FROM food where hotel='".$_COOKIE["food"]."';";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  $name=array("","","","");
  $price=array("","","","");
  $img=array("","","","");
  $i=0;
    while($row = $result->fetch_assoc()) {
      $name[$i]=$row["item"];
      $price[$i]=$row["price"];
      $img[$i]=$row["image"];
      $i=$i+1;
    }
} else {
    echo "0 results";
}

$conn->close();

?>
<div id="main">
  <div class="shell">
    <!-- Search, etc -->
    <div class="options" style="height: 60px;">
      <div class="right">
        <span class="left more-links">
          <a href="./checko.html">
          <Button class="add" onclick="checkout()" style="margin-top: 2px">
            Checkout
          </Button>
        </a>
        </span>
      </div>
    <!-- End Search, etc -->
    <!-- Content -->
    <div id="content" style="margin-top: 100px">
      <!-- Tabs -->
      <div class="tabs" >
        <ul>
          <li ><a href="#" class="active"><span >Menu</span></a></li>
          
        </ul>
      </div>
      <!-- Tabs -->
      <!-- Container -->
      <div id="container" style=" background-color: black">
        <div class="tabbed">
          <!-- First Tab Content -->
          <div class="tab-content" style="display:block;">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                <li style="padding: 40px;margin-left: 100px">
                  <div class="image"> <a href="#"><img src="<?php echo $img[0] ?>" alt="" style="height: 120px;width:150px"  /></a> </div><br>
                  <h3 class="name" id="n1"> <?php echo $name[0] ?> </h3>
                  <p class="price" >Wholesale Price: <strong>Rs.</strong><strong id="p1"><?php echo $price[0] ?></strong></p>
                  <button class="add" onclick="addtocart('n1','p1')">ADD TO CART</button>
                </li>
                <li style="padding:40px;margin-left: 100px" class="product" id="125514">
                  <div class="image"> <a href="#"><img src="<?php echo $img[1] ?>" alt="" style="height: 120px;width:150px"  /></a> </div><br>
                  <h3 class="name" id="n2"> <?php echo $name[1] ?> </h3>
                  <p class="price">Wholesale Price: <strong>Rs.</strong><strong id="p2"><?php echo $price[1] ?></strong></p>
                  <button class="add" onclick="addtocart('n2','p2')">ADD TO CART</button>
                </li>
                <li style="padding: 40px;margin-left: 100px">
                  <div class="image"> <a href="#"><img src="<?php echo $img[2] ?>" alt="" style="height: 120px;width:150px" /></a> </div><br>
                  <h3 class="name" id="n3"> <?php echo $name[2] ?> </h3>
                  <p class="price">Wholesale Price: <strong>Rs.</strong><strong id="p3"><?php echo $price[2] ?></strong></p>
                  <button class="add" onclick="addtocart('n3','p3')">ADD TO CART</button>
                </li>
                <li style="padding: 40px;margin-left: 100px">
                  <div class="image"> <a href="#"><img src="<?php echo $img[3] ?>" alt=""  style="height: 120px;width:150px"/></a> </div><br>
                  <h3 class="name" id="n4"> <?php echo $name[3] ?> </h3>
                  <p class="price">Wholesale Price: <strong>Rs.</strong><strong id="p4"><?php echo $price[3] ?></strong></p>
                  <button class="add" onclick="addtocart('n4','p4')">ADD TO CART</button>
                </li>
                
                
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End First Tab Content -->
          
          
        </div>
        
        
      </div>
      <!-- End Container -->
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->

</body>
</html>
