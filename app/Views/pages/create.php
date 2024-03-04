<div class="container">

    <div class="container mx-auto w-25">
        <h1>Add New Data</h1>

        <?php if($_POST):   ?>
            <?= \Config\Services::validation()->listErrors(); ?>
        <?php endif; ?>
    </div>

    <form action="/home/create" method="post">
        <div class="form-group mx-auto w-50">
            <label for="name"><strong>Name:</strong></label>
            <input type="text" class="form-control" name="name" id="name" value="">
        </div>
        <div class="form-group mx-auto w-50">
            <label for="number1"><strong>Number1:</strong></label>
            <input type="number" class="form-control" name="number1" id="number1">
        </div>
        <div class="form-group mx-auto w-50">
            <label for="number2"><strong>Number2:</strong></label>
            <input type="number" class="form-control" name="number2" id="number2">
        </div>
        <div class="form-group mt-3 mx-auto w-50">
            <button type="submit" class="btn btn-primary">Create</button>
        </div> 
    </form>
</div>