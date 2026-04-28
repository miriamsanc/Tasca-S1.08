<?php
class SpeedSensor{
    public function getThreshold(int $speed): string {
        return match (true){
            $speed < 30 => "Molt lent",
            $speed <= 60 => "Velocitat adecuada",
            $speed <= 80 => "Excès lleu",
            $speed <= 100 => "Excès moderat",
            default => "Excés greu",
        };
    }
}

?>