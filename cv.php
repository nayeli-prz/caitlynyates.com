<!doctype html>
<?php require(__DIR__."/partials/head.php") ?>
<body>
  <div class="container-fluid">
      <?php require(__DIR__."/partials/nav.php") ?>
      <div class="col mt-3 blue p-4 p-sm-5">
        <div class="row justify-content-between cv-page-heading mb-4">
        <h1>CV</h1>
          <a href="assets/CaitlynYatesCV_2019.pdf"><button type="button" class="btn btn-secondary btn-medium">Download PDF</button></a>
        </div>
        <div class="col content-section p-4 p-sm-5">
          <?php
            $data = json_decode(file_get_contents(__DIR__.'/data/cv-items.json'));
            foreach($data as $section) {
          ?>
            <div class="cv-section">
              <h4 class="mb-5"><?= $section->header ?></h4>
              <?php foreach($section->content as $subsection) { ?>
                <div class="row cv-item">
                  <div class="col col-2 pr-3 year"> <?= $subsection->date ?> </div>
                  <div class="col col-10">
                  <?php if(!empty($subsection->title)) { ?>
                    <h5><?= $subsection->title ?></h5>
                  <?php } ?>
                  <?php if(!empty($subsection->sub)) { ?>
                    <p><?= $subsection->sub ?>
                  <?php } ?>
                    <?php if(!empty($subsection->link)) { ?>
                    <a href="<?= $subsection->link ?>"><?= $subsection->link ?></a>
                    <?php } ?>
                    </p>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="row footer">
      <small class="pt-3">Made by Nayeli Pérez | Copyright 2019</small>
    </div>
  </div>
</body>
</html>
