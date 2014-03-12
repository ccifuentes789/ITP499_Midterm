<html>
<head>
	<title> Yelp Reviews </title>
</head>
<body>
	<h1> Yelp</h1>

	<?php foreach($yelps as $yelp) :?>
		<?php $fbID = $yelp->facebook_page;


		?>
		<div id="review">
			<p><b><?php echo $yelp->restaurant_name; ?> </b> </p>
			<p> <?php echo $yelp->type;?> </p>

			<?php if($fbID==""){ ?>
				<p>No FaceBook Page </p>
			<?php } else{?>
				<p>FaceBook Page:<a href="http://facebook.com/<?php echo $fbID?>"> here </a> </p>
			<?php }?>

			<p><a href="yelpReviews"> View Reviews</a> </p>

			<hr/>

		</div>

	<?php endforeach; ?>

</body>


</html>
