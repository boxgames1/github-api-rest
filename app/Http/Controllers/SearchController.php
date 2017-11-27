<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Components\CurlComponent;
class SearchController extends Controller{

  public function __construct(Request $request){
    $this->base_url = config($request->segment(1).'_base_url');
    $this->curl = new CurlComponent();
  }

	public function search(Request $request, $type="", $query="", $page=1, $perPage=25){
    if($type=="" || $query==""){
      return "";
    }
    $response=$this->curl->execute(
        $this->base_url."search/$type?$query&per_page=$perPage&page=$page",
        "GET"
     );
    return response()->json(
      $response,
      200,
      [],
      JSON_UNESCAPED_SLASHES
    );
	}

  public function viewRepo(Request $request, $owner="", $name=""){
      if($owner=="" || $name==""){
        return "";
      }
      $repo=$this->curl->execute(
        $this->base_url."repos/$owner/$name",
        "GET"
      );
      return response()->json(
        $repo,
        200,
        [],
        JSON_UNESCAPED_SLASHES
      );
  }

  public function viewUser(Request $request, $userName=""){
      if($userName==""){
        return "";
      }
      $repo=$this->curl->execute(
        $this->base_url."users/$userName",
        "GET"
      );
      return response()->json(
        $repo,
        200,
        [],
        JSON_UNESCAPED_SLASHES
      );
  }
}
?>
