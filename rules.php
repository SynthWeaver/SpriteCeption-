<style>
    span{
        display: inline-block;
    }

    .tile{
        width: 32px;
        height: 32px;
    }

    .stone{
        background-color: grey;
    }

    .grass{
        background-color: green;
    }
</style>

<?php

function draw($array){
    $string = "<table>";

    foreach($array as $row){
        $string .= "<tr>";
        foreach($row as $value){
            $string .= "<td>$value</td>";
        }
        $string .= "</tr>";
    }

    return $string . "</table>";
}

$stone = "<div class='tile stone'></div>";
$grass = "<div class='tile grass'></div>";

$roadV = draw(
    array(
        array($grass, $grass, $stone, $stone, $grass, $grass),
        array($grass, $grass, $stone, $stone, $grass, $grass),
        array($grass, $grass, $stone, $stone, $grass, $grass),
        array($grass, $grass, $stone, $stone, $grass, $grass),
        array($grass, $grass, $stone, $stone, $grass, $grass),
        array($grass, $grass, $stone, $stone, $grass, $grass),
    )
);

$roadH = draw(
    array(
        array($grass, $grass, $grass, $grass, $grass, $grass),
        array($grass, $grass, $grass, $grass, $grass, $grass),
        array($stone, $stone, $stone, $stone, $stone, $stone),
        array($stone, $stone, $stone, $stone, $stone, $stone),
        array($grass, $grass, $grass, $grass, $grass, $grass),
        array($grass, $grass, $grass, $grass, $grass, $grass),
    )
);

$grassField = draw(
    array(
        array($grass, $grass, $grass, $grass, $grass, $grass),
        array($grass, $grass, $grass, $grass, $grass, $grass),
        array($grass, $grass, $grass, $grass, $grass, $grass),
        array($grass, $grass, $grass, $grass, $grass, $grass),
        array($grass, $grass, $grass, $grass, $grass, $grass),
        array($grass, $grass, $grass, $grass, $grass, $grass),
    )
);

$roadCorner1 = draw(
    array(
        array($grass, $grass, $grass, $grass, $grass, $grass),
        array($grass, $grass, $grass, $grass, $grass, $grass),
        array($stone, $stone, $stone, $stone, $grass, $grass),
        array($stone, $stone, $stone, $stone, $grass, $grass),
        array($grass, $grass, $stone, $stone, $grass, $grass),
        array($grass, $grass, $stone, $stone, $grass, $grass),
    )
);

$highwayLB = draw(
    array(
        array($roadH, $roadCorner1),
        array($grassField, $roadV),
    )
);

$highwayLT = "
    <div style='transform: rotate(90deg)'>$highwayLB</div>
";

$highwayRT = "
    <div style='transform: rotate(180deg)'>$highwayLB</div>
";

$highwayRB = "
    <div style='transform: rotate(270deg)'>$highwayLB</div>
";

$highway69 = draw(
    array(
        array($highwayRB, $highwayLB),
        array($highwayRT, $highwayLT),
    )
);

$spawn = $highway69;
