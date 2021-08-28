(function($) {
    $(document).ready(function() {

        $('.row0').owlCarousel({
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items: 3
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })

        $('.row1').owlCarousel({
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items: 3
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })


        $('.row2').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items: 3
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })


        $('.row3').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items: 3
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })


        $('.row4').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items: 3
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })

        const loader = (state) => {
            if(state) {
                $.LoadingOverlay("show");
            }
            else {
                $.LoadingOverlay("hide");
            }
        }


        $('.ajaxForm').submit(function(e) {
            e.preventDefault();

            loader(true);

            const form = $(this);
            const data = $(this).serialize();
            const url = $(this).attr('action');

            axios.post(url, data)
                .then(response => {
                    swal('Server Error. Please again')
                    $(form).trigger('reset');
                })
                .catch(e => {
                    swal('Could not process Request. Please Try again')
                })
                .finally(e => {
                    loader(false);
                })
        })
    })
})(jQuery)