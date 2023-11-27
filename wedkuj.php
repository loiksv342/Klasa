<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div id="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
				//skrypt 1
				/*
				− wysyła do bazy danych zapytanie 3
				Zapytanie 3: wybierające jedynie pole nazwa z tabeli Ryby oraz odpowiadające tej nazwie
				pola akwen i wojewodztwo z tabeli Lowisko dla łowisk, które są rzekami. Zapytanie wykorzystuje relację
				− każdy zwrócony zapytaniem wiersz jest wyświetlany w osobnym elemencie listy, według wzoru:
				<nazwa_gatunku> pływa w rzece <nazwa_akwenu>, <wojewodztwo>, gdzie nawiasy <> oznaczają wartości pobrane z bazy danych
				*/
            ?>
        </ol>
    </div>
    <div id="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
                //skrypt 2
				/*
				− wysyła do bazy danych zapytanie 1
				Zapytanie 1: wybierające jedynie pola id, nazwa i wystepowanie z tabeli Ryby dla ryb
				drapieżnych
				− każdy zwrócony zapytaniem wiersz jest wyświetlany w osobnym wierszu tabeli
				*/
            ?>
        </table>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: PESEL</p>
    </div>
</body>
</html>