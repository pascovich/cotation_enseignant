<?php

include('../database/connect.php');

if($_POST['id_promotion'] && $_POST['id_annee'])
{


$statement = $db->prepare("SELECT (SUM(cote)*100)/SUM(maxs) as cote_percent, tri_cotation.prom, tri_cotation.date_passassion_cours,tri_cotation.prom,tri_cotation.annee,tri_cotation.enseignant,tri_cotation.cours, SUM(cote) as somme_cote,SUM(maxs) as somme_max FROM tri_cotation WHERE (id_annee=:id_annee and id_promotion=:id_promotion) GROUP BY cours,annee");
$statement->execute(array(
    'id_annee' => $_POST['id_annee'],
    'id_promotion' => $_POST['id_promotion']
    )
);
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();


$somme=0;
$total=0;
$idd=0;
foreach($result as $row)
{ $idd++; ?>
    
        <tr>
            <td><?=$idd?></td>
            <td><?=$row["date_passassion_cours"];?></td>
            <td><?=$row["annee"];?></td>
            <td><?=$row["prom"];?></td>
            <td><?=$row["cours"];?></td>
            <td><?=$row["enseignant"];?></td>
            <td>
                <?=$row["cote_percent"];?>%
                    
                </td>
            <td>100%</td>
           
            
        </tr>
   <?php      
    }
 
}


?>