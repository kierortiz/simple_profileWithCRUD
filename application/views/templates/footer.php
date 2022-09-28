


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- //TEST
<script>
$(document).ready(function() {
    alert("Loaded and ready");
});
</script> -->

<script>
    let weak = "Weak!";
    let mod = "Moderate!";
    let strong = "Strong!";

    // let txt = $("#indicator").css({color: "red"});
    // let txt1 = $("#indicator").css({color: "blue"});
    // let txt2 = $("#indicator").css({color: "blue"});
    

    $(document).ready(function(){

        $("#regPass").keyup(function() {

            if(this.value.length >= 1 && this.value.length <= 4) {
                $("#indicator").css({color: "red"}).text(weak);
            }else if (this.value.length == 0){
                $("#indicator").text("");
            }
            if(this.value.length >= 5 && this.value.length <= 8){
                $("#indicator").css({color: "blue"}).text(mod);
            }else if (this.value.length == 0){
                
                $("#indicator").text("");
            }
            if(this.value.length >= 9 && this.value.length <= 20){
                $("#indicator").css({color: "green"}).text(strong);
            }else if (this.value.length == 0){
                $("#indicator").text("");
            }

        });
    });

</script>


    
   </body>
</html>
