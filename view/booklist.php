<?php  

	if(isset($_GET['title'])){
		
		echo $_GET['title'];
		
	}	

?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  
  
    <!-- Site Properities -->
  <title>Booklist - StoreBook</title>
  
  
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="public/packaged/css/semantic.css">
  <link rel="stylesheet" type="text/css" href="../public/css/style.css">
  <link rel="icon" href="favicon.ico">
  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js"></script>
  <script src="public/packaged/javascript/semantic.js"></script>
   <style media="screen" type="text/css">
  html,
  body {
    font-size: 15px;
    height: 100%;
  }

  body {
    font-family: "Open Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    background: #FFFFFF;
    margin: 0px;
    padding: 0.5em;
    color: #555555;
    text-rendering: optimizeLegibility;
    min-width: 320px;
  }</style>

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

    	
    
		if(!empty($books)){
			
			echo '<table class="ui table segment" colspan="4">
				<thead >
    <tr><th>Τίτλος βιλίου</th>
    <th>Συγγραφέας</th>
    <th>Περιγραφή</th>
  		<th></th>
  		<th></th>
  </tr></thead>
  <tbody>';
			foreach ($books as $title => $book){
			
			echo '<tr><td>'.$book['title'].'</a></td><td>'.$book['author'].'</td><td>'.$book['description'].' </td><td><div class="ui toggle vertical animated button">
  <div class="hidden content">Del</div>
  <div class="visible content">
    <i class="trash icon"></i>
  </div>
</div></td></tr>'; 
		
			}
			echo ' </tbody>
  <tfoot>
    <tr ><th colspan="5">
      <a href="http://calculatorcurrency.webuda.com/book/public/addbook.php"><div class="ui blue labeled icon button" ><i class="book icon"></i> Προσθηκη βιβλιου</div></a>
    </th>
  </tr></tfoot>
</table>';
			
		}

		if(empty($books)){
			
			echo '
    		<div class="ui icon yellow message">
  <i class="frown icon"></i>
  <div class="content">
    <div class="header">
      Πρόσθεσε ένα βιβλίο!
    </div>
    <p>Φαίνεται οτι η ηλεκτρονική βιβλιοθήκη σου είναι άδεια.</p>
  </div>
</div>
    		
   <table class="ui table segment">
  <thead>
   <tr><th>Τίτλος</th>
    <th>Συγγραφέας</th>
    <th>Περιγραφή</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>-</td>
      <td>-</td>
      <td>-</td>
    </tr>

  </tbody>
  <tfoot>
    <tr ><th colspan="4">
      <a href="http://calculatorcurrency.webuda.com/book/public/addbook.php"><div class="ui blue labeled icon button" ><i class="book icon"></i> Προσθεσε βιβλιο</div></a>
    </th>
  </tr></tfoot>
</table>';
		
		}
	?>


<script src="public/js/style.js"></script>
  
</body>
</html>