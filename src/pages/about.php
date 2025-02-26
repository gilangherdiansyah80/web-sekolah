<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/web-sekolah/src/assets/css/output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Ade High School</title>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/web-sekolah/src/components/Layouts/header.php'; ?>

    <main class="bg-[#FFF2DB] w-full mt-26 flex flex-col gap-y-3">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/web-sekolah/src/components/Element/OurAbout.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/web-sekolah/src/components/Element/AboutPrincipal.php'; ?>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/web-sekolah/src/components/Layouts/footer.php'; ?>

    <script src="/web-sekolah/src/assets/javascript/index.js"></script>
</body>
</html>