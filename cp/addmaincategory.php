<?php include'header.php'; ?>
<div class="uk-card uk-card-default card">
  <h3> Add Parent Category </h3>
  <form class="" action="index.html" method="post">
    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Category Title</label>
      <div class="uk-form-controls">
        <input class="uk-input" type="text" placeholder="">
      </div>
    </div><!-- END uk-margin -->
    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Category Description</label>
      <div class="uk-form-controls">
        <input class="uk-input" type="text" placeholder="">
      </div>
    </div><!-- END uk-margin -->
    <div class="uk-margin uk-text-right" >
      <button  class="uk-button uk-button-primary">Delete / Discard</button>
      <button type="submit" class="uk-button uk-button-secondary">Submit</button>

    </div>
  </form>
</div>
<?php include'footer.php'; ?>
