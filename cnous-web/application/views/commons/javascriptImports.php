<script type="text/javascript"
	src="/cnous-web/scripts/jquery/jquery-2.2.0.min.js"></script>
<script type="text/javascript"
	src="/cnous-web/scripts/jquery/jquery-ui-1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript"
	src="/cnous-web/scripts/modernizr/modernizr.custom.js"></script>
<script>
$(document).ready(function(){
    if ($(document).width() < 900) {
    	$(".btn").toggleClass( "btn-small btn-smalla",false );
        $(".btn").toggleClass( "btn-small btn-smalla",true );
        $(".menuTxt").css("display","none");
    }else{
    	 $(".btn").toggleClass( "btn-small btn-smalla",true );
         $(".btn").toggleClass( "btn-small btn-smalla",false );
         $(".menuTxt").css("display","inline");
    	
    }  
});
$(window).resize(function () {
    if ($(window).width() < 900) {
    	$(".btn").toggleClass( "btn-small btn-smalla",false );
        $(".btn").toggleClass( "btn-small btn-smalla",true );
        $(".menuTxt").css("display","none");
    }else{
    	$(".btn").toggleClass( "btn-small btn-smalla",true );
        $(".btn").toggleClass( "btn-small btn-smalla",false );
        $(".menuTxt").css("display","inline");

    } 
});



</script>