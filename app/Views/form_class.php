<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input</title>
</head>

<body>
  <center>
    <form action="<?= base_url('form-class/print-form-result'); ?>" method="post">
      <table>
        <tr>
          <th colspan="3">Form Input</th>
        </tr>
        <tr>
          <td colspan="3">
            <hr>
          </td>
        </tr>
        <tr>
          <th>Code MTK</th>
          <th>:</th>
          <td>
            <input type="text" name="code" id="code" value="<?= old('code'); ?>">
            <?php if (session('errors.code')) : ?>
              <span style="color: red;"><?= session('errors.code'); ?></span>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <th>Name MTK</th>
          <td>:</td>
          <td>
            <input type="text" name="name" id="name" value="<?= old('name'); ?>">
            <?php if (session('errors.name')) : ?>
              <span style="color: red;"><?= session('errors.name'); ?></span>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <th>SKS</th>
          <td>:</td>
          <td>
            <select name="sks" id="sks" value="<?= old('sks'); ?>">
              <option value="">Choose SKS</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <?php if (session('errors.code')) : ?>
              <span style="color: red;"><?= session('errors.code'); ?></span>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <td colspan="3" align="center">
            <input type="submit" value="Submit">
          </td>
        </tr>
      </table>
    </form>
  </center>
</body>

</html>