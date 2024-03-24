<table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Handle file reading -->
    <?php foreach ($objects['Contents'] as $object): ?>
            <tr>
                <td><?php echo $object['Key']; ?></td>
                <td><?php echo $s3->getObjectUrl($bucket, $object['Key']) ?></td>
              <td>
            <a href="?download=<?php echo $object['Key']; ?>" class="btn btn-primary mx-2 my-2"><i class="fa-solid fa-download"></i></a>
             <a href="?delete=<?php echo $object['Key']; ?>" class="btn btn-danger mx-2 my-2"><i class="fa-solid fa-trash"></i></a>
            </td>
            </tr>
    <?php endforeach; ?>
            </tbody>
        </table>