<?php
class ChildList{
    private $name;
    private $age;
    
    public function __construct($parents,$age)
    {
        $this->parents = $parents;
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
    
}
$damirdineChilds = new ChildList(
    $child1,$child2,$child3
);

$damirdineChilds = new ChildList(
    $child1,$child2,$child3
);

?>