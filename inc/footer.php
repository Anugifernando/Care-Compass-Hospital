
<footer class="primary footer">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 area-of-menu">
                    <img src="img/care-compass-hostpital.png" class="w-50 bg-white p-2" alt="">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h5>Main Menu</h5>
                            <ul>
                                <li>Home</li>
                                <li>Services</li>
                                <li>Doctors</li>
                                <li>Appointments</li>
                                <li>Testimonials</li>
                                <li>Feedback</li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                        
                    </div>

                </div>
                <div class="col-md-6">
                    <h5>Contact Information</h5>
                    <div class="mt-3">
                       
                        <ul>
                            <li>Care Compass Hospitals <br>
                                No. 135 Main Street, Colombo 5, Sri Lanka. <br>
                                <strong>Phone (General):</strong> +94 188 250 899
                            </li>
                        </ul>

                    </div>

                    <div>
                        <h6 class="fw-normal">Branch Locations</h6>

                        <ul>
                            <li>Kandy <br>
                                No. 25 Kandy Road, Kandy, Sri Lanka. <br>
                                <strong>Phone:</strong> +94 233 555 760
                            </li>
                            <li>
                                Colombo <br>
                                No. 135 Main Street, Colombo, Sri Lanka. <br>
                                <strong>Phone:</strong> +94 188 250 899
                            </li>
                            <li>
                                Kurunegala <br>
                                No. 55 City Road, Kurunegala, Sri Lanka. <br>
                                <strong>Phone:</strong> +94 198 320 878

                            </li>
                        </ul>


                        <h6 class="fw-normal">Email</h6>

                        <ul>
                            <li>
                                <strong>General:</strong> <a href="mailto:info@carecompass.lk"
                                    class="text-white text-decoration-none">general@carecompass.lk</a>
                            </li>
                           
                        </ul>



                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid secondary text-center py-2">
            <h4 class="fs-5 fw-light">2025 Copyright by Care Compass Hospitals. All rights reserved. </h4>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="js/jquery-3.7.1.min.js"></script>


    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.testimonails').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            $('.services').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        });
    </script>
</body>

</html>