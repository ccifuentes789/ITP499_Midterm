<?php
	class Yelp{

		public static function search(){

        /*SELECT title, artist_name, DATE_FORMAT(added, '%b %d %Y %h:%i %p') AS added
            FROM songs
        INNER JOIN artists
        ON songs.artist_id = artists.id
         */
        $query = DB::table('restaurants')
            ->select('restaurant_name', 'type', 'facebook_page');


        $yelps = $query->get();
        return $yelps;
    	}
	}


?>