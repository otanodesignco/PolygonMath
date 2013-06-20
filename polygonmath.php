<?php 
/* returns the circumference of a circle */ 
function circumference($R,$inType = "R") 
{ 

    $pi = atan(1) * 4; 

    $area; 
     
    if(is_numeric($R)) 
    { 
         
        switch($inType) 
        { 
             
            case "R": 
             
                $area = (2 * $pi) * $R; 
             
                return $area; 
                 
            break; 
             
            case "D": 
             
                $area = $pi * $R; 
                 
                return $area; 
                 
            break; 
             
            default: 
             
                return 0; 
                 
            break; 
             
        } 
         
    } 
    else 
    { 
     
        return 0; 
         
    } 
     
} 
/* returns the radius from the circles area */ 
function radiusFromArea($A,$roundPlace = 0) 
{ 
     
    $pi = atan(1) * 4; 
     
    if(is_numeric($A)) 
    { 
         
        $R = sqrt($A / $pi); 
         
        if(is_numeric($roundPlace)) 
        { 
         
            if($roundPlace == 0) 
            { 
             
                return $R; 
             
            } 
            else 
            { 
             
                return round($R,$roundPlace); 
             
            } 
             
        } 
        else 
        { 
         
            return round($R); 
             
        } 
         
         
         
    } 
    else 
    { 
         
        return 0; 
     
    } 
     
} 
/* returns the radius of a circle from its circumference */ 
function radiusFromCircumference($C,$roundPlace) 
{ 

    $pi = atan(1) * 4; 
     
    if(is_numeric($C)) 
    { 
         
        $R = $C / (2 * $pi); 
         
        if(is_numeric($roundPlace)) 
        { 
             
            if($roundPlace == 0) 
            { 
                 
                return $R; 
                 
            } 
            else 
            { 
             
                return round($R,$roundPlace); 
                 
            } 
             
        } 
        else 
        { 
             
            return round($R); 
             
        } 
         
    } 
    else 
    { 
         
        return 0; 
         
    } 
     
} 
/* returns the volume of a sphere and takes in either radius or diameter */ 
function sphereVol($R, $round = 0, $inType = "R") 
{ 
     
    if(is_numeric($R)) 
    { 
     
        $pi = atan(1) * 4; 
        $frac = 4/3; 
         
        switch($inType) 
        { 
             
            case "R": 
             
            $pre = pow($R,3); 
            $vol = ($frac * $pi) * $pre; 
             
            if(is_numeric($round)) 
            { 
                 
                if($round == 0) 
                { 
                     
                    return $vol; 
                     
                } 
                else 
                { 
                     
                    return round($vol, $round); 
                     
                } 
                 
            } 
            else 
            { 
                 
                return round($vol); 
                 
            } 
                     
            break; 
             
            case "D": 
             
            $nR = $R /2; 
            $pre = pow($nR, 3); 
            $vol = ($frac * $pi) * $pre; 
             
            if(is_numeric($round)) 
            { 
                 
                if($round == 0) 
                { 
                     
                    return $vol; 
                     
                } 
                else 
                { 
                     
                    return round($vol, $round); 
                     
                } 
                 
            } 
            else 
            { 
                 
                return round($vol); 
                 
            } 
            break; 
             
            default: 
             
            return 0; 
             
            break; 
             
        } 
         
    } 
    else 
    { 
         
        return 0; 
         
    } 
     
} 
/*  returns the surface area of a sphere and takes in either radius or diameter  */ 
function sphereSurfaceArea($R, $round = 0, $inType = "R") 
{ 

    $pi = atan(1) * 4; 
     
    $num = 4; 
     
    if(is_numeric($R)) 
    { 
         
        switch($inType) 
        { 
             
            case "R": 
             
            $pow = pow($R,2); 
             
            $area = ($num * $pi) * $pow; 
             
            if(is_numeric($round)) 
            { 
                 
                if($round == 0) 
                { 
                     
                    return $area; 
                     
                } 
                else 
                { 
                     
                    return round($area, $round); 
                     
                } 
                 
            } 
            else 
            { 
                 
                return round($area); 
                 
            } 
            break; 
             
            case "D": 
             
            $nR = $R /2; 
             
            $pow = pow($nR,2); 
             
            $area = ($num * $pi) * $pow; 
             
            if(is_numeric($round)) 
            { 
                 
                if($round == 0) 
                { 
                     
                    return $area; 
                     
                } 
                else 
                { 
                     
                    return round($area, $round); 
                     
                } 
                 
            } 
            else 
            { 
                 
                return round($area); 
                 
            } 
            break; 
             
            default: 
             
            return 0; 
             
            break; 
             
             
        } 
         
    } 
    else 
    { 
         
        return 0; 
         
    } 
     
} 
/* returns the frustum volume for both cones and pyramids excepts characters for round param for regular rounding  */ 
function frustumVol($h, $b1, $b2, $round = 0) 
{ 

    $frac = 1/3; 
     
    $sqrt = sqrt($b1 * $b2); 
     
    if(is_numeric($h) && is_numeric($b1) && is_numeric($b2)) 
    { 
         
        $vold = $frac * $h; 
         
        $vol = $vold * ($b1 + $b2 + $sqrt); 
         
        if(is_numeric($round)) 
        { 
             
            if($round == 0) 
            { 
                 
                return $vol; 
                 
            } 
            else 
            { 
                 
                return round($vol, $round); 
                 
            } 
             
        } 
        else 
        { 
             
            return round($vol); 
             
        } 
         
         
         
    } 
    else 
    { 
         
        return 0; 
         
    } 
     
} 
/* returns a pyramid frustum's area */ 
function pyramidFrustumArea($s,$p1,$p2,$round=0) 
{ 

    $frac = 1/2; 
     
    if(is_numeric($s) && is_numeric($p1) && is_numeric($p2)) 
    { 
         
        $P = $p1 + $p2; 
         
        $area = ($frac * $s) * $P; 
         
        if(is_numeric($round)) 
        { 
             
            if($round == 0) 
            { 
                 
                return $area; 
                 
            } 
            else 
            { 
                 
                return round($area,$round); 
                 
            } 
             
        } 
        else 
        { 
             
            return round($area); 
             
        } 
         
    } 
    else 
    { 
         
        return 0; 
         
    } 
} 

