<h1>Kontakt</h1>
</br>
</br>
<div class="row">
    <div class="col">
      <form method="post" action="send.php">
          <div class="form-row">
              <div class="col-md-4 mb-3">
                  <label for="name">Imię</label>
                  <input type="text" class="form-control" id="name" placeholder="Imię" required>
              </div>
              <div class="col-md-4 mb-3">
                  <label for="surname">Nazwisko</label>
                  <input type="text" class="form-control" id="surname" placeholder="Nazwisko" required>
              </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="email">E-mail</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="email" placeholder="E-mail" required>
                </div>
            </div>
          </div>
          <div class="form-row">
              <div class="col-md-3 mb-3">
                  <label for="city">Miasto</label>
                  <input type="text" class="form-control" id="city" placeholder="Miasto" required>
              </div>
              <div class="col-md-3 mb-3">
                  <label for="zip_code">Kod pocztowy</label>
                  <input type="text" class="form-control" id="zip_code" placeholder="Kod pocztowy" required>
              </div>
          </div>
          <div class="form-group">
              <label for="message">Wpisz swoją wiadomość</label>
              <textarea class="form-control" id="message" rows="3"></textarea>
          </div>
          <div class="form-group">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" checked required>
                  <label class="form-check-label" for="invalidCheck2">
                      Wyrażam zgodę na przetwarzanie danych osobowych....
                  </label>
              </div>
          </div>
          <input type="submit" class="btn btn-primary" value="Wyślij" name="send">
      </form>
    </div>
    <div class="col">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230307.97572151566!2d19.065040720218487!3d51.71238621470971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471a4e869c8b3649%3A0x6a02a041e529120e!2s98-105%20Alfons%C3%B3w!5e0!3m2!1spl!2spl!4v1592849855544!5m2!1spl!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<!-- <div class="container">
  <form method="post" action="send.php">
      <div class="form-row">
          <div class="col-md-4 mb-3">
              <label for="name">Imię</label>
              <input type="text" class="form-control" id="name" placeholder="Imię" required>
          </div>
          <div class="col-md-4 mb-3">
              <label for="surname">Nazwisko</label>
              <input type="text" class="form-control" id="surname" placeholder="Nazwisko" required>
          </div>
          <div class="col-md-4 mb-3">
              <label for="email">E-mail</label>
              <div class="input-group">
                  <input type="email" class="form-control" id="email" placeholder="E-mail" required>
              </div>
          </div>
      </div>
      <div class="form-row">
          <div class="col-md-3 mb-3">
              <label for="city">Miasto</label>
              <input type="text" class="form-control" id="city" placeholder="Miasto" required>
          </div>
          <div class="col-md-3 mb-3">
              <label for="zip_code">Kod pocztowy</label>
              <input type="text" class="form-control" id="zip_code" placeholder="Kod pocztowy" required>
          </div>
      </div>
      <div class="form-group">
          <label for="message">Wpisz swoją wiadomość</label>
          <textarea class="form-control" id="message" rows="3"></textarea>
      </div>
      <div class="form-group">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" checked required>
              <label class="form-check-label" for="invalidCheck2">
                  Wyrażam zgodę na przetwarzanie danych osobowych....
              </label>
          </div>
      </div>
      <input type="submit" class="btn btn-primary" value="Wyślij" name="send">
  </form>
</div> -->
