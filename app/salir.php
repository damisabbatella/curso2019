<? 
session_start();
if(isset($_COOKIE["usuario"])){
setcookie("usuario",0,time()-3600);
	}
  session_unset();
  session_destroy();
  header("location:index.php?error=2");
?>