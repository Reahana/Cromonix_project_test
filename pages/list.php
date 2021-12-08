<?php include 'includes/header.php' ?>
<section class="text-center pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>ToDo List</h3>
                    </div>
                    <table class="table table-bordered ">
                    <thead>
                    
                        <tr>
                            <th class="col-md-9">Works to do</th>
                            <th class="col-md-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($allData as $data) {?>
                        <tr>
                            <td><?php echo $data['task'] ?></td>
                            <td><a href="action.php?delete=" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
         </div>
    </div>
</section>
<?php include 'includes/footer.php' ?>