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

class html
{

    public static function createTable($array)
    {


        echo "
           <html lang=\"en\">
           <head>
           <meta charset=\"utf-8\">
           <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
           <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
           <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
           <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
           </head>
           </html>";

        //table row
        $html = '<table class="table table-striped">';
        // header row
        $html .= '<tr>';
        foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
        $html .= '</tr>';

        // data rows
        foreach( $array as $key=>$value){
            $html .= '<tr>';
            foreach($value as $key2=>$value2){
                $html .= '<td>' . htmlspecialchars($value2) . '</td>';
            }
            $html .= '</tr>';
        }

        // finish table and return it

        $html .= '</table>';
        return $html;



    }

}


class system{
    static public function Printpage(){

    }
}