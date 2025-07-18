<?php include 'inc/header.php'; ?>
<section class="breadcrumb-head">
    <div class="container">
        <div class="col-md-12">
            <h1>Testimonials</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class=" section ">
    <div class="container">
        <dvi class="row">

            <?php

            include 'db.php';
            $sql = "SELECT Id, full_name, telephone, headline, note, decision FROM testimonials  WHERE decision='1'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '' . ($row['decision'] == 1 ? '
                
                 <div class="col-md-6  text-center mb-5">
                    <div class="testimonial-container-style">

                    <div class="testimonial-container-inner-box">
                        <h4 class="text-dark">' . $row['headline'] . '</h4>

                        <p class="text-dark mt-3 ">' . $row['note'] . '</p>

                        <h5 class="text-dark">' . $row['full_name'] . '</p>

                             </div>
                        </div>
                    </div>' : '') . '';
                }
            }

            ?>


        </dvi>

    </div>
</section>
<section class=" section ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Write your Honest Feedback About our Service...</h2>
                <form action="testimonial-process.php" method="post">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fullname">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Telephone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telephone">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Headline</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="headline">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Feedback</label>
                        <div class="col-sm-10">
                            <textarea name="feedback" id="" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">&nbsp;</label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success secondary btn-compass ">Submit Feedback</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<script>
    var menu_tab = document.getElementById('testimonials');

    menu_tab.classList.add('active');
</script>
<?php include 'inc/footer.php'; ?>