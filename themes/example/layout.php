<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Page title </title>
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<style>
  a.active {
    font-weight: bold;
  }
</style>

<body>

<nav>
  <ul>
  <li><a class="<?php if(currentPathIs('')) echo 'active' ?>" href="<?php echo url('') ?>"> Homepage </a></li>
  <li><a class="<?php if(currentPathIs('contact')) echo 'active' ?>" href="<?php echo url('contact') ?>"> Contact </a></li>
  </ul>
</nav>

<?php print $content ?>

</body>
</html>