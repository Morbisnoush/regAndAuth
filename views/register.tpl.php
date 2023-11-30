<?php require_once VIEWS . '/incs/header.tpl.php'; ?>

    <div class="container mt-3">
        <div class="row">
           <div class="col-md-6 offset-md3">

               <h1><?= $title ?></h1>

               <form method="post">

                   <div class="form-floating mb-3">
                       <input type="text" class="form-control" id="name" placeholder="Name">
                       <label for="name">Name</label>
                   </div>
                   <div class="form-floating">
                       <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                       <label for="floatingPassword">Password</label>
                   </div>

               </form>
           </div>
        </div>
    </div>

<?php require_once VIEWS . '/incs/footer.tpl.php'; ?>