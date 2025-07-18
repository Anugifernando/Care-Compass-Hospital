<?php include 'inc/header.php'; ?>

<section class="section">
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-4">
                <form method="post" action="register-process.php">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <h2>Register Form</h2>
                            <div class="underline"></div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Full name</label>
                            <input type="text" class="form-control rounded-0" name="full_name">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control rounded-0" name="email">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Telephone</label>
                            <input type="text" class="form-control rounded-0" name="telephone">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control rounded-0" name="password">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control rounded-0" name="confirm_password">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-compass secondary ">Submit</button>

                        </div>
                    </div>


                </form>
            </div>
            
        </div>
    </div>
</section> 
<script>
    document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        let fullName = document.querySelector("input[name='full_name']").value.trim();
        let email = document.querySelector("input[name='email']").value.trim();
        let telephone = document.querySelector("input[name='telephone']").value.trim();
        let password = document.querySelector("input[name='password']").value.trim();
        let confirmPassword = document.querySelector("input[name='confirm_password']").value.trim();
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let phonePattern = /^\d{10}$/;

        if (fullName === "") {
            alert("Full name is required.");
            event.preventDefault();
            return;
        }

        if (email === "" || !emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            event.preventDefault();
            return;
        }

        if (telephone === "" || !phonePattern.test(telephone) || telephone.length < 10) {
            alert("Please enter a valid 10-digit telephone number.");
            event.preventDefault();
            return;
        }

        if (password === "" || password.length < 6) {
            alert("Password must be at least 6 characters long.");
            event.preventDefault();
            return;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            event.preventDefault();
            return;
        }
    });
});

</script>


<?php include 'inc/footer.php'; ?>