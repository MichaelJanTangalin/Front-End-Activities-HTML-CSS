<script>
function insertme() {
	var MJlname = document.getElementById("lname_id").value
	var MJfname = document.getElementById("fname_id").value
	var MJmi = document.getElementById("mi_id").value
	
			if(MJlname == '') {
				alert("Please Enter Participant Last Name");
				return false;
			}
			else if(MJfname == '') {
				alert("Please Enter Participant First Name");
				return false;			
			}else{
				var xmlhttp = new XMLHttpRequest ();
				xmlhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {
							document.getElementById("myresult").innerHTML = this.responseText;
					}
				};
				
				xmlhttp.open("GET", "insert.php?a=" + MJlname + "&b=" + MJfname + "&c=" + MJmi, true);
				xmlhttp.send();
			}
}
</script>



<script>
	function deleteme(id) {
		var xmlhttp = new XMLHttpRequest ();
		xmlhttp.onreadystatechange = function () {
			if(this.readyState == 4 && this.status == 200) {
				document.getElementById("myresult").innerHTML = this.responseText;
			}
		};
		
		xmlhttp.open("GET", "delete.php?a=" + id, true);
		xmlhttp.send();
	}
</script>

<script>
		function updateme(id) {
		
			var MJlname = document.getElementById("id_lname").value
			var MJfname = document.getElementById("id_fname").value
			var MJmi = document.getElementById("id_mi").value
			
			var xmlhttp = new XMLHttpRequest ();
			xmlhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
						document.getElementById("myresult").innerHTML = this.responseText;
				}
			};
				
			xmlhttp.open("GET", "editsave.php?a=" + id + "&b=" + MJlname + "&c=" + MJfname + "&d=" + MJmi, true);
			xmlhttp.send();
			
		}
</script>

<script>
	function viewedit(id) {
		var xmlhttp = new XMLHttpRequest ();
		xmlhttp.onreadystatechange = function () {
			if(this.readyState == 4 && this.status == 200) {
				document.getElementById("myresult").innerHTML = this.responseText;
			}
		};
		
		xmlhttp.open("GET", "editview.php?a=" + id, true);
		xmlhttp.send();
	}
</script>

<script>
	function printme(id) {
		var xmlhttp = new XMLHttpRequest ();
		xmlhttp.onreadystatechange = function () {
			if(this.readyState == 4 && this.status == 200) {
				document.getElementById("myresult").innerHTML = this.responseText;
			}
		};
		
		xmlhttp.open("GET", "report.php?a=" + id, true);
		xmlhttp.send();
	}
</script>