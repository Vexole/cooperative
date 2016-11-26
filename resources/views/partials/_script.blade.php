<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>  
<script type="text/javascript" src="js/responsee.js"></script>               
<script type="text/javascript" src="js/owl.carousel.js"></script>  
<script type="text/javascript">
    $(document).ready(function($) {     
      $("#owl-demo").owlCarousel({     
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            autoPlay : true,
            singleItem:true
      });

      $("#owl-demo2").owlCarousel({
            items : 4,
            lazyLoad : true,
            autoPlay : true,
            navigation : true,
            pagination : false
           });
      });     
</script>