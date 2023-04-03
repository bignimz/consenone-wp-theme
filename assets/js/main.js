jQuery(document).ready(function ($) {

    $(".custom-carousel").owlCarousel({
  
      navigation: true, // Show next and prev buttons
  
  
      navigationText: [
        "<i class='fa fa-chevron-left icon-white'></i>",
        "<i class='fa fa-chevron-right icon-white'></i>"
      ],
  
  
      // pagination : false,
      //     paginationNumbers: false,
  
      slideSpeed: 300,
      paginationSpeed: 400,
  
      items: 3,
      itemsCustom: false,
      itemsDesktop: [1199, 3],
      itemsDesktopSmall: [980, 3],
      itemsTablet: [768, 3],
      itemsTabletSmall: true,
      itemsMobile: [415, 2],
      singleItem: false,
      itemsScaleUp: false,
  
    });

    // const headerOffsetTop = header.offsetTop;
    
    window.addEventListener('scroll', function() {
        let header = document.querySelector('.site-header');
        letwindowPosition = window.scrollY > 0;
        header.classList.toggle('active', window.scrollY > 0);
        setTimeout(() => header.classList.add('show'), 0);
    })
    
    // function onScroll() {
    //     if (window.pageYOffset >= headerOffsetTop) {
    //       header.classList.add('active');
    //       document.body.style.paddingTop = header.offsetHeight + 'px';
    //     } else {
    //       header.classList.remove('active');
    //       document.body.style.paddingTop = 0;
    //     }
    // }
    
    // window.addEventListener('scroll', onScroll);

    // $(".value-card").hover(function(e){
    //   $('.hover-img').fadeToggle('down');
    // });

    // loop through each card with a class of "value-card"
  $(".value-card").each(function() {
    // get the hover image URL
    var hoverImageUrl = $(this).find(".hover-img").attr("src");
    // create a new image element for the hover image
    var hoverImage = $("<img>").attr("src", hoverImageUrl).addClass("hover-img");
    // hide the hover image by default
    hoverImage.hide();
    // add the hover image to the card element
    $(this).append(hoverImage);
    // bind a hover event to the card element
    $(this).hover(function() {
      // show the hover image on mouse over
      hoverImage.slideDown();
    }, function() {
      // hide the hover image on mouse out
      hoverImage.slideUp();
    });
  });

    

});
