{{-- Bootstrap --}}
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
{{-- Swiper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.js"></script>

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
    });
</script>
</body>

</html>
