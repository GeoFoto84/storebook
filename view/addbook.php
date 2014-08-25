<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  
    <!-- Site Properities -->
  <title>ViewBook - StoreBook</title>
  
  
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="packaged/css/semantic.css">
  <link rel="stylesheet" type="text/css" href="../public/css/style.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js"></script>
  <script src="packaged/javascript/semantic.js"></script>


</head>
<body>
<div class="ui large menu">
  <a class="item" href="http://calculatorcurrency.webuda.com/book/" >
    <i class="list layout icon"></i> Λίστα βιβλίων
  </a>
  <a class="item">
    <i class="magic icon"></i> Wishlist
  </a>1
  <div class="right menu">
    <div class="item">
      <div class="ui icon input">
        <input type="text" placeholder="Αναζήτηση βιβλίου...">
        <i class="search link icon"></i>
      </div>
    </div>
 
  </div>
</div>

<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST"){
	
		include_once("../model/Database.php");
		
		$database = new Database('localhost', 'geofoto', 'AbCd1234', 'bookstore');
		
		$database->insert($_POST['title'], $_POST['author'], $_POST['description']);
	
	}
	
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">	
<div class="ui fluid form segment">
  <div class="two fields">
    <div class="field">
      <label>Τίτλος</label>
      <input name="title" placeholder="Τίτλος βιβλίου…" type="text" >
    </div>
    <div class="field">
      <label>Συγγραφέας</label>
      <input name="author" placeholder="Συγγραφέας βιβλίου…" type="text">
    </div>
  </div>
<div class="ui form">
  <div class="field">
    <label>Περιγραφή</label>
    <textarea name="description"></textarea>
  </div>
</div>
  
  <input type="submit" name="submit" class="ui blue submit button" value="Εισαγωγη στην λιστα"> 
  </div>
  </form>
</body>
</html>