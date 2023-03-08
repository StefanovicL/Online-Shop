<section class="row">
    <div class="col-md-6">
        <div class="page-header">
            <h2>Registracija</h2>
        </div>
        <form method="post" action="registracija.php">
            <?php

            $mysqli = new mysqli("localhost", "root", "", "contact");

            if($mysqli->error)
            {
                die("Greska:" . $mysqli->error);
            }
            $ime="";
            $prezime="";
            $email="";
            $password1="";
            $password2="";

            if(isset($_POST['dodaj']))
            {
                if((!$_POST['ime']) || (!$_POST['prezime']) || (!$_POST['email']) || (!$_POST['password1']) || (!$_POST['password2']))
                {
                    echo "Mora biti uneto ime, prezime, email i password dva puta.";
                }
                else
                {
                    $upitdod = "insert into profil (ime, prezime, email, password1) 
                    VALUES ('" . $_POST['ime']
                    . "', '" . $_POST['prezime']
                    . "', '" . $_POST['email']
                    . "', '" . sha1($_POST['password1']) . "')";

                    if($_POST['password1']===$_POST['password2'])
                    {
                        $rezd=$mysqli->query($upitdod);
                    }
                    else
                    {
                        $rezd=false;
                    }
                    if($rezd)
                    {
                        ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Success!</strong> Uspešno ste se registrovali!
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Danger!</strong> Neuspešna registracija!
                        </div>
                        <?php
                    }
                }
            }

            ?>

            <!-- HTML FORMA -->
            <div class="form-group">
                <label for="ime">Ime</label>
                <input type="text" class="form-control" id="ime" name="ime" value="<?php echo $ime ?>" placeholder="Unesite vaše ime" required>
            </div>
            <div class="form-group">
                <label for="prezime">Prezime</label>
                <input type="text" class="form-control" id="prezime" name="prezime" value="<?php echo $prezime ?>" placeholder="Unesite vaše prezime" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" placeholder="Unesite vašu email adresu" required>
            </div>
            <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" class="form-control" id="password1" name="password1" value="<?php echo $password1 ?>" placeholder="Unesite šifru" required>
            </div>
            <div class="form-group">
                <label for="password2">Password</label>
                <input type="password" class="form-control" id="password2" name="password2" value="<?php echo $password2 ?>" placeholder="Ponovite šifru" required>
            </div>
            <button type="submit" name="dodaj" value="dodaj" class="btn btn-warning btn-lg btn-block">Registruj se</button>
        </form>
    </div>
    <aside class="col-md-6">        
        <div class="page-header">
            <h2>Uloguj se</h2>
        </div>
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Unesite vašu email adresu">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Unesite šifru">
            </div>
            <button type="submit" name="submit1" class="btn btn-success btn-lg btn-block">Uloguj se</button>
        </form>
    </aside>
</section>