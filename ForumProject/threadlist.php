<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - <?php echo $_SESSION['username'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .dropdown:hover>.dropdown-menu {
            display: block;
        }

        .dropdown>.dropdown-toggle:active {
            /*Without this, clicking will make it sticky*/
            pointer-events: none;
        }
    </style>
</head>

<body class="mt-5 pt-2">

    <?php include 'partials/_header.php'; ?>
    <?php include 'partials\_dbconnect.php'; ?>

        <?php  
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `categoriess` WHERE category_id = '$id'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $catname = $row['category_name'];
                $catdesc = $row['category_desc'];
            }
?>

    
<div class="container my-4 ">
        <div class="h-100 p-5 text-bg-dark rounded-3">
            <h2>Welcome to <?php echo $catname; ?> forums</h2>
            <p> <?php echo $catdesc; ?> </p>
            <hr class="my-4" />
            <p>This is a perr to forum for sharing knowledge with each other. No spamming or advertising
No offensive language or behavior
No personal attacks or harassment
Stay on topic and relevant to the discussion
Respect the opinions of others</p>
            <button class="btn btn-outline-light" type="button">Lern more</button>
        </div>

    </div>

    <div class="container">
        <h1 class="py-2"> Browse Questions</h1>
        <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="user-img.png" width="50px" alt="user image">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Unable to install pyaudio error in windos</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
    
    <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="user-img.png" width="50px" alt="user image">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Unable to install pyaudio error in windos</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="user-img.png" width="50px" alt="user image">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Unable to install pyaudio error in windos</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="user-img.png" width="50px" alt="user image">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Unable to install pyaudio error in windos</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="user-img.png" width="50px" alt="user image">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Unable to install pyaudio error in windos</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="user-img.png" width="50px" alt="user image">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Unable to install pyaudio error in windos</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="user-img.png" width="50px" alt="user image">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Unable to install pyaudio error in windos</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="user-img.png" width="50px" alt="user image">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Unable to install pyaudio error in windos</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="user-img.png" width="50px" alt="user image">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Unable to install pyaudio error in windos</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>

        </div>


















    <?php include 'partials/_footer.php'; ?>
    <!-- ------------------------------------JS BOOSTSTRAP-------------------------------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>