<table class="pure-table-horizontal pure-table-striped">
    <thead>
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Major</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($data['members'] as $member): ?>
        <tr>
            <td><?= $member->firstName ?></td>
            <td><?= $member->lastName ?></td>
            <td><?= $member->email ?></td>
            <td><?= $member->major ?></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>