<!DOCTYPE html>
<html>
<head>
    <title>Sumit K. Prasad | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
    
</head>

<body bgcolor="#f1f1f1">
    <?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

if ($iphone || $android || $palmpre || $ipod || $berry == true) 
{
    echo "<script> window.location= 'http://sumitkp.xyz/mobile/' </script>";
 }
?>
      <!-- Responsive header -->
    <div class="header">
  <a href="http://sumitkp.xyz" class="logo">Sumit</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="/projects">Projects</a>
    <a href="education.php">Education</a>
     <a href="#about">CV</a>
      <a href="#about">Blog</a>
  </div>
</div>
    <h3>Sumit K. Prasad</h3>
  <p>Today, I find myself pursuing a M.C.A at Guru Gobind Singh Indraprastha University, Delhi, India in pursuit of contributing towards human progress in technology. I've undertaken a satisfying journey of making mistakes, reflecting on them and employing the lessons learned. </p>
  <p>On this website you can find information and reflections about my projects, professional experiences, and education.</p>
    </body>    

</html>
