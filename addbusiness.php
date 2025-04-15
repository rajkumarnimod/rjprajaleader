<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once './styles.php'; ?>
</head>

<body>

    <?php include_once 'navbar.php'; ?>

    <main>
        <section class="login_sec">
            <div class="login-container">
                <div class="login-header">
                    <h1>List Your Business <i class="fa-solid fa-link fa-fade"></i></h1>
                </div>
                <form class="login-form" id="loginForm" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" id="fullname" name="fullname" required placeholder="Enter your Full name" minlength="2" />
                        <span class="error-message" id="fullnameError"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" required placeholder="Enter your email" />
                        <span class="error-message" id="emailError"></span>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number" pattern="\d{10}" />
                        <span class="error-message" id="phoneError"></span>
                    </div>
                    <div class="form-group">
                        <textarea id="address" name="address" required placeholder="Enter your address"></textarea>
                        <span class="error-message" id="addressError"></span>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image (PNG only, max size: 100KB):</label>
                        <input type="file" id="image" name="image" accept="image/png" required />
                        <span class="error-message" id="imageError"></span>
                    </div>
                    <div class="form-group">
                        <label for="category">Select Category:</label>
                        <select id="category" name="category" required>
                            <option value="education">Education & Training</option>
                            <option value="event-planning">Event Planning & Management</option>
                            <option value="catering">Catering & Food Services</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="service">Select Service:</label>
                        <select id="service" name="service" required>
                            <option value="home-tutors">Home Tutors</option>
                            <option value="event-planners">Event Planners</option>
                            <option value="photographers">Photographers</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="whatsapp" name="whatsapp" placeholder="Enter your WhatsApp number" pattern="\d{10}" />
                    </div>
                    <div class="form-group">
                        <input type="url" id="instagram" name="instagram" placeholder="Enter your Instagram profile link" />
                    </div>
                    <div class="form-group">
                        <input type="url" id="youtube" name="youtube" placeholder="Enter your YouTube link" />
                    </div>
                    <div class="form-group">
                        <textarea id="aboutYourself" name="aboutYourself" placeholder="Tell us about yourself" required></textarea>
                        <span class="error-message" id="aboutYourselfError"></span>
                    </div>
                    <div class="form-group" id="agreeterm">
                        <label>
                            <input type="checkbox" name="agreeTerms" required />
                            <span>I agree to the terms and conditions</span>
                        </label>
                    </div>
                    <button type="submit" class="login-button">Submit</button>
                </form>
            </div>
        </section>
    </main>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function (event) {
            let isValid = true;

            // Full name validation
            const fullname = document.getElementById("fullname").value.trim();
            if (fullname.length < 2) {
                document.getElementById("fullnameError").textContent = "Full name must be at least 2 characters.";
                isValid = false;
            } else {
                document.getElementById("fullnameError").textContent = "";
            }

            // Email validation
            const email = document.getElementById("email").value;
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                document.getElementById("emailError").textContent = "Invalid email address.";
                isValid = false;
            } else {
                document.getElementById("emailError").textContent = "";
            }

            // Phone validation
            const phone = document.getElementById("phone").value;
            if (phone.length !== 10 || isNaN(phone)) {
                document.getElementById("phoneError").textContent = "Phone number must be 10 digits.";
                isValid = false;
            } else {
                document.getElementById("phoneError").textContent = "";
            }

            // About Yourself validation
            const aboutYourself = document.getElementById("aboutYourself").value.trim();
            if (aboutYourself.split(" ").length < 250) {
                document.getElementById("aboutYourselfError").textContent = "Please write at least 250 words.";
                isValid = false;
            } else {
                document.getElementById("aboutYourselfError").textContent = "";
            }

            // Image validation
            const imageInput = document.getElementById("image");
            const imageFile = imageInput.files[0];
            const imageError = document.getElementById("imageError");

            if (imageFile) {
                const fileType = imageFile.type;
                const maxSize = 100 * 1024; 

                if (fileType !== "image/png") {
                    imageError.textContent = "Please upload a PNG file only.";
                    isValid = false;
                } else if (imageFile.size > maxSize) {
                    imageError.textContent = "File size must be less than 100KB.";
                    isValid = false;
                } else {
                    imageError.textContent = "";
                }
            }

            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>

    <?php include_once 'footer.php'; ?>
    <?php include_once 'scripts.php'; ?>

</body>

</html>