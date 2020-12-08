<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>

    {{--Display a list of e-books available for sharing, (including the title, ISBN, book category and no of pages)--}}
    
<h2>List of available E-Books</h2>
    <ol>
    <li> {{ $titlebook1 }}
        <ul>
        <li>ISBN Number : {{ $isbnbook1 }}</li>
        <li>Category : {{ $catbook1 }}</li>
        <li>No of pages : {{ $pagesbook1 }}</li>
        </ul>
    </li><br>
    <li> {{ $titlebook2 }}
        <ul>
        <li>ISBN Number : {{ $isbnbook2 }}</li>
        <li>Category : {{ $catbook2 }}</li>
        <li>No of pages : {{ $pagesbook2 }}</li>
        </ul>
    </li><br>
    <li> {{ $titlebook3 }}
        <ul>
        <li>ISBN Number : {{ $isbnbook3 }}</li>
        <li>Category : {{ $catbook3 }}</li>
        <li>No of pages : {{ $pagesbook3 }}</li>
        </ul>
    </li>
    </ol>
    
</body>
</html>