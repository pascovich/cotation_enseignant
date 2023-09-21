<?php

namespace Dompdf;

require_once 'dompdf/autoload.inc.php';
include '../database/connect.php';

$id_promotion = $_POST['id_promotion'];
$cours = $_POST['id_cours'];

$rqt = $db->query("SELECT * from report_cours_cotation WHERE id_promotion='$id_promotion' and cours='$cours'");
$rqt->execute();
// $rqt2 = mysqli_query($db, $rqt) or die(mysql_error());
$result = array();

$htmldata = '';
$id=0;
$entete='';
$body='';

while($fetchdata=$rqt->fetch()){
	$idd++;
	$entete.='

		<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td></td>
		<td class="csB63DDD09" colspan="5" style="width:186px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>PROMOTION&nbsp;&amp;&nbsp;OPTION&nbsp;:</nobr></td>
		<td></td>
		<td class="csE3FFF3AB" colspan="9" style="width:186px;height:19px;line-height:17px;text-align:left;vertical-align:top;"><nobr>'.$fetchdata['prom'].'</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td></td>
		<td class="csB63DDD09" colspan="5" style="width:186px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>ANNEE-ACADEMIQUE&nbsp;&nbsp;&nbsp;&nbsp;:</nobr></td>
		<td></td>
		<td class="csE3FFF3AB" colspan="9" style="width:186px;height:19px;line-height:17px;text-align:left;vertical-align:top;"><nobr>'.$fetchdata['annee'].'</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td></td>
		<td class="csB63DDD09" colspan="5" style="width:186px;height:20px;line-height:18px;text-align:left;vertical-align:top;"><nobr>COURS&nbsp;DE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</nobr></td>
		<td></td>
		<td class="csE3FFF3AB" colspan="9" style="width:186px;height:20px;line-height:17px;text-align:left;vertical-align:top;"><nobr>'.$fetchdata['cours'].'</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td></td>
		<td class="csB63DDD09" colspan="5" style="width:186px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>DATE&nbsp;HORAIRE</nobr></td>
		<td></td>
		<td class="csE3FFF3AB" colspan="10" style="width:205px;height:19px;line-height:17px;text-align:left;vertical-align:top;"><nobr>'.$fetchdata['date_passassion_cours'].'</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td></td>
		<td class="csB63DDD09" colspan="5" style="width:186px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>ENSEIGNANT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</nobr></td>
		<td></td>
		<td class="csE3FFF3AB" colspan="10" style="width:205px;height:19px;line-height:17px;text-align:left;vertical-align:top;"><nobr>'.$fetchdata['enseignant'].'</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:13px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:3px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	';

	$body.='

		<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="cs75E96840" colspan="2" style="width:59px;height:23px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>1</nobr></td>
		<td class="cs48B2CC25" colspan="23" style="width:525px;height:23px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Ponctualit&#233;</nobr></td>
		<td class="cs48B2CC25" colspan="3" style="width:99px;height:23px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['ponctualite'].'</nobr></td>
		<td class="cs48B2CC25" colspan="2" style="width:77px;height:23px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>2</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Respect&nbsp;de&nbsp;la&nbsp;charge&nbsp;horaire</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['charge_horaire'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>3</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Distribution&nbsp;du&nbsp;contenu&nbsp;minimum&nbsp;et&nbsp;les&nbsp;objectifs&nbsp;du&nbsp;cours</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['distribution'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>4</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Contenu&nbsp;du&nbsp;cours&nbsp;et&nbsp;les&nbsp;objectifs&nbsp;institutionnels</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['contenu1'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Maitrise&nbsp;et&nbsp;communication&nbsp;de&nbsp;la&nbsp;mati&#232;re</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['maitrise'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>6</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Lien&nbsp;entre&nbsp;le&nbsp;cours&nbsp;et&nbsp;le&nbsp;stravaux&nbsp;pratiques</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['lien_cours_travaux'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>7</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Communication&nbsp;de&nbsp;la&nbsp;bibliographie&nbsp;du&nbsp;cours</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['communication'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>8</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Contenu&nbsp;du&nbsp;cours&nbsp;en&nbsp;rapport&nbsp;avec&nbsp;la&nbsp;profession</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['contenu2'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>9</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Utilisation&nbsp;des&nbsp;TIC</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['tic'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:26px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:25px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>10</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:25px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Sens&nbsp;p&#233;dagogique&nbsp;et&nbsp;m&#233;thodologie</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:25px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['peda'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:25px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>11</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Organisation&nbsp;des&nbsp;interrogations</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['interro'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>12</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Correction&nbsp;d\'int&#233;rrogations&nbsp;pendant&nbsp;le&nbsp;cours</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['correction_interro'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>13</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>L\'examen&nbsp;couvre&nbsp;l\'ensembe&nbsp;de&nbsp;la&nbsp;mati&#232;re</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['examen'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>14</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Correction&nbsp;&#224;&nbsp;temps&nbsp;de&nbsp;l\'examen</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['correction_examen'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>15</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Syllabus&nbsp;pour&nbsp;le&nbsp;cours</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['syllabus'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>16</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Maitrise&nbsp;de&nbsp;l\'auditoire</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['maitrise1'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>17</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Sens&nbsp;de&nbsp;responsabilit&#233;</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['responsabilite'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>18</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>R&#233;lations&nbsp;avec&nbsp;les&nbsp;coll&#232;gues</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['relation_collegue'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>19</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>R&#233;lations&nbsp;avec&nbsp;les&nbsp;&#233;tudiants</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['relation_etudiant'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:24px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:26px;"></td>
		<td class="csA5B070AD" colspan="2" style="width:59px;height:25px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>20</nobr></td>
		<td class="csD99AA0E0" colspan="23" style="width:525px;height:25px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>Disponibilit&#233;&nbsp;aux&nbsp;contacts</nobr></td>
		<td class="csD99AA0E0" colspan="3" style="width:99px;height:25px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['relation_contact'].'</nobr></td>
		<td class="csD99AA0E0" colspan="2" style="width:77px;height:25px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs4F1C6E9A" colspan="24" style="width:575px;height:22px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>TOTAL&nbsp;OBTENU&nbsp;SUR&nbsp;100</nobr></td>
		<td class="cs4C5A98CB" colspan="7" style="width:193px;height:22px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>'.$fetchdata['percent'].'</nobr></td>
		<td></td>
	</tr>


	 ';

}



