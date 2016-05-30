<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <title>index</title>

		<link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body background="weather.jpg">
    <div class="wrapper">

  <section>

    <h1><?php echo $_GET['city']; ?>, <?php echo $_GET['country']; ?> <a href="index.html" class="add">+</a></h1>

    <div class="temperature entypo-light-up">
      <h2 style=""><?php echo $_GET['temp']; ?><span class="degree-symbol">°</span>C<span class="celcius">| F</span></h2>
    </div>

    <ul>
      <li class="fontawesome-leaf left">
        <span><?php echo $_GET['wind']; ?> mph</span>
      </li>
      <li class="fontawesome-tint center">
        <span><?php echo $_GET['humidity']; ?>%</span>
      </li>
      <li class="fontawesome-cloud right">
        <span><?php echo $_GET['clouds']; ?>%</span>
      </li>
    </ul> 

  </section>
  
</div>

<div class="result"></div>
</body>

</html>
