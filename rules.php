<style>
    span{
        display: inline-block;
    }

    .tile{
        width: 32px;
        height: 32px;
        display: inline-block;
    }

    .stone{
        background-color: grey;
    }

    .grass{
        background-color: green;
    }
</style>

<?php

function loop($tile, $amound){
    $html = "";
    
    for ($i=0; $i < $amound ; $i++) { 
        $html = $html . $tile;
    }

    return $html;
}

$stone = "<div class='tile stone'></div>";


$grass = "<div class='tile grass'></div>";

$roadV = "
    <span>
        <div>$grass $grass $stone $stone $grass $grass</div>
        <div>$grass $grass $stone $stone $grass $grass</div>
        <div>$grass $grass $stone $stone $grass $grass</div>
        <div>$grass $grass $stone $stone $grass $grass</div>
        <div>$grass $grass $stone $stone $grass $grass</div>
        <div>$grass $grass $stone $stone $grass $grass</div>
    </span>
";

$roadH = "
    <span>
        <div>$grass $grass $grass $grass $grass $grass</div>
        <div>$grass $grass $grass $grass $grass $grass</div>
        <div>$stone $stone $stone $stone $stone $stone</div>
        <div>$stone $stone $stone $stone $stone $stone</div>
        <div>$grass $grass $grass $grass $grass $grass</div>
        <div>$grass $grass $grass $grass $grass $grass</div>
    </span>
";

$grassField = "
    <span>    
        <div>$grass $grass $grass $grass $grass $grass</div>
        <div>$grass $grass $grass $grass $grass $grass</div>
        <div>$grass $grass $grass $grass $grass $grass</div>
        <div>$grass $grass $grass $grass $grass $grass</div>
        <div>$grass $grass $grass $grass $grass $grass</div>
        <div>$grass $grass $grass $grass $grass $grass</div>
    </span>
";

$roadCorner1 =  "
    <span>
        <div>$grass $grass $grass $grass $grass $grass</div>
        <div>$grass $grass $grass $grass $grass $grass</div>
        <div>$stone $stone $stone $stone $grass $grass</div>
        <div>$stone $stone $stone $stone $grass $grass</div>
        <div>$grass $grass $stone $stone $grass $grass</div>
        <div>$grass $grass $stone $stone $grass $grass</div>
    </span>
";

$highwayLB = "
    <span>    
        <div>$roadH $roadCorner1</div>
        <div>$grassField $roadV</div>
    </span>
";

$highwayLT = "
    <span style='transform: rotate(90deg)'>$highwayLB</span>
";

$highwayRT = "
    <span style='transform: rotate(180deg)'>$highwayLB</span>
";

$highwayRB = "
    <span style='transform: rotate(270deg)'>$highwayLB</span>
";

$highway69 = "
    <span>    
        <div>$highwayRB $highwayLB</div>
        <div>$highwayRT $highwayLT</div>
    </span>
";

$spawn = $highway69;
