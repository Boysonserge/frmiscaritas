<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('dist/virtual-select.min.css')}}">
    <script src="{{asset('dist/virtual-select.min.js')}}"></script>

    <title>Document</title>
</head>
<body>

<div id="sample-select"></div>


<script>
    VirtualSelect.init({
        ele: '#sample-select',
        search: true,
        multiple: true,
        options: [
            { label: 'Options 1', value: '1' },
            { label: 'Options 2', value: '2' },
            { label: 'Options 3', value: '3' },

        ],
    });
</script>
</body>
</html>
