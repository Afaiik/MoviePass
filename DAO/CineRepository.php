<?php

namespace DAO;

use Models\Cine as Cine;

class CineRepository{

    private $fileName = array();
    private $data = array();

    function __construct(){
        $this->fileName = DATA_PATH."Cines.json";
    }

    public function getFileName()
    {
        return $this->fileName;
    }

    public function getAll(){
        $this->RetrieveData();
        return $this->data;
    }

    public function Add(Cine $cine){
        $this->RetrieveData();
        
        foreach($this->data as $value){
            if($cine->getDireccion() == $value->getDireccion()){
                return "Ya existe un cine en la direccion indicada.";
            }
        }

        $cine->setId($this->GetLastId() + 1);

        array_push($this->data,$cine);
        $this->SaveData();  
    }
    
    public function GetLastId(){
        $this->RetrieveData();
        
        $max = 0;
        foreach($this->data as $value){
            if($value->getId() > $max){
                $max = $value->getId();
            }
        }
        return $max;
    }

    private function RetrieveData(){
        $this->data = array();
        if(file_exists($this->fileName)){

            $fileContent = file_get_contents($this->fileName);
            $arrayToDecode = ($fileContent) ? json_decode($fileContent, true) : array();

            foreach($arrayToDecode as $key => $value){
                $cine = new Cine();
                $cine->setId($value["id"]);
                $cine->setCapacidad($value["capacidad"]);
                $cine->setNombre($value["nombre"]);
                $cine->setValorEntrada($value["valorEntrada"]);
                $cine->setDireccion($value["direccion"]);
                array_push($this->data, $cine);
            }
        }
    }

    private function SaveData(){
        $arrayToEncode = array();
        
        foreach($this->data as $cine){
            $values["id"] = $cine->getId();
            $values["capacidad"] = $cine->getCapacidad();
            $values["nombre"] = $cine->getNombre();
            $values["valorEntrada"] = $cine->getValorEntrada();
            $values["direccion"] = $cine->getDireccion();
            
            array_push($arrayToEncode, $values);
        }

        $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
        file_put_contents($this->fileName, $jsonContent);
    }



}


?>