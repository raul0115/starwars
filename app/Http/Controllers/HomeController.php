<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\StarwarsRepository;
class HomeController extends Controller
{
    
    protected $starwarsRep;
    public function __construct(StarwarsRepository $starwarsR)
    {
        $this->starwarsRep = $starwarsR;
    }
    
    public function index()
    {
      $peoples=$this->starwarsRep->all();
      if($peoples){
          $peoples= $peoples->results;
      }
        return view('home',compact('peoples'));
    }
    public function show($id)
    {
        
      $people=$this->starwarsRep->find($id);
     
        return view('show',compact('people'));
    }
}
