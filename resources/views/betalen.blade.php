@include('includes/head')

<div class="betalen">
    <div class="_middle">

        <form action="">
            <h4>Creditcard only</h4>
            <input type="text" placeholder="Kaartnummer">
            <div class="grid">
                <input type="text" placeholder="MM / JJ">
                <input type="text" placeholder="CVC">
            </div>
            <br>
            <a href="/order-succes">Bestelling afronden</a>
        </form>
    </div>
</div>

@include('includes/footer')
