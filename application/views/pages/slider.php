<style>
hr.style-two
{
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    margin-top: 30px;
}
</style>

<div class="row"><!--row3 for slider-->
  <div class="slider">
    <img src="<?php echo $this->cdn->res_url('resources/images/slider1.jpg')?>" height="480px;"/>
  </div>
</div><!--row3 for slider-->

<div class = "row" style="padding-top:5px; padding-bottom:8px;">
  <h4>
  <center>
  <script>
    function func(q)
    {
      var range = q.length;
      var random = Math.floor(Math.random() * range);
      document.writeln('<dl>');
      document.writeln('<dt class=\'tqpQuote\'> “'+q[random].quote+'”</dt>');   
      document.writeln('<dd> <b><font size=\'-1\' color = \'blue\'>– '+q[random].author+'</font></b></dd><p> </p>');
      document.writeln('</dl>');
    }
  </script>
  <script src="<?php echo $this->cdn->res_url('resources/quotes.js')?>"></script>
  <hr class = "style-two">
  </center>
  </h4>
</div>
