<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <!-- <script src='main.js'></script> -->
</head>
<body>
    <h1>Contact Mail</h1>
    <img src="https://www.loomly.com/hs-fs/hubfs/Imported_Blog_Media/earth-Apr-03-2024-12-19-31-1897-AM.gif?width=540&height=540&name=earth-Apr-03-2024-12-19-31-1897-AM.gif" alt="Company Logo" style="width:150px; height:auto;">
    <p>You have received a new contact mail with following details:</p>
    <ul>
        
        <li><strong>Name:</strong> {{ $data->name }}</li>
        <li><strong>Email:</strong> {{ $data->email }}</li>
        <li><strong>Subject:</strong> {{ $data->subject }}</li>
        <li><strong>Message:</strong> {{ $data->description }}</li>
        
    </ul>
    
</body>
</html>