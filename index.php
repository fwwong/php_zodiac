<?php include '_header.php'; ?>
<?php $title = 'Home'; ?>
<div class="jumbotron">
<h1> What's your Zodiac?</h1>
<p>Enter your birthday year to find out your Zodiac sign!</p>
<div class = container>
    <form action="index.php" method="post">
    <label for="year">Year</label>
    <input type="text" name="year" id="year" placeholder="0">
    <input type="submit" value="Get Zodiac">
    <input type="reset" value="Clear">
    </form>
</div>
</div>
<?php include 'form.php'; ?>
<?php include '_footer.php'; ?>