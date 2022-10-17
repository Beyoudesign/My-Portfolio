$.post( "submit-post.php", { 
    title: title, 
    content: content, 
    author: author, 
    date: date 
}).done(function() {
window.location = "/index.php";
});