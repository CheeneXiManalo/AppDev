<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="/save" method="post">
        <label>ProductName</label>
        <input type="text" name="ProductName" placeholder="ProductName"> 
        <br>
        <label>ProductDescription</label>
        <input type="text" name="ProductDescription" placeholder="ProductDescription">
        <br>
        <label>ProductCategory</label>
        <input type="text" name="ProductCategory" placeholder="ProductCategory">
        <br>
        <label>ProductQuantity</label>
        <input type="text" name="ProductQuantity" placeholder="ProductQuantity">
        <br>
        <label>ProductPrice</label>
        <input type="text" name="ProductPrice" placeholder="ProductPrice"> 
        <br>
        <input type="submit" value="save"> 
    </form>

    <h1>Product List</h1>
    <table border="1">
        <tr>
            <th>ProductName</th>
            <th>ProductDescription</th>
            <th>ProductCategory</th>
            <th>ProductQuantity</th>
            <th>ProductPrice</th>
            <th>Action</th>
            
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['ProductName'] ?></td>
                <td><?= $pr['ProductDescription'] ?></td>
                <td><?= $pr['ProductCategory'] ?></td>
                <td><?= $pr['ProductQuantity'] ?></td>
                <td><?= $pr['ProductPrice'] ?></td>
                <td><a href="/edit/<?= $pr['Id'] ?>">Update</a>
                    <a href="/Delete/<?= $pr['Id'] ?>">Delete</a> 
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>  