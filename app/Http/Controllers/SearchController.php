<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Components\CurlComponent;
class SearchController extends Controller{

  public function __construct(Request $request){
    //We get the base url based on the first url parameter (github, bitbucket, etc..)
    $this->base_url = config($request->segment(1).'_base_url');
    $this->curl = new CurlComponent();
  }

	public function query(Request $request, $query=""){
    if($query==""){
      return "";
    }

    $url=$this->base_url.$query;

    //If the query doesn't specify the items per page then we establish 25 by default
    if(strpos($query, 'per_page=')==FALSE){
      $url.="&per_page=25";
    }

    $response=$this->curl->execute(
        $url,
        "GET"
     );

    return response()->json(
      $response,
      200,
      [],
      JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT
    );
	}


}
?>
