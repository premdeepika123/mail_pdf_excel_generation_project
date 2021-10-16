<!DOCTYPE html>
<html>
<head>
    <title>Image Upload Results</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div>
        <h3>Congratulations, the image has successfully been uploaded</h3>
        <p>Click here to view the image you just uploaded
            <?=anchor('./../upload/'.$image_metadata['file_name'], 'View My File!')?>
        </p>

        <p>
            <?php echo anchor('upload/store', 'Go back to File Upload'); ?>
        </p>
    </div>
</body>
</html>