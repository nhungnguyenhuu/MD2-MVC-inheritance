<a href=""></a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th hidden>Producttype_id</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key=>$product):?>
    <td><?php echo $key+1?></td>
    <td><?php echo $product->name?></td>
    <td><?php echo $product->quantity?></td>
    <td><?php echo $product->price?></td>
    <td hidden><?php echo $product->producttype_id?></td>
    <?php endforeach;?>
    </tbody>
</table>