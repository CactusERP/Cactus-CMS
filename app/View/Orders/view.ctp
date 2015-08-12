<?php
	echo $this->html->link('Πίσο στις παραγγελίες', array('controller' => 'orders','action'=>'index'));
	echo "<div class='panel panel-default'>";
	echo "<div class='panel-heading'>";
	echo "<i class='icon-external-link-sign'></i>";
	echo "Order";
	echo "<div class='panel-tools'>";
	echo "</div>";
	echo "</div>";
	echo "<div class='panel-body'>";
									
							
												


	echo "<table   class='table table-striped table-bordered table-hover' id='sample-table-2'>";
	echo "<tr>";
	echo "<th  colspan='6'>Στοιχεια Πελατη - Παραγγελιας</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Όνομα Πελάτη</td>";
	echo "<td>".$order['Order']['Last_Name']." ".$order['Order']['First_Name']."</td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Ημερομηνία</td>";
	echo "<td>".$order['Order']['Date']."</td>";
	echo "</tr>";

	echo "<tr >";
	echo "<td >Διεύθυνση Αποστολής</td>";
	echo "<td>".$order['Order']['Country']." ".$order['Order']['City']." ".$order['Order']['Address']." ".$order['Order']['Postal_Code']."</td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Κωδικός Παραγγελίας</td>";
	echo "<td>".$order['Order']['ID']."</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th>Κωδικoς Προϊoντος</th>";
	echo "<th colspan='2'>Περιγραφη</th>";
	echo "<th>Ποσοτητα</th>";
	echo "<th>Τιμη μοναδας</th>";
	echo "<th>Συνολο</th>";	
	echo "</tr>";

	foreach($details as $detail):
		echo "<tr>";
		echo "<td>".$detail['Detail']['ProductID']."</td>";
		echo "<td colspan='2'>".$detail['Detail']['ProductName']."</td>";
		
		echo "<td>".$detail['Detail']['Amount']."</td>";
		echo "<td>".$detail['Detail']['ProductPrice']."</td>";
		echo "<td>".$detail['Detail']['SubTotal']."</td>";
		echo "</tr>";
	endforeach;
	
	echo "<tr>";
	echo "<th colspan='6'>Στοιχεια Μεταφορας - Πληρωμης</th>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Μεταφορά μέσο</td>";
	echo "<td>".$order['Order']['Post_Method']."</td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Μερικό σύνολο</td>";
	echo "<td>".$order['Order']['Cost']."€</td>";
	echo "</tr>";
	
	
	echo "<tr>";
	echo "<td>Πληρωμή μέσο</td>";
	echo "<td>".$order['Order']['Payment_Method']."</td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Φ.Π.Α.</td>";
	echo "<td>23%</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Τελικό Σύνολο</td>";
	echo "<td>".$order['Order']['Cost']."€</td>";
	echo "</tr>";
	echo "</table>";
?>


