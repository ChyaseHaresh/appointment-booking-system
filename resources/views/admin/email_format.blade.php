<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
@php
        use Carbon\Carbon;
$dates = new Carbon($date);
$times = new Carbon($time);
$ch_time = $dates->isoFormat('h:mm A');
@endphp

<body>
    <pre class="fw-bold" style="font-size: 1.5em;">
Dear {{ $name }}

Your appointment has been schedule for {{ $dates->isoFormat('MMMM DD, YYYY dddd') }} at {{ $times->isoFormat('h:mm A') }} with  {{ $counselor }}.


Regards,
</pre>
    <div class="text-center" style="width: 200px">
        <img src="https://www.elscript.com/images/1.png" class="" width="100">
        <br>
        <span class="fw-bold text-success ">Haresh Chaudhary</span><br>
        <span class="fw-normal text-success">Elscript Technology Pvt. Ltd.</span>
        <small class="text-success">Kathmandu, Nepal</small>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
