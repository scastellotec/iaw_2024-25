<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elige las pizzas que quieres comrpar</h1>

    <form action="addCarrito.php" method="GET">
        <h2>Margarita</h2>
        <input id="pizzaname" type="hidden" name="pizzaname" value="margarita"/>
        <label for="cantidad">cantidad: </label>
        <input id="cantidad" type="number" name="cantidad"/>
        <input type="submit" value="Añadir">
    </form>


    <form action="addCarrito.php" method="GET">
        <h2>4 Quesos</h2>
        <input id="pizzaname" type="hidden" name="pizzaname" value="4quesos"/>
        <label for="cantidad">cantidad: </label>
        <input id="cantidad" type="number" name="cantidad"/>
        <input type="submit" value="Añadir">
    </form>

    <form action="addCarrito.php" method="GET">
        <h2>Barbacoa</h2>
        <input id="pizzaname" type="hidden" name="pizzaname" value="bbq"/>
        <label for="cantidad">cantidad: </label>
        <input id="cantidad" type="number" name="cantidad"/>
        <input type="submit" value="Añadir">
    </form>

    <form action="addCarrito.php" method="GET">
        <h2>Carbonara</h2>
        <input id="pizzaname" type="hidden" name="pizzaname" value="carbonara"/>
        <label for="cantidad">cantidad: </label>
        <input id="cantidad" type="number" name="cantidad"/>
        <input type="submit" value="Añadir">
    </form>

    <form action="addCarrito.php" method="GET">
        <h2>Espagnola</h2>
        <input id="pizzaname" type="hidden" name="pizzaname" value="Espagnola"/>
        <label for="cantidad">cantidad: </label>
        <input id="cantidad" type="number" name="cantidad"/>
        <input type="submit" value="Añadir">
    </form>

    <h1>Otra forma</h1>
    <ul>
        <li>
            <h2>Margarita</h2>
            <a href="addCarrito.php?pizzaname=margarita&cantidad=1">+1</a>
            <a href="addCarrito.php?pizzaname=margarita&cantidad=2">+2</a>
            <a href="addCarrito.php?pizzaname=margarita&cantidad=3">+3</a>
        </li>
        <li>
            <h2>4 Quesos</h2>
            <a href="addCarrito.php?pizzaname=4quesos&cantidad=1">+1</a>
            <a href="addCarrito.php?pizzaname=4quesos&cantidad=2">+2</a>
            <a href="addCarrito.php?pizzaname=4quesos&cantidad=3">+3</a>
        </li>
        <li>
            <h2>Barbacoa</h2>
            <a href="addCarrito.php?pizzaname=bbq&cantidad=1">+1</a>
            <a href="addCarrito.php?pizzaname=bbq&cantidad=2">+2</a>
            <a href="addCarrito.php?pizzaname=bbq&cantidad=3">+3</a>
        </li>
    </ul>

</body>
</html>