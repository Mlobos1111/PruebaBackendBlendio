<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>



    <form action="resultado">
        <input type="number" name="n1">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="n2">
        <input type="submit" value="Calcular">    


    </form>
</body>
<style>
    body{
        
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: red;
        
        
    }
</style>
</html>
