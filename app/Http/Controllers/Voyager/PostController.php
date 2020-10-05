<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Models\Products;

class PostController extends VoyagerBaseController
{

    public function publish(){

        //Get post by id and toggle the status from PUBLISHED to PENDING and vice versa
        $post = Products::where('id', \request("id"))->first();
        $post->active = $post->active=="pending"?"Approved":"pending";
        $post->save();
        return redirect(route('voyager.h-products.index'));
    }

    public function publishadmin(){

        //Get post by id and toggle the status from PUBLISHED to PENDING and vice versa
        $post = Products::where('id', \request("id"))->first();
        $post->published = $post->published=="unpublished"?"Publish":"unpublished";
        $post->save();
        return redirect(route('voyager.h-products.index'));
    }

}
