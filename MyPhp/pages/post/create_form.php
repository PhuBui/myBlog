<div class="container">
    <h1>Post Create Form</h1>
    <form action="/post/create" method="POST">
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="inputTitle" name="title" required="true">
        </div>
        <div class="mb-3">
            <label for="inputContent" class="form-label">Content</label>
            <textarea class="form-control" id="inputContent" name="content" required="true"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>