<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css And Scass Connection -->
    <link rel="stylesheet" href="../../public/main/style/main.css">
    <link rel="stylesheet" href="../../public/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../public/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <!-- Java Script Connection -->
    <script src="../../public/main/scripts/bootstrap.bundle.min.js"></script> 
    <script src="../../public/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../public/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../main/scripts/data.js"></script>
    <title>Bahile</title>
    
</head>
<body>
  
    <!-- Navbar -->
    <?php include 'components/navbar.php'?>
    
    <!-- Introduction Section -->
    <section id="intro" style="overflow: hidden;">
        <?php include 'components/intro.php'?>
    </section>

    <!-- About Section -->
    <section id="About" class="mb-5">
        <?php include 'components/about.php'?>
    </section>

    <!-- Project Components Section -->
    <section id="project-components" class="mt-5 pt-5">
        <?php include 'components/project_components.php'; ?>
    </section>

    <!-- Feedback Section -->
    <section id="feedback" class="mt-5 pt-5">
        <?php include 'components/feedback_section.php'; ?>
    </section>

    <!-- Contact Us Section -->
    <section>
        <?php include 'components/contactus.php'; ?>
    </section>

    <!-- Footer Section -->
    <section>
        <?php include 'components/footer.php'; ?>
    </section>

</body>
</html>