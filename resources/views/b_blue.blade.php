@include('includes/head')

<div class="order">
    <div class="grid">
        <div class="left">
            <div class="spacing-medium"></div>
            <div class="spacing-medium"></div>
            <img src="images/boxes/1.png" alt="">
        </div>
        <div class="right">
            <h1>Order box</h1>
            <form action="">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="Postal code">
                <input type="text" placeholder="City">
                <input type="text" placeholder="Streetname">
                <input type="text" placeholder="Streetnumber">
                <input type="text" placeholder="Country">
                <a href="/order-succes">Bestel</a>
            </form>
        </div>
    </div>
</div>

@include('includes/footer')
