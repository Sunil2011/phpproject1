<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
   var x ="" ;
    $("input#in").focus(function(){
      var y = $('#in1').val();
     var z =  $('#in2').val();
      var i = x + y + z ;
      $('#p').text(i);
    });
});
</script>
</head>
<body>
<p><label>some text1 : </label></p>
<p><input type='text' id='in1'></p>
<p><label>some text2 : </label></p>
<p><input type='text' id='in2'></p>
 <p><label>Enter your name: </label></p>
 <p><input type="text" id='in'></p>
<p id='p'>Write something in the input field, and then click outside the field to lose focus (blur).</p>

</body>
</html>
