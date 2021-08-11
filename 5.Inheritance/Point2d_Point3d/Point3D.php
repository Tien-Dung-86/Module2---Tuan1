<?php

class Point3D extends Point2D
{
    public float $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z)
    {
        parent::setXY($x, $y);
        $this->z = $z;
    }

    public function getXYZ()
    {
        $xyz = [$this->x, $this->y, $this->z];
        return "(" . $xyz[0] . ", " . $xyz[1] .", ".$xyz[2]. ")";
    }

    public function toString()
    {
        parent::toString();
        echo "XYZ: " . $this->getXYZ() . "<br>";
    }
}