function coneFrustumArea($s,$r1,$r2,$round=0) 
{ 
     
    $pi = atan(1) * 4; 
     
    if(is_numeric($s) && is_numeric($r1) && is_numeric($r2)) 
    { 
         
        $R = $r1 + $r2; 
        $area = ($pi * $s) * $R; 
         
        if(is_numeric($round)) 
        { 
             
            if($round == 0) 
            { 
                 
                return $area; 
                 
            } 
            else 
            { 
                 
                return round($area,$round); 
                 
            } 
             
        } 
        else 
        { 
             
            return round($area); 
             
        } 
         
    } 
    else 
    { 
         
        return 0; 
         
    } 
     
     
     
} 

function volume($b,$h,$poly) 
{ 

    $frac = 1/3; 
     
    $pi = atan(1) * 4; 

    if(is_numeric($h) && is_numeric($b)) 
    { 
         
        switch($poly) 
        { 
         
            case "pyramid": 
             
                $vol = $frac * ($b * $h); 
                 
                return $vol; 
             
            break; 
             
            case "cone": 
             
                $R = pow($b,2); 
                $vol = ($frac * $pi) * ($R * $h); 
                return $vol; 
                 
            break; 
             
            case "prism": 
             
                $vol = $b * $h; 
                 
                return $vol; 
             
            break; 
             
            default: 
             
                return 0; 
                 
            break; 
         
        } 
         
    } 
    else 
    { 
         
        return 0; 
         
    } 
     
} 

function circleArea($r,$type="R") 
{ 
     
    $pi = atan(1) * 4; 
    $R = $r/2; 
     
     
    if($type == "R") 
    { 
     
        $area = $pi * pow($r,2); 
        return $area; 
    } 
    else if($type == "D") 
    { 
         
        $area = ($pi * pow($r,2)) / 4; 
         
        return $area; 
         
    } 
     
} 

?>