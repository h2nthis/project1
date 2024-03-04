<section>
  <div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Number1</th>
            <th>Number2</th>
            <th>Summary</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($news as $row): ?>
            <tr>
              <td><?= $row['name']; ?></td>
              <td><?= $row['number1']; ?></td>
              <td><?= $row['number2']; ?></td>
              <td><?= $row['sum']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>
</section>
