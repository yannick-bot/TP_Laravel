<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../app.css">

    <title>Library</title>
</head>

<body class="bg-secondary">
    <h1 class="text-center">Welcome <strong>Library manager</strong></h1>

    <nav>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link text-warning" href="{{route('books.index')}}">The Books</a></li>
            <li class="nav-item"><a class="nav-link text-warning" href="{{route('authors.index')}}">The authors</a></li>
        </ul>
    </nav>

    <h4 class="mt-5 text-center">Here is a simple gestionnary where you can manage the books of your library and their authors!</h4>
    <h4 class="text-center">Let's dive in the features:</h4>

    <div class="mt-5 p-2">
        <p class="m-3 p-2  text-justify text-center lead fw-bold ">
            1- <strong>First thing first</strong>, you can add as much as books and authors as you want...After all, you're the
            master, right?<br>
            2- You're not allowed to add a book or an author who's already recorded...Such a record won't be accepted!<br>
            3- If you delete an author, all his related books will disappear with him...make sense, doesn't it?<br>
            4- The library already contains many authors. If you want to add a book whose author isn't recorded, make sure to
            add the author first!<br>
            5- You can search for a book by his title or an author by his name. Note that there are two separate search bars for
            each<br>
            6- You can modify a record of a book or an author!<br>
            7- In the authors' list, if you click on an author's name you'll find all the books he's written stored in the
            library<br>
            8- The books' title are links to the pdf
        </p>
    </div>




</body>
</html>
