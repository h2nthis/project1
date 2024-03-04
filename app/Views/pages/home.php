<section>
    <div class="container">
        <h1 class="display-4 text-center">Welcome to MyDB</h1>
    </div>

    <?php $session = \Config\Services::session();?>
    <?php if (isset($session->success)): ?>

        <div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
        <?= $session->success ?>
        </div>

        <?php $newlineData = $session->newline ?>
        <?php list($name, $number1, $number2, $sum) = $newlineData ?>
                
            <div>
                <table class="table">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Number1</th>
                        <th>Number2</th>
                        <th>Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><?= $name ?></th>
                        <td><?= $number1 ?></td>
                        <td><?= $number2 ?></td>
                        <td><?= $sum ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    <?php elseif (isset($session->error)): ?>
        <div class="alert alert-danger text-center alert-dismissible fade show mb-0" role="0">
            <?= $session->error ?>
        </div>
    <?php endif; ?> 
</section>
