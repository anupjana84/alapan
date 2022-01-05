$('#course .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots:true,
    autoplay: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

$('#testimonials .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay: true,
    autoplayTimeout: 10000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('#partners .owl-carousel').owlCarousel({
    loop:true,
    dots:false,
    nav:false,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive:{
        0:{
            items:3,
            margin:30
        },
        600:{
            items:4,
            margin:40
        },
        1000:{
            items:4,
            margin:90
        }
    }
})