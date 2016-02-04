<?php
?>

<script type="text/javascript">
<!--
function submitFormInscription(){
	return document.getElementById("formInscription").submit();
}
//-->
</script>
<form action="/nobressart/index.php/inscriptions/inscription/submitInscription" id="formInscription"
	method="post">
	<table>
		<tr>
			<td><label>Nom</label></td>
			<td><input type="text" name="lastName" id="lastName" /></td>
		</tr>
		<tr>
			<td><label>Prenom</label></td>
			<td><input type="text" name="firstName" id="firstName" /></td>
		</tr>
		<tr>
			<td><label>Sexe</label></td>
			<td><select name="sex" id="sex">
					<option value="H">Homme</option>
					<option value="F">Femme</option>
			</select>
			</td>
		</tr>
		<tr>
			<td><label>Adresse</label></td>
			<td><textarea cols="25" rows="3" name="address" id="address"></textarea>
			</td>
		</tr>
		<tr>
			<td><label>Code Postal</label></td>
			<td><input type="text" name="zipCode" id="zipCode" /></td>
		</tr>
		<tr>
			<td><label>Ville</label></td>
			<td><input type="text" name="town" id="town" /></td>
		</tr>
		<tr>
			<td><label>Pays</label></td>
			<td><?php $this->load->view("commons/forms/pays"); ?></td>
		</tr>
		<tr>
			<td><label>E-mail</label></td>
			<td><input type="text" name="email" id="email" /></td>
		</tr>
		<tr>
			<td><label>Date de naissance</label></td>
			<td>
				<span><input id="element_3_1" name="ddnDay" class="element text" size="2" maxlength="2" value="" type="text">/<label for="element_3_1">DD</label> </span> 
				<span><input id="element_3_2" name="ddnMonth" class="element text" size="2" maxlength="2" value="" type="text">/<label for="element_3_2">MM</label></span> 
				<span><input id="element_3_3" name="ddnYear" class="element text" size="4" maxlength="4" value="" type="text"><label for="element_3_3">YYYY</label> </span> 
				<span id="calendar_3"><img id="cal_img_3" class="datepicker" src="/nobressart/images/icons/calendar.gif" alt="Pick a date."></span> 
				<script type="text/javascript">
					Calendar.setup({
					inputField	 : "element_3_3",
					baseField    : "element_3",
					displayArea  : "calendar_3",
					button		 : "cal_img_3",
					ifFormat	 : "%B %e, %Y",
					onSelect	 : selectEuropeDate
					});
				</script>
			</td>
		</tr>
		<tr>
			<td><label>Nationalité</label></td>
			<td><?php $this->load->view("commons/forms/pays"); ?></td>
		</tr>
		<tr>
			<td><label>Tèl. mobile</label></td>
			<td><input type="text" name="gsm" id="gsm" /></td>
		</tr>
		<tr>
			<td><label>Tèl. fixe</label></td>
			<td><input type="text" name="tel" id="tel" /></td>
		</tr>
		<tr>
			<td><label>Je fais partie d'une autre <br>fédération que le CAB</label></td>
			<td><select name="autreFede" id="autreFede">
					<option value="true">Oui</option>
					<option value="false" selected="selected">Non</option>
			</select>
			</td>
		</tr>
		<tr>
			<td><label>Ma pratique</label></td>
			<td><select name="autreFede" id="autreFede">
					<option value="ALL" selected="selected">Je pratique l'escalade, le
						ski, l'alpinisme</option>
					<option value="RANDO_BENELUX">Je pratique uniquement la randonnée
						en Benelux</option>
					<option value="INDOOR_CLIMBING_ONLY">Je pratique uniquement
						l'escalade en salle</option>
			</select>
			</td>
		</tr>
		<tr>
			<td><input type="button" value="S'incrire"
				onclick="submitFormInscription()" /></td>
		</tr>
	</table>
</form>
