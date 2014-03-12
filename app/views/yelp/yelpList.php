<html>
<head>
	<title> Yelp Reviews </title>
</head>
<body>
	<h1> Yelp</h1>

	<?php foreach($yelps as $yelp) :?>

		<div id="review">
			<p><b><?php echo $yelp->restaurant_name; ?> </b> </p>
			<p> <?php echo $yelp->type;?> </p>
			<p>FaceBook Page:  <?php echo $yelp->facebook_page?> </p>
			

		</div>

	<?php endforeach; ?>

</body>


</html>
