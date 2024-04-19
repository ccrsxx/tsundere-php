<html>

<head>
  <title>Form Input</title>
</head>

<body>
  <center>
    <form action="<?= base_url('form-class/print-form-result'); ?>" method="post">
      <table>
        <tr>
          <th colspan="3">
            Form Input
          </th>
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
            <input type="text" name="code" id="code">
          </td>
        </tr>
        <tr>
          <th>Name MTK</th>
          <td>:</td>
          <td>
            <input type="text" name="name" id="name">
          </td>
        </tr>
        <tr>
          <th>SKS</th>
          <td>:</td>
          <td>
            <select name="sks" id="sks">
              <option value="">Choose SKS</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
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