{{-- Bootstrap --}}
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
{{-- Swiper --}}
<script src="{{ asset('assets/js/swiper.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.7.0.js') }}"></script>
<script>
    $('#show').on('show.bs.modal', function(e) {
        var button = $(e.relatedTarget);
        var title = button.data('title');
        var description = button.data('description');
        var product_details = button.data('details');
        var img = button.data('img');
        var modal = $(this);

        modal.find('.modal-body .title').html(title);
        modal.find('.modal-body #img').attr('src', img);
        modal.find('.modal-body .description').html(description);
        modal.find('.modal-body .product-description').html(product_details)
    });
</script>

<script>
    $('.close-alert').on('click', function() {
        $('.close-alert').parent().remove();
    });
</script>


<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },

        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>

</html>
