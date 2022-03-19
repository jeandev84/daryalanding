<?php
namespace App\Http\Controller;



/**
 * @LadingController
*/
class LadingController
{
     public function index()
     {
          return view('landing/index.php');
     }
}