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
                <select>
                    <option value="">PostNL (volgende dag in huis) *Gratis*</option>
                    <option value="">PostNL avond levering (voor 11 uur 's ochtends)*5,99,-*</option>
                    <option value="">DHL (Volgende werkdag in huis)*Gratis*</option>
                </select>
                <a href="/betalen">Verder</a>
            </form>
        </div>
    </div>
</div>

@include('includes/footer')
