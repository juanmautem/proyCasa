</main>
<footer style="background-color: darkgreen; height: 100px;">
	<p style="color: white;">MI CASA 2022</p>
</footer>
</body>

 <!-- Bootstrap core JavaScript-->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap-4/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap-4/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
</html>


<link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">

<script>
    
    let d = new Date();
    let h = d.getHours();
    let m = d.getMinutes();
    let s = d.getSeconds();
    //MostrarTiempoColor1();
    //setInterval(MostrarTiempoColor, 10000);
    function MostrarTiempoColor1(){
        let d = new Date();
        let h = d.getHours();
        let m = d.getMinutes();
        let s = d.getSeconds();
        
        if(h <= 9) h = '0'+h;
        if(m <= 9) m = '0'+m;
        if(s <= 9) s = '0'+s;
        color = "#"+h+m+s;
        document.body.style.background = color;

    }
    function MostrarTiempoColor(){
        let d = new Date();
        let h = d.getHours();
        let m = d.getMinutes();
        let s = d.getSeconds();
        if(h <= 9) h = '0'+h;
        if(m <= 9) m = '0'+m;
        if(s <= 9) s = '0'+s;
        color = "#"+h+m+s;
        document.body.style.background = color;

    }


</script>