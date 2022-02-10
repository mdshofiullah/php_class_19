<?php include 'header.php';?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-secondary">
                    <div class="card-header text-center bg-warning">
                        <h4>Prime number</h4>
                    </div>
                    <div class="card-body">

                        <form action="action.php" method="post">

                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label text-center text-white">Enter Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="given_number"  />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label text-center text-white">result</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result) ? $result: ' '; ?>" class="form-control" name=""  />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-block btn-success" value="Save" name="btn" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?php include 'footer.php';?>
