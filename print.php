<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Movie Log</title>
        <! –– stylesheet links-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/Style.css">
	</head>
	<body>

    <! –– navbar setup-->
			<nav class="navbar navbar-expand-md bg-dark navbar-dark">

				<a class="navbar-brand" href="#">Movie Log</a>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="Add.html">Add Movie</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="print.php">Movies Watched</a>
					</li>
				</ul>
			</nav>

            <h1>Movie List</h1>

            <?php
            // open/create the list file
            $myfile = fopen("list.txt", "a+");

            // if the inputs are set set them to a variable
            if(isset($_POST['MovieName']))
            {
                $movie=$_POST['MovieName'].PHP_EOL;
                $director=$_POST['DirectorName'].PHP_EOL;
                $art=$_POST['Artist'].PHP_EOL;
                $genre=$_POST['Genre'].PHP_EOL;
                $rate=$_POST['Rating'].PHP_EOL;

                // open the file to write to it new items and current items
                $fp = fopen('list.txt', 'a');

                fwrite($fp,$movie."".$director."".$art."".$genre."".$rate);
                fclose($fp);
            }
            // print out the file
            while(!feof($myfile)) {
                echo fgets($myfile) . "<br>";
            }

            ?>

    </body>
</html>
