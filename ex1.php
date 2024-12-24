<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: "Mitr", serif;
        font-weight: 300;
        font-style: normal;
        margin-left: 30px;
        margin-right: 30px;
    }

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์ม Bootstarp และเขียนโปรแกรมกับเงื่อนไข</title>
</head>

<body>
    <h1>โปรแกรมคำนวณและเงื่อนไข</h1> 
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">คะแนนสอบกลางภาค</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputEmail3" name="score1">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">คะแนน</label>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">คะแนนสอบกลางภาค</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputPassword3"name="score2">
      </div>
      <label for="inputEmail3" class="col-sm-2 col-form-label">คะแนน</label>
  </div>
  <button type="submit" class="btn btn-primary">คำนวณคะแนนรวม</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s1=$_POST['score1'];
    $s2=$_POST['score2'];
    $sum=$s1+$s2;
  echo "<br><br> <h3>คุณได้คะแนนรวมเท่ากับ ".$sum."</h3> <br><br>";
   
  echo "<div class='alert alert-success'>
        <strong>Success!</strong> Indicates a successful or positive action.
        </div>";
}
?>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>