<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pdf</title>
</head>
<body>
    Select State 
    
    <form action="demo.php" method="post" enctype="multipart/form-data">
    <label for="select1">Select State</label>
    <select name="State" id="select1">
        <option value="" disabled selected>Select</option>
        <option value="maharashtra">Maharashtra</option>
    </select>

    <label for="District">Select District</label>
    <select name="District" id="District">
        <option value="" disabled selected>Select</option>
        <option value="Nagpur">Pune</option>
    </select>

    <label for="select2">Select Language</label>
    <select name="Language" id="select2">
        <option value="" disabled selected>Select</option>
        <option value="English">English</option>
        <option value="Regional">Regional</option>
    </select>

    <div class="formGroup">
        <label for="pdfFile">Select Pdf File</label>
        <input type="file" name="pdfFile" class="form-control-action" id="pdfFile">
    </div>
    <button type="submit" name="submit">Submit</button>
</form> 
</body>
</html>

