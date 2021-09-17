<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
    /**
     * Return images from Advanced Custom Fields
     *
     * @return array
     */
    public function fields() {

    	$post =	get_the_ID();
    	
        return get_fields($post);
        // the_field('page_sub_title');
		// echo "<br />";
		// the_field('page_type');
		
		// the_field('page_description');
    }
}