<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hold Shift to Check Multiple Checkboxes</title>
    <link rel="icon" href="https://fav.farm/🔥" />
</head>
<body>
<style>

    html {
        font-family: sans-serif;
        background: #ffc600;
    }

    .inbox {
        max-width: 400px;
        margin: 50px auto;
        background: white;
        border-radius: 5px;
        box-shadow: 10px 10px 0 rgba(0,0,0,0.1);
    }

    .item {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #F1F1F1;
    }

    .item:last-child {
        border-bottom: 0;
    }

    input:checked + p {
        background: #F9F9F9;
        text-decoration: line-through;
    }

    input[type="checkbox"] {
        margin: 20px;
    }

    p {
        margin: 0;
        padding: 20px;
        transition: background 0.2s;
        flex: 1;
        font-family:'helvetica neue';
        font-size: 20px;
        font-weight: 200;
        border-left: 1px solid #D1E2FF;
    }
</style>
<!--
The following is a common layout you would see in an email client.

When a user clicks a checkbox, holds Shift, and then clicks another checkbox a few rows down, all the checkboxes inbetween those two checkboxes should be checked.

-->
<div class="inbox">
    <div class="item">
        <input type="checkbox">
        <p>This is an inbox layout.</p>
    </div>
    <div class="item">
        <input type="checkbox">
        <p>Check one item</p>
    </div>
    <div class="item">
        <input type="checkbox">
        <p>Hold down your Shift key</p>
    </div>
    <div class="item">
        <input type="checkbox">
        <p>Check a lower item</p>
    </div>
    <div class="item">
        <input type="checkbox">
        <p>Everything in between should also be set to checked</p>
    </div>
    <div class="item">
        <input type="checkbox">
        <p>Try to do it without any libraries</p>
    </div>
    <div class="item">
        <input type="checkbox">
        <p>Just regular JavaScript</p>
    </div>
    <div class="item">
        <input type="checkbox">
        <p>Good Luck!</p>
    </div>
    <div class="item">
        <input type="checkbox">
        <p>Don't forget to tweet your result!</p>
    </div>
</div>

<script src="hold%20shift.js">
</script>
</body>
</html>

