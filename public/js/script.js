(function($) {

    $(document).ready(function() {

        $('.btn-more').click(function() {
            if($("#moreContainer").css('display') == 'none')
                $(this).text('Show Less')
            else
                $(this).text('Show More')

            $("#moreContainer").toggleClass('d-none');
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

            const params = new URLSearchParams(location.search);
            const form = $(this);
            const data = $(this).serialize();
            const url = $(this).attr('action');

            axios.post(url + '?type=' + params.get('type'), data)
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