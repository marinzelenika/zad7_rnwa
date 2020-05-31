<form action="?controller=djelatnici&action=insertdjelatnik" method="POST">
    <p>
        <label>Name</label>
        <input id="name" value="" name="name" type="text" required="required" /><br />
    </p>

    <p>
        <label>Prezime</label>
        <input id="prezime" name="prezime" type="text" required="required" /><br />
    </p>

    <p>
        <label>Spol</label>
        <input id="spol" value="" name="spol" type="text" required="required" /><br>
    </p>
    <br />
    <p>

    <p>
        <label>Email</label>
        <input id="email" value="" name="email" type="text" required="required" /><br />
    </p>

    <p>
        <label>datum Zaposelnja</label>
        <input id="datum_zaposlenja" name="datum_zaposlenja" type="date" required="required" /><br />
    </p>

    <p>
        <label>Placa</label>
        <input id="placa" value="" name="placa" type="text" required="required" /><br>
    </p>
    <br />
    <p>
    <p>
        <label>Dodatak</label>
        <input id="dodatak" value="" name="dodatak" type="text" required="required" /><br />
    </p>



    <br />
    <p>

        <button type="submit" class="green big" name="submit"><span>Save</span></button> <button type="reset" class="grey big"><span>Cancle</span></button>
    </p>
</form>