<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php include_once 'styles.php'; ?>
    <style>
        .adbannerfirst{
            margin: 2rem 0;
        }
        .adbannerfirst_imgbox{
            width: 100%;
            height: 300px;
            overflow: hidden;
        }
        .adbannerfirst_imgbox img{
            width: 100%;
            height: 100%;
            border-radius: 25px;
        }
    </style>
</head>

<body>

    <?php include_once 'navbar.php'; ?>

    <section class="adbannerfirst">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col adbannerfirst_imgbox">
                    <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832_1280.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php include_once 'footer.php'; ?>
    <?php include_once 'scripts.php'; ?>
</body>

</html>