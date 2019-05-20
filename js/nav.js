// $(".navbar .navbar-nav .nav-item a").on("click", function(){
//     $(".navbar").find("active").removeClass("active");
//     $(this).addClass("active");
//  });


 $( '.navbar .navbar-nav .nav-item a' ).on( 'click', function () {
	$( '.navbar .navbar-nav .nav-item ' ).find( '.nav-link.active' ).removeClass( 'active' );
	$( this ).parent( '.nav-link' ).addClass( 'actitesve' );
});