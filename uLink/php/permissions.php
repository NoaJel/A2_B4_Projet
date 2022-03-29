<?php
require_once "./php/database_connection.php";

if(!isset($_COOKIE["type"]))
{
 header("location:connexion-page.php");
}
else
{
$sFx1	= false;
$sFx2	= false;
$sFx3	= false;
$sFx4	= false;
$sFx5	= false;
$sFx6	= false;
$sFx7	= false;
$sFx8	= false;
$sFx9	= false;
$sFx10	= false;
$sFx11	= false;
$sFx12	= false;
$sFx13	= false;
$sFx14	= false;
$sFx15	= false;
$sFx16	= false;
$sFx17	= false;
$sFx18	= false;
$sFx19	= false;
$sFx20	= false;
$sFx21	= false;
$sFx22	= false;
$sFx23	= false;
$sFx24	= false;
$sFx25	= false;
$sFx26	= false;
$sFx27	= false;
$sFx28	= false;
$sFx29	= false;
$sFx30	= false;
$sFx31	= false;
$sFx32	= false;
$sFx33	= false;
$sFx34	= false;
$sFx35	= false;
    $request = $connect->prepare("SELECT * FROM permissions NATURAL JOIN possess NATURAL JOIN user WHERE user.id_user=:id_user");
    $request->execute(array('id_user'=>$_COOKIE["type"]));
    $rows = $request->fetchAll();

    foreach($rows as $row)
    {
        //echo $row['permissions'];

        if ($row['permissions'] == "sFx1"){$sFx1 = true;}
        if ($row['permissions'] == "sFx2"){$sFx2 = true;}
        if ($row['permissions'] == "sFx3"){$sFx3 = true;}
        if ($row['permissions'] == "sFx4"){$sFx4 = true;}
        if ($row['permissions'] == "sFx5"){$sFx5 = true;}
        if ($row['permissions'] == "sFx6"){$sFx6 = true;}
        if ($row['permissions'] == "sFx7"){$sFx7 = true;}
        if ($row['permissions'] == "sFx9"){$sFx9 = true;}
        if ($row['permissions'] == "sFx10"){$sFx10 = true;}
        if ($row['permissions'] == "sFx11"){$sFx11 = true;}
        if ($row['permissions'] == "sFx12"){$sFx12 = true;}
        if ($row['permissions'] == "sFx13"){$sFx13 = true;}
        if ($row['permissions'] == "sFx14"){$sFx14 = true;}
        if ($row['permissions'] == "sFx15"){$sFx15 = true;}
        if ($row['permissions'] == "sFx16"){$sFx16 = true;}
        if ($row['permissions'] == "sFx17"){$sFx17 = true;}
        if ($row['permissions'] == "sFx18"){$sFx18 = true;}
        if ($row['permissions'] == "sFx19"){$sFx19 = true;}
        if ($row['permissions'] == "sFx20"){$sFx20 = true;}
        if ($row['permissions'] == "sFx21"){$sFx21 = true;}
        if ($row['permissions'] == "sFx22"){$sFx22 = true;}
        if ($row['permissions'] == "sFx23"){$sFx23 = true;}
        if ($row['permissions'] == "sFx24"){$sFx24 = true;}
        if ($row['permissions'] == "sFx25"){$sFx25 = true;}
        if ($row['permissions'] == "sFx26"){$sFx26 = true;}
        if ($row['permissions'] == "sFx27"){$sFx27 = true;}
        if ($row['permissions'] == "sFx28"){$sFx28 = true;}
        if ($row['permissions'] == "sFx29"){$sFx29 = true;}
        if ($row['permissions'] == "sFx30"){$sFx30 = true;}
        if ($row['permissions'] == "sFx31"){$sFx31 = true;}
        if ($row['permissions'] == "sFx32"){$sFx32 = true;}
        if ($row['permissions'] == "sFx33"){$sFx33 = true;}
        if ($row['permissions'] == "sFx34"){$sFx34 = true;}
        if ($row['permissions'] == "sFx35"){$sFx35 = true;}
    }
}
?>


