<html>
<head>
	<title>Book List</title>
</head>
<body>
	<table>
	<tbody>
	<tr>
		<td><b>Title</b></td>
		<td><b>Author</b></td>
		<td><b>Description</b></td>
	</tr>
	<?php
		foreach ($books as $title => $book) {
			echo '<tr>
			      <td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td>
				  <td>'.$book->author.'</td>
				  <td>'.$book->description.'</td></tr>';
		}
	?>
	</tbody>
	</table>
</body>
</html>