$htmldata = '' .
		

'
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html>
<head>
	<title>exemple_report</title>
	<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8"/>
	<style type="text/css">
		.cs5971619E {color:#000000;background-color:#000000;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs4F1C6E9A {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Verdana; font-size:15px; font-weight:bold; font-style:normal; }
		.cs75E96840 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Verdana; font-size:15px; font-weight:normal; font-style:normal; }
		.cs60B6F62C {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Verdana; font-size:15px; font-weight:bold; font-style:normal; }
		.csA5B070AD {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Verdana; font-size:15px; font-weight:normal; font-style:normal; }
		.cs4C5A98CB {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Verdana; font-size:15px; font-weight:bold; font-style:normal; }
		.cs48B2CC25 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Verdana; font-size:15px; font-weight:normal; font-style:normal; }
		.cs578F4C91 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Verdana; font-size:15px; font-weight:bold; font-style:normal; }
		.csD99AA0E0 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Verdana; font-size:15px; font-weight:normal; font-style:normal; }
		.csE3FFF3AB {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Lucida Fax; font-size:15px; font-weight:normal; font-style:italic; padding-left:2px;}
		.csB63DDD09 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Lucida Fax; font-size:15px; font-weight:normal; font-style:normal; padding-left:2px;}
		.cs4718E0E1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Lucida Fax; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;}
		.cs101A94F7 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
	</style>
