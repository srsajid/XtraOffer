<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/5/2014
 * Time: 1:35 AM
 */

class Offer extends Eloquent {

    public function category() {
        return $this->belongsTo("Category");
    }
} 