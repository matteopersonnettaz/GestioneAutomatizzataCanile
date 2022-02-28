<form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label for="name">Nome</label>
                      <input type="text" name="Nome" class="form-control" required placeholder="Nome">
                    </div>

                    <div class="col-md-3 form-group">
                      <label for="name">Cognome</label>
                      <input type="text" name="Cognome" class="form-control" required placeholder="Cognome">
                    </div>

                    <div class="col-md-3 form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="Email" required placeholder="Email">
                    </div>

                    <div class="col-mt-3 form-group">
                      <label for="name"> Telefono (Compreso di prefisso)</label>
                      <input type="tel" name="Telefono" class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label>Indirizzo</label>
                      <input type="text" name="Indirizzo" class="form-control" id="name" required placeholder="Indirizzo">
                    </div>
                    <div class="col-md-3 form-group">
                      <label>Numero civico</label>
                      <input type="text" name="NumCivico" class="form-control" id="name" required placeholder="NumCivico">
                    </div>
                    <div class="col-md-3 form-group">
                      <label>Citt&agrave</label>
                      <input type="text" name="Citta" class="form-control" id="name" required placeholder="Citt&agrave">
                    </div>
                  </div>
                  <br>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>