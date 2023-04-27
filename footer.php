<!-- Footer Start -->
<div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="container text-center py-5">
        <div class="d-flex justify-content-center mb-4">
            <a class="btn btn-light btn-social rounded-circle m-2 d-flex justify-content-center align-items-center fs-5" href="https://github.com/Nipun0987" target="blank"><i class="fab fa-github"></i></a>
            <a class="btn btn-light btn-social rounded-circle m-2 d-flex justify-content-center align-items-center fs-5" href="https://www.facebook.com/nipunbansal0987?mibextid=ZbWKwL" target="blank"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-light btn-social rounded-circle m-2 d-flex justify-content-center align-items-center fs-5" href="https://www.linkedin.com/in/nipun-bansal-73b6a424b/" target="blank"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-light btn-social rounded-circle m-2 d-flex justify-content-center align-items-center fs-5" href="https://instagram.com/nipuncodes/" target="blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a class="text-white" target="blank" href="privacy.php">Privacy</a>
            <span class="px-3">|</span>
            <a class="text-white" target="blank" href="terms.php">Terms</a>
            <span class="px-3">|</span>
            <a class="text-white" target="blank" href="faq.php">FAQs</a>
            <span class="px-3">|</span>
            <a class="text-white" target="blank" href="help.php">Help</a>
        </div>
        <p class="m-0">&copy; Copyright <?php echo date('Y') ?> nipunbansal.com . All Rights Reserved.</p>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- right click disable  -->
<div id="myModal" class="modali">
    <div class="modali-content">
        <span class="close">&times;</span>
        <p>Right-clicking is disabled on this website.</p>
    </div>
</div>



<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/typed/typed.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/waypoints/waypoints.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="assets/lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="assets/mail/jqBootstrapValidation.min.js"></script>
<script src="assets/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="assets/js/main.js"></script>

<!-- Font Awesome Links  -->
<script src="assets/js/all.min.js"></script>
<script src="assets/js/brands.min.js"></script>
<script src="assets/js/fontawesome.min.js"></script>
<script src="assets/js/solid.min.js"></script>
<script src="assets/js/regular.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    //Slick Carousel Controllers
    $(".testimonial-reel").slick({
        centerMode: true,
        centerPadding: "40px",
        dots: true,
        slidesToShow: 3,
        infinite: true,
        arrows: false,
        lazyLoad: "ondemand",
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    centerMode: false
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
</script>

<!-- right click disable start -->
<script>
    document.addEventListener('contextmenu', event => {
        event.preventDefault();
        const modal = document.getElementById('myModal');
        const closeBtn = document.getElementsByClassName('close')[0];
        modal.style.display = "block";
        closeBtn.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
</script>
<!-- right click disable on particular element -->
<!-- <script>
        const target = document.getElementById('targetElementId');
        target.addEventListener('contextmenu', event => event.preventDefault());
    </script> -->
<!-- right click disable on particular element -->
<!-- right click disable end -->

</body>

</html>