<!DOCTYPE html>
<html>
<body>

<h1>The XMLHttpRequest Object</h1>

<h3>Start typing a name in the input field below:</h3>

<form action="#"> 
First name: <input type="text" id="txt1" onkeyup="showHint(this.value)">
</form>

<p>Suggestions: <span id="txtHint"></span></p> 

<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET.html", "form-gethint.php?q="+str, true);
  xhttp.send();   
}
</script>

</body>

<!-- Mirrored from www.w3schools.com/xml/tryit.asp?filename=tryajax_suggest_php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 02:30:40 GMT -->
</html>
