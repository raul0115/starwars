<?php 
namespace App\Repositories;


class StarwarsRepository extends GuzzleHttpRequest{



    public function all(){
    

        return $this->get('people');
    }

    public function find($id){
    

        return $this->get("people/{$id}");
    }

}