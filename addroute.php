
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addroom"]["type"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the Bus type");
  return false;
  }
var b=document.forms["addroom"]["route"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the Route");
  return false;
  }
 var c=document.forms["addroom"]["seat"].value;
if (c==null || c=="")
  {
  alert("Pls. enter the Seat Number");
  return false;
  }
var d=document.forms["addroom"]["price"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Price");
  return false;
  }
}
</script>

<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>

<form action="addexec.php" method="post">
	Bus Type:
	<select name = "type" class = "ed">
	  <option value = "SHATABDI AC">SHATABDI AC</option>
	  <option value = "JAN RATH">JAN RATHC</option>
	  <option value = "PINK EXPRESS">PINK EXPRESS</option>
	  <option value = "UPSRTC">UPSRTC</option>
	  <option value = "VOLVO">VOLVO</option>
	  <option value = "DELUXE">DELUXE</option>
	</select>
	 <br>
	<!--<br><input type="text" name="type" class="ed"><br>-->
	Origin:
	<select name = "Origin" class = "ed">
	  <option value = "ALAMBAGH">ALAMBAGH </option> 
	  <option value = "GORAKHPUR">GORAKHPUR </option> 
	  <option value = "ANAND VIHAR">ANAND VIHAR </option> 
	  <option value = "VARANASI">VARANASI</option> 
	  <option value = "SULTANPUR">SULTANPUR </option> 
	 
	</select>
	<!--<br><input type="text" name="route" class="ed"><br>-->
	<br>
	Destination:
	<select name = "Destination" class = "ed">
	  <option value = "ANAND VIHAR">ANAND VIHAR</option> 
	  <option value = "ALAMBAGH">ALAMBAGH</option> 
	  <option value = "GORAKHPUR">GORAKHPUR</option> 
	  <option value = "SULTANPUR">SULTANPUR</option> 
	  <option value = "JAUNPUR">JAUNPUR</option> 
	 
	</select>
	<!--<br><input type="text" name="route" class="ed"><br>-->
	<br>
	Price:
	<select name = "price" class = "ed">
	  <option value = "1432">1432</option>
	  <option value = "1334">1334</option>
	  <option value = "1009">1009</option>
	  <option value = "934">934</option>
	  <option value = "807">807</option>
	  <option value = "534">534</option>
	</select>
	<!--<br><input type="text" name="price" class="ed"><br>-->
	
	<br>
	Seat Number:
	<select name = "seat" class = "ed">
	  <option value = "40">20</option>
	  <option value = "50">25</option>
	  <option value = "60">21</option>
	<!--<br><input type="text" name="seat" class="ed"><br>-->
	</select>
	<br>
	Time:
	<select name = "time" class = "ed">
	  <option value = "10:00 AM">10:00 AM</option>
	  <option value = "12:00 PM">12:00 PM</option>
	  <option value = "02:00 PM">02:00 PM</option>
	  <option value = "04:00 AM">04:00 AM</option>
	</select>
	<!--<br><input type="text" name="time" class="ed" placeholder="10:30am"><br>-->
	<br>
	<input type="submit" value="Save" id="button1">
</form>
