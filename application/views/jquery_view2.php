
<table border="1" width="90%">
        <tr>
        	<center><th>Name</th>
            <th>Address</th>
            <th>Age</th>
            <th>Contact</th> </center>
        </tr>
        <?php foreach ($test as $key => $value) { ?>
        	<tr>
	          
                <td><?php echo $value['name'] ?></td>
	        	<td><?php echo $value['address'] ?></td>
	        	<td><?php echo $value['age'] ?></td>
	        	<td><?php echo $value['contact'] ?></td>

	        </tr>
        <?php } ?>
        
</table>
