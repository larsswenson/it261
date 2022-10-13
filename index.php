<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lars Swenson's Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <h1><a href="index.php">Lars' Portal Page</a></h1>
    <h2>The navigation below represents our big assignments</h2>
    <div id="wrapper">
    <nav>
        <ul>
            <li><a href="">Switch</a></li>
            <li><a href="">Troubleshoot</a></li>
            <li><a href="">Calculator</a></li>
            <li><a href="">Email</a></li>
            <li><a href="">Database</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
    </nav>
<main>
    <h2>About Lars</h2>
    <img class="right" src="images/lars.jpeg" alt="lars">
    <p>I'm a musician and record collector from Seattle, currently studying web development at SCC. I'm interested in travel, history, art and culture. I hope to help others with the skills I'm learning.</p>
    <img class="mamp" src="images/mamp.jpeg" alt="mamp">
    <img class="mamp-test" src="images/mamp-test.jpeg" alt="mamp-test">

</main>
    <aside>
    <h2>Weekly Class Exercises</h2>
        <h3>Week 2</h3>
        <ul>
            <li><a href="weeks/week2/var.php">var.php</a></li>
            <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
            <li><a href="weeks/week2/currency.php">currency.php</a></li>
            <li><a href=""></a></li>
        </ul>
    </aside>
    
    </div>
    <!--close wrapper--> 
    <footer>
        <ul>
            <li>Copyright &copy;
                2022</li>
            <li>All Rights Reserved</li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>
            <script>
                    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>
    </footer> 
</body>
</html>