<?php
include "./php/database_connection.php";

if(!isset($_COOKIE["type"]))
{
 header("location:connexion-page.php");
}
else
{
    $request = $connect->prepare("SELECT * FROM permissions NATURAL JOIN possess NATURAL JOIN user WHERE user.id_user=:id_user");
    $request->execute(array('id_user'=>$_COOKIE["type"]));
    $rows = $request->fetchAll();

    foreach($rows as $row)
    {
        echo $row['permissions'];

        if ($row['permissions'] == "sFx1"){$sFx1 = true;}else{$sFx1 = false;}
        if ($row['permissions'] == "sFx2"){$sFx2 = true;}else{$sFx2 = false;}
        if ($row['permissions'] == "sFx3"){$sFx3 = true;}else{$sFx3 = false;}
        if ($row['permissions'] == "sFx4"){$sFx4 = true;}else{$sFx4 = false;}
        if ($row['permissions'] == "sFx5"){$sFx5 = true;}else{$sFx5 = false;}
        if ($row['permissions'] == "sFx6"){$sFx6 = true;}else{$sFx6 = false;}
        if ($row['permissions'] == "sFx7"){$sFx7 = true;}else{$sFx7 = false;}
        if ($row['permissions'] == "sFx8"){$sFx8 = true;}else{$sFx8 = false;}
        if ($row['permissions'] == "sFx9"){$sFx9 = true;}else{$sFx9 = false;}
        if ($row['permissions'] == "sFx10"){$sFx10 = true;}else{$sFx10 = false;}
        if ($row['permissions'] == "sFx11"){$sFx11 = true;}else{$sFx11 = false;}
        if ($row['permissions'] == "sFx12"){$sFx12 = true;}else{$sFx12 = false;}
        if ($row['permissions'] == "sFx13"){$sFx13 = true;}else{$sFx13 = false;}
        if ($row['permissions'] == "sFx14"){$sFx14 = true;}else{$sFx14 = false;}
        if ($row['permissions'] == "sFx15"){$sFx15 = true;}else{$sFx15 = false;}
        if ($row['permissions'] == "sFx16"){$sFx16 = true;}else{$sFx16 = false;}
        if ($row['permissions'] == "sFx17"){$sFx17 = true;}else{$sFx17 = false;}
        if ($row['permissions'] == "sFx18"){$sFx18 = true;}else{$sFx18 = false;}
        if ($row['permissions'] == "sFx19"){$sFx19 = true;}else{$sFx19 = false;}
        if ($row['permissions'] == "sFx20"){$sFx20 = true;}else{$sFx20 = false;}
        if ($row['permissions'] == "sFx21"){$sFx21 = true;}else{$sFx21 = false;}
        if ($row['permissions'] == "sFx22"){$sFx22 = true;}else{$sFx22 = false;}
        if ($row['permissions'] == "sFx23"){$sFx23 = true;}else{$sFx23 = false;}
        if ($row['permissions'] == "sFx24"){$sFx24 = true;}else{$sFx24 = false;}
        if ($row['permissions'] == "sFx25"){$sFx25 = true;}else{$sFx25 = false;}
        if ($row['permissions'] == "sFx26"){$sFx26 = true;}else{$sFx26 = false;}
        if ($row['permissions'] == "sFx27"){$sFx27 = true;}else{$sFx27 = false;}
        if ($row['permissions'] == "sFx28"){$sFx28 = true;}else{$sFx28 = false;}
        if ($row['permissions'] == "sFx29"){$sFx29 = true;}else{$sFx29 = false;}
        if ($row['permissions'] == "sFx30"){$sFx30 = true;}else{$sFx30 = false;}
        if ($row['permissions'] == "sFx31"){$sFx31 = true;}else{$sFx31 = false;}
        if ($row['permissions'] == "sFx32"){$sFx32 = true;}else{$sFx32 = false;}
        if ($row['permissions'] == "sFx33"){$sFx33 = true;}else{$sFx33 = false;}
        if ($row['permissions'] == "sFx34"){$sFx34 = true;}else{$sFx34 = false;}
        if ($row['permissions'] == "sFx35"){$sFx35 = true;}else{$sFx35 = false;}
        
    }
}