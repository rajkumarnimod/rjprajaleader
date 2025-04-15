<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertise With Us</title>
    <?php include 'styles.php'; ?>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 1rem;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background-color: rgb(223, 139, 139);
            color: #fff;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <main>
        <section class="container">
            <div class="advertise-header">
                <h1>Advertise With Us</h1>
            </div>
        </section>
        <section class="container">
            <div class="advertise-section">
                <h2 class="advertise-title">1. Advertise with Us</h2>
                <p class="advertise-content">Boost your business with unbeatable visibility! Our advertising platform ensures your brand reaches thousands of potential customers every day. Showcase your products and services with ease, and let your business shine on our most popular pages. Get started today with flexible plans to suit every budget.
                </p>
            </div>
            <div class="advertise-section">
                <h2 class="advertise-title">2. Why Advertise With Us?</h2>
                <p class="advertise-content">Join a platform that drives real results! Our website is visited by thousands of people daily, offering unparalleled visibility to your brand. We provide cost-effective advertising solutions tailored to your needs. Enjoy the flexibility of advertising on the homepage, category pages, and search results. Our platform allows you to directly engage with a relevant audience, ensuring maximum return on investment.</p>
            </div>

            <div class="advertise-section">
                <h2 class="advertise-title">3. Advertisement Plans</h2>
                <p class="advertise-content">Choose the plan that fits your budget and business goals. Our advertising plans are designed to provide flexible options for all types of businesses. Select from monthly, quarterly, half-yearly, or annual plans to suit your needs.</p>
                <table border="1">
                    <tr>
                        <th>Plan</th>
                        <th>Duration</th>
                        <th>Ad Type</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Basic</td>
                        <td>1 Month</td>
                        <td>Banner Ad</td>
                        <td>&#8377;1999</td>
                    </tr>
                    <tr>
                        <td>Standard</td>
                        <td>3 Months</td>
                        <td>Sidebar Ad</td>
                        <td>&#8377;5999</td>
                    </tr>
                    <tr>
                        <td>Premium</td>
                        <td>6 Months</td>
                        <td>Top Banner & Sidebar</td>
                        <td>&#8377;9999</td>
                    </tr>
                    <tr>
                        <td>Exclusive</td>
                        <td>1 Year</td>
                        <td>All Positions</td>
                        <td>&#8377;14999</td>
                    </tr>
                    <tr>
                        <td>Short-Term &#9733;</td>
                        <td>10 Days</td>
                        <td>Banner Ad</td>
                        <td>&#8377;999</td>
                    </tr>
                </table>
            </div>

            <div class="advertise-section">
                <h2 class="advertise-title">4. Ad Placement Options</h2>
                <p class="advertise-content">Place your advertisement in high-visibility areas across our website to ensure maximum engagement. Our placement options include:</p>
                <ul>
                    <li> <b>Home Page Top Banner:</b> Get the most visibility as your ad appears on every page. </li>
                    <li> <b>Side Banners:</b> Display ads on the sidebar of all pages. </li>
                    <li> <b>In-Content Ads:</b> Place your ad within category and search pages for higher relevance. </li>
                    <li> <b>Pop-Up Ads:</b> Catch attention immediately as users navigate the site. </li>
                </ul>
            </div>

            <div class="advertise-section">
                <h2 class="advertise-title">5. How It Works</h2>
                <p class="advertise-content">Advertising on our platform is simple and hassle-free. Follow these four easy steps:</p>
                <ul>
                    <li> <b>Register Your Business: </b> Fill out a form and provide essential details. </li>
                    <li> <b>Select Your Ad Type: </b> Choose the type of advertisement that best suits your business. </li>
                    <li> <b>Our Team Will Contact You: </b> Our team will reach out to discuss your requirements and finalize the details. </li>
                    <li> <b>Get Featured: </b> Your ad goes live, and your business gets the attention it deserves. </li>
                </ul>
            </div>

            <div class="advertise-section">
                <h2 class="advertise-title">6. Contact Us</h2>
                <p class="advertise-content">Have questions or want to start advertising with us? Reach out to our team via email at <a href="mailto:advertise@example.com">advertise@example.com</a> or call us at +123-456-7890.</p>
            </div>

            <div class="advertise-section">
                <p class="advertise-content">&#9733; Terms & Conditions for Advertisement Plans -: <a href="advertiseTerm&conditions.php">Read more</a></p>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <?php include 'scripts.php'; ?>
    <script>
        setTimeout(() => {
            window.location.href = "advertiseTerm&conditions.php"; 
        }, 15000);
    </script>
</body>

</html>