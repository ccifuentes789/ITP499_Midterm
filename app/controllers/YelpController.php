<?php
class YelpController extends BaseController{
    public function search(){
        return View::make('yelp/yelpList');
    }

    public function listReviews(){
    
        $yelps = Yelp::search();

        return View::make('yelp/yelpList', [
            'yelps' =>$yelps
        ]);
    }

}