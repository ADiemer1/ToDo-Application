<html>
<body>

	<form action="backend.php" method="post">
		<input type="text" name="task" placeholder="Enter a task...">
		<select name="status">
			<option value="" disabled>-Status-</option>
			<option value="pending">Pending</option>
			<option value="started">Started</option>
			<option value="completed">Completed</option>
			<option value="late">Late</option>
		</select>
		<input type="text" name="date" placeholder="Due Date">
		<input type="submit">
	</form>
	
</body>
</html>