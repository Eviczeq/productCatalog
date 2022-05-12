<!-- Footer -->
</main>

<footer id="footer-area">
   <div class="container">
<!-- row -->
    <div class="row pt-5">
     <div class="col-md-24">
      <p class="text-center text-white mb-0">© <script>document.write(new Date().getFullYear())</script> Poseidon group, All Rights Reserved.</p>
     </div>
    </div>
   </div>
  </footer>
 
  <!-- Bootstrap core JavaScript -->

  
  <!-- menu dropdown -->
  <script>
   if (window.innerWidth > 768) {
   function toggleDropdown (e) {
     const _d = $(e.target).closest('.dropdown'),
       _m = $('.dropdown-menu', _d);
     setTimeout(function(){
       const shouldOpen = e.type !== 'click' && _d.is(':hover');
       _m.toggleClass('show', shouldOpen);
       _d.toggleClass('show', shouldOpen);
       $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
     }, e.type === 'mouseleave' ? 300 : 0);
   }

   $('body')
     .on('mouseenter mouseleave','.dropdown',toggleDropdown)
     .on('click', '.dropdown-menu a', toggleDropdown);
   }
  </script>
 
  <!-- scroll top -->
  <script>
    // ===== Scroll to Top ==== 
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
          $('#return-to-top').fadeIn(200);    // Fade in the arrow
      } else {
          $('#return-to-top').fadeOut(200);   // Else fade out the arrow
      }
  });
  $('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({
          scrollTop : 0                       // Scroll to top of body
      }, 500);
  });
</script>
<script >
  $(document).ready(function() {
    $('#example').DataTable(
      {
  "lengthMenu":  [20, 45, 80, "All"] 
}
    );
} );
</script>



<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
  var div = document.getElementById("output");
  var myData = parseInt(div.textContent);
  if(myData>3 ){
    $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  asNavFor:'.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true,
  centerPadding: '60px'
});
  }else{
    $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true,
  centerPadding: '60px'
});
  }
 

</script>
</body>

</html>
