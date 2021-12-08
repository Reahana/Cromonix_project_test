<?php include 'includes/header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>ADD Tasks</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for=""class="col-form-label col-md-2">Tasks</label>
                                <div class="col-md-8">
                                    <input type="text" name="task" class="form-control" />
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="btn" value="ADD" class="btn btn-primary" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <h4 class="text-center text-success"> <?php echo isset( $message) ? $message:''; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>