<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../contact/contact.css" rel="stylesheet">
    <script src="../contact/contact.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header>
        <h2 class="titre">Contact</h2>
    </header>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6">
                    <form id="forme">
                        <div class="mb-3">
                          <label for="InputName1" class="form-label">Nom de famille</label>
                          <input type="text" class="form-control" id="Name1" placeholder="Nom">
                        </div>
                        <div class="mb-3">
                            <label for="InputName2" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="name2" placeholder="Prénom">
                        </div>
                        <div class="mb-3">
                            <label for="InputNuméro" class="form-label">Numéro</label>
                            <input type="number" class="form-control" id="Numéro" placeholder="+33">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Exemple@gmail.com">
                        <div id="emailHelp" class="form-text" >Nous ne partagerons jamais votre email avec des tiers</div>
                        </div>
                        <div class="mb-3">
                            <label for="Inputmessage" class="form-label">Message</label>
                            <input type="text" class="form-control" id="Inputmessage" placeholder="Votre message">
                        </div>
                        <input type="checkbox" name="acceptecgu" required> J'accepte les <a href="lien vers les cgu">CGU</a>
                        <div class="btnconnect">
                            <button type="submit" class="btn btn-primary" onclick="verify()" >Envoyer</button>
                        </div>
                        <div id="messageerreur" class="alert" role="alert"></div>
                    </form>
                        <div class="linkcontact">
                            <a href="../pageacceuil/index.html">Retour</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>