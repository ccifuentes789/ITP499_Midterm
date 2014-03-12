<html>
<head>
	<title> Reviews </title>
</head>
<body>
	<h1> Yelp</h1>

	<?php foreach($reviews as $review) :?>
	
		<div id="review">
			
			
			<p> <?php for($i=0,$i<$review->rating, $i++){
				echo '*';
			} ?></p>
			<p> <?php echo $review->review_description;?> </p>


			<hr/>

		</div>

	<?php endforeach; ?>

</body>


</html>
