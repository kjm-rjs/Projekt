<h1>Kontakt</h1>

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
    <input type="submit" class="btn btn-default" value="Wyślij" name="send">
</form>
