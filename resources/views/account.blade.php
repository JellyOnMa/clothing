@include('includes/head')

<div class="account">
    <div class="grid">
        <h1>Hallo Jelle,</h1>
        <a href="/" class="loguit">Log uit</a>
        <div class="left">
            <h2>Current box..</h2>
            <img src="images/account.png" alt="">
            <br>
            <a href="/shop">verander</a>
            <a href="/">Box Stoppen</a>
        </div>
        <div class="right">
            <h2>Pakket word op dit adress bezorgd</h2>
            <br>
            <p>Contactweg 36</p>
            <p>Amsterdam, Noord-Holland</p>
            <p>1060 JA</p>
            <a href="/account">Verander</a>
            <br><br>
            <h2>Betaal Methode</h2>
            <br>
            <p>Credit card</p>
            <a href="/account">Verander</a>
            <br><br>
            <h2>Post methode</h2>
            <p>PostNL</p>
            <a href="/account">verander</a>
            <div class="spacing-medium"></div>
        </div>
    </div>
</div>

@include('includes/footer')
