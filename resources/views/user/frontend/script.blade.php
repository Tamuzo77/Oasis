<script src="{{asset('js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.kkiapay.me/k.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init()
</script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(document).ready(function(){
    $('.slick-slider').slick({
        dots:false,
    infinite:true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
        breakpoint: 1320,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            
        }
        },
        {
        breakpoint: 1100,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            
        }
        },
        {
        breakpoint: 700,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            
        }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
            });
            });
</script>
