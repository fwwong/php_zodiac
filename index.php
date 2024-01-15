<?php include '_header.php'; ?>
<?php $title = 'Home'; ?>
<div class="jumbotron">
    <h1> What's your Zodiac?</h1>
    <p>Enter your birthday year to find out your Zodiac sign!</p>
</div>
<div class="container">
    <form action="index.php" method="post">
        <label for="year" class="form-label">Year of Birth </label>
        <input type="number" class="form-control col-3 mb-2" id="year" name="year" placeholder="Enter year"> 
    <button type="submit" class="btn btn-primary p-2 mb-4" value="submit">Get Zodiac</button>
    <button type="reset" class="btn btn-danger p-2 mb-4">Clear</button>
    </form>
</div>
<?php include 'form.php'; ?>
<?php include '_footer.php'; ?>