<div class="container">
    <h1>Login</h1>
    <form action="/login" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="admin@gmail.com" required="true">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="password" required="true">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>