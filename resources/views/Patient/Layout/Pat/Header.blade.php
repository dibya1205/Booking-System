<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('side.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Patient's | @yield('title')</title>
</head>
<body>
    <style>
        .css-3d-text {
    font-size: 50px;
    padding-right:12px;
    color: #17d6eb;
    font-family: Times New Roman;
   font-weight: bold;
    text-shadow: 0px 0px 0 rgb(6,197,218),
                 1px 1px 0 rgb(-10,181,202),
                 2px 2px 0 rgb(-27,164,185),
                 3px 3px 0 rgb(-44,147,168),
                 4px 4px 0 rgb(-61,130,151),
                 5px 5px 0 rgb(-77,114,135),
                 6px 6px 0 rgb(-94,97,118),
                 7px 7px 0 rgb(-111,80,101),
                 8px 8px 0 rgb(-128,63,84),
                 9px 9px 0 rgb(-144,47,68),
                 10px 10px 0 rgb(-161,30,51),
                 11px 11px 0 rgb(-178,13,34),
                 12px 12px  0 rgb(-195,-4,17),
                 13px 13px 12px rgba(0,0,0,1),
                 13px 13px 1px rgba(0,0,0,0.5),
                 0px 0px 12px rgba(0,0,0,.2);
 }
    </style>
    @yield('content')
    @include('Patient.Layout.Pat.footer')

</body>
</html>