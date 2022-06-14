## Recherche instance d'une class globale
`
function get_instances_of_class($class) {
     $instances = array();

     foreach ($GLOBALS as $value) {
         if (is_a($value, $class) || is_subclass_of($value, $class)) 
         {
         array_push($instances, $value);
         }
     }

     return $instances;
 };
$employeList = get_instances_of_class("Employe");
`