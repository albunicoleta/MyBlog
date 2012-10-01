<html>
    <head>
        <title>Create new post</title>
        <style type="text/css">
            label {display:block;}
        </style>
    </head>
    <body>
        <form method="post" action="postCreate"> 
            <label for="author">Author</label>
            <input type="text" name="author" />
            <label for="title">Title</label>
            <input type="text" name="title" />
            <label for="content">Content</label>
            <textarea name="content"></textarea>
            <input type="submit" value="Post" />
        </form>
    </body>  
</html>