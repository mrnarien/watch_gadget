<?require 'head.php';?>
<body>
   <div class="main-block">
      <div class="container paper">
         <?require 'header.php';?>
         <div id="main">
            <div id="catalog">
               <h2><a class="post_ttl" title="АВТОРИЗАЦИЯ">АВТОРИЗАЦИЯ</a></h2>
               <div id="basket" style="background:none;">
                  <?php
                     $login     = htmlspecialchars($_POST['login']);
                     $password  = htmlspecialchars($_POST['password']);
                     $logins    = file('files/logins.txt', FILE_IGNORE_NEW_LINES);
                     $passwords = file('files/passwords.txt', FILE_IGNORE_NEW_LINES);
                     for ($i = 0; $i < count($logins); $i++) {
                     	if ($login == $logins[$i] && $password == $passwords[$i]) {
                     		$_SESSION['login'] = $login;
                     		if ($_SESSION['login'] == 'daniil' && $password == '12344321') {
                     			$_SESSION['adminmode'] = 'activated';
                     		}
                     		echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
                     		exit;
                     	}
                     }
                     echo '<p align="center" style="font-size:28px;color:#fff;"><b>Ошибка ввода, Попробуйте снова</b></p>';
                     ?>
               </div>
            </div>
         </div>
         <div class="clear-both"></div>
      </div>
   </div>
   <?require 'footer.php';?>
   </div>
</body>
</html>