</head>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:780px;height:946px;position:relative;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td style="width:10px;"></td>
		<td style="width:51px;"></td>
		<td style="width:49px;"></td>
		<td style="width:15px;"></td>
		<td style="width:65px;"></td>
		<td style="width:8px;"></td>
		<td style="width:11px;"></td>
		<td style="width:24px;"></td>
		<td style="width:7px;"></td>
		<td style="width:11px;"></td>
		<td style="width:2px;"></td>
		<td style="width:10px;"></td>
		<td style="width:46px;"></td>
		<td style="width:13px;"></td>
		<td style="width:10px;"></td>
		<td style="width:65px;"></td>
		<td style="width:19px;"></td>
		<td style="width:20px;"></td>
		<td style="width:14px;"></td>
		<td style="width:52px;"></td>
		<td style="width:43px;"></td>
		<td style="width:19px;"></td>
		<td style="width:11px;"></td>
		<td style="width:2px;"></td>
		<td style="width:10px;"></td>
		<td style="width:67px;"></td>
		<td style="width:1px;"></td>
		<td style="width:32px;"></td>
		<td style="width:13px;"></td>
		<td style="width:65px;"></td>
		<td style="width:6px;"></td>
		<td style="width:9px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs101A94F7" colspan="4" rowspan="6" style="width:125px;height:110px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:125px;height:110px;">
			<img alt="" src="exemple_report2_files/974578485.jpg" style="width:125px;height:110px;" /></div>
		</td>
		<td class="cs4718E0E1" colspan="22" style="width:527px;height:22px;line-height:19px;text-align:left;vertical-align:top;"><nobr>MINISTERE&nbsp;D\'ENSEIGNEMENT&nbsp;SUPERIEUR&nbsp;ET&nbsp;UNIVERSITAIRE</nobr></td>
		<td></td>
		<td class="cs101A94F7" colspan="5" rowspan="6" style="width:125px;height:110px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:125px;height:110px;">
			<img alt="" src="exemple_report2_files/3087699795.jpg" style="width:125px;height:110px;" /></div>
		</td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td class="cs4718E0E1" colspan="18" style="width:383px;height:22px;line-height:19px;text-align:left;vertical-align:top;"><nobr>INSTITUT&nbsp;SUPERIEUR&nbsp;DE&nbsp;COMMERCE/GOMA</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs4718E0E1" colspan="8" style="width:237px;height:22px;line-height:19px;text-align:left;vertical-align:top;"><nobr>PROVINCE&nbsp;DU&nbsp;NORD-KIVU</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs4718E0E1" colspan="2" style="width:82px;height:22px;line-height:19px;text-align:left;vertical-align:top;"><nobr>BP.8633</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:14px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:8px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs4718E0E1" colspan="13" rowspan="2" style="width:310px;height:22px;line-height:19px;text-align:left;vertical-align:top;"><nobr>FICHE&nbsp;DE&nbsp;COTATION&nbsp;DU&nbsp;COURS</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:14px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:1px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs5971619E" colspan="22" style="width:529px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:1px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs101A94F7" colspan="22" style="width:529px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:30px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:1px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs101A94F7" colspan="5" rowspan="7" style="width:125px;height:110px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:125px;height:110px;">
			<img alt="" src="exemple_report2_files/4273496728.jpg" style="width:125px;height:110px;" /></div>
		</td>
	</tr>
	'.$entete.'
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td></td>
		<td class="csB63DDD09" colspan="2" style="width:98px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>E=Excellent</nobr></td>
		<td></td>
		<td class="csB63DDD09" colspan="5" style="width:113px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>TB=Tr&#232;s&nbsp;Bien</nobr></td>
		<td></td>
		<td></td>
		<td class="csB63DDD09" colspan="2" style="width:54px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>B=Bon</nobr></td>
		<td></td>
		<td class="csB63DDD09" colspan="4" style="width:112px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>M=M&#233;diocre</nobr></td>
		<td></td>
		<td class="csB63DDD09" colspan="3" style="width:112px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>MA=Mauvais</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs4F1C6E9A" colspan="2" style="width:59px;height:22px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>N&#176;</nobr></td>
		<td class="cs4C5A98CB" colspan="23" style="width:525px;height:22px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>CRITERES&nbsp;D\'EVALUATION</nobr></td>
		<td class="cs4C5A98CB" colspan="3" style="width:99px;height:22px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>MENTION</nobr></td>
		<td class="cs4C5A98CB" colspan="2" style="width:77px;height:22px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>MAX</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:1px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	'.$body.'
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs60B6F62C" colspan="24" style="width:575px;height:23px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>APPLICATION&nbsp;D\'ENSEMBLE</nobr></td>
		<td class="cs578F4C91" colspan="7" style="width:193px;height:23px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>8%</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:15px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td></td>
		<td class="csB63DDD09" colspan="28" style="width:688px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>Observations&nbsp;&#233;ventuelles&nbsp;:................................................................................................</nobr></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td></td>
		<td class="csB63DDD09" colspan="9" style="width:239px;height:19px;line-height:18px;text-align:left;vertical-align:top;"><nobr>N.B:&nbsp;E=5;TB=4;B=3;M=2;MA=1</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
</body>
</html>

';
ob_end_clean();
$dompdf = new Dompdf();
$dompdf->loadHtml($htmldata);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("", array("Attachment" => false));
exit(0);