<?php


class Weg
{
    public $lengte;
    public $vertragingDoorFile;
}

class voertuig
{
    public $bandenSpanning;
    public $snelheid;

    function snelheid($objWeg)
    {
        $Snelheid = ($this->snelheid/100) * $this->bandenSpanning;

        return $Snelheid;
    }

    function reistijd($objWeg)
    {
        $reistijd = ($objWeg->lengte / $this->snelheid($objWeg) * 60);
        
        return $reistijd;
    }
}