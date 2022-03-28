$(document).ready(function(){

    // top sale owl carousel
    var owl = $('#top-sale .owl-carousel');
    owl.owlCarousel({
        loop:true,
        nav:false,
        margin:10,
        responsive:{
            0:{
                items:1
                
            },
            600:{
                items:3
            },            
            960:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });   

    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })

    function myFunction(){
        document.querySelector("#spprice").style.backgroundColor = "red";
    }

    // New phones owl carousel
    var owl = $('#new-phones .owl-carousel');
    owl.owlCarousel({
        loop:true,
        nav:false,
        dots: true,
        margin:10,
        responsive:{
            0:{
                items:1
                
            },
            600:{
                items:3
            },            
            960:{
                items:4
            },
            1200:{
                items:5
            }
        }
    });

    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
      
});

