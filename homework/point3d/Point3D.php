<?php

class Point3D
{
    public $x, $y, $z;
    public function __construct($x = 0, $y = 0, $z = 0)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function Distance()
    {
        return sqrt($this->x ** 2 + $this->y ** 2 + $this->z ** 2);
    }
    public static function Magnitude(Point3D $p1, Point3D $p2)
    {
        return sqrt(($p1->x - $p2->x) ** 2 +
            ($p1->y - $p2->y) ** 2 + ($p1->z - $p2->z) ** 2);
    }
}

$p1 = new Point3D(1, 3, 0);
$p2 = new Point3D(5, 3, 2);

echo "p1 ".$p1->Distance().", p2 ".$p2->Distance()."\n";
echo Point3D::Magnitude($p1, $p2);