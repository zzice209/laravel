<form action="/posts/create" method="post">
    {{csrf_field()}}
    <h1>title:</h1>
    <input type="text" name="title">
    <h1>content:</h1>
    <input type="text" name="post_content">
    <button type="submit">
        submit
    </button>
</form>