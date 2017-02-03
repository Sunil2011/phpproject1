<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>


<p ><b>url :- </b> <span id="p1"></span> </p>

<p > <b>host :- </b> <span id="p2"></span> </p>

<p ><b>host name :- </b> <span id="p3"></span> </p>

<p > <b>protocol :- </b> <span id="p4"></span> </p>

<p > <b>port :- </b> <span id="p5"></span> </p>

<p > <b>origin :- </b> <span id="p6"></span> </p>


<p > <b>math operation split '/' :- </b> <span id="p7"></span> </p>

<p > <b> split[4] :-  </b> <span id="p8"></span> </p>

<script>
    $(document).ready(function(){
        var txt1 = window.location.href ;
        $('#p1').text(txt1);
        
        var txt2 =  window.location.host ;
        $('#p2').text(txt2);
        
        var txt3 = window.location.hostname;
        $('#p3').text(txt3);
        
        var txt4 = window.location.protocol;
         $('#p4').text(txt4);
        
        var txt5 = window.location.port ;
        $('#p5').text(txt5);
         
        var txt6 = window.location.origin ;
        $('#p6').text(txt6);
        
        var op = txt1.split('/');
        $('#p7').text(op);
        
        $('#p8').text(op[4]);
        
        
    });    
</script>