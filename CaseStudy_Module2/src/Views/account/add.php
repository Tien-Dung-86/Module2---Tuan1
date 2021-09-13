<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            ADD NEW ACCOUNT
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="account-name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter code">
                </div>
                <div class="form-group">
                    <label for="account-email">email</label>
                    <input type="text" class="form-control" id="account-email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="account-password">password</label>
                    <input type="text" class="form-control" id="account-password" name="password"
                           placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php?page=account-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>