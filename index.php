<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/assets/css/output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Ade High School</title>
</head>
<body>
    <?php include 'src/components/Layouts/header.php'; ?>

    <main class="bg-[#FFF2DB] w-full mt-20">
        <?php include 'src/components/Element/HeroSection.php'; ?>
        <?php include 'src/components/Element/OurProfile.php'; ?>
        <?php include 'src/components/Element/OurFasility.php'; ?>
        <?php include 'src/components/Element/OurAbout.php'; ?>
    </main>

    <?php include 'src/components/Layouts/footer.php'; ?>

    <script src="./src/assets/javascript/index.js"></script>
</body>
</html>