<?php
class YelpController extends BaseController{
    /*
    public function search(){
        return View::make('yelp/yelpList');
    }
    public function rating(){
        return View::make('yelp/yelpReviews');
    }*/

    public function listReviews(){
    
        $yelps = Yelp::search();

        return View::make('yelp/yelpList', [
            'yelps' =>$yelps
        ]);
    }

    public function listRatings($id){
        $reviews = Yelp::reviews($id);
        return View::make('yelp/yelpReviews', [
            'reviews' =>$reviews
        ]);

    }

}