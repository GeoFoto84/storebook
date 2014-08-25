<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  
    <!-- Site Properities -->
  <title>ViewBook - Semantic</title>
  
  
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="packaged/css/semantic.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js"></script>
  <script src="packaged/javascript/semantic.js"></script>


</head>
<body>
<div class="ui large menu">
  <a class="item" href="http://localhost/book/" >
    <i class="home icon"></i> Λίστα βιβλίων
  </a>
  <a class="item">
    <i class="mail icon"></i> Wishlist
  </a>1
  <div class="right menu">
    <div class="item">
      <div class="ui icon input">
        <input type="text" placeholder="Αναζήτηση βιβλίου...">
        <i class="search link icon"></i>
      </div>
    </div>
    <!--<div class="ui dropdown item" id="def">Language <i class="dropdown icon"></i>
      <div class="menu" id="item">
        <a class="item" >English</a>
        <a class="item" >Russian</a>
        <a class="item" >Spanish</a>
      </div>
    </div>-->
    <div class="item">
        <div class="ui blue button">Εγγραφη</div>
    </div>
  </div>
</div>
	
	<div class="ui segment">
  <h2 class="ui left floated header"><?php echo $book->title . ' by ' . $book->author; ?></h2>
 
  <div class="ui clearing divider"></div>
  <p><?php echo $book->description; ?></p>
</div>
	<script>
	$('.ui.dropdown').dropdown();
	</script>
  
</body>
</html>