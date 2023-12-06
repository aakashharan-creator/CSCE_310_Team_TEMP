<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view_style_doc.css">
    <script src="document_data.js"></script>
    <title>Document Page</title>
</head>

<body onload="populateDocData()">
<a href="../home.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <h1>Document Page</h1>


    <h3>Upload Documents</h3>
        <a href="./add_docs.php">
            <button>Add Documents</button> 
        </a>
    <h3>Edit Existing Documents</h3>
        <a href="./edit_docs.php">
            <button>Edit Documents</button> 
        </a>
    <h3>Delete Existing Documents</h3>
        <a href="./delete_docs.php">
            <button>Delete Documents</button> 
        </a>
    
        <h3> </h3>

        <table id="doc-data">
        <tr>
            <th>Document Number</th>
            <th>Application Number</th>
            <th>Link</th>
            <th>Document Type</th>
        </tr>
    </table>
</body>


</html>