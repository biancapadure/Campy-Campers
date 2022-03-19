<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include ('sideMenu.html'); ?>

	<div id="container">

	<?php include ('topMenu.html'); ?>

    <div class="settings-section">
        <h1>Here we will have the settings available to change once we have account login sessions created</h1>

        <ul style="list-style: none;">
            <li>Change email.......</li>
            <li>Change Password......</li>
            <li>Change Address......</li>
            <li>Change phone number......</li>
        </ul>
    </div>

    <div class="buttonwrapper">
        <button class="button">Save changes</button>
    </div>
</div>
</body>

</html>