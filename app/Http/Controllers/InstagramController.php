<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Vinkla\Instagram\Facades\Instagram;
use App\Http\Controllers\Input;
use App\Media;

class InstagramController extends Controller
{
    //
    public function feed(Request $req)
    {
    	$tags = $req->txtSearch;
    	
    	if (!empty($tags)){
	      	$response = Instagram::tags()->getRecentMedia($tags);
	      	$instagrams = $response->get();	      	
      	}

      	return view('index', compact('instagrams'));
    }

    public function save(Request $req)
    {
    	if(isset($req->id)){
    		foreach ($req->id as $id){
    			$response = Instagram::media()->get($id);
	      		$instagrams = $response->get();

	      		$media = Media::where('id',$id)->first();
	      		if (!isset($media)){
	      			$media = new Media;
	      			$media->id = $instagrams['id'];
	      			$media->type = $instagrams['type'];
    				$media->tags = $instagrams['tags'];
    				$media->caption = $instagrams['caption']['text'];
    				$media->likes = $instagrams['likes']['count'];
    				$media->link = $instagrams['link'];
    				$media->user = $instagrams['user'];
    				$media->images = $instagrams['images'];
	      			$media->save();
	      		}	      		
    		}
    	}
    	return redirect()->to('feed')->with('status','success');
    }

    public function media(){
    	$instagrams = Media::orderBy('tags')->get();

    	return view('media', compact('instagrams'));
    }

}
