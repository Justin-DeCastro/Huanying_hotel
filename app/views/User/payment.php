<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>Upload Your Payment Screen Shot</title>
</head>
<body>
    <h3><br><center>PLease Upload your Gcash Receipt here:</h3></center>
	<div style="display:flex; justify-content: center; margin-top:10%;">
		<form enctype="multipart/form-data" method="POST" action="" style="width: 500px;">
			<div class="form-group">
				<input class="form-control" type="text" name="sender_name" placeholder="Your Name" required/>
			</div>
			<div class="form-group">
				<input class="form-control" type="email" name="sender_email" placeholder="Email Address" required/>
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="subject" placeholder="Reference Code"/>
			</div>
            
			<div class="form-group">
				<textarea class="form-control" name="message" placeholder="Additional Message"></textarea>
			</div>
			<div class="form-group">
				<input class="form-control" type="file" name="attachment" placeholder="Attachment" required/>
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" name="button" value="Submit" />
			</div>		
		</form>
	</div>
</body>
</html>

    