<?= $this->extend('admin/dashboard') ?>
<?= $this->section('right'); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h3>All Contacts</h3>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roll Number</th>
                        <th>Query</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td><?= $contact['id'] ?></td>
                        <td><?= $contact['name'] ?></td>
                        <td><?= $contact['email'] ?></td>
                        <td><?= $contact['roll_no'] ?></td>
                        <td><?= $contact['query'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>