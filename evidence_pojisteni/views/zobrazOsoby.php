

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidence pojištěných</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1 class="logo">Pojištění App</h1>
            </div>
            <div class="navigace">
                <nav>
                    <ul class="nav-links">
                        <li><a href="#pojistenci">Pojištěnci</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>




    <h1 id="pojistenci">Pojištěnci</h1>

    <table>
        <thead>
            <tr>
                <th>Jméno</th>
                <th>Příjmení</th>
                <th>Věk</th>
                <th>Telefon</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($osoby as $osoba): ?>
            <tr>
                <td><?php echo $osoba['jmeno']; ?></td>
                <td><?php echo $osoba['prijmeni']; ?></td>
                <td><?php echo $osoba['vek']; ?></td>
                <td><?php echo $osoba['telefon']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <h2>Nový pojištěnec</h2>

<div class="full">
    <div class="pic">
         <div class="img_center">
            <img src="/evidence_pojisteni/hlava.png" alt="Obrázek hlavy" class="smajlik">
        </div>
    </div>
    <div class="new_customer">
        <form action="index.php" method="POST">
            <label for="jmeno">Jméno:</label>
            <input type="text" id="jmeno" name="jmeno" required>

            <label for="prijmeni">Příjmení:</label>
            <input type="text" id="prijmeni" name="prijmeni" required>

            <label for="vek">Věk:</label>
            <input type="number" id="vek" name="vek" required>

            <label for="telefon">Telefon:</label>
            <input type="text" id="telefon" name="telefon" required>

            <button type="submit">Přidat</button>
        </form>
    </div>
</div>






    

    
</body>
</html>