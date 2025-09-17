<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Edit Product</title>
    <style>
      .form-container {
        border: 1px solid #888;
        width: 350px;
        padding: 16px;
        margin-top: 20px;
      }
      .form-container label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
      }
      .form-container input[type="text"] {
        width: 100%;
        margin-bottom: 10px;
        padding: 4px;
      }
      .form-container hr {
        margin: 16px 0;
      }
      .form-container .checkbox-label {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
      }
      .form-container button {
        padding: 6px 16px;
      }
    </style>
  </head>
  <body>
    <form class="form-container" method="post" action="#">
      <h2>EDIT PRODUCT</h2>
      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="HTC" />

      <label for="buying_price">Buying Price</label>
      <input type="text" id="buying_price" name="buying_price" value="34000" />

      <label for="selling_price">Selling Price</label>
      <input
        type="text"
        id="selling_price"
        name="selling_price"
        value="37000"
      />

      <hr />
      <div class="checkbox-label">
        <input type="checkbox" id="display" name="display" checked />
        <label for="display" style="font-weight: normal; margin-left: 6px"
          >Display</label
        >
      </div>
      <hr />
      <button type="submit">SAVE</button>
    </form>
  </body>
</html>
