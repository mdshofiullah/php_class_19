<?php include 'header.php'; ?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center font-weight-bold bg-warning">
                            Sum Of Series
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">

                                <div class="form-group row">
                                    <label for=""  class="col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" required class="form-control" value="<?php echo isset($result['staring_number']) ? $result['staring_number']: ' '; ?>" name="starting_number" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" required class="form-control" value="<?php echo isset($result['ending_number']) ? $result['ending_number']: ' '; ?>" name="ending_number" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea name="" class="form-control" readonly id="" cols="5" rows="5"><?php echo isset($result['result']) ? $result['result']: ' '; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success btn-block" name="series_btn" value="Submit" />
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
