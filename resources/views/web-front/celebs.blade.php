@extends('layout.default')
@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container" style="margin-top:100px;">
    <div class="sub-headline">FIND ANY CELEBRITY YOU WANT HERE</div>
    <div class="copy"><p>
We have deep personal relaYonships with an extensive network of local and overseas celebriYes and agencies, ensuring brands get the most compeYYve
rates when engaging celebriYes through us. We have access to any celebrity in the world, whether or not they are listed here. We are onboarding new
celebriYes to the plaXorm conYnuously, so be sure to check with us on your preferred choice of celebrity!</p>
    </div>
    <?php for($i=0;$i<4;$i++){?>
  <div class="row">
      <?php for($j=1;$j<=6;$j++){?>
    <div class="col-md-2">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="http://fly.com.sg/wp-content/uploads/Fly-Artistes/male/Adrian-Pang_list.jpg" alt="Lights" style="width:100%">

        </a>
      </div>
    </div>
    <?php }?>
</div>
<?php }?>

</div>
<div class="copy"><h2>The celeb net</h2></div>
<p style="float:left;"><a href="#" class="btn large primary right-arrow">Get started free</a><p style="float:right;"><a href="#" class="btn large white">Schedule consultant</a></p>


@endsection
