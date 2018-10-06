<?php
/**
 * Created by PhpStorm.
 * User: Sayali Deshmane
 * Date: 10/6/2018
 * Time: 1:57 PM
 */
main:: start("project.csv");
class main
{
    static public function start(){

    }
}
class csv{
    static public function getRecords(){

    }
}

class record
{
    public function __construct(Array $fields = null, Array $values = null)
    {

        $record = array_combine($fields, $values);

        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);
        }
    }
}

class recordFactory{
    public static function create(Array $fields = null,Array $values = null)
    {
        $record = new record($fields,$values);

        return $record;
    }

}

class html{
    static public function generateTable(){

    }
}

class system{
    static public function Printpage(){

    }
}