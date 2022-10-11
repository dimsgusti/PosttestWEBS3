<link rel="stylesheet" href="style.css">

<div class="navbar">
    <h1>POSTTEST 4</h1>
</div>
<div class="inputForm">
            <form action="process.php" method="POST" accept-charset="utf-8">
                <p>Chipset</p><br>
                <input placeholder="Chipset" id="chipset" type="text" name="chipset" required><br>
                <p>Battery</p><br>
                <input placeholder="Battery" id="battery" type="number" name="battery" required><br>

                <p>Storage</p><br>
                <input type="radio" id="128" name="storage" value="128" required>
                <label for="128">128 GB</label>
                <input type="radio" id="256" name="storage" value="256">
                <label for="256">256 GB</label>
                <input type="radio" id="512" name="storage" value="512">
                <label for="512">512 GB</label>
                
                <p>Features</p><br>
                <input type="checkbox" id="addon1" name="addon1" value="Headphone Jack">
                <label for="addon1">Headphone Jack</label><br>
                <input type="checkbox" id="addon2" name="addon2" value="USB Type C">
                <label for="addon2">USB Type-C</label><br>
                <input type="checkbox" id="addon3" name="addon3" value="Stereo Speaker">
                <label for="addon3">Stereo Speaker</label><br>

                <label for="color">Color</label>
                <input type="color" id="color" name="color" value="#707070"><br>

                <input type="submit" value="Submit">
            </form>