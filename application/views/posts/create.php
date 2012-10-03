    <body>
        <div id="wrapper">
            <h1>Welcome to my blog!</h1>
            <p>Please write your posts bellow!</p>
            <form method="post" action="postCreate"> 
                <div><label for="author">Author</label></div>
                <input type="text" name="author" />
                <div><label for="title">Title</label></div>
                <input type="text" name="title" />
                <div><label for="content">Content</label></div>
                <textarea name="content"></textarea>
                <div id="submit"><input type="submit" value="Post" /></div>
            </form>
        </div>
    </body>  
</html>