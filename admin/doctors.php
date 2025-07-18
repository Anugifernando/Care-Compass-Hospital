<?php include 'inc/header.php'; ?>

<section class="mt-5">
    <div class="container-fluid ">

        <div class="row">
            <?php include 'inc/sidebar.php'; ?>
            <div class="col-md-8">

                <h3>Doctors</h3>
                <hr class="mb-5">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Specialty</th>
                            <th scope="col">Current Status</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT Id, full_name, desciption, img, decision, specialty, is_deleted FROM doctors";
                        $result = $conn->query($sql);



                        if ($result->num_rows > 0) {
                            $x = 1;
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                    <tr>
                                        <th>'.$x.'</th>
                                        <th>' . $row['full_name'] . '</th>
                                        <td>' . $row['desciption'] . '</td>
                                        <td>' . $row['img'] . '</td>
                                        <td>' . $row['specialty'] . '</td>
                                        <td>
                                        
                                            '.($row['decision'] == 1 ? 'On duty': 'N/A').'
                                        </td>
                                        <td class="d-flex ">
                                           
                                            <form action="doctor-process.php" method="post">

                                              <input type="text" class="form-control d-none" name="doctor_id" value="' . $row['Id'] . '">
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="decision" value="1"
                                                ' . ($row['decision'] == 1 ? 'checked' : '') . '>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    On duty
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="decision" value="0" 
                                                ' . ($row['decision'] == 0 ? 'checked' : '') . '>
                                                
                                                
                                            
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    N/A
                                                </label>
                                                </div>
                                                
                                                
                                                <button type="submit" class="btn btn-primary rounded-0 mx-2">Submit</button>

                                            </form>


                                        </td>
                                    </tr>
                                ';

                                $x++;
                            }
                        }
                        ?>




                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>