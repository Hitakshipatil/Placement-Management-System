<?php
  session_start();
 if (isset($_SESSION['pusername'])){
    
	   }
   else {
	   header("location: index.php");
  }  
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Search By</h2>
<center>
					<form  action="COUNT3s1.php" method="POST">
						Student Name : 
						<input type="text" name="sname">
						<button type="submit" name="s1" >Search</button>						
						<br><br>
					</form>	
					<form  action="COUNT3s2.php" method="POST">					
						Student USN : &nbsp 
						<input type="text" name="susn">
						<button type="submit" name="s2" >Search</button>
						<br><br>
					</form>	
						
</center>
<footer class="text-right">
            <p>Copyright &copy;
             xyx Technologies
          </footer>         
        </div>
      </div>
    </div>    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
</body>
</html>