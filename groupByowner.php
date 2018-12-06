class FileOwners
{
    public static function groupByOwners($files)
    {
       $outarry = array();
       foreach ($files as $key => $file_value){
           if(in_array($file_value,$files)){
               $outarry[$file_value][] = $key; 
           }
           
       }
        return $outarry;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));
