<?php
	class Yelp{

		public static function search(){

        /*SELECT title, artist_name, DATE_FORMAT(added, '%b %d %Y %h:%i %p') AS added
            FROM songs
        INNER JOIN artists
        ON songs.artist_id = artists.id
         */
        $query = DB::table('restaurants')
            ->select('restaurant_name', 'type', 'facebook_page', 'id');


        $yelps = $query->get();
        return $yelps;
    	}

    	public function reviews($id){

    	$query = DB::table('reviews')
    		->select('review_description', 'rating', 'restaurant_name')
    		->join('restaruants', 'restaurants.id', '=', 'reviews.restaurant_id')
    		->where('restaurant_id', '=', "$id");
    	

    	$reviews = $query->get();
    	return $reviews;
	}
}


?>