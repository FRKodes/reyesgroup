@if (App::environment() == 'local')
    <?php $min = '';  ?>
@else
    <?php $min = 'min/';?>
@endif
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/{{ $min }}custom.js"></script>