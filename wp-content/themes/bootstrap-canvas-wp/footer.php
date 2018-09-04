<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
    <?php include 'footer-fields.php'; ?>
    <?php
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer();
  	?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
    <script>
    $('.scroll-anchor').click(function(){
    $("html, body").animate({ scrollTop: $($(this).attr('data')).offset().top - 200}, 500);
    });
    </script>
    <script>

      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 5,
            nav: true,
            loop: false,
            margin: 20
          }
        }
      })

    </script>

    <script>

      $(window).resize(function(){});

      $('.staff-member').click(function(){

        if($(this).hasClass('halfOpacity')){

          $(this).removeClass('halfOpacity');
          $('.member-info-data').remove();

        } else {

          $('.member-info-data').remove();
          $('.staff-member').removeClass('halfOpacity');
          $(this).addClass('halfOpacity');

          var memberWidth = parseInt($('.staff-member').css('width'));
          var rowWidth = parseInt($('.staff-groupings').css('width'));
          var amountPerRow = parseInt(rowWidth/memberWidth);
          var staffMembers = [];
          $('.staff-member').each(function(){
            staffMembers.push($(this).index());
          });
          var amountofMembers = 0;

          $('.staff-member').each(function(){
            amountofMembers++;
          });

          var amountOfRows = amountofMembers/amountPerRow;
          var item = $(this).index() + 1;

          var rowArrays = [];
          var i,j,temparray,chunk = amountPerRow;
          for (i=0,j=staffMembers.length; i<j; i+=chunk) {
              temparray = staffMembers.slice(i,i+chunk);
              rowArrays.push(temparray);
          }

          var result;
          for( var i = 0, len = rowArrays.length; i < len; i++ ) {
            for(t=0;t<amountPerRow;t++){
              if( rowArrays[i][t] === $(this).index() ) {
                  result = rowArrays[i];
                  // console.log('result');
                  // console.log(result);
                  var appender = result[result.length - 1];
                  var paragraphcontent = '';
                  $(this).find('span.employee-description p').each(function(){
                    var paragraphpiece = '<p class="avenir-light">' + $(this)[0].innerHTML +  '</p>';
                    paragraphcontent = paragraphcontent + paragraphpiece;
                  });

                  var contentItem = '<div class="container staff-content"><div class="row"><div class="col-md-4 col-sm-12 staff-image-wrapper"><img class="gray-border usrImage" src="'+ $(this).find('img').attr('src') +'"></div><div class="col-md-8 col-sm-12 staff-desc-wrapper"><h2 class="staff-member-modal">'+ $(this).find('.staff-member-name').text() +'</h2><p class="gray-text gray-border">'+ $(this).find('.top-text').text() +'</p>' + paragraphcontent + '</div></div></div>';

                  $('.staff-member:eq('+ appender +')').after('<div class="member-info-data" style="display:none;">' + contentItem + '</div>');
                  $('.staff-member:eq('+ appender +')').next(".member-info-data").show();
                  $(".member-info-data .container.staff-content .row").addClass('showing');
                  result = null;
                  break;
              }
            }
          }
        }
      });

      $('body').on('click', '.collapse-bar', function() {
        $(this).parent().remove();
          $('.triangle').remove();
      });

    </script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <script>

        $( function() {
          $( ".accordion" ).accordion({
            active: false,
            collapsible: true
          });
        } );

          $( function() {
          $( ".mobile-accordion" ).accordion({
            active: false,
            collapsible: true
          });
        } );

      //getter
      var autoHeight = $( ".selector" ).accordion( "option", "autoHeight" );
      //setter
      $( ".selector" ).accordion( "option", "autoHeight", false );

    </script>

    <script>
      $('.social-links.right-bar img').each(function(){
        $(this).attr('src', $(this).attr('src').replace('.svg', '-black.svg'));
      });

      $('footer .nav-menu li a, nav #primary-menu li a').each(function(){
        $currentLocation = window.location.href;
        $clickedLocation = $(this).attr('href');
        console.log('1: ' + $currentLocation, '2: ' + $clickedLocation);
        $isClickedCurrent = $currentLocation.indexOf($clickedLocation) != -1;
        if($isClickedCurrent){
          $(this).addClass('current');
        };
      });
    </script>
  </body>
</html>