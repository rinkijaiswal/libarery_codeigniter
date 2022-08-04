<?= $this->extend('admin/dashboard') ?>
<?= $this->section('right'); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h3>All Issued Books</h3>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>ISBN Number</th>
                        <th>Issue Date</th>
                        <th>Return Date</th>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Semester</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($issues as $issue): ?>
                    <tr>
                        <td><?= $issue['id'] ?></td>
                        <td><?= $issue['book_name'] ?></td>
                        <td><?= $issue['isbn_no'] ?></td>
                        <td><?= $issue['issue_date'] ?></td>
                        <td><?= $issue['return_date'] ?></td>
                        <td><?= $issue['student_name'] ?></td>
                        <td><?= $issue['class'] ?></td>
                        <td><?= $issue['semester'] ?></td>
                        <td>
                            <a href="<?= base_url('/issue/delete/'.$issue['id']) ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